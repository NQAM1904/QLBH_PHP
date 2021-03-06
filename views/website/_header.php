<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vape Shop</title>
    <link href=" <?= base_url() ?>assets/image/logovape.png" rel="shortcut icon" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="<?= base_url() ?>assets/dest/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="<?= base_url() ?>assets/dest/css/huong-style.css">
</head>

<body>
    <div id="header">
        <div class="header-top">
            <div class="container">
                <div class="pull-left auto-width-left">
                    <ul class="top-menu menu-beta l-inline">
                        <li><a href=""><i class="fa fa-home"></i> 475A Điện Biên Phủ, P.25, Q.Bình Thạnh, TP.HCM</a></li>
                        <li><a href=""><i class="fa fa-phone"></i> 0163 989 5154</a></li>
                    </ul>
                </div>
                <div class="pull-right auto-width-right">
                    <ul class="top-details menu-beta l-inline">
                        <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                        <li><a href="<?= base_url() ?>index.php?controller=website&action=signup">Đăng kí</a></li>
                        <li><a href="<?= base_url() ?>index.php?controller=website&action=login">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- .container -->
        </div>
        <!-- .header-top -->
        <div class="header-body">
            <div class="container beta-relative">
                <div class="pull-left">
                    <a href="<?= base_url() ?>index.php?controller=website" id="logo"><img src="<?= base_url() ?>assets/image/logovape.png" width="200px"></a>
                </div>
                <div class="pull-right beta-components space-left ov">
                    <div class="space10">&nbsp;</div>
                    <div class="beta-comp">
                        <form role="search" method="get" id="searchform" action="/">
                            <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>
                    <div class="beta-comp">
                        <div class="cart">
                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng<i class="fa fa-chevron-down"></i></div>
                            <div class="beta-dropdown cart-body">
                                <div class="clearfix"></div>
                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="<?= base_url() ?>index.php?controller=website&action=addcart" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- .container -->
    </div>
    <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="<?= base_url() ?>index.php?controller=website">Trang chủ</a></li>
                    <li>
                        <a href="<?= base_url() ?>index.php?controller=website&action=category">Danh mục</a>
                    </li>
                    <li><a href="about.html">Giới thiệu</a></li>
                    <li><a href="contacts.html">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div>
        <!-- .container -->
    </div>
    <!-- .header-bottom -->
    </div>
    <!-- #header -->