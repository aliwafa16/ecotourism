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
      url: "http://localhost:8000/wisata/find?kategori=2&kategori=3",
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
          return full.nama_wisata
        }
      },
      {
        render: function (data, type, full, meta) {
          var num_chart = 20;
            var length = full.deskripsi.length;
            if (length > num_chart) {
                var link = `<a href="javascript:;" onclick="DetailJudul('${full.id}')"><span class="badge badge-info"> Read More...</span></a>`;
                a = full.deskripsi.substr(0, num_chart);
                full.deskripsi = a+' ... '+link;
            }else{
                full.deskripsi.substr(0, num_chart);
            }
            return full.deskripsi == null ? '-' : full.deskripsi;
        }
      },
      {
        render: function (data, type, full, meta) {
          var num_chart = 20;
            var length = full.alamat.length;
            if (length > num_chart) {
                var link = `<a href="javascript:;" onclick="DetailJudul('${full.id}')"><span class="badge badge-info"> Read More...</span></a>`;
                a = full.alamat.substr(0, num_chart);
                full.alamat = a+' ... '+link;
            }else{
                full.alamat.substr(0, num_chart);
            }
            return full.alamat == null ? '-' : full.alamat;
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