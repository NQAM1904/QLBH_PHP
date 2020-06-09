                <div id="content-wrapper">
                    <div class="container-fluid">
                        <!-- Breadcrumbs-->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Bảng điều khiển</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="<?= base_url() ?>index.php?controller=product">Sản phẩm</a></li>
                            <li class="breadcrumb-item active">Thêm mới</li>
                        </ol>
                        <!-- Page Content -->
                        <h2>Thêm mới sản phẩm</h2>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Danh mục phẩm</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="category_id">
                                            <option value="">--Chọn--</option>
                                            <?php foreach ($category as $item) : ?>
                                                <option value="<?php echo $item['id'] ?>"> <?php echo $item['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <?php if (isset($error['category_id'])) : ?>
                                            <p class="text-danger"> <?php echo $error['category_id'] ?> </p>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Sản phẩm</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="nhập tên sản phẩm" name="name"> <?php if (isset($error['name'])) : ?>
                                            <p class="text-danger"> <?php echo $error['name'] ?> </p>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Giá tiền</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" placeholder="vd: 9.000.000" name="price"> <?php if (isset($error['price'])) : ?>
                                            <p class="text-danger"> <?php echo $error['price'] ?> </p>
                                        <?php endif ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Số lượng</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" placeholder="Số lượng" name="count" value="0">
                                        <?php if (isset($error['count'])) : ?>
                                            <p class="text-danger"><?php echo $error['count'] ?></p>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Hình ảnh</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                            <label class="custom-file-label" for="inputGroupFile01">Chọn ảnh</label>
                                        </div>
                                        <?php if (isset($error['image'])) : ?>
                                            <p class="text-danger"> <?php echo $error['image'] ?> </p>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nội dung</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" placeholder="nhập mô tả" row="5" style="margin-top: 0px; margin-bottom: 0px; height: 105px;" name="description"></textarea>
                                        <?php if (isset($error['description'])) : ?>
                                            <p class="text-danger"> <?php echo $error['name'] ?> </p>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success btn-lg">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>