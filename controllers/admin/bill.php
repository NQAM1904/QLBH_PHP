<?php
$action = (isset($_GET['action'])) ? $_GET['action'] : 'list';
switch ($action) {
    case 'list':
        $bills = $db->fetchAll("bills");
        break;

    case 'insert':
        break;

    case 'update':
        $id = intval(getInput('id'));

        $Bill_detail = $db->fetchID("bill_detail", $id);
        break;

    case 'delete':
        $id = intval(getInput('id'));

        $EditBuill = $db->fetchID("bills", $id);
        if (empty($EditBuill)) {
            $_SESSION['error'] = "Dữ liệu không tồn tại";
            header("location:  " . base_url() . "index.php?controller=bill");
            exit();
        }

        $num = $db->delete("bills", $id);

        if ($num > 0) {
            $_SESSION['success'] = "Xóa thành công";
            header("location:  " . base_url() . "index.php?controller=bill");
            exit();
        } else {
            $_SESSION['error'] = "Xóa thất bại";
            header("location:  " . base_url() . "index.php?controller=bill");
            exit();
        }
        break;

    default:
        require_once("404.php");
        die();
        break;
}
