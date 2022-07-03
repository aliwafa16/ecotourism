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
                                        <button type="button" class="btn add_button mb-3" id="btn_addPengguna"><i class="fa fa-plus"></i>Tambah data</button>
                                    </div>
                                </div>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-link active" id="nav-semua-tab" data-toggle="tab" href="#nav-semua" role="tab" aria-controls="nav-semua" aria-selected="true">Semua</a>
                                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pengelola</a>
                                        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Wisatawan</a>
                                    </div>
                                </nav>
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-semua" role="tabpanel" aria-labelledby="nav-semua-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_semua_pengguna" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_pengelola" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="table_wisatawan" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h6 class="card-subtitle">Using the most basic table markup, here’s how
                                    <code>.table</code>-based tables look in Bootstrap. All table styles are inherited
                                    in Bootstrap 4, meaning any nested tables will be styled in the same manner as the
                                    parent.
                                </h6> -->
                                <!-- <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Table With
                                    Outside Padding</h6> -->
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
        <!-- Modal tambah -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Tambah data pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" enctype="multipart/form-data" id="form_pengguna">
                            <div class="form-group">
                                <label for="role_id">Jenis</label>
                                <select class="form-control" id="role_id" name="role_id">
                                    <option value="3">Wisatawan</option>
                                    <option value="2">Pengelola wisata</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username">Nama pengguna</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Kata sandi</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="re_password">Ulangi kata sandi</label>
                                        <input type="password" name="re_password" class="form-control" id="re_password" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="custom-file">
                                <div class="row">
                                    <label class="custom-file-label" for="customFile">Foto</label>
                                </div>
                                <input type="file" class="custom-file-input" id="customFile">
                            </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="btn_submitPengguna" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Ubah data pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" enctype="multipart/form-data" id="form_editpengguna">
                            <input type="text" id="id_pengguna">
                            <input type="text" name="edit_password" id="edit_password">
                            <div class="form-group">
                                <label for="edit_role_id">Jenis</label>
                                <select class="form-control" id="edit_role_id" name="edit_role_id">
                                    <option value="3">Wisatawan</option>
                                    <option value="2">Pengelola wisata</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edit_username">Nama pengguna</label>
                                <input type="text" name="edit_username" class="form-control" id="edit_username" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="edit_email">Email</label>
                                <input type="text" name="edit_email" class="form-control" id="edit_email" placeholder="">
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Kata sandi</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="re_password">Ulangi kata sandi</label>
                                        <input type="password" name="re_password" class="form-control" id="re_password" placeholder="">
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="custom-file">
                                <div class="row">
                                    <label class="custom-file-label" for="customFile">Foto</label>
                                </div>
                                <input type="file" class="custom-file-input" id="customFile">
                            </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="btn_submiteditPengguna" class="btn btn-primary">Ubah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="passwordModalLabel">Ubah kata sandi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" enctype="multipart/form-data" id="form_password">
                            <input type="text" id="ps_id_pengguna">
                            <div class="form-group">
                                <label for="ubahpassword">Kata sandi</label>
                                <input type="password" name="ubahpassword" class="form-control" id="ubahpassword" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="ubahre_password">Ulangi kata sandi</label>
                                <input type="password" name="ubahre_password" class="form-control" id="ubahre_password" placeholder="">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="btn_password" class="btn btn-primary">Ubah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="<?= base_url() ?>js/pengguna.js"></script>