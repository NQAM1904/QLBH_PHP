<?php
$action = (isset($_GET['action'])) ? $_GET['action'] : 'list';
switch ($action) {
	case 'list':
		if ($_SESSION['u_id'] == null | $_SESSION['u_uid'] == null) {

			return header("location: " . base_url() . "index.php?controller=login");;
		}
		break;

	default:
		require_once("404.php");
		die();
		break;
}
