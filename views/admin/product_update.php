               <div id="content-wrapper">
                   <div class="container-fluid">
                       <!-- Breadcrumbs-->
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item">
                               <a href="#">Bảng điều khiển</a>
                           </li>
                           <li class="breadcrumb-item active"><a href="<?= base_url() ?>index.php?controller=product">Sản phẩm</a></li>
                           <li class="breadcrumb-item active">Sửa</li>
                       </ol>
                       <!-- Page Content -->
                       <h2>Sửa</h2>
                       <hr>
                   </div>

                   <div class="row">
                       <div class="col-md-12">
                           <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Danh mục phẩm</label>
                                   <div class="col-sm-7">
                                       <select class="form-control col-md-5" name="category_id">
                                           <option value="">--Select--</option>
                                           <?php foreach ($category as $item) : ?>
                                               <option value="<?php echo $item['id'] ?>" <?php echo $Editproduct['category_id'] == $item['id'] ? "selected = 'selectend='" : '' ?>> <?php echo $item['name'] ?></option>
                                           <?php endforeach ?>
                                       </select>
                                       <?php if (isset($error['category_id'])) : ?>
                                           <p class="text-danger"> <?php echo $error['category_id'] ?> </p>
                                       <?php endif ?>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Tên Sản phẩm</label>
                                   <div class="col-sm-8">
                                       <input type="text" class="form-control" id="inputEmail3" placeholder="nhập tên sản phẩm" name="name" value="<?php echo $Editproduct['name'] ?>"> <?php if (isset($error['name'])) : ?>
                                           <p class="text-danger"> <?php echo $error['name'] ?> </p>
                                       <?php endif ?>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Giá tiền</label>
                                   <div class="col-sm-8">
                                       <input type="number" class="form-control" id="inputEmail3" placeholder="vd: 9.000.000" name="price" value="<?php echo $Editproduct['price'] ?>"> <?php if (isset($error['price'])) : ?>
                                           <p class="text-danger"> <?php echo $error['price'] ?> </p>
                                       <?php endif ?>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Số lượng</label>
                                   <div class="col-sm-3">
                                       <input type="number" class="form-control" id="inputEmail3" placeholder="Số lượng" name="count" value="<?php echo $Editproduct['count'] ?>">
                                       <?php if (isset($error['count'])) : ?>
                                           <p class="text-danger"><?php echo $error['count'] ?></p>
                                       <?php endif ?>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Giảm giá</label>
                                   <div class="col-sm-3">
                                       <input type="number" class="form-control" id="inputEmail3" placeholder="10 %" name="sale" value="0">
                                       <?php if (isset($error['sale'])) : ?>
                                           <p class="text-danger"><?php echo $error['sale'] ?></p>
                                       <?php endif ?>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh</label>
                                   <div class="col-sm-3">
                                       <input type="file" class="form-control" id="inputEmail3" name="image">
                                       <?php if (isset($error['image'])) : ?>
                                           <p class="text-danger"> <?php echo $error['image'] ?> </p>
                                       <?php endif ?>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Nội dung</label>
                                   <div class="col-sm-8">
                                       <textarea type="text" class="form-control" id="inputEmail3" placeholder="nhập nội dung " row="4" name="description"></textarea>
                                       <?php if (isset($error['description'])) : ?>
                                           <p class="text-danger"> <?php echo $error['name'] ?> </p>
                                       <?php endif ?>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="col-sm-offset-2 col-sm-10">
                                       <button type="submit" class="btn btn-success">Lưu</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>