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
                                        <input type="hidden" id="id_penginapan">
                                        <div class="d-inline">
                                            <h1 class="d-inline"><i class="fas fa-campground text-success"></i></h1>
                                            <h1 class="d-inline" id="nama_penginapan"></h1>
                                        </div>
                                        <div class="d-inline">
                                            <h6 class="d-inline"><i class="fas fa-star text-warning"></i></h6>
                                            <h6 class="d-inline" id="rating_penginapan">(9.3)</h6>
                                        </div>
                                        <p style="text-align: justify;" class="mt-3" id="deskripsi_penginapan"></p>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="d-inline">
                                                    <h3 class="d-inline"><i class="fas fa-server text-success"></i></h3>
                                                    <h3 class="d-inline">Data wisata penginapan</h3>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class="fas fa-filter text-warning me-3"></i></p>
                                                    <p class="d-inline" id="kategori_penginapan"></p>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class="fas fa-map-marked-alt text-info me-3"></i></p>
                                                    <p class="d-inline" id="alamat_penginapan"></p>
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

                <!-- TIPE KAMAR -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="mb-0 fw-bold"><i class="fas fa-tag text-success"></i>Tipe Kamar</h3>
                                        <button type="button" class="btn add_button m-2 btn-sm" id="btn_addTipeKamar" onclick="kamar_penginapan(document.querySelector('#id_penginapan').value)"><i class="fa fa-plus"></i>Tambah data</button>

                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_tipe_kamar" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">No</th>
                                                        <th scope="col">Tipe Kamar</th>
                                                        <th scope="col">Kapasitas</th>
                                                        <th scope="col">Harga</th>
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



                <!-- Fasilitas Kamar -->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <h3 class="mb-0 fw-bold"><i class="fas fa-pizza-slice text-primary"></i> Fasilitas Kamar</h3>
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addTiket" onclick="fasilitas_kamar(document.querySelector('#id_penginapan').value)"><i class="fa fa-plus"></i>Tambah data</button>

                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_fasilitas_kamar">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Fasilitas</th>
                                                <th scope="col">Tipe Kamar</th>
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
                </div> -->

                <!-- FASILITAS -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-0 fw-bold"><i class="fas fa-landmark text-info"></i> Fasilitas</h3>
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="fasilitas_penginapan(document.querySelector('#id_penginapan').value)"><i class="fa fa-plus"></i>Tambah data</button>

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
                                <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="item_penginapan(document.querySelector('#id_penginapan').value)"><i class="fa fa-plus"></i>Tambah data</button>
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
                        <button type="button" class="btn add_button m-2 btn-sm float-center" onclick="gambar_penginapan(document.querySelector('#id_penginapan').value)"><i class="fas fa-plus"></i> Tambah data</button>
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

        <!-- Modal Add Kamar Penginapan -->
        <div class="modal fade" id="kamarPenginapanModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="kamarPenginapanModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kamarPenginapanModalLabel">Tambah Data Kamar Penginapan</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_kamar_penginapan">
                                    <input type="hidden" class="penginapan_id">
                                    <div class="form-group">
                                        <label for="tipe_kamar">Tipe kamar</label>
                                        <input type="text" name="tipe_kamar" class="form-control" id="tipe_kamar" placeholder="Tipe kamar wisata penginapan...">
                                    </div>
                                    <div class="form-group">
                                        <label for="kapasitas">Kapasitas</label>
                                        <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="Kapasitas kamar penginapan...">
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
                                        <label for="keterangan_kamar_penginapan">Keterangan</label>
                                        <textarea class="form-control" name="keterangan_kamar_penginapan" id="keterangan_kamar_penginapan" rows="3"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_addKamarPenginapan" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Edit Kamar Penginapan -->
        <div class="modal fade" id="editKamarPenginapanModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="editKamarPenginapanModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editKamarPenginapanModalLabel">Edit Kamar</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data" id="form_edit_kamar">
                                    <input type="hidden" class="penginapan_id">
                                    <input type="hidden" id="id_kamar_penginapan">
                                    <div class="form-group">
                                        <label for="edit_tipe_kamar">Tipe kamar</label>
                                        <input type="text" name="edit_tipe_kamar" class="form-control" id="edit_tipe_kamar" placeholder="Tipe kamar wisata penginapan...">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_kapasitas">Kapasitas</label>
                                        <input type="text" name="edit_kapasitas" class="form-control" id="edit_kapasitas" placeholder="Kapasitas kamar penginapan...">
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
                                        <label for="edit_keterangan_kamar_penginapan">Keterangan</label>
                                        <textarea class="form-control" name="edit_keterangan_kamar_penginapan" id="edit_keterangan_kamar_penginapan" rows="3"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_editKamar" class="btn btn-primary">Ubah</button>
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

        <!-- Item -->
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
                if (localStorage.getItem("id_penginapan") != null) {
                    const id_penginapan = localStorage.getItem("id_penginapan")

                    $.ajax({
                        url: 'http://localhost:8000/penginapan/' + id_penginapan,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function(results) {

                            let penginapan = results.data
                            let kategori = penginapan.kategori_penginapan
                            let tipe_kamar = penginapan.tipe_kamar
                            let fasilitas = penginapan.fasilitas
                            let item = penginapan.item
                            let gambar = penginapan.gambar



                            let urlInstagram =
                                penginapan.instagram != null ?
                                new URL(penginapan.instagram).pathname.slice(1) :
                                "-";
                            let urlFacebook =
                                penginapan.facebook != null ?
                                new URL(penginapan.facebook).pathname.slice(1) :
                                "-";
                            let urlYoutube =
                                penginapan.youtube != null ?
                                new URL(penginapan.youtube).pathname.slice(1) :
                                '-';
                            let urlTwitter =
                                penginapan.twitter != null ?
                                new URL(penginapan.twitter).pathname.slice(1) :
                                '-';
                            let urlTiktok =
                                penginapan.tiktok != null ?
                                new URL(penginapan.tiktok).pathname.slice(1) :
                                '-';

                            let no_cs = penginapan.no_cs != null ? penginapan.no_cs : '-';
                            let website = penginapan.website != null ? penginapan.website : '-'

                            $('#id_penginapan').val(penginapan.id_penginapan);
                            $('#nama_penginapan').text(penginapan.nama_penginapan);
                            $('#deskripsi_penginapan').text(penginapan.deskripsi_penginapan);
                            $('#alamat_penginapan').text(penginapan.alamat_penginapan)
                            $('#latitude_longitude').text(penginapan.latitude + ', ' + penginapan.longitude)
                            $('#instagram').text(urlInstagram);
                            $('#facebook').text(urlFacebook);
                            $('#twitter').text(urlTwitter);
                            $('#youtube').text(urlYoutube);
                            $('#tiktok').text(urlTiktok);
                            $('#website').text(website)
                            $('#email').text(penginapan.email);
                            $('#no_cs').text(no_cs);
                            $('#kategori_penginapan').text(kategori.jenis_penginapan);


                            // TIPE KAMAR
                            $('#table_tipe_kamar').DataTable({
                                data: tipe_kamar,
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
                                            return full.tipe_kamar
                                        },
                                        className: 'text-center',
                                        width: '25%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return full.kapasitas + ' Orang'
                                        },
                                        className: 'text-center',
                                        width: '15%'
                                    },
                                    {
                                        render: function(data, type, full, meta) {
                                            return 'Rp ' + full.harga
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
                                                        <button type="button" onclick="edit_kamar('${full.id_kamar_penginapan}')" class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                        <button type="button" onclick="hapus_kamar('${full.id_kamar_penginapan}')" class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                    </div>`
                                        },
                                        className: 'text-center',
                                        width: '20%'
                                    }
                                ]
                            })

                            // Fasilitas Kamar
                            // $('#table_fasilitas_kamar').DataTable({
                            //     data: tipe_kamar.fasilitas_kamar,
                            //     lengthMenu: [
                            //         [3, 6, 9, 12, -1],
                            //         [3, 6, 9, 12, "All"],
                            //     ],
                            //     columns: [{
                            //             render: function(data, type, full, meta) {
                            //                 return meta.row + 1;
                            //             },
                            //             className: "text-center",
                            //             width: "5%",
                            //         },
                            //         {
                            //             render: function(data, type, full, meta) {
                            //                 return full.nama_fasilitas
                            //             },
                            //             className: 'text-center',
                            //             width: '25%'
                            //         },
                            //         {
                            //             render: function(data, type, full, meta) {
                            //                 return full.keterangan
                            //             },
                            //             className: 'text-center',
                            //             width: '25%'
                            //         },
                            //         {
                            //             render: function(data, type, full, meta) {
                            //                 return `<div>
                            //                             <button type="button" onclick="edit_menu('${full.id_menu_kuliner}')" class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                            //                             <button type="button" onclick="hapus_menu('${full.id_menu_kuliner}')" class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                            //                         </div>`
                            //             },
                            //             className: 'text-center',
                            //             width: '20%'
                            //         }
                            //     ]
                            // })

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
                                    <img src="http://localhost:8000/${element.gambar}" class="card-img-top" alt="...">
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

            function edit_kamar(id_kamar_penginapan) {
                console.log(id_kamar_penginapan)
                $('#editKamarPenginapanModal').modal('show');
                $.ajax({
                    url: 'http://localhost:8000/jenis_kamar/' + id_kamar_penginapan,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $('#id_kamar_penginapan').val(data.id_kamar_penginapan);
                        $('.penginapan_id').val(data.penginapan_id);
                        $('#edit_tipe_kamar').val(data.tipe_kamar);
                        $('#edit_kapasitas').val(data.kapasitas)
                        $('#edit_harga').val(data.harga);
                        $('#edit_keterangan_kamar_penginapan').val(data.keterangan)
                    }
                })
            }

            $('#submit_editKamar').on('click', function(e) {
                e.preventDefault();
                let data = {
                    id_kamar_penginapan: $('#id_kamar_penginapan').val(),
                    penginapan_id: $(".penginapan_id").val(),
                    tipe_kamar: $("#edit_tipe_kamar").val(),
                    kapasitas: $("#edit_kapasitas").val(),
                    harga: $("#edit_harga").val(),
                    keterangan: $("#edit_keterangan_kamar_penginapan").val(),
                };
                console.log(data)

                $.ajax({
                    url: "http://localhost:8000/jenis_kamar",
                    data: data,
                    type: "PUT",
                    dataType: "JSON",
                    success: function(results) {
                        if (results.code != 200) {
                            error(results.message);
                        } else {
                            success("Data kamar berhasil diubah");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    },
                });

            })

            function hapus_kamar(id_kamar_penginapan) {
                Swal.fire({
                    title: "Yakin ingin menghapus data kamar ?",
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
                            url: "http://localhost:8000/jenis_kamar/",
                            type: "DELETE",
                            data: {
                                id_kamar_penginapan,
                            },
                            dataType: "JSON",
                            success: function(results) {
                                if (results.code != 200) {
                                    error(results.message);
                                } else {
                                    success("Data kamar berhasil dihapus");
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
                            url: "http://localhost:8000/item/",
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
                            url: "http://localhost:8000/gambar/",
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
                    url: 'http://localhost:8000/gambar/' + id_gambar,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(results) {
                        let data = results.data;
                        $("#edit_form_gambar img").attr('src', `http://localhost:8000/${data.gambar}`)
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
                    url: "http://localhost:8000/gambar/",
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
        <script src="<?= base_url() ?>js/penginapan.js"></script>