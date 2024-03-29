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
                                            <input type="hidden" name="id_kuliner" id="id_kuliner">
                                            <input type="hidden" name="status" id="status">
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

                                                <button type="submit" id="btn_editKuliner" class="btn btn-primary float-end">Ubah</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="deskripsi_kuliner" class="form-label">Deskripsi Wisata</label>
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

                if (localStorage.getItem("id_kuliner") != null) {
                    const id_kuliner = localStorage.getItem("id_kuliner")
                    $.ajax({
                        url: API + "kuliner/" + id_kuliner,
                        type: "GET",
                        success: function(result) {
                            if (result.code != 200) {
                                error(result.message);
                            } else {
                                let kuliner = result.data;
                                console.log(kuliner)

                                let urlInstagram =
                                    kuliner.instagram != null ?
                                    new URL(kuliner.instagram).pathname.slice(1) :
                                    null;
                                let urlFacebook =
                                    kuliner.facebook != null ?
                                    new URL(kuliner.facebook).pathname.slice(1) :
                                    null;
                                let urlYoutube =
                                    kuliner.youtube != null ?
                                    new URL(kuliner.youtube).pathname.slice(1) :
                                    null;
                                let urlTwitter =
                                    kuliner.twitter != null ?
                                    new URL(kuliner.twitter).pathname.slice(1) :
                                    null;
                                let urlTiktok =
                                    kuliner.tiktok != null ?
                                    new URL(kuliner.tiktok).pathname.slice(1) :
                                    null;
                                let no_cs = kuliner.no_cs != null ? kuliner.no_cs.slice(3) : null;

                                $("#id_kuliner").val(kuliner.id_kuliner);
                                $("#nama_kuliner").val(kuliner.nama_kuliner);
                                $("#deskripsi_kuliner").val(kuliner.deskripsi_kuliner);
                                $("#alamat_kuliner").val(kuliner.alamat_kuliner);
                                $("#latitude").val(kuliner.latitude);
                                $("#longitude").val(kuliner.longitude);
                                $("#email").val(kuliner.email);
                                $("#no_cs").val(no_cs);
                                $("#instagram").val(urlInstagram);
                                $("#facebook").val(urlFacebook);
                                $("#twitter").val(urlTwitter);
                                $("#tiktok").val(urlTiktok);
                                $("#website").val(kuliner.website);
                                $("#youtube").val(urlYoutube);
                                $("#status").val(kuliner.status);

                                $.ajax({
                                    url: API + "kategori_kuliner",
                                    type: "GET",
                                    dataType: "JSON",
                                    success: function(result) {
                                        const kategori_kuliner_id = kuliner.kategori_kuliner_id;
                                        let kategori_kuliner = result.data;
                                        kategori_kuliner.forEach((element) => {
                                            if (kategori_kuliner_id == element.id_kategori_kuliner) {
                                                $("#kategori_kuliner").append(
                                                    `<option value="${element.id_kategori_kuliner}" selected>${element.jenis_kuliner}</option>`
                                                );
                                            } else {
                                                $("#kategori_kuliner").append(
                                                    `<option value="${element.id_kategori_kuliner}">${element.jenis_kuliner}</option>`
                                                );
                                            }
                                        });
                                    },
                                });

                                $.ajax({
                                    url: API + "pengguna/filter?role_id=2&status=1",
                                    type: "GET",
                                    dataType: "JSON",
                                    success: function(result) {
                                        const pengguna_id = kuliner.pengguna_id;
                                        let pengelola = result.data;

                                        if (pengguna_id == 0) {
                                            $("#pengguna_id").append(
                                                `<option value="0" selected>--Belum ada akun pengguna--</option>`
                                            );
                                        }
                                        pengelola.forEach((element) => {
                                            if (pengguna_id == element.id_pengguna) {
                                                $("#pengguna_id").append(
                                                    `<option value="${element.id_pengguna}" selected>${element.username}</option>`
                                                );
                                            } else {
                                                $("#pengguna_id").append(
                                                    `<option value="${element.id_pengguna}">${element.username}</option>`
                                                );
                                            }
                                        });
                                    },
                                });
                            }
                        },
                    });
                } else {
                    location.href = base_url
                }

            })
        </script>
        <script src="<?= base_url() ?>js/kuliner.js"></script>