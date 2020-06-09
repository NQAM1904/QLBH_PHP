<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>index.php?controller=dashboard">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item active">
            <li class="active">
                <a href="<?= base_url() ?>index.php?controller=bill">Hóa đơn</a>
            </li>
        </ol>
        <!-- Page Content -->
        <h1>Danh sách hóa đơn</h1>
        <!-- <a href="<?= base_url() ?>index.php?controller=category&action=insert" class="btn btn-primary">Thêm </a> -->
        <hr>
        <div class="clearfix"></div>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['success'];
                unset($_SESSION['success']) ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['error'];
                unset($_SESSION['error']) ?>
            </div>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiền</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Ngày tạo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bills as $item) : ?>

                        <tr>
                            <td><?php echo $item['id'] ?></td>
                            <td><?php echo $item['amount'] ?></td>
                            <td><?php echo $item['user_id'] ?></td>
                            <td><?php echo $item['phone'] ?></td>
                            <td><?php echo $item['created_at'] ?></td>

                            <td>
                                <a class="btn btn-xs btn-info" href="<?= base_url() ?>index.php?controller=bill&action=update&id=<?php echo $item['id'] ?>">
                                    <i class="fas fa-eye"></i> xem</a>
                                <a class="btn btn-xs btn-danger" href="<?= base_url() ?>index.php?controller=bill&action=delete&id=<?php echo $item['id'] ?>">
                                    <i class="fa fa-times "></i> Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>