<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/MVC/index.php?controller=dashboard">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item active">
            <li class="">
                <a href="/MVC/index.php?controller=product">Sản phẩm</a>
            </li>
        </ol>
        <!-- Page Content -->
        <h1>Danh sách sản phẩm</h1>
        <a href="/MVC/index.php?controller=product&action=insert" class="btn btn-info">Thêm </a>
        <hr>
        <div class="clearfix">
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
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">


                    <table class="table table-bordered table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">Mã sản phẩm</th>
                                <th scope="col">Tên sản phẩm</th>
                                <!-- <th scope="col">Mô tả</th> -->
                                <th scope="col">Ảnh</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <!-- <th>Phân loại</th> -->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $item) : ?>

                                <tr>
                                    <td><?php echo $item['id'] ?></td>
                                    <td><?php echo $item['name'] ?></td>
                                    <!-- <td><?php echo $item['description'] ?></td> -->
                                    <td>
                                        <img src="<?php echo '/MVC/upload/product/' . $item['image'] ?>" width="50px" heigh="50px">
                                    </td>
                                    <td><?php echo number_format($item['price']) ?> VNĐ</td>
                                    <td><?php echo $item['count'] ?></td>
                                    <!-- <td><?php echo $item['namecate'] ?></td> -->

                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?= base_url() ?>index.php?controller=product&action=update&id=<?php echo $item['id'] ?>">
                                            <i class="fa fa-edit"></i> Sửa</a>
                                        <a class="btn btn-xs btn-danger" href="<?= base_url() ?>index.php?controller=product&action=delete&id=<?php echo $item['id'] ?>">
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