<?php
#Kiểm tra đăng nhập admin
$action = (isset($_GET['action']))?$_GET['action']:'list';

switch($action){
	case 'list':
	$category = $db->fetchAll("category");
	break;

	case 'insert':
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$data = ["name" => postInput('name')];
		$error = [];
		if(postInput('name') == ''){
			$error['name'] = " Vui lòng nhập tên danh mục !";      
		}else{
			$name_insert = $db->insert("category",$data);
			if($name_insert >0){
				$_SESSION['success'] = "Thêm mới thành công";
				header("location: ".base_url()."index.php?controller=category");
				exit();
			}
			else{
				$_SESSION['error'] = "Thêm mới thất bại";
			}
		}               
	}
	break;

	case 'update':
	$id = intval(getInput('id'));

	$EditCategory = $db->fetchID("category", $id);
	if(empty($EditCategory)){
		$_SESSION['error'] = "Dữ liệu không tồn tại";
		header("location: ".base_url()."index.php?controller=category");
		exit();
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$data = ["name" => postInput('name'),];
		$error = [];
		if(postInput('name') == ''){
			$error['name'] = " Vui lòng nhập tên danh mục !";
               
		}
		if(empty($error)){
			$id_update = $db->update("category",$data,array("id"=>$id) );
			if($id_update >0){
				$_SESSION['success'] = "cập nhập thành công !";
				header("location: ".base_url()."index.php?controller=category");
				exit();
			}else{
				$_SESSION['error'] = "Dữ liệu không thay đổi";  
				header("location: ".base_url()."index.php?controller=category");
				exit();
			}
		}    
	}
	break;

	case 'delete':
	$id = intval(getInput('id'));

	$EditCategory = $db->fetchID("category", $id);
	if(empty($EditCategory)){
		$_SESSION['error'] = "Dữ liệu không tồn tại";
		header("location:  ".base_url()."index.php?controller=category");
		exit();
	}

	$num = $db->delete("category", $id);

	if($num > 0){
		$_SESSION['success'] = "Xóa thành công";
		header("location:  ".base_url()."index.php?controller=category");
		exit();
	}
	else{
		$_SESSION['error'] = "Xóa thất bại";
		header("location:  ".base_url()."index.php?controller=category");
		exit();
	}
	break;

	default:
	require_once("404.php");
	die();
	break;
}
?>