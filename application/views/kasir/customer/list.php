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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('kasir/customer/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Customer</th>
										<th>Alamat</th>
										<th>No. Telepon</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$i=1;
									foreach ($customer as $customer): ?>
									<tr>
										<td>
											<?php echo $i;
											$i++; ?>
										</td>
										<td width="150">
											<?php echo $customer->nama_cust ?>
										</td>
										<td>
											<?php echo $customer->alamat_cust ?>
										</td>
										<td>
											<?php echo $customer->telepon ?>
										</td>
										<td>
											<?php echo $customer->email_cust ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('kasir/customer/edit/'.$customer->id_customer) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('kasir/customer/delete/'.$customer->id_customer) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("kasir/_partials/modal.php") ?>

	<?php $this->load->view("kasir/_partials/js.php") ?>
	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
		console.log('log hapus',url);
	}
	</script>
	
</body>

</html>