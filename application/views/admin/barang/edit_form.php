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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/barang/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php site_url('admin/barang/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="kode_barang" value="<?php echo $barang->kode_barang ?>" />

							<div class="form-group">
								<label for="name">Nama Barang*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Barang" value="<?php echo $barang->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga 1</label>
								<input class="form-control <?php echo form_error('harga1') ? 'is-invalid':'' ?>"
								 type="number" name="harga1" min="0" placeholder="Harga Barang 1-9" value="<?php echo $barang->harga1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga1') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga 2</label>
								<input class="form-control <?php echo form_error('harga2') ? 'is-invalid':'' ?>"
								 type="number" name="harga2" min="0" placeholder="Harga Barang 10-20" value="<?php echo $barang->harga2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga 3</label>
								<input class="form-control <?php echo form_error('harga3') ? 'is-invalid':'' ?>"
								 type="number" name="harga3" min="0" placeholder="Harga Barang 21-50" value="<?php echo $barang->harga3 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga3') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga 4</label>
								<input class="form-control <?php echo form_error('harga4') ? 'is-invalid':'' ?>"
								 type="number" name="harga4" min="0" placeholder="Harga Barang 51-99" value="<?php echo $barang->harga4 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga4') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga 5</label>
								<input class="form-control <?php echo form_error('harga5') ? 'is-invalid':'' ?>"
								 type="number" name="harga5" min="0" placeholder="Harga Barang >100" value="<?php echo $barang->harga5 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga5') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="stok">stok</label>
								<input class="form-control <?php echo form_error('stok') ? 'is-invalid':'' ?>"
								 type="number" name="stok" min="0" placeholder="Stok Barang" value="<?php echo $barang->stok ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('stok') ?>
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