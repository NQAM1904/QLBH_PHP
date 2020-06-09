               <div id="content-wrapper">
                   <div class="container-fluid">
                       <!-- Breadcrumbs-->
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item">
                               <a href="<?= base_url() ?>index.php?controller=dashboard">Bảng điều khiển</a>
                           </li>
                           <li class="breadcrumb-item active">
                           <li class="active">
                               <a href="<?= base_url() ?>index.php?controller=category">Danh mục</a>
                           </li>
                       </ol>
                       <!-- Page Content -->
                       <h1>Danh sách danh mục</h1>
                       <a href="<?= base_url() ?>index.php?controller=category&action=insert" class="btn btn-primary">Thêm </a>
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
                           <table class="table table-striped table-hover" id="myTable">
                               <thead>
                                   <tr>
                                       <th scope="col">Mã danh mục</th>
                                       <th scope="col">Tên danh mục</th>
                                       <th scope="col">Ngày tạo</th>
                                       <th scope="col"></th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach ($category as $item) : ?>
                                       <tr>
                                           <td><?php echo $item['id'] ?></td>
                                           <td><?php echo $item['name'] ?></td>
                                           <td><?php echo $item['created_at'] ?></td>
                                           <td>
                                               <a class="btn btn-xs btn-info" href="<?= base_url() ?>index.php?controller=category&action=update&id=<?php echo $item['id'] ?>">
                                                   <i class="fa fa-edit"></i> Sửa</a>
                                               <a class="btn btn-xs btn-danger" href="<?= base_url() ?>index.php?controller=category&action=delete&id=<?php echo $item['id'] ?>">
                                                   <i class="fa fa-times "></i> Xóa</a>
                                           </td>
                                       </tr>
                                   <?php endforeach ?>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>

               <script>
                   $(document).ready(function() {
                       $('#myTable').DataTable();
                   });
               </script>