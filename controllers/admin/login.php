<?php


$action = (isset($_GET['action']))?$_GET['action']:'nothing';
switch($action){
	case 'login':
		$uid = addslashes($_POST['uid']);
		$pwd = addslashes($_POST['pwd']);
		if(empty($uid) || empty($pwd))
		{
			header("location: ".base_url()."index.php?controller=login");
				exit();
		}else{
			$result = $db->fetchOne('admin', "user_uid='$uid' and user_pwd='$pwd'");
			if(!is_array($result)){
				header("location: ".base_url()."index.php?controller=login&action=error");
					exit();
			}else{
				$_SESSION['u_id']  = $result['user_id'];
				$_SESSION['u_uid'] = $result['user_uid'];
				header("location: ".base_url()."index.php?controller=dashboard");
				exit();
			}
			
		}
		break;
	}

?>