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

				<?php $this->load->view("admin/_partials/breadcrumbs.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/user/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/user/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nama_lengkap">Nama Lengkap</label>
								<input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
								 type="text" name="nama_lengkap" placeholder="Nama Lengkap" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_lengkap') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="username" min="0" placeholder="Username" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" min="0" placeholder="Password" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" min="0" placeholder="email" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="telepon">No. Telepon</label>
								<input class="form-control <?php echo form_error('telepon') ? 'is-invalid':'' ?>"
								 type="number" name="telepon" min="0" placeholder="Nomor Telepon" />
								<div class="invalid-feedback">
									<?php echo form_error('telepon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan">Jabatan</label>
								<input class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>"
								 type="text" name="jabatan" min="0" placeholder="Jabatan" />
								<div class="invalid-feedback">
									<?php echo form_error('jabatan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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