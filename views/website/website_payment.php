
<div class="inner-header">
            <div class="container">
                <div class="pull-left">
                    <h6 class="inner-title">Thanh toán</h6>
                </div>
                <div class="pull-right">
                    <div class="beta-breadcrumb">
                        <a href="<?base_url()?>index.php?controller=website">Trang chủ</a> / <span>Giỏ hàng</span> / <span>Thanh toán</span>
                    </div>
                </div>
            </div>
            <br/>
            <div class="col-md-5-center">
            <?php $_SESSION['cart']  ?>
                <ul class="list-group">
                <form class="form-horizontal" action="<?=base_url()?>index.php?controller=website&action=addcart" method ="POST">
                <div class="form-group"><h3 style="color:red;" class="center">Thông tin đơn hàng</h3>
                    <li class="list-group-item">Thành tiền: <?php echo number_format($_SESSION['total'])?> VND</li>
                    <li class="list-group-item">Giảm giá: 10%</li>
                    <li class="list-group-item">Còn lai: <?php $_SESSION['tongtien'] = $_SESSION['total'] * 0.1;
                    echo number_format($_SESSION['tongtien']) ?> VND</li>
                    <li class="list-group-item">Tổng tiền thanh toán: <?php $_SESSION['tien'] = $_SESSION['total'] - $_SESSION['tongtien'];
                    echo number_format($_SESSION['tien']) ?> </li>
                </ul>
                    <a href="<?=base_url()?>index.php?controller=website&action=noti" class="btn btn-success"> Xác nhận</a>
            </div>
            </form>
    <br/>
<div class="clearfix"></div>
