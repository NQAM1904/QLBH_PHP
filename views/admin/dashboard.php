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