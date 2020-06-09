<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/MVC/index.php?controller=dashboard">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item active">
            <li class="">
                <a href="/MVC/index.php?controller=bill">Hóa đơn</a>
            </li>
        </ol>
        <!-- Page Content -->
        <h1>Danh sách hóa đơn</h1>
        <hr>
        <!-- <div class="clearfix">
            <?php if (isset($_SESSION['success'])) : ?>
                <script text="javascript/language">
                    $.notify("<?php echo $_SESSION['success'];
                                unset($_SESSION['success']) ?>", "success");
                </script>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])) : ?>
                <script text="javascript/language">
                    $.notify(" <?php echo $_SESSION['error'];
                                unset($_SESSION['error']) ?>", "error");
                </script>

            <?php endif; ?>
        </div> -->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Phone</th>
                                <th>Giá</th>
                                <th>Ngày tạo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bills as $item) : ?>

                                <tr>
                                    <td><?php echo $item['id'] ?></td>
                                    <td><?php echo $item['vname'] ?></td>
                                    <td><?php echo $item['phone'] ?></td>
                                    <td><?php echo $item['amount'] ?></td>
                                    <td><?php echo $item['address'] ?></td>

                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?= base_url() ?>index.php?controller=bill&action=update&id=<?php echo $item['id'] ?>">
                                            <i class="fa fa-eyes"></i> xem</a>
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