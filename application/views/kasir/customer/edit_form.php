<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("kasir/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("kasir/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("kasir/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("kasir/_partials/breadcrumbs.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('kasir/customer/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php site_url('kasir/customer/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_customer" value="<?php echo $customer->id_customer ?>" />

							<div class="form-group">
								<label for="name">Nama Customer</label>
								<input class="form-control <?php echo form_error('nama_cust') ? 'is-invalid':'' ?>"
								 type="text" name="nama_cust" placeholder="Nama Customer" value="<?php echo $customer->nama_cust ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_cust') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input class="form-control <?php echo form_error('alamat_cust') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_cust" min="0" placeholder="Alamat Customer" value="<?php echo $customer->alamat_cust ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat_cust') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="telepon">No. Telepon</label>
								<input class="form-control <?php echo form_error('telepon') ? 'is-invalid':'' ?>"
								 type="numeric" name="telepon" min="0" placeholder="telepon" value="<?php echo $customer->telepon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telepon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email_cust" min="0" placeholder="Email" value="<?php echo $customer->email_cust ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email_cust') ?>
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
				<?php $this->load->view("kasir/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("kasir/_partials/scrolltop.php") ?>

		<?php $this->load->view("kasir/_partials/js.php") ?>

</body>

</html>