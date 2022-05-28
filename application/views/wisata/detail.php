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
                                    <div class="col-md-8">
                                        <div class="d-inline">
                                            <h1 class="d-inline"><i class="fas fa-campground text-success"></i></h1>
                                            <h1 class="d-inline" id="nama_wisata"></h1>
                                        </div>
                                        <div class="d-inline">
                                            <h6 class="d-inline"><i class="fas fa-star text-warning"></i></h6>
                                            <h6 class="d-inline" id="rating_wisata">(9.3)</h6>
                                        </div>
                                        <p style="text-align: justify;" class="mt-3" id="deskripsi_wisata"></p>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="d-inline">
                                                    <h3 class="d-inline"><i class="fas fa-server text-success"></i></h3>
                                                    <h3 class="d-inline">Data wisata</h3>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class="fas fa-filter text-warning me-3"></i></p>
                                                    <p class="d-inline" id="kategori_wisata"></p>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class=" fas fa-map-marked-alt text-info me-3"></i></p>
                                                    <p class="d-inline" id="alamat_wisata"></p>
                                                </div>

                                                <div class="mt-2">
                                                    <p class="d-inline"><i class=" fas fa-map-pin text-danger me-3"></i></p>
                                                    <p class="d-inline" id="latitude_longitude"></p>
                                                </div>


                                            </div>
                                            <div class="col-md-7">
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
                                    <div class="col-md-4">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="mb-0 fw-bold"><i class="fas fa-calendar-alt text-success"></i> Jadwal Operasional</h3>
                                        <button type="button" class="btn add_button m-2 btn-sm" id="btn_addJadwal" onclick="tambahJadwal()"><i class="fa fa-plus"></i>Tambah data</button>

                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_jadwal" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">No</th>
                                                        <th scope="col">Hari</th>
                                                        <th scope="col">Buka</th>
                                                        <th scope="col">Tutup</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Senin - Minggu</td>
                                                        <td>08.00</td>
                                                        <td>17.00</td>
                                                        <td>
                                                            <div>
                                                                <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Senin - Minggu</td>
                                                        <td>08.00</td>
                                                        <td>17.00</td>
                                                        <td>
                                                            <div>
                                                                <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-0 fw-bold"><i class="far fa-money-bill-alt text-primary"></i> Harga tiket</h3>
                                        <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="tambahWisata()"><i class="fa fa-plus"></i>Tambah data</button>

                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_wisata" style="overflow: hidden; overflow-x:scroll; width:110%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">No</th>
                                                        <th scope="col">Tiket</th>
                                                        <th scope="col">Harga</th>
                                                        <th scope="col">Keterangan</th>
                                                        <th scope="col" style="width: 100px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tiket lokal</td>
                                                        <td>Rp. 15.000</td>
                                                        <td>Tiket untuk wisatawan lokal</td>
                                                        <td>
                                                            <div>
                                                                <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Tiket mancanegara</td>
                                                        <td>Rp. 50.000</td>
                                                        <td>Tiket untuk wisatawan mancanegara</td>
                                                        <td>
                                                            <div>
                                                                <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="mb-0 fw-bold"><i class="fas fa-landmark text-info"></i> Fasilitas</h3>
                                        <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="tambahWisata()"><i class="fa fa-plus"></i>Tambah data</button>

                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_wisata" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">No</th>
                                                        <th scope="col">Fasilitas</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Kamar mandi</td>
                                                        <td>
                                                            <div>
                                                                <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Tempat parkir</td>
                                                        <td>
                                                            <div>
                                                                <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="mb-0 fw-bold"><i class="fas fa-qrcode text-warning"></i> Item</h3>
                                        <button type="button" class="btn add_button m-2 btn-sm" id="btn_addWisata" onclick="tambahWisata()"><i class="fa fa-plus"></i>Tambah data</button>

                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_wisata" style="width:100%">
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
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Qrcode</td>
                                                        <td>Audio</td>
                                                        <td>Audio-1</td>
                                                        <td>
                                                            <div>
                                                                <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Qrcode</td>
                                                        <td>Audio</td>
                                                        <td>Audio-1</td>
                                                        <td>
                                                            <div>
                                                                <button class="btn btn-info btn-sm"><i class="fa fa-edit text-light"></i></button>
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times text-light"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
        <script>
            $(document).ready(function() {
                if (localStorage.getItem("id_wisata") != null) {
                    const id_wisata = localStorage.getItem("id_wisata")

                    $('#table_jadwal').DataTable()
                    $.ajax({
                        url: 'http://localhost:8000/wisata/' + id_wisata,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function(results) {
                            let wisata = results.data
                            let kategori = wisata.kategori_wisata
                            let urlInstagram =
                                wisata.instagram != null ?
                                new URL(wisata.instagram).pathname.slice(1) :
                                "-";
                            let urlFacebook =
                                wisata.facebook != null ?
                                new URL(wisata.facebook).pathname.slice(1) :
                                "-";
                            let urlYoutube =
                                wisata.youtube != null ?
                                new URL(wisata.youtube).pathname.slice(1) :
                                '-';
                            let urlTwitter =
                                wisata.twitter != null ?
                                new URL(wisata.twitter).pathname.slice(1) :
                                '-';
                            let urlTiktok =
                                wisata.tiktok != null ?
                                new URL(wisata.tiktok).pathname.slice(1) :
                                '-';

                            let no_cs = wisata.no_cs != null ? wisata.no_cs : '-';
                            let website = wisata.website != null ? wisata.website : '-'

                            $('#nama_wisata').text(wisata.nama_wisata);
                            $('#deskripsi_wisata').text(wisata.deskripsi_wisata);
                            $('#alamat_wisata').text(wisata.alamat_wisata)
                            $('#latitude_longitude').text(wisata.latitude + ', ' + wisata.longitude)
                            $('#instagram').text(urlInstagram);
                            $('#facebook').text(urlFacebook);
                            $('#twitter').text(urlTwitter);
                            $('#youtube').text(urlYoutube);
                            $('#tiktok').text(urlTiktok);
                            $('#website').text(website)
                            $('#email').text(wisata.email);
                            $('#no_cs').text(no_cs)
                            $('#kategori_wisata').text(kategori.kategori)

                        }
                    })
                } else {
                    location.href = base_url
                }
            })
        </script>