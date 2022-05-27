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
                        <button type="button" class="btn add_button mb-3" id="btn_addWisata" onclick="tambahWisata()"><i class="fa fa-plus"></i>Tambah data</button>
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
                      <table class="table table-hover" id="table_wisata" style="width:100%">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Wisata</th>
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

        <!-- Modal detail deskripsi -->
        <div class="modal fade" id="deskripsiModal" tabindex="-1" aria-labelledby="deskripsiModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deskripsiModalLabel">Deskripsi wisata</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p id="deskripsi"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal tambah wisata -->
        <div class="modal fade" id="tambahWisataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahWisataModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahWisataModalLabel">Tambah Wisata</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" id="form_wisata">
                  <div class="row">
                    <input type="text" name="id_wisata" id="id_wisata">
                    <input type="text" name="status" id="status">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="kategori_wisata" class="form-label">Kategori wisata</label>
                        <select class="form-select" name="kategori_wisata" id="kategori_wisata">
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="nama_wisata" class="form-label">Nama wisata</label>
                        <input type="text" class="form-control" require name="nama_wisata" id="nama_wisata" autocomplete="off">
                        <p class="text-danger nama_wisata_error"></p>
                      </div>
                      <div class="mb-3">
                        <label for="deskripsi_wisata" class="form-label">Deskripsi Wisata</label>
                        <textarea class="form-control" name="deskripsi_wisata" require id="deskripsi_wisata" rows="4" autocomplete="off"></textarea>
                        <p class="text-danger deskripsi_wisata_error"></p>
                      </div>
                      <div class="mb-3">
                        <label for="alamat_wisata" class="form-label">Alamat wisata</label>
                        <textarea class="form-control" name="alamat_wisata" require id="alamat_wisata" rows="3" autocomplete="off"></textarea>
                        <p class="text-danger alamat_wisata_error"></p>
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
                      </div>
                      <div class="mb-3">
                        <label for="no_cs" class="form-label">No Telepon</label>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">+62</span>
                          <input type="text" class="form-control" name="no_cs" id="no_cs" autocomplete="off">
                        </div>
                        <p class="text-danger no_cs_error"></p>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" autocomplete="off">
                        <p class="text-danger email_error"></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control" name="website" id="website" autocomplete="off">
                      </div>
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
                      <div class="mb-3">
                        <label for="pengguna_id" class="form-label">Akun pengguna</label>
                        <select class="form-select" name="pengguna_id" id="pengguna_id">
                        </select>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" id="btn_cancelWisata" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" id="btn_submitWisata" class="btn btn-primary">Tambah</button>
              </div>
              </form>
            </div>
          </div>
        </div>


        </div>
        <script src="<?= base_url() ?>js/wisata.js"></script>