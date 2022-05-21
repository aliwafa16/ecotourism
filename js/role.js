$(document).ready(function () {
      var table = $("#table_wisata");
  grid_all = table.DataTable({
    // scrollX: true,
    // scrollCollapse: true,
    aaSorting: [],
    initComplete: function (settings, json) {},
    retrieve: true,
    processing: true,
    ajax: {
      type: "GET",
      url: "http://localhost:8000/role/",
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
          return full.role
        }
      },
      {
        render: function (data, type, full, meta) {
          return `<div class="row">
                      <div class="col-md-12">
                          <a href="${base_url}Anggota/detailAnggota/${full.id_anggota}" target="_blank" type="button" class="btn btn-secondary btn-sm"><i class="fa fa-info"></i></a>
                          <button onclick="edit_anggota(${full.id_anggota})" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                          <button onclick="hapus_anggota(${full.id_anggota})" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                      </div>
                  </div>`
        }
      }
    ],
  });
})