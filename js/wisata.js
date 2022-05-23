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
      url: "http://localhost:8000/wisata/",
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
          return full.id_wisata
        }
      },
      {
        render: function (data, type, full, meta) {
          var num_chart = 20;
            var length = full.deskripsi_wisata.length;
            if (length > num_chart) {
                var link = `<a href="javascript:;" onclick="DetailJudul('${full.id}')"><span class="badge badge-pill readmore_button">selengkapnya</span></a>`;
                a = full.deskripsi_wisata.substr(0, num_chart);
                full.deskripsi_wisata = a+' ... '+link;
            }else{
                full.deskripsi_wisata.substr(0, num_chart);
            }
            return full.deskripsi_wisata == null ? '-' : full.deskripsi_wisata;
        }
      },
      {
        render: function (data, type, full, meta) {
          var num_chart = 20;
            var length = full.alamat_wisata.length;
            if (length > num_chart) {
                var link = `<a href="javascript:;" onclick="DetailJudul('${full.id}')"><span class="badge badge-pill readmore_button">selengkapnya</span></a>`;
                a = full.alamat_wisata.substr(0, num_chart);
                full.alamat_wisata = a+' ... '+link;
            }else{
                full.alamat_wisata.substr(0, num_chart);
            }
            return full.alamat_wisata == null ? '-' : full.alamat_wisata;
        }
      },
      {
        render: function (data, type, full, meta) {
          return `<div class="row">
                      <div class="col-md-12">
                          <button type="button" onclick="detail_wisata('${full.id_wisata}')" target="_blank" class="btn detail_button btn-sm"><i class="fa fa-info"></i></button>
                          <button onclick="edit_anggota()" type="button" class="btn edit_button btn-sm"><i class="fa fa-edit"></i></button>
                          <button onclick="hapus_anggota()" type="button" class="btn delete_button btn-sm"><i class="fa fa-trash"></i></button>
                      </div>
                  </div>`
        }
      }
    ],
  });
})

function detail_wisata(id_wisata) {
  $.ajax({
    url: 'http://localhost:8000/wisata/' + id_wisata,
    type: 'GET',
    dataType: 'JSON',
    success: function (data) {
      console.log(data)
      // let wisata = data.data
      // $.ajax({
      //   url: base_url + 'wisata/detail',
      //   data: wisata,
      //   dataType: 'JSON',
      //   type: 'POST',
      //   success: function (params) {
      //     console.log(params)
      //   }
      // })
    }
  })
}

