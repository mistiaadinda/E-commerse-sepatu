<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Sepatu
            </div>

            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <div class="custom-file">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar" value="<?= set_value('gambar'); ?>">
                        </div>
                    <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" value="<?= set_value('stok'); ?>" class="form-control" id="stok" placeholder="Stok">
                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="form-control" id="harga" placeholder="Harga">
                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" name="ukuran" value="<?= set_value('ukuran'); ?>" class="form-control" id="ukuran" placeholder="Ukuran">
                        <?= form_error('ukuran', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" value="<?= set_value('keterangan'); ?>" class="form-control" id="keterangan" placeholder="Keterangan">
                        <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    </div>
                    <a href="<?= base_url('Sepatu') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Sepatu</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
