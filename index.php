<?php
#Tạo phiên làm việc
session_start();
#Khai báo các hằng số
define('M', $_SERVER['DOCUMENT_ROOT'].'/MVC/models/');
define('CADMIN', $_SERVER['DOCUMENT_ROOT'].'/MVC/controllers/admin/');
define('CWEB', $_SERVER['DOCUMENT_ROOT'].'/MVC/controllers/website/');
define('VADMIN', $_SERVER['DOCUMENT_ROOT'].'/MVC/views/admin/');
define('VLOGIN', $_SERVER['DOCUMENT_ROOT'].'/MVC/views/login/');
define('VWEB', $_SERVER['DOCUMENT_ROOT'].'/MVC/views/website/');
define('ROOT', $_SERVER['DOCUMENT_ROOT'] ."/MVC/upload/");
#Tạo các hàm globle
require_once(M."database.php");
require_once(M."function.php");
$db = new Database;

#Khai báo controller
$controller = $_GET['controller'];
$layout = VLOGIN.'login.php';
switch($controller){
	#controller quản trị
	case 'product':
	require_once(CADMIN."$controller.php");
	$layout = VADMIN.'layout.php';
	break;
	
	case 'category':
	require_once(CADMIN."$controller.php");
	$layout = VADMIN.'layout.php';
	break;
	
	case 'dashboard':
	require_once(CADMIN."$controller.php");
	$layout = VADMIN.'layout.php';
	break;

	case 'admin':
	require_once(CADMIN."$controller.php");
	$layout = VADMIN.'layout.php';
	break;
	
	case 'login':
	require_once(CADMIN."$controller.php");
	//$layout = VADMIN.'layout.php';
	break;
	#controller website
	case 'website':
	require_once(CWEB."$controller.php");
	$layout = VWEB.'layout.php';
	break;
	
	default:
	require_once("404.php");
	die();
	break;
}
require_once($layout);
?>