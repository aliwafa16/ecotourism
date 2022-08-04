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
                                    <div class="col-md-12">
                                        <input type="hidden" id="id_oleh_oleh">
                                        <div class="d-inline">
                                            <h1 class="d-inline"><i class="fas fa-campground text-success"></i></h1>
                                            <h1 class="d-inline" id="nama_oleh_oleh"></h1>
                                        </div>
                                        <div class="d-inline">
                                            <h6 class="d-inline"><i class="fas fa-star text-warning"></i></h6>
                                            <h6 class="d-inline" id="rating_oleh_oleh">(9.3)</h6>
                                        </div>
                                        <p style="text-align: justify;" class="mt-3" id="deskripsi_oleh_oleh"></p>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="d-inline">
                                                    <h3 class="d-inline"><i class="fas fa-server text-success"></i></h3>
                                                    <h3 class="d-inline">Data wisata oleh-oleh</h3>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class="fas fa-map-marked-alt text-info me-3"></i></p>
                                                    <p class="d-inline" id="alamat_oleh_oleh"></p>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class=" fas fa-map-pin text-danger me-3"></i></p>
                                                    <p class="d-inline" id="latitude_longitude"></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3> <i class="fas fa-comments text-primary"></i> Kometar wisatawan</h3>
                                                <ul class="list-group" style="overflow: hidden; overflow-y:scroll; height:200px; width:100%">
                                                    <li class="list-group-item">
                                                        <p class="fs-5 m-auto fw-bold">Aliwafa</p>
                                                        <p class="fs-6 fw-light lh-1">"Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak"</p>
                                                        <div class="text-end">
                                                            <a href="#" class="text-decoration-none d-inline "><i class="fa fa-times"></i> hapus</a>
                                                            <a href="#" class="text-decoration-none d-inline"><i class="fa fa-reply"></i> balas</a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <p class="fs-5 m-auto fw-bold">Aliwafa</p>
                                                        <p class="fs-6 fw-light lh-1">"Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak"</p>
                                                        <div class="text-end">
                                                            <a href="#" class="text-decoration-none d-inline "><i class="fa fa-times"></i> hapus</a>
                                                            <a href="#" class="text-decoration-none d-inline"><i class="fa fa-reply"></i> balas</a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <p class="fs-5 m-auto fw-bold">Aliwafa</p>
                                                        <p class="fs-6 fw-light lh-1">"Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak"</p>
                                                        <div class="text-end">
                                                            <a href="#" class="text-decoration-none d-inline "><i class="fa fa-times"></i> hapus</a>
                                                            <a href="#" class="text-decoration-none d-inline"><i class="fa fa-reply"></i> balas</a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <p class="fs-5 m-auto fw-bold">Aliwafa</p>
                                                        <p class="fs-6 fw-light lh-1">"Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak"</p>
                                                        <div class="text-end">
                                                            <a href="#" class="text-decoration-none d-inline "><i class="fa fa-times"></i> hapus</a>
                                                            <a href="#" class="text-decoration-none d-inline"><i class="fa fa-reply"></i> balas</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SOSIAL MEDIA -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3><i class="fas fa-hashtag text-primary"></i> Sosial media</h3>
                                <div class="row justify-content-start">
                                    <div class="col-md-6">
                                        <div class="mt-2">
                                            <p class="d-inline"><i class="fab fa-instagram text-danger me-1"></i></p>
                                            <p class="d-inline" id="instagram"></p>
                                        </div>

                                        <div class="mt-2">
                                            <p class="d-inline"><i class="fab fa-facebook text-primary me-1"></i></p>
                                            <p class="d-inline" id="facebook"></p>
                                        </div>

                                        <div class="mt-2">
                                            <p class="d-inline"><i class="fab fa-twitter text-info me-1"></i></p>
                                            <p class="d-inline" id="twitter"></p>
                                        </div>

                                        <div class="mt-2">
                                            <p class="d-inline"><i class="fab fa-youtube text-danger me-1"></i></p>
                                            <p class="d-inline" id="youtube"></p>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2">
                                            <p class="d-inline"><i class="fab fa-tiktok text-dark me-1"></i></p>
                                            <p class="d-inline" id="tiktok"></p>
                                        </div>

                                        <div class="mt-2">
                                            <p class="d-inline"><i class="fas fa-globe text-success me-1"></i></p>
                                            <p class="d-inline" id="website"></p>
                                        </div>

                                        <div class="mt-2">
                                            <p class="d-inline"><i class="fas fa-envelope text-danger me-1"></i></p>
                                            <p class="d-inline" id="email"></p>
                                        </div>

                                        <div class="mt-2">
                                            <p class="d-inline"><i class="fas fa-phone-alt text-primary me-1"></i></p>
                                            <p class="d-inline" id="no_cs"></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JADWAL OPERASIONAL -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="mb-0 fw-bold"><i class="fas fa-calendar-alt text-success"></i> Jadwal Operasional</h3>
                                        <button type="button" class="btn add_button m-2 btn-sm" id="btn_addJadwal" onclick="jadwal_oleh_oleh(document.querySelector('#id_oleh_oleh').value)"><i class="fa fa-plus"></i>Tambah data</button>

                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_jadwal" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">No</th>
                                                        <th scope="col">Hari</th>
                                                        <th scope="col">Jam Buka</th>
                                                        <th scope="col">Jam Tutup</th>
                                                        <th scope="col">Keterangan</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MENU -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <h3 class="mb-0 fw-bold"><i class="fas fa-pizza-slice text-primary"></i> Menu</h3>
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addTiket" onclick="menu_oleh_oleh(document.querySelector('#id_oleh_oleh').value)"><i class="fa fa-plus"></i>Tambah data</button>

                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_menu">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama menu</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col" style="width: 100px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- FASILITAS -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-0 fw-bold"><i class="fas fa-landmark text-info"></i> Fasilitas</h3>
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="fasilitas_oleh_oleh(document.querySelector('#id_oleh_oleh').value)"><i class="fa fa-plus"></i>Tambah data</button>

                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_fasilitas" style="width:100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Fasilitas</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-0 fw-bold"><i class="fas fa-qrcode text-warning"></i> Item</h3>
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="item_oleh_oleh(document.querySelector('#id_oleh_oleh').value)"><i class="fa fa-plus"></i>Tambah data</button>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_item" style="width:100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Qrcode</th>
                                                <th scope="col">Audio</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- GALERI -->
                <div class="row">
                    <h3 class="text-center"><i class="fas fa-images text-danger"></i> Galeri</h3>
                    <div class="col-12">
                        <button type="button" class="btn add_button m-2 btn-sm float-center" onclick="gambar_oleh_oleh(document.querySelector('#id_oleh_oleh').value)"><i class="fas fa-plus"></i> Tambah data</button>
                        <div class="row justify-content-center gambar_grid">

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

        <!-- Modal Add Jadwal -->
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

        <!-- Modal Edit Jadwal -->
        <div class="modal fade" id="editJadwalModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="editJadwalModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editJadwalModalLabel">Edit Jadwal</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_edit_jadwal">
                                    <input type="hidden" class="oleh_oleh_id">
                                    <input type="hidden" id="id_jadwal">
                                    <div class="form-group">
                                        <label for="edit_hari">Jadwal operasional</label>
                                        <input type="text" name="edit_hari" class="form-control" id="edit_hari" placeholder="Senin - Jumat">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="edit_jam_buka" class="form-label">Jam buka</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">WIB</span>
                                                    <input type="text" class="form-control" name="edit_jam_buka" id="edit_jam_buka" autocomplete="off" placeholder="10:00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="edit_jam_tutup" class="form-label">Jam tutup</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">WIB</span>
                                                    <input type="text" class="form-control" name="edit_jam_tutup" id="edit_jam_tutup" autocomplete="off" placeholder="17:00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_keterangan_jadwal">Keterangan</label>
                                        <textarea class="form-control keterangan" name="edit_keterangan_jadwal" id="edit_keterangan_jadwal" rows="3"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_editJadwal" class="btn btn-primary">Ubah</button>
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


        <!-- Modal edit Item Oleh-oleh -->
        <div class="modal fade" id="editMenuModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="editMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editMenuModalLabel">Edit Item</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_menu">
                                    <input type="hidden" class="oleh_oleh_id">
                                    <input type="hidden" id="id_item_oleh_oleh">
                                    <div class="form-group">
                                        <label for="edit_nama_item">Nama item</label>
                                        <input type="text" name="edit_nama_item" class="form-control" id="edit_nama_item" placeholder="Nama item oleh-oleh...">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="edit_harga" class="form-label">Harga</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="edit_harga" id="edit_harga" placeholder="harga menu (dalam rupiah)" aria-label="harga menu (dalam rupiah)" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_keterangan_oleholeh">Keterangan</label>
                                        <textarea class="form-control" name="edit_keterangan_oleholeh" id="edit_keterangan_oleholeh" rows="3"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_editMenu" class="btn btn-primary">Ubah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal add fasilitas -->
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

        <!-- Modal edit fasilitas -->
        <div class="modal fade" id="editFasilitasModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="editFasilitasModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editFasilitasModalLabel">Edit Fasilitas</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_fasilitas">
                                    <input type="hidden" class="oleh_oleh_id">
                                    <input type="hidden" id="id_fasilitas">
                                    <div class="form-group">
                                        <label for="edit_fasilitas">Fasilitas Wisata</label>
                                        <input type="text" name="edit_fasilitas" class="form-control" id="edit_fasilitas" placeholder="Nama fasilitas wisata...">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_keterangan_fasilitas">Keterangan</label>
                                        <textarea class="form-control" name="edit_keterangan_fasilitas" id="edit_keterangan_fasilitas" rows="3"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_editFasilitas" class="btn btn-primary">Ubah</button>
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
                                    <input type="hidden" class="wisata_id" name="id">
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

        <!-- Modal edit gambar -->
        <div class="modal fade" id="editgambarModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="editgambarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editgambarModalLabel">Edit gambar</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="edit_form_gambar">
                                    <input type="hidden" id="id_gambar" name="id_gambar">
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
                                    <div class="mt-3">
                                        <img src="" style="width: 100px;" alt="">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="edit_keterangan">Keterangan</label>
                                        <textarea class="form-control keterangan" name="keterangan" id="edit_keterangan" rows="4"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_editGambar" class="btn btn-primary">Ubah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {
                if (localStorage.getItem("id_oleh_oleh") != null) {
                    const id_oleh_oleh = localStorage.getItem("id_oleh_oleh")

                    $.ajax({
                        url: API + 'oleh_oleh/' + id_oleh_oleh,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function(results) {

                            let oleh_oleh = results.data
                            let jadwal = oleh_oleh.jadwal
                            let fasilitas = oleh_oleh.fasilitas
                            let item = oleh_oleh.item
                            let item_oleh_oleh = oleh_oleh.item_oleh_oleh
                            let gambar = oleh_oleh.gambar


                            console.log(oleh_oleh)


                            let urlInstagram =
                                oleh_oleh.instagram != null ?
                                new URL(oleh_oleh.instagram).pathname.slice(1) :
                                "-";
                            let urlFacebook =
                                oleh_oleh.facebook != null ?
                                new URL(oleh_oleh.facebook).pathname.slice(1) :
                                "-";
                            let urlYoutube =
                                oleh_oleh.youtube != null ?
                                new URL(oleh_oleh.youtube).pathname.slice(1) :
                                '-';
                            let urlTwitter =
                                oleh_oleh.twitter != null ?
                                new URL(oleh_oleh.twitter).pathname.slice(1) :
                                '-';
                            let urlTiktok =
                                oleh_oleh.tiktok != null ?
                                new URL(oleh_oleh.tiktok).pathname.slice(1) :
                                '-';

                            let no_cs = oleh_oleh.no_cs != null ? oleh_oleh.no_cs : '-';
                            let website = oleh_oleh.website != null ? oleh_oleh.website : '-'

                            $('#id_oleh_oleh').val(oleh_oleh.id_oleh_oleh);
                            $('#nama_oleh_oleh').text(oleh_oleh.nama_oleh_oleh);
                            $('#deskripsi_oleh_oleh').text(oleh_oleh.deskripsi_oleh_oleh);
                            $('#alamat_oleh_oleh').text(oleh_oleh.alamat_oleh_oleh)
                            $('#latitude_longitude').text(oleh_oleh.latitude + ', ' + oleh_oleh.longitude)
                            $('#instagram').text(urlInstagram);
                            $('#facebook').text(urlFacebook);
                            $('#twitter').text(urlTwitter);
                            $('#youtube').text(urlYoutube);
                            $('#tiktok').text(urlTiktok);
                            $('#website').text(website)
                            $('#email').text(oleh_oleh.email);
                            $('#no_cs').text(no_cs);


                            // JADWAL
                            $('#table_jadwal').DataTable({
                                data: jadwal,
                                lengthMenu: [
                                    [3, 6, 9, 12, -1],
                                    [3, 6, 9, 12, "All"],
                                ],
                                columns: [{
                                        render: function(data, type, full, meta) {
                                            return meta.row + 1;
                                        },
                                        className: "text-center",
                                        width: "5%",
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.hari
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.jam_buka
                                        },
                                        className: 'text-center',
                                        width: '15%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.jam_tutup
                                        },
                                        className: 'text-center',
                                        width: '15%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {

                                            return full.keterangan
                                        },
                                        className: 'text-center',
                                        width: '20%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return `<div>
                                                        <button type="button" onclick="edit_jadwal('${full.id_jadwal}')" class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                        <button type="button" onclick="hapus_jadwal('${full.id_jadwal}')" class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                    </div>`
                                        },
                                        className: 'text-center',
                                        width: '20%'
                                    }
                                ]
                            })

                            // MENU
                            $('#table_menu').DataTable({
                                data: item_oleh_oleh,
                                lengthMenu: [
                                    [3, 6, 9, 12, -1],
                                    [3, 6, 9, 12, "All"],
                                ],
                                columns: [{
                                        render: function(data, type, full, meta) {
                                            return meta.row + 1;
                                        },
                                        className: "text-center",
                                        width: "5%",
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.nama_item
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.harga
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.keterangan
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return `<div>
                                                        <button type="button" onclick="edit_menu('${full.id_item_oleh_oleh}')" class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                        <button type="button" onclick="hapus_menu('${full.id_item_oleh_oleh}')" class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                    </div>`
                                        },
                                        className: 'text-center',
                                        width: '20%'
                                    }
                                ]
                            })

                            // FASILITAS
                            $('#table_fasilitas').DataTable({
                                data: fasilitas,
                                lengthMenu: [
                                    [3, 6, 9, 12, -1],
                                    [3, 6, 9, 12, "All"],
                                ],
                                columns: [{
                                        render: function(data, type, full, meta) {
                                            return meta.row + 1
                                        },
                                        className: "text-center",
                                        width: "5%",
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.nama_fasilitas
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.keterangan
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return `<div>
                                                        <button type="button" onclick="edit_fasilitas(${full.id_fasilitas})" class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                        <button type="button" onclick="hapus_fasilitas(${full.id_fasilitas})" class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                    </div>`
                                        },
                                        className: 'text-center',
                                        width: '20%'
                                    }
                                ]
                            })

                            // ITEM
                            $('#table_item').DataTable({
                                data: item,
                                lengthMenu: [
                                    [3, 6, 9, 12, -1],
                                    [3, 6, 9, 12, "All"],
                                ],
                                columns: [{
                                        render: function(data, type, full, meta) {
                                            return meta.row + 1
                                        },
                                        className: "text-center",
                                        width: "5%",
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return `<a href="${full.qr_code}" download="${full.qr_code}"><img src="${full.qr_code}" alt=""></a>`
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.audio
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.deskripsi
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return `<div>
                                                        <button type="button" onclick="hapus_item(${full.id_item_pariwisata})" class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                    </div>`
                                        },
                                        className: 'text-center',
                                        width: '20%'
                                    }
                                ]
                            })

                            // GAMBAR
                            gambar.forEach(element => {
                                $('.gambar_grid').append(`
                                <div class="col-md-4">
                                <div class="card">
                                    <img src="${API + element.gambar}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">${element.keterangan != null ?element.keterangan : '-' }</p>
                                        <button class="btn btn-sm btn-info" type="button" onclick="edit_gambar(${element.id_gambar})"><i class="fas fa-edit text-light"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" onclick="hapus_gambar(${element.id_gambar})"><i class="fas fa-times text-light"></i></button>
                                    </div>
                                </div>
                            </div>`)
                            });

                        }
                    })



                } else {
                    location.href = base_url
                }
            })


            // Fasilitas
            function hapus_fasilitas(id_fasilitas) {
                Swal.fire({
                    title: "Yakin ingin menghapus data fasilitas ?",
                    text: "Data fasilitas yang sudah dihapus, tidak bisa dikembalikan lagi",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: API + "fasilitas/",
                            type: "DELETE",
                            data: {
                                id_fasilitas,
                            },
                            dataType: "JSON",
                            success: function(results) {
                                if (results.code != 200) {
                                    error(results.message);
                                } else {
                                    success("Data fasilitas wisata berhasil dihapus");
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                }
                            },
                        });
                    }
                });
            }

            function edit_fasilitas(id_fasilitas) {
                $('#editFasilitasModal').modal('show');
                $.ajax({
                    url: API + 'fasilitas/' + id_fasilitas,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $('#id_fasilitas').val(data.id_fasilitas);
                        $('.oleh_oleh_id').val(data.id_pariwisata);
                        $('#edit_fasilitas').val(data.nama_fasilitas);
                        $('#edit_keterangan_fasilitas').val(data.keterangan)
                    }
                })
            }

            $('#submit_editFasilitas').on('click', function(e) {
                e.preventDefault();
                let data = {
                    id_fasilitas: $('#id_fasilitas').val(),
                    id_pariwisata: $(".oleh_oleh_id").val(),
                    nama_fasilitas: $("#edit_fasilitas").val(),
                    keterangan: $("#edit_keterangan_fasilitas").val(),
                };
                $.ajax({
                    url: API + "fasilitas",
                    data: data,
                    type: "PUT",
                    dataType: "JSON",
                    success: function(results) {
                        if (results.code != 200) {
                            error(results.message);
                        } else {
                            success("Data fasilitas wisata berhasil diubah");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    },
                });
            })


            // Jadwal
            function hapus_jadwal(id_jadwal) {
                Swal.fire({
                    title: "Yakin ingin menghapus data jadwal ?",
                    text: "Data jadwal yang sudah dihapus, tidak bisa dikembalikan lagi",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: API + "jadwal/",
                            type: "DELETE",
                            data: {
                                id_jadwal,
                            },
                            dataType: "JSON",
                            success: function(results) {
                                if (results.code != 200) {
                                    error(result.message);
                                } else {
                                    success("Data jadwal wisata berhasil dihapus");
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                }
                            },
                        });
                    }
                });
            }

            function edit_jadwal(id_jadwal) {
                $('#editJadwalModal').modal('show');
                $.ajax({
                    url: API + 'jadwal/' + id_jadwal,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $('#id_jadwal').val(data.id_jadwal);
                        $('.oleh_oleh_id').val(data.id_pariwisata);
                        $('#edit_hari').val(data.hari);
                        $('#edit_jam_buka').val(data.jam_buka);
                        $('#edit_jam_tutup').val(data.jam_tutup);
                        $('#edit_keterangan_jadwal').val(data.keterangan);
                    }
                })
            }

            $('#submit_editJadwal').on('click', function(e) {
                e.preventDefault()
                let data = {
                    id_jadwal: $('#id_jadwal').val(),
                    id_pariwisata: $('.oleh_oleh_id').val(),
                    hari: $("#edit_hari").val(),
                    jam_buka: $("#edit_jam_buka").val(),
                    jam_tutup: $("#edit_jam_tutup").val(),
                    keterangan: $("#edit_keterangan_jadwal").val(),
                }
                $.ajax({
                    url: API + 'jadwal',
                    type: 'PUT',
                    dataType: 'JSON',
                    data: data,
                    success: function(results) {
                        if (results.code != 200) {
                            error(result.message);
                        } else {
                            success("Data jadwal wisata berhasil diubah");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    }
                })
            })


            // Menu
            function hapus_menu(id_item_oleh_oleh) {
                Swal.fire({
                    title: "Yakin ingin menghapus data ?",
                    text: "Data menu yang sudah dihapus, tidak bisa dikembalikan lagi",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: API + "item_oleh_oleh/",
                            type: "DELETE",
                            data: {
                                id_item_oleh_oleh,
                            },
                            dataType: "JSON",
                            success: function(results) {
                                if (results.code != 200) {
                                    error(results.message);
                                } else {
                                    success("Data berhasil dihapus");
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                }
                            },
                        });
                    }
                });
            }

            function edit_menu(id_item_oleh_oleh) {
                console.log(id_item_oleh_oleh)
                $('#editMenuModal').modal('show');
                $.ajax({
                    url: API + 'item_oleh_oleh/' + id_item_oleh_oleh,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $('#id_item_oleh_oleh').val(data.id_item_oleh_oleh);
                        $('.oleh_oleh_id').val(data.oleh_oleh_id);
                        $('#edit_nama_item').val(data.nama_item);
                        $('#edit_harga').val(data.harga);
                        $('#edit_keterangan_oleholeh').val(data.keterangan)
                    }
                })
            }

            $('#submit_editMenu').on('click', function(e) {
                e.preventDefault();
                let data = {
                    id_item_oleh_oleh: $('#id_item_oleh_oleh').val(),
                    oleh_oleh_id: $(".oleh_oleh_id").val(),
                    nama_item: $("#edit_nama_item").val(),
                    harga: $("#edit_harga").val(),
                    keterangan: $("#edit_keterangan_oleholeh").val(),
                };
                console.log(data)

                $.ajax({
                    url: API + "item_oleh_oleh",
                    data: data,
                    type: "PUT",
                    dataType: "JSON",
                    success: function(results) {
                        if (results.code != 200) {
                            error(results.message);
                        } else {
                            success("Data menu berhasil diubah");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    },
                });

            })


            function hapus_item(id_item_pariwisata) {
                Swal.fire({
                    title: "Yakin ingin menghapus data item ?",
                    text: "Data item yang sudah dihapus, tidak bisa dikembalikan lagi",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: API + "item/",
                            type: "DELETE",
                            data: {
                                id_item_pariwisata,
                            },
                            dataType: "JSON",
                            success: function(results) {
                                if (results.code != 200) {
                                    error(results.message);
                                } else {
                                    success("Data item wisata berhasil dihapus");
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                }
                            },
                        });
                    }
                });
            }


            function hapus_gambar(id_gambar) {
                Swal.fire({
                    title: "Yakin ingin menghapus data ?",
                    text: "Data yang sudah dihapus, tidak bisa dikembalikan lagi",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: API + "gambar/",
                            type: "DELETE",
                            data: {
                                id_gambar,
                            },
                            dataType: "JSON",
                            success: function(results) {
                                if (results.code != 200) {
                                    error(results.message);
                                } else {
                                    success("Data berhasil dihapus");
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                }
                            },
                        });
                    }
                });
            }

            function edit_gambar(id_gambar) {
                $('#editgambarModal').modal('show');
                $.ajax({
                    url: API + 'gambar/' + id_gambar,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $("#edit_form_gambar img").attr('src', API + `${data.gambar}`)
                        $("#edit_keterangan").val(data.keterangan)
                        $(".wisata_id").val(data.id_pariwisata)
                        $("#id_gambar").val(data.id_gambar)
                        $(".tanggal").val(data.tanggal)

                    }
                })
            }


            $('#submit_editGambar').on('click', function(e) {
                e.preventDefault();
                let form_data = new FormData($('#edit_form_gambar')[0]);
                $.ajax({
                    url: API + "gambar/",
                    type: "PUT",
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function(results) {
                        if (results.code != 200) {
                            error(results.message);
                        } else {
                            success(results.message);
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    },
                });
            })
        </script>
        <script src="<?= base_url() ?>js/oleh_oleh.js"></script>