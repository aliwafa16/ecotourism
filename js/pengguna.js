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
      url: "http://localhost:8000/pengguna",
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
})