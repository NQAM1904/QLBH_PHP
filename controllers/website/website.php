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
		if ($id == 0) {
			header("location:" . base_url() . "index.php?controller=website&action=addcart");
			$_SESSION['error'] = "không có sản phẩm để thanh toán";
		}
		if (($_SERVER["REQUEST_METHOD"] == "POST") == false) {
			// debug($_POST);
			$data = [
				'amount' => $_SESSION['tien']
			];

			$idbill = $db->insert("bills", $data);

			if ($idbill > 0) {
				foreach ($_SESSION['cart'] as $key => $value) {
					// echo "<pre>all ", print_r($value, 1), "</pre>";
					$data2 = [
						'id_bill'   	=> $idbill,
						'id_product' 	=> $key,
						'count'     	=> $value['count'],
						'price' 		=> $value['price']
					];
					// echo "<pre>price ", print_r($value['price'], 1), "</pre>";
					// die();
					$id_insert = $db->insert("bill_detail", $data2);
					// echo "<pre>ID data 2 ", print_r($id_insert, 1), "</pre>";
				}
				unset($_SESSION['cart']);
				unset($_SESSION['total']);
				$_SESSION['success'] = "Đã xác nhận đơn hàng! cảm ơn bạn đã đặt hàng của chúng tôi!";
				header("location:" . base_url() . "index.php?controller=website&action=noti");
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
			$_SESSION['cart'][$id]['image'] = $products['image'];
			$_SESSION['cart'][$id]['price'] = $products['price'];
			$_SESSION['cart'][$id]['count'] = 1;
		} else if ($products == null) {
			$_SESSION['cart'][$id]['count'] = 0;
		} else {
			$_SESSION['cart'][$id]['count']     += 1;
		}
		break;
	case 'removeItem':
		$db = new Database;
		$open = "products";
		$id = intval(getInput('id'));
		$products = $db->fetchID("products", $id);
		unset($_SESSION['cart'][$id]);
		$_SESSION['success'] = "xóa sản phẩm trong giỏ hàng thàng công";
		header("location:" . base_url() . "index.php?controller=website&action=addcart");

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
