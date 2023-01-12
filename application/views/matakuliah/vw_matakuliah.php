<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row">
		<div class="col-md-6"><a href="<?= base_url('Matakuliah/tambah') ?>" class="btn btn-info mb-2">Tambah Matakuliah</a></div>
		<div class="col-md-12">
			<?= $this->session->flashdata('message'); ?>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama Matakuliah</td>
						<td>Semester</td>
						<td>Bidang</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($matakuliah as $us) : ?>
						<tr>
							<td> <?= $i; ?>.</td>
							<td><?= $us['nama']; ?></td>
							<td><?= $us['semester']; ?></td>
							<td><?= $us['bidang']; ?></td>
							<td>
								<a href="<?= base_url('Matakuliah/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
								<a href="<?= base_url('Matakuliah/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</div>

</div>
