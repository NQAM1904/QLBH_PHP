<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang Admin</title>
    <link href="<?= base_url() ?>/upload/admin/logo-admin.png" rel="icon">
    <!-- Bootstrap core CSS-->
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?= base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/assets/css/sb-admin.css" rel="stylesheet">
    <script src="<?= base_url() ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/notify.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/notify.js"></script>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="<?= base_url() ?>index.php?controller=dashboard">Xin chào Admin</a>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url() ?>index.php?controller=login">Đăng xuất</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>index.php?controller=dashboard">

                    <span>Bảng điều khiển</span>
                    <a class="nav-link" href="<?= base_url() ?>index.php?controller=category">Danh mục</a>
                    <a class="nav-link" href="<?= base_url() ?>index.php?controller=product">Sản phẩm</a>
                    <a class="nav-link" href="<?= base_url() ?>index.php?controller=bill">Hóa đơn</a>
                </a>
            </li>
        </ul>