<?php
#Kiểm tra đăng nhập admin
$action = (isset($_GET['action'])) ? $_GET['action'] : 'home';
switch ($action) {
	case 'home':
		$db = new Database;
		$products = $db->fetchAll("products");
		break;

	case 'category':
		break;

	case 'product':
		$db = new Database;
		$open = "products";
		$id = intval(getInput('id'));
		$products = $db->fetchID("products", $id);
		break;

	case 'payment':
		$id = intval(getInput('id'));
		$products = $db->fetchID("products", $id);

		if (($_SERVER["REQUEST_METHOD"] == "POST") == false) {
			// debug($_POST);
			$data = [
				'amount' => $_SESSION['tien']
			];

			$idbill = $db->insert("bills", $data);

			if ($idbill > 0) {
				foreach ($_SESSION['cart'] as $key => $value) {
					$data2 = [
						'id_bill'   => $idbill,
						'id_product' => $key,
						'count'     => $value['count'],
						'price' => $value['price']
					];

					$id_insert = $db->insert("bill_detail", $data2);
				}
				unset($_SESSION['cart']);
				unset($_SESSION['total']);
				$_SESSION['success'] = "Đã xác nhận đơn hàng! cảm ơn bạn đã đặt hàng của chúng tôi!";
				header("location: website_noti.php");
				exit();
			}
		}
		break;

	case 'noti':
		break;

	case 'addcart':
		$db = new Database;
		$open = "products";
		$id = intval(getInput('id'));
		$products = $db->fetchID("products", $id);
		$sum = 0;
		if (!isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id]['name'] = $products['name'];
			$_SESSION['cart'][$id]['description'] = $products['description'];
			$_SESSION['cart'][$id]['image'] = $products['image'];
			$_SESSION['cart'][$id]['price'] = $products['price'];
			$_SESSION['cart'][$id]['count'] = 1;
		} else {
			$_SESSION['cart'][$id]['count'] = 1;
		}
		break;
	case 'removeItem':
		$id = intval(getInput('id'));
		unset($_SESSION['cart'][$id]);
		$_SESSION['success'] = "xóa sản phẩm trong giỏ hàng thàng công";
		header("<?= base_url() ?>index.php?controller=website=website_addcart.php");
		break;
	case 'login':
		break;

	case 'signup':
		break;

	default:
		require_once("404.php");
		die();
		break;
}
