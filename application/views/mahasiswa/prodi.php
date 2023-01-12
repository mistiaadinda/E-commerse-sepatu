
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?=$judul;?></h1>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?=base_url('prodi/tambah');?>" class="btn btn-info mb-2">Tambah Prodi</a>

                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama prodi</td>
                                        <td>Ruang</td>
                                        <td>Jurusan</td>
                                        <td>akreditasi</td>
                                        <td>Nama Kaprodi</td>
                                        <td>Tahun berdiri</td>
                                        <td>Output Lulusan</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $id= 1;
                                    foreach($prodi as $row){ ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $row['nama'] ;?></td>
                                        <td><?php echo $row['ruangan'] ;?></td>
                                        <td><?php echo $row['jurusan'] ;?></td>
                                        <td><?php echo $row['akreditasi'] ;?></td>
                                        <td><?php echo $row['nama_kaprodi'] ;?></td>
                                        <td><?php echo $row['tahun_berdiri'] ;?></td>
                                        <td><?php echo $row['output_lulusan'] ;?></td>
                                        <td>
                                            <a href="" class="badge badge-danger">Hapus</a>
                                            <a href="" class="badge badge-warning">edit</a>

                                        </td>
                                    </tr>
                                    <?php $id++;} ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <