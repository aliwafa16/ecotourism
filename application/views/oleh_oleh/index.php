        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $page ?></li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold"><?= $headline ?></h1>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title"><?= $table_name ?></h4>
                                        <a href="<?= base_url() ?>Oleh_Oleh/tambah" type="button" class="btn add_button mb-3" id="btn_addWisata"><i class="fa fa-plus"></i>Tambah data</a>
                                    </div>
                                </div>
                                <!-- <h6 class="card-subtitle">Using the most basic table markup, here’s how
                                    <code>.table</code>-based tables look in Bootstrap. All table styles are inherited
                                    in Bootstrap 4, meaning any nested tables will be styled in the same manner as the
                                    parent.
                                </h6> -->
                                <!-- <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Table With
                                    Outside Padding</h6> -->
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_oleh_oleh" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Oleh-oleh</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <a href="<?= base_url() ?>">Ecotourism</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

        <!-- Modal deskripsi -->
        <div class="modal fade" id="deskripsiModal" tabindex="-1" aria-labelledby="deskripsiModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deskripsiModalLabel">Deskripsi Kuliner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="deskripsi"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal jadwal -->
        <div class="modal fade" id="jadwalModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="jadwalModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="jadwalModalLabel">Tambah Jadwal</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_jadwal">
                                    <input type="hidden" class="oleh_oleh_id">
                                    <div class="form-group">
                                        <label for="hari">Jadwal operasional</label>
                                        <input type="text" name="hari" class="form-control" id="hari" placeholder="Senin - Jumat">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="jam_buka" class="form-label">Jam buka</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">WIB</span>
                                                    <input type="text" class="form-control" name="jam_buka" id="jam_buka" autocomplete="off" placeholder="10:00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="jam_tutup" class="form-label">Jam tutup</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">WIB</span>
                                                    <input type="text" class="form-control" name="jam_tutup" id="jam_tutup" autocomplete="off" placeholder="17:00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan_jadwal">Keterangan</label>
                                        <textarea class="form-control keterangan_jadwal" name="keterangan_jadwal" id="keterangan_jadwal" rows="3"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_addJadwal" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Item Oleh-oleh -->
        <div class="modal fade" id="menuModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="menuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="menuModalLabel">Tambah Item</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_menu">
                                    <input type="hidden" class="oleh_oleh_id">
                                    <div class="form-group">
                                        <label for="nama_item">Nama item</label>
                                        <input type="text" name="nama_item" class="form-control" id="nama_item" placeholder="Nama item oleh-oleh...">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Harga</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="harga" id="harga" placeholder="harga menu (dalam rupiah)" aria-label="harga menu (dalam rupiah)" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan_oleholeh">Keterangan</label>
                                        <textarea class="form-control" name="keterangan_oleholeh" id="keterangan_oleholeh" rows="3"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_addMenu" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Fasilitas -->
        <div class="modal fade" id="fasilitasModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="fasilitasModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="fasilitasModalLabel">Tambah Fasilitas</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_fasilitas">
                                    <input type="hidden" class="oleh_oleh_id">
                                    <div class="form-group">
                                        <label for="fasilitas">Fasilitas Wisata</label>
                                        <input type="text" name="fasilitas" class="form-control" id="fasilitas" placeholder="Nama fasilitas wisata...">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan_fasilitas">Keterangan</label>
                                        <textarea class="form-control" name="keterangan_fasilitas" id="keterangan_fasilitas" rows="3"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_addFasilitas" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Item -->
        <div class="modal fade" id="itemModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="itemModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="itemModalLabel">Tambah item</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_item">
                                    <input type="hidden" class="oleh_oleh_id" name="id">
                                    <div>
                                        <div class="custom-file">
                                            <div class="row">
                                                <label class="custom-file-label" for="audio">File audio</label>
                                                <input type="file" class="custom-file-input" id="audio" name="audio" accept=".mp3,audio/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control deskripsi" name="deskripsi" id="deskripsi" rows="4"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_addItem" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Gambar -->
        <div class="modal fade" id="gambarModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="gambarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="gambarModalLabel">Tambah gambar</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_gambar">
                                    <input type="hidden" class="wisata_id" name="id_pariwisata">
                                    <input type="hidden" name="tanggal" class="tanggal">
                                    <div>
                                        <div class="custom-file">
                                            <div class="row">
                                                <label class="custom-file-label" for="gambar">Gambar</label>
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control keterangan" name="keterangan" id="keterangan" rows="4"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_addGambar" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="<?= base_url() ?>js/oleh_oleh.js"></script>