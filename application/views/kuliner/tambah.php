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
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data" id="form_kuliner">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="kategori_kuliner" class="form-label">Kategori Kuliner</label>
                                                    <select class="form-select" name="kategori_kuliner" id="kategori_kuliner">
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama_kuliner" class="form-label">Nama kuliner</label>
                                                    <input type="text" class="form-control" require name="nama_kuliner" id="nama_kuliner" autocomplete="off">
                                                    <p class="text-danger nama_kuliner_error"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat_kuliner" class="form-label">Alamat kuliner</label>
                                                    <textarea class="form-control" name="alamat_kuliner" require id="alamat_kuliner" rows="4" autocomplete="off"></textarea>
                                                    <p class="text-danger alamat_kuliner_error"></p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="latitude" class="form-label">Latitude</label>
                                                            <input type="text" class="form-control" require name="latitude" id="latitude" autocomplete="off">
                                                            <p class="text-danger latitude_error"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="longitude" class="form-label">Longitude</label>
                                                            <input type="text" class="form-control" require name="longitude" id="longitude" autocomplete="off">
                                                            <p class="text-danger longitude_error"></p>
                                                        </div>
                                                    </div>
                                                    <a href="https://www.youtube.com/watch?v=ulnns12dr-Y" target="_blank">Panduan menentukan latitude / longitude</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="instagram" class="form-label">Instagram</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">instagram.com/</span>
                                                        <input type="text" class="form-control" name="instagram" id="instagram" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="facebook" class="form-label">Facebook</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">facebook.com/</span>
                                                        <input type="text" class="form-control" name="facebook" id="facebook" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="youtube" class="form-label">Youtube</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">youtube.com/</span>
                                                        <input type="text" class="form-control" name="youtube" id="youtube" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="twitter" class="form-label">Twitter</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">twitter.com/</span>
                                                        <input type="text" class="form-control" name="twitter" id="twitter" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tiktok" class="form-label">Tiktok</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">tiktok.com/</span>
                                                        <input type="text" class="form-control" name="tiktok" id="tiktok" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="pengguna_id" class="form-label">Akun pengguna</label>
                                                    <select class="form-select" name="pengguna_id" id="pengguna_id">
                                                    </select>
                                                </div>
                                                <label for="no_cs" class="form-label">No Telepon</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                                    <input type="text" class="form-control" name="no_cs" id="no_cs" autocomplete="off">
                                                </div>
                                                <p class="text-danger no_cs_error"></p>
                                                <div class="mb-3">
                                                    <label for="website" class="form-label">Website</label>
                                                    <input type="text" class="form-control" name="website" id="website" autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" autocomplete="off">
                                                    <p class="text-danger email_error"></p>
                                                </div>

                                                <button type="submit" id="btn_submitKuliner" class="btn btn-primary float-end">Tambah</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="deskripsi_kuliner" class="form-label">Deskripsi Kuliner</label>
                                                <textarea class="form-control" name="deskripsi_kuliner" require id="deskripsi_kuliner" rows="15" autocomplete="off"></textarea>
                                                <p class="text-danger deskripsi_kuliner_error"></p>
                                            </div>
                                        </div>
                                    </form>
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

        </div>
        <script>
            $(document).ready(function() {
                $.ajax({
                    url: "http://localhost:8000/kategori_kuliner",
                    type: "GET",
                    dataType: "JSON",
                    success: function(result) {
                        let kategori_kuliner = result.data;
                        kategori_kuliner.forEach((element) => {
                            $("#kategori_kuliner").append(
                                `<option value="${element.id_kategori_kuliner}">${element.jenis_kuliner}</option>`
                            );
                        });
                    },
                });


                $.ajax({
                    url: "http://localhost:8000/pengguna/filter?role_id=2&status=1",
                    type: "GET",
                    dataType: "JSON",
                    success: function(result) {
                        $("#pengguna_id").append(
                            `<option value="0">--Belum ada akun pengguna--</option>`
                        );
                        let pengelola = result.data;
                        pengelola.forEach((element) => {
                            $("#pengguna_id").append(
                                `<option value="${element.id_pengguna}">${element.username}</option>`
                            );
                        });
                    },
                });


            })
        </script>
        <script src="<?= base_url() ?>js/kuliner.js"></script>