<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label>Nama Mahasiswa</label>
								<input class="form-control"
								 type="text" name="name" placeholder="Masukkan Nama Mahasiswa" />
								<div>
									<?php echo form_error('name', '<small style= "color: red">', '</small>')  ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">NIM</label>
								<input class="form-control"
								 type="text" name="nim" min="0" placeholder="Masukkan NIM" />
								<div>
									<?php echo form_error('nim', '<small style= "color: red">', '</small>') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Jenis Kelamin</label>
								<input class="form-control "
								 type="text" name="jenis_kelamin" min="0" placeholder="Masukkan Jenis Kelamin" />
								<div>
									<?php echo form_error('jenis_kelamin', '<small style= "color: red">', '</small>') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat</label>
								<textarea class="form-control "
								 name="alamat" placeholder="Masukkan Alamat"></textarea>
								<div>
									<?php echo form_error('alamat', '<small style= "color: red">', '</small>') ?>
								</div>
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
