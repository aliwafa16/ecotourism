    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Dashboard</h1>
                </div>
                <div class="col-6">

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

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-primary text-white">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-campground fa-xl"></i>
                                </div>
                                <div class="col-7">
                                    <h3 class="text-white">Wisata</h3>
                                </div>
                                <div class="col-3">
                                    <h2 class="text-white count-wisata">10</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-success text-white">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-bed fa-xl"></i>
                                </div>
                                <div class="col-7 d-flex">
                                    <h3 class="text-white">Penginapan</h3>
                                </div>
                                <div class="col-3">
                                    <h2 class="text-white count-penginapan">10</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-info text-white">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-utensils fa-xl"></i>
                                </div>
                                <div class="col-7">
                                    <h3 class="text-white">Kuliner</h3>
                                </div>
                                <div class="col-3">
                                    <h2 class="text-white count-kuliner">10</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-secondary text-white">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-store fa-xl"></i>
                                </div>
                                <div class="col-7">
                                    <h3 class="text-white">Oleh-oleh</h3>
                                </div>
                                <div class="col-3">
                                    <h2 class="text-white count-oleh">10</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Rating wisata</h4>
                                    <h6 class="card-subtitle"></h6>
                                </div>
                                <div class="ms-auto d-flex no-block align-items-center">
                                </div>
                            </div>
                            <div class="amp-pxl mt-4" id="chartwisata" style="height: 350px;">
                                <div class="chartist-tooltip"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Rating kuliner</h4>
                                    <!-- <h6 class="card-subtitle">Ample admin Vs Pixel admin</h6> -->
                                </div>
                                <div class="ms-auto d-flex no-block align-items-center">
                                    <!-- <ul class="list-inline dl d-flex align-items-center m-r-15 m-b-0">
                                                <li class="list-inline-item d-flex align-items-center text-info"><i class="fa fa-circle font-10 me-1"></i> Ample
                                                </li>
                                                <li class="list-inline-item d-flex align-items-center text-primary"><i class="fa fa-circle font-10 me-1"></i> Pixel
                                                </li>
                                            </ul> -->
                                </div>
                            </div>
                            <div class="amp-pxl mt-4" id="chartkuliner" style="height: 350px;">
                                <div class="chartist-tooltip"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Weekly Stats</h4>
                                    <h6 class="card-subtitle">Average sales</h6>
                                    <div class="mt-5 pb-3 d-flex align-items-center">
                                        <span class="btn btn-primary btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-cart-outline fs-4"></i>
                                        </span>
                                        <div class="ms-3">
                                            <h5 class="mb-0 fw-bold">Top Sales</h5>
                                            <span class="text-muted fs-6">Johnathan Doe</span>
                                        </div>
                                        <div class="ms-auto">
                                            <span class="badge bg-light text-muted">+68%</span>
                                        </div>
                                    </div>
                                    <div class="py-3 d-flex align-items-center">
                                        <span class="btn btn-warning btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-star-circle fs-4"></i>
                                        </span>
                                        <div class="ms-3">
                                            <h5 class="mb-0 fw-bold">Best Seller</h5>
                                            <span class="text-muted fs-6">MaterialPro Admin</span>
                                        </div>
                                        <div class="ms-auto">
                                            <span class="badge bg-light text-muted">+68%</span>
                                        </div>
                                    </div>
                                    <div class="py-3 d-flex align-items-center">
                                        <span class="btn btn-success btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-comment-multiple-outline text-white fs-4"></i>
                                        </span>
                                        <div class="ms-3">
                                            <h5 class="mb-0 fw-bold">Most Commented</h5>
                                            <span class="text-muted fs-6">Ample Admin</span>
                                        </div>
                                        <div class="ms-auto">
                                            <span class="badge bg-light text-muted">+68%</span>
                                        </div>
                                    </div>
                                    <div class="py-3 d-flex align-items-center">
                                        <span class="btn btn-info btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-diamond fs-4 text-white"></i>
                                        </span>
                                        <div class="ms-3">
                                            <h5 class="mb-0 fw-bold">Top Budgets</h5>
                                            <span class="text-muted fs-6">Sunil Joshi</span>
                                        </div>
                                        <div class="ms-auto">
                                            <span class="badge bg-light text-muted">+15%</span>
                                        </div>
                                    </div>

                                    <div class="pt-3 d-flex align-items-center">
                                        <span class="btn btn-danger btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-content-duplicate fs-4 text-white"></i>
                                        </span>
                                        <div class="ms-3">
                                            <h5 class="mb-0 fw-bold">Best Designer</h5>
                                            <span class="text-muted fs-6">Nirav Joshi</span>
                                        </div>
                                        <div class="ms-auto">
                                            <span class="badge bg-light text-muted">+90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Rating penginapan</h4>
                                    <!-- <h6 class="card-subtitle">Rating wisata</h6> -->
                                </div>
                                <div class="ms-auto d-flex no-block align-items-center">
                                    <ul class="list-inline dl d-flex align-items-center m-r-15 m-b-0">
                                        <!-- <li class="list-inline-item d-flex align-items-center text-info"><i class="fa fa-circle font-10 me-1"></i> Ample
                                                </li>
                                                <li class="list-inline-item d-flex align-items-center text-primary"><i class="fa fa-circle font-10 me-1"></i> Pixel
                                                </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="amp-pxl mt-4" id="chartpenginapan" style="height: 350px;">
                                <div class="chartist-tooltip"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Rating oleh-oleh</h4>
                                    <!-- <h6 class="card-subtitle">Rating wisata</h6> -->
                                </div>
                                <div class="ms-auto d-flex no-block align-items-center">
                                    <ul class="list-inline dl d-flex align-items-center m-r-15 m-b-0">
                                        <!-- <li class="list-inline-item d-flex align-items-center text-info"><i class="fa fa-circle font-10 me-1"></i> Ample
                                                </li>
                                                <li class="list-inline-item d-flex align-items-center text-primary"><i class="fa fa-circle font-10 me-1"></i> Pixel
                                                </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="amp-pxl mt-4" id="chartoleholeh" style="height: 350px;">
                                <div class="chartist-tooltip"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
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

    <script src="<?= base_url() ?>js/dashboard.js"></script>