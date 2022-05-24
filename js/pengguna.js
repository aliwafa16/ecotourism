$(document).ready(function () {
  semua_pengguna();
  pengelola_wisata();
  wisatawan();
  registrasi();
})

function semua_pengguna() {
    var table = $("#table_semua_pengguna");
    grid_all = table.DataTable({
    // scrollX: true,
    // scrollCollapse: true,
    aaSorting: [],
    initComplete: function (settings, json) {},
    retrieve: true,
    processing: true,
    ajax: {
      type: "GET",
      url: "http://localhost:8000/pengguna/find?status=1",
      data: function (d) {
        no = 0;
      },
      dataSrc: "data",
    },
    columns: [
      {
        render: function (data, type, full, meta) {
          no += 1;

        return no;
      },
          className: "text-center"
      },
      {
        render: function (data, type, full, meta) {
          return full.username
        }
      },
      {
        render: function (data, type, full, meta) {
          return full.email
        }
      },
      {
          render: function (data, type, full, meta) {
              return full.role.role
        }
      },
      {
        render: function (data, type, full, meta) {
          return `<div class="row">
                    <div class="col-md-12">
                        <button type="button" onclick="detail_wisata('${full.id_kuliner}')" target="_blank" class="btn detail_button btn-sm"><i class="fa fa-info"></i></button>
                        <button onclick="edit_anggota()" type="button" class="btn edit_button btn-sm"><i class="fa fa-edit"></i></button>
                        <button onclick="hapus_anggota()" type="button" class="btn delete_button btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                </div>`
        }
      }
    ],
  });
}

function pengelola_wisata() {
      var table = $("#table_pengelola");
    grid_pengelola = table.DataTable({
    // scrollX: true,
    // scrollCollapse: true,
    aaSorting: [],
    initComplete: function (settings, json) {},
    retrieve: true,
    processing: true,
    ajax: {
      type: "GET",
      url: "http://localhost:8000/pengguna/filter?role_id=2&status=1",
      data: function (d) {
        no_pengelola = 0;
      },
      dataSrc: "data",
    },
    columns: [
      {
        render: function (data, type, full, meta) {
          no_pengelola += 1;

        return no_pengelola;
      },
          className: "text-center"
      },
      {
        render: function (data, type, full, meta) {
          return full.username
        }
      },
      {
        render: function (data, type, full, meta) {
          return full.email
        }
      },
      {
          render: function (data, type, full, meta) {
              return full.role.role
        }
      },
      {
        render: function (data, type, full, meta) {
          return `<div class="row">
                    <div class="col-md-12">
                        <button type="button" onclick="detail_wisata('${full.id_kuliner}')" target="_blank" class="btn detail_button btn-sm"><i class="fa fa-info"></i></button>
                        <button onclick="edit_anggota()" type="button" class="btn edit_button btn-sm"><i class="fa fa-edit"></i></button>
                        <button onclick="hapus_anggota()" type="button" class="btn delete_button btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                </div>`
        }
      }
    ],
  });
}

function wisatawan() {
  var table = $("#table_wisatawan");
    grid_wisatawan = table.DataTable({
    // scrollX: true,
    // scrollCollapse: true,
    aaSorting: [],
    initComplete: function (settings, json) {},
    retrieve: true,
    processing: true,
    ajax: {
      type: "GET",
      url: "http://localhost:8000/pengguna/filter?role_id=3&status=1",
      data: function (d) {
        no_wisatawan = 0;
      },
      dataSrc: "data",
    },
    columns: [
      {
        render: function (data, type, full, meta) {
          no_wisatawan += 1;

        return no_wisatawan;
      },
          className: "text-center"
      },
      {
        render: function (data, type, full, meta) {
          return full.username
        }
      },
      {
        render: function (data, type, full, meta) {
          return full.email
        }
      },
      {
          render: function (data, type, full, meta) {
              return full.role.role
        }
      },
      {
        render: function (data, type, full, meta) {
          return `<div class="row">
                    <div class="col-md-12">
                        <button type="button" onclick="detail_wisata('${full.id_kuliner}')" target="_blank" class="btn detail_button btn-sm"><i class="fa fa-info"></i></button>
                        <button onclick="edit_anggota()" type="button" class="btn edit_button btn-sm"><i class="fa fa-edit"></i></button>
                        <button onclick="hapus_anggota()" type="button" class="btn delete_button btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                </div>`
        }
      }
    ],
  });
}

function registrasi() {
  var table = $("#table_registrasi");
    grid_registrasi = table.DataTable({
    // scrollX: true,
    // scrollCollapse: true,
    aaSorting: [],
    initComplete: function (settings, json) {},
    retrieve: true,
    processing: true,
    ajax: {
      type: "GET",
      url: "http://localhost:8000/pengguna/filter?status=0",
      data: function (d) {
        no_registrasi = 0;
      },
      dataSrc: "data",
    },
    columns: [
      {
        render: function (data, type, full, meta) {
          no_registrasi += 1;

        return no_registrasi;
      },
          className: "text-center"
      },
      {
        render: function (data, type, full, meta) {
          return full.username
        }
      },
      {
        render: function (data, type, full, meta) {
          return full.email
        }
      },
      {
          render: function (data, type, full, meta) {
              return full.role.role
        }
      },
      {
        render: function (data, type, full, meta) {
          return `<div class="row">
                    <div class="col-md-12">
                        <button onclick="accept_registration(${full.id_pengguna})" type="button" class="btn accept_button"><i class="fa fa-check"></i></button>
                        <button onclick="hapus_anggota()" type="button" class="btn delete_button"><i class="fa fa-times"></i></button>
                    </div>
                </div>`
        }
      }
    ],
  });
}


function accept_registration(id) {
  Swal.fire({
  title: 'Aktivasi akun pengguna ?',
  text: "Akun yang sudah diaktivasi, akan bisa melakukan login",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aktivasi',
  cancelButtonText:'Batal'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
      url: 'http://localhost:8000/auth/activation/' + id,
      type: 'POST',
      dataType: 'JSON',
      success: function (result) {
        if (result.code != 200) {
          error(result.message)
        } else {
          success(result.message)
          grid_registrasi.ajax.reload();
          grid_all.ajax.reload();
          grid_pengelola.ajax.reload();
          grid_wisatawan.ajax.reload()
        }
      }
    })
  }
})
}

function success(params) {
    Swal.fire({
        icon: 'success',
        title: ''+params,
        showConfirmButton: false,
        timer: 1500,
    })
}


function error(params) {
    Swal.fire({
    icon: 'error',
      title: 'Oops...',
      text: ''+params,
})
}