$(document).ready(function () {
    if (id_role == 2) {
        getFasilitas(id_wisata)
        getGambar(id_wisata)
    }
})

function getFasilitas(id_wisata) {
    $.ajax({
        url: 'http://localhost:8000/fasilitas/find?id_wisata='+id_wisata,
        type: 'GET',
        dataType: 'JSON',
        success: function (data) {
            $('#count_fasilitas').text(data.data.length)
        }
    })
}

function getGambar(id_wisata) {
    $.ajax({
        url: 'http://localhost:8000/gambar/find?id_wisata=' + id_wisata,
        type: 'GET',
        dataType: 'JSON',
        success: function (data) {
            $('#count_gambar').text(data.data.length)
        }
    })
}