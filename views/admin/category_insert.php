<div id="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?=base_url()?>index.php?controller=dashboard">Bảng điều khiển</a>
			</li>
			<li class="breadcrumb-item active"><a href="<?=base_url()?>index.php?controller=category">Danh mục</a></li>
			<li class="breadcrumb-item active">Thêm mới</li>    
		</ol>
		<!-- Page Content -->
		<h2>Thêm mới danh mục</h2>
		<hr>   
	</div>
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="#" method ="POST">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="inputEmail3" placeholder="nhập danh mục"
						name="name">  <?php if(isset($error['name'])): ?>
						<p class="text-danger"> <?php echo $error['name'] ?> </p>
						<?php endif ?>
						<hr>
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
</div>