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
                                        <input type="hidden" id="id_kuliner">
                                        <div class="d-inline">
                                            <h1 class="d-inline"><i class="fas fa-campground text-success"></i></h1>
                                            <h1 class="d-inline" id="nama_kuliner"></h1>
                                        </div>
                                        <div class="d-inline">
                                            <h6 class="d-inline"><i class="fas fa-star text-warning"></i></h6>
                                            <h6 class="d-inline" id="rating_kuliner">(9.3)</h6>
                                        </div>
                                        <p style="text-align: justify;" class="mt-3" id="deskripsi_kuliner"></p>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="d-inline">
                                                    <h3 class="d-inline"><i class="fas fa-server text-success"></i></h3>
                                                    <h3 class="d-inline">Data wisata kuliner</h3>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class="fas fa-filter text-warning me-3"></i></p>
                                                    <p class="d-inline" id="kategori_kuliner"></p>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class="fas fa-map-marked-alt text-info me-3"></i></p>
                                                    <p class="d-inline" id="alamat_kuliner"></p>
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
                                        <button type="button" class="btn add_button m-2 btn-sm" id="btn_addJadwal" onclick="jadwal_kuliner(document.querySelector('#id_kuliner').value)"><i class="fa fa-plus"></i>Tambah data</button>

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
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addTiket" onclick="menu_kuliner(document.querySelector('#id_kuliner').value)"><i class="fa fa-plus"></i>Tambah data</button>

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
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="fasilitas_kuliner(document.querySelector('#id_kuliner').value)"><i class="fa fa-plus"></i>Tambah data</button>

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
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="tambahWisata()"><i class="fa fa-plus"></i>Tambah data</button>
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
                        <button type="button" class="btn add_button m-2 btn-sm float-center"><i class="fas fa-plus"></i> Tambah data</button>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/backend/assets/images/') ?>1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/backend/assets/images/') ?>1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/backend/assets/images/') ?>1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/backend/assets/images/') ?>1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/backend/assets/images/') ?>1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
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
                                    <input type="hidden" class="kuliner_id">
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
                                    <input type="hidden" class="kuliner_id">
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


        <!-- Modal add menu -->
        <div class="modal fade" id="menuModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="menuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="menuModalLabel">Tambah Menu Kuliner</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_menu">
                                    <input type="hidden" class="kuliner_id">
                                    <div class="form-group">
                                        <label for="menu_kuliner">Nama menu</label>
                                        <input type="text" name="menu_kuliner" class="form-control" id="menu_kuliner" placeholder="Nama menu wisata kuliner...">
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
                                        <label for="keterangan_menu">Keterangan</label>
                                        <textarea class="form-control" name="keterangan_menu" id="keterangan_menu" rows="3"></textarea>
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


        <!-- Modal edit menu -->
        <div class="modal fade" id="editMenuModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="editMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editMenuModalLabel">Edit Menu Kuliner</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="edit_form_menu">
                                    <input type="hidden" id="id_menu_kuliner">
                                    <input type="hidden" class="kuliner_id">
                                    <div class="form-group">
                                        <label for="edit_menu_kuliner">Nama menu</label>
                                        <input type="text" name="edit_menu_kuliner" class="form-control" id="edit_menu_kuliner" placeholder="Nama menu wisata kuliner...">
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
                                        <label for="edit_keterangan_menu">Keterangan</label>
                                        <textarea class="form-control" name="edit_keterangan_menu" id="edit_keterangan_menu" rows="3"></textarea>
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
                                    <input type="hidden" class="wisata_id">
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
                                <form action="" method="POST" enctype="multipart/form-data" id="edit_form_fasilitas">
                                    <input type="hidden" class="wisata_id">
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


        <script>
            $(document).ready(function() {
                if (localStorage.getItem("id_kuliner") != null) {
                    const id_kuliner = localStorage.getItem("id_kuliner")

                    $.ajax({
                        url: 'http://localhost:8000/kuliner/' + id_kuliner,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function(results) {

                            let kuliner = results.data
                            let kategori = kuliner.kategori_kuliner
                            let jadwal = kuliner.jadwal
                            let menu = kuliner.menu
                            let fasilitas = kuliner.fasilitas
                            let item = kuliner.item


                            console.log(kuliner)


                            let urlInstagram =
                                kuliner.instagram != null ?
                                new URL(kuliner.instagram).pathname.slice(1) :
                                "-";
                            let urlFacebook =
                                kuliner.facebook != null ?
                                new URL(kuliner.facebook).pathname.slice(1) :
                                "-";
                            let urlYoutube =
                                kuliner.youtube != null ?
                                new URL(kuliner.youtube).pathname.slice(1) :
                                '-';
                            let urlTwitter =
                                kuliner.twitter != null ?
                                new URL(kuliner.twitter).pathname.slice(1) :
                                '-';
                            let urlTiktok =
                                kuliner.tiktok != null ?
                                new URL(kuliner.tiktok).pathname.slice(1) :
                                '-';

                            let no_cs = kuliner.no_cs != null ? kuliner.no_cs : '-';
                            let website = kuliner.website != null ? kuliner.website : '-'

                            $('#id_kuliner').val(kuliner.id_kuliner);
                            $('#nama_kuliner').text(kuliner.nama_kuliner);
                            $('#deskripsi_kuliner').text(kuliner.deskripsi_kuliner);
                            $('#alamat_kuliner').text(kuliner.alamat_kuliner)
                            $('#latitude_longitude').text(kuliner.latitude + ', ' + kuliner.longitude)
                            $('#instagram').text(urlInstagram);
                            $('#facebook').text(urlFacebook);
                            $('#twitter').text(urlTwitter);
                            $('#youtube').text(urlYoutube);
                            $('#tiktok').text(urlTiktok);
                            $('#website').text(website)
                            $('#email').text(kuliner.email);
                            $('#no_cs').text(no_cs);
                            $('#kategori_kuliner').text(kategori.jenis_kuliner);


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
                                data: menu,
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
                                            return full.nama_menu
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
                                                        <button type="button" onclick="edit_menu('${full.id_menu_kuliner}')" class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                        <button type="button" onclick="hapus_menu('${full.id_menu_kuliner}')" class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
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
                                        render: function(full, meta, data, type) {
                                            return meta.row + 1
                                        },
                                        className: 'text-center',
                                        width: '2%'
                                    },
                                    {
                                        render: function(full, meta, data, type) {
                                            return full.qr_code
                                        }
                                    },
                                    {
                                        render: function(full, meta, data, type) {
                                            return full.audio1
                                        }
                                    },
                                    {
                                        render: function(full, meta, data, type) {
                                            return full.keterangan
                                        }
                                    },
                                    {
                                        render: function(full, meta, data, type) {
                                            return `<div>
                                                        <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                        <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                    </div>`
                                        }
                                    }
                                ]
                            })

                        }
                    })



                } else {
                    location.href = base_url
                }
            })

            function edit_jadwal(id_jadwal) {
                $('#editJadwalModal').modal('show');
                $.ajax({
                    url: 'http://localhost:8000/jadwal/' + id_jadwal,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $('#id_jadwal').val(data.id_jadwal);
                        $('.kuliner_id').val(data.id_pariwisata);
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
                    id_pariwisata: $('.kuliner_id').val(),
                    hari: $("#edit_hari").val(),
                    jam_buka: $("#edit_jam_buka").val(),
                    jam_tutup: $("#edit_jam_tutup").val(),
                    keterangan: $("#edit_keterangan_jadwal").val(),
                }
                $.ajax({
                    url: 'http://localhost:8000/jadwal',
                    type: 'PUT',
                    dataType: 'JSON',
                    data: data,
                    success: function(results) {
                        if (results.code != 200) {
                            error(result.message);
                        } else {
                            success("Data jadwal wisata kuliner berhasil diubah");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    }
                })
            })

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
                            url: "http://localhost:8000/jadwal/",
                            type: "DELETE",
                            data: {
                                id_jadwal,
                            },
                            dataType: "JSON",
                            success: function(results) {
                                if (results.code != 200) {
                                    error(result.message);
                                } else {
                                    success("Data jadwal wisata kuliner berhasil dihapus");
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                }
                            },
                        });
                    }
                });
            }

            function edit_menu(id_menu_kuliner) {
                console.log(id_menu_kuliner)
                $('#editMenuModal').modal('show');
                $.ajax({
                    url: 'http://localhost:8000/menu_kuliner/' + id_menu_kuliner,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $('#id_menu_kuliner').val(data.id_menu_kuliner);
                        $('.kuliner_id').val(data.kuliner_id);
                        $('#edit_menu_kuliner').val(data.nama_menu);
                        $('#edit_harga').val(data.harga);
                        $('#edit_keterangan_menu').val(data.keterangan)
                    }
                })
            }

            $('#submit_editMenu').on('click', function(e) {
                e.preventDefault();
                let data = {
                    id_menu_kuliner: $('#id_menu_kuliner').val(),
                    kuliner_id: $(".kuliner_id").val(),
                    nama_menu: $("#edit_menu_kuliner").val(),
                    harga: $("#edit_harga").val(),
                    keterangan: $("#edit_keterangan_menu").val(),
                };
                console.log(data)

                $.ajax({
                    url: "http://localhost:8000/menu_kuliner",
                    data: data,
                    type: "PUT",
                    dataType: "JSON",
                    success: function(results) {
                        if (results.code != 200) {
                            error(results.message);
                        } else {
                            success("Data menu wisata kuliner berhasil diubah");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    },
                });

            })

            function hapus_menu(id_menu_kuliner) {
                Swal.fire({
                    title: "Yakin ingin menghapus data menu kuliner ?",
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
                            url: "http://localhost:8000/menu_kuliner/",
                            type: "DELETE",
                            data: {
                                id_menu_kuliner,
                            },
                            dataType: "JSON",
                            success: function(results) {
                                if (results.code != 200) {
                                    error(results.message);
                                } else {
                                    success("Data menu kuliner berhasil dihapus");
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
                    url: 'http://localhost:8000/fasilitas/' + id_fasilitas,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $('#id_fasilitas').val(data.id_fasilitas);
                        $('.wisata_id').val(data.id_pariwisata);
                        $('#edit_fasilitas').val(data.nama_fasilitas);
                        $('#edit_keterangan_fasilitas').val(data.keterangan)
                    }
                })
            }

            $('#submit_editFasilitas').on('click', function(e) {
                e.preventDefault();
                let data = {
                    id_fasilitas: $('#id_fasilitas').val(),
                    id_pariwisata: $(".wisata_id").val(),
                    nama_fasilitas: $("#edit_fasilitas").val(),
                    keterangan: $("#edit_keterangan_fasilitas").val(),
                };
                $.ajax({
                    url: "http://localhost:8000/fasilitas",
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
                            url: "http://localhost:8000/fasilitas/",
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
        </script>
        <script src="<?= base_url() ?>js/kuliner.js"></script>