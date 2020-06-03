<?php
#Kiểm tra đăng nhập admin
$action = (isset($_GET['action']))?$_GET['action']:'home';
switch($action){
	case 'home':
	$db = new Database;
	$products = $db->fetchAll("products");
	break;

	case 'category':
	break;

	case 'product':
	break;

	case 'payment':
	$id = intval(getInput('id'));
	$products = $db->fetchID("products", $id);

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		debug($_POST);
		$data =[
			'amount' => postInput('tien') 
		];
		$idbill = $db->insert("bills", $data);
	if($idbill > 0)
		{
			foreach($_SESSION['cart'] as $key => $value)
			{
				$data2 = [
					'id_bill'   => $idbill,
					'id_product'=> $key,
					'count'     => $value('count'),
					'unit_price'=> $value('price') 
				];
				$id_insert = $db ->insert("bill_detail",$data2);
			}
			unset($_SESSION['cart']);
			$_SESSION['success'] = "Đã xác nhận đơn hàng! cảm ơn bạn đã đặt hàng của chúng tôi!";
			header("location: thongbao.php");
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

	case 'login':
	break;

	case 'signup':
	break;

	default:
	require_once("404.php");
	die();
	break;
}
?>