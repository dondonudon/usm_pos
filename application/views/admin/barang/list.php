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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/barang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Barang</th>
										<th>Harga 1-9</th>
										<th>Harga 10-20</th>
										<th>Harga 21-50</th>
										<th>Harga 51-99</th>
										<th>Harga >100</th>
										<th>Stok</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($barang as $barang): ?>
									<tr>
										<td width="150">
											<?php echo $barang->nama ?>
										</td>
										<td>
											<?php echo $barang->harga1 ?>
										</td>
										<td>
											<?php echo $barang->harga2 ?>
										</td>
										<td>
											<?php echo $barang->harga3 ?>
										</td>
										<td>
											<?php echo $barang->harga4 ?>
										</td>
										<td>
											<?php echo $barang->harga5 ?>
										</td>
										<td>
											<?php echo $barang->stok ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/barang/edit/'.$barang->kode_barang) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/barang/delete/'.$barang->kode_barang) ?>')"
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
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
		console.log('log hapus',url);
	}
	</script>
	
</body>

</html>