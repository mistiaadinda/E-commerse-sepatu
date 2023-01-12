<div class="container-fluid">
    <h1 class="h3 mb--4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Sepatu/tambah" class="btn btn-info mb-2">Tambah Sepatu</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Gambar</td>
                        <td>Nama Sepatu</td>
                        <td>Stok</td>
                        <td>Harga</td>
                        <td>Ukuran</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sepatu as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><img src="<?= base_url('assets/img/sepatu/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['stok']; ?></td>
                            <td><?= $us['harga']; ?></td>
                            <td><?= $us['ukuran']; ?></td>
                            <td>
                                <a href="<?= base_url('Sepatu/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('Sepatu/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
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