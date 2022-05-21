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
      url: "http://localhost:8000/wisata/find?kategori=1",
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
          return full.id
        }
      },
      {
        render: function (data, type, full, meta) {
          var num_chart = 20;
            var length = full.deskripsi.length;
            if (length > num_chart) {
                var link = `<a href="javascript:;" onclick="DetailJudul('${full.id}')"><span class="badge badge-pill readmore_button">selengkapnya</span></a>`;
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
                var link = `<a href="javascript:;" onclick="DetailJudul('${full.id}')"><span class="badge badge-pill readmore_button">selengkapnya</span></a>`;
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
                          <button type="button" onclick="detail_wisata('${full.id}')" target="_blank" class="btn detail_button btn-sm"><i class="fa fa-info"></i></button>
                          <button onclick="edit_anggota()" type="button" class="btn edit_button btn-sm"><i class="fa fa-edit"></i></button>
                          <button onclick="hapus_anggota()" type="button" class="btn delete_button btn-sm"><i class="fa fa-trash"></i></button>
                      </div>
                  </div>`
        }
      }
    ],
  });
})

function detail_wisata(id) {
  $.ajax({
    url: 'http://localhost:8000/wisata/' + id,
    type: 'GET',
    dataType: 'JSON',
    success: function (data) {
      let wisata = data.data
      $.ajax({
        url: base_url + 'wisata/detail',
        data: wisata,
        dataType: 'JSON',
        type: 'POST',
        success: function (params) {
          console.log(params)
        }
      })
    }
  })
}

