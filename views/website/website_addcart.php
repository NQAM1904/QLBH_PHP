<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đơn hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.php">Trang chủ</a> / <span>Giỏ hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success">
        <strong style="color: #3c763d">Success!</strong> <?php echo $_SESSION['success'];
                                                            unset($_SESSION['success']) ?>
    </div>
<?php endif ?>
<div class="col-md-9 bor">
    <section>
        <h5 class="title-main"><a>Giỏ hàng của bạn </a></h5>
        <br></br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>stt</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng Tiền</th>
                </tr>
            </thead>
            <Tbody>
                <?php $stt = 1;
                foreach ($_SESSION['cart'] as $key => $value) : ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td>
                            <img src="<?php echo '/MVC/upload/product/' . $value['image'] ?>" width="50px" heigh="50px">
                        </td>
                        <td><?php echo number_format($value['price']) ?></td>
                        <td><?php echo $value['count'] ?></td>
                        <td><?php echo number_format($value['price'] * $value['count']) ?></td>
                        <td>
                            <a class="btn btn-danger" href="<?= base_url() ?>index.php?controller=website&action=removeItem&id=<?php $value['id'] ?>"></i> Xóa</a>
                        </td>
                    </tr>
                    <?php $sum += $value['price'] * $value['count'];
                    $_SESSION['total'] = $sum;  ?>
                <?php $stt++;
                endforeach ?>
            </Tbody>
        </table>
        <div class="col-md-5 pull-right">
            <ul class="list-group">
                <li class="list-group-item">Thông tin đơn hàng</li>
                <li class="list-group-item">Thành tiền: <?php echo number_format($_SESSION['total']) ?> VND</li>
                <li class="list-group-item">Giảm giá: 10%</li>
                <li class="list-group-item">Còn lai: <?php $_SESSION['tongtien'] = $_SESSION['total'] * 0.1;
                                                        echo number_format($_SESSION['tongtien']) ?> VND</li>
                <li class="list-group-item">Tổng tiền thanh toán: <?php $_SESSION['tien'] = $_SESSION['total'] - $_SESSION['tongtien'];
                                                                    echo number_format($_SESSION['tien']) ?> </li>

                <?php

                $id = array_keys($_SESSION['cart']);
                foreach ($id as $vl) {
                    $id_need = $vl;
                }

                ?>
                <li class="list-group-item">
                    <a href="<?= base_url() ?>index.php?controller=website" class="btn btn-success"> Tiếp tục mua hàng</a>
                    <a href="<?= base_url() ?>index.php?controller=website&action=payment&id=<?= $id_need ?>" class="btn btn-success">Thanh toán</a>
                </li>
            </ul>
        </div>
    </section>
</div>
</div>
<div class="clearfix"></div>