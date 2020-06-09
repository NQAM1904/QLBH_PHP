<div class="col-md-9">
    <section class="box-main1">
        <h3 class="title-main">Thông báo thanh toán</h3>
        <div class="clearfix"></div>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success" role="alert">
                <strong style="color:#3c763">Success!</strong> <?php echo $_SESSION['success'];
                                                                unset($_SESSION['success']) ?>
            </div>
        <?php endif ?>
        <div class="clearfix"></div>
        <br />
        <a href="<?= base_url() ?>index.php?controller=website" class="btn btn-success">Trở về trang chủ</a>
    </section>
</div>
<br />
<div class="clearfix"></div>