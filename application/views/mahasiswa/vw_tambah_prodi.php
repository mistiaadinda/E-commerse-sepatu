<!-- main page -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul;?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Tambah Data Mahasiwa
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group">
							<label for="Nama_Teknik">Nama Teknik</label>
							<input type="text" name="Nama_Teknik" class="form-control" id="Nama_Teknik" placeholder="Nama_Teknik">
						</div>
						<div class="form-group">
							<label for="Ruang">Ruang</label>
							<input type="text" name="Ruang" class="form-control" id="Ruang" placeholder="Ruang"> 
                        </div>
						<div class="form-group">
							<label for="Jurusan">Jurusan</label>
							<input type="text" name="Jurusan" class="form-control" id="Jurusan" placeholder="Jurusan"> 
                        </div>
						<div class="form-group">
							<label for="Akreditasi">Akreditasi</label>
							<input type="text" name="Akreditasi" class="form-control" id="Akreditasi" placeholder="Akreditasi"> 
                        </div>
						<div class="form-group">
							<label for="Nama_Kaprodi">Nama Kaprodi</label>
							<input type="text" name="Nama_Kaprodi" class="form-control" id="Nama_Kaprodi" placeholder="Nama_Kaprodi"> 
                        </div>
						<div class="form-group">
							<label for="tahun">Tahun Lulusan</label>
							<input type="text" name="tahun" class="form-control" id="tahun" placeholder="tahun"> 
                        </div>
						<div class="form-group">
							<label for="output">Output Lulusan</label>
							<input type="text" name="output" class="form-control" id="output" placeholder="output"> 
                        </div>
						
                        <a href="<?=base_url('Mahasiswa')?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
					</form>
				</div>

			</div>

		</div>
	</div>
	<!-- end main page -->
