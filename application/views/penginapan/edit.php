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
                                    <form action="" method="POST" enctype="multipart/form-data" id="form_penginapan">
                                        <div class="row justify-content-center">
                                            <input type="hidden" name="id_penginapan" id="id_penginapan">
                                            <input type="hidden" name="status" id="status">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="kategori_penginapan" class="form-label">Kategori penginapan</label>
                                                    <select class="form-select" name="kategori_penginapan" id="kategori_penginapan">
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama_penginapan" class="form-label">Nama penginapan</label>
                                                    <input type="text" class="form-control" require name="nama_penginapan" id="nama_penginapan" autocomplete="off">
                                                    <p class="text-danger nama_penginapan_error"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat_penginapan" class="form-label">Alamat penginapan</label>
                                                    <textarea class="form-control" name="alamat_penginapan" require id="alamat_penginapan" rows="4" autocomplete="off"></textarea>
                                                    <p class="text-danger alamat_penginapan_error"></p>
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

                                                <button type="submit" id="btn_editPenginapan" class="btn btn-primary float-end">Ubah</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="deskripsi_penginapan" class="form-label">Deskripsi penginapan</label>
                                                <textarea class="form-control" name="deskripsi_penginapan" require id="deskripsi_penginapan" rows="15" autocomplete="off"></textarea>
                                                <p class="text-danger deskripsi_penginapan_error"></p>
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

                if (localStorage.getItem("id_penginapan") != null) {
                    const id_penginapan = localStorage.getItem("id_penginapan")
                    $.ajax({
                        url: "http://localhost:8000/penginapan/" + id_penginapan,
                        type: "GET",
                        success: function(result) {
                            if (result.code != 200) {
                                error(result.message);
                            } else {
                                let penginapan = result.data;
                                console.log(penginapan)

                                let urlInstagram =
                                    penginapan.instagram != null ?
                                    new URL(penginapan.instagram).pathname.slice(1) :
                                    null;
                                let urlFacebook =
                                    penginapan.facebook != null ?
                                    new URL(penginapan.facebook).pathname.slice(1) :
                                    null;
                                let urlYoutube =
                                    penginapan.youtube != null ?
                                    new URL(penginapan.youtube).pathname.slice(1) :
                                    null;
                                let urlTwitter =
                                    penginapan.twitter != null ?
                                    new URL(penginapan.twitter).pathname.slice(1) :
                                    null;
                                let urlTiktok =
                                    penginapan.tiktok != null ?
                                    new URL(penginapan.tiktok).pathname.slice(1) :
                                    null;
                                let no_cs = penginapan.no_cs != null ? penginapan.no_cs.slice(3) : null;

                                $("#id_penginapan").val(penginapan.id_penginapan);
                                $("#nama_penginapan").val(penginapan.nama_penginapan);
                                $("#deskripsi_penginapan").val(penginapan.deskripsi_penginapan);
                                $("#alamat_penginapan").val(penginapan.alamat_penginapan);
                                $("#latitude").val(penginapan.latitude);
                                $("#longitude").val(penginapan.longitude);
                                $("#email").val(penginapan.email);
                                $("#no_cs").val(no_cs);
                                $("#instagram").val(urlInstagram);
                                $("#facebook").val(urlFacebook);
                                $("#twitter").val(urlTwitter);
                                $("#tiktok").val(urlTiktok);
                                $("#website").val(penginapan.website);
                                $("#youtube").val(urlYoutube);
                                $("#status").val(penginapan.status);

                                $.ajax({
                                    url: "http://localhost:8000/kategori_penginapan",
                                    type: "GET",
                                    dataType: "JSON",
                                    success: function(result) {
                                        const kategori_penginapan_id = penginapan.kategori_penginapan_id;
                                        let kategori_penginapan = result.data;
                                        kategori_penginapan.forEach((element) => {
                                            if (kategori_penginapan_id == element.id_kategori_penginapan) {
                                                $("#kategori_penginapan").append(
                                                    `<option value="${element.id_kategori_penginapan}" selected>${element.kategori}</option>`
                                                );
                                            } else {
                                                $("#kategori_penginapan").append(
                                                    `<option value="${element.id_kategori_penginapan}">${element.kategori}</option>`
                                                );
                                            }
                                        });
                                    },
                                });

                                $.ajax({
                                    url: "http://localhost:8000/pengguna/filter?role_id=2&status=1",
                                    type: "GET",
                                    dataType: "JSON",
                                    success: function(result) {
                                        const pengguna_id = penginapan.pengguna_id;
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
        <script src="<?= base_url() ?>js/penginapan.js"></script>