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
      url: "http://localhost:8000/kuliner",
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
          return full.nama_kuliner
        }
      },
      {
        render: function (data, type, full, meta) {
          var num_chart = 20;
            var length = full.deskripsi_kuliner.length;
            if (length > num_chart) {
                var link = `<a href="javascript:;" onclick="DetailJudul('${full.id}')"><span class="badge badge-info readmore_button">selengkapnya</span></a>`;
                a = full.deskripsi_kuliner.substr(0, num_chart);
                full.deskripsi_kuliner = a+' ... '+link;
            }else{
                full.deskripsi_kuliner.substr(0, num_chart);
            }
            return full.deskripsi_kuliner == null ? '-' : full.deskripsi_kuliner;
        }
      },
      {
        render: function (data, type, full, meta) {
          var num_chart = 20;
            var length = full.alamat_kuliner.length;
            if (length > num_chart) {
                var link = `<a href="javascript:;" onclick="DetailJudul('${full.id}')"><span class="badge badge-info readmore_button">selengkapnya</span></a>`;
                a = full.alamat_kuliner.substr(0, num_chart);
                full.alamat_kuliner = a+' ... '+link;
            }else{
                full.alamat_kuliner.substr(0, num_chart);
            }
            return full.alamat_kuliner == null ? '-' : full.alamat_kuliner;
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