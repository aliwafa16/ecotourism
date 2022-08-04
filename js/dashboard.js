// $(document).ready(function () {
//     if (role_id == 2) {
//         getFasilitas(id_wisata)
//         getGambar(id_wisata)
//     }
// })

// function getFasilitas(id_wisata) {
//     $.ajax({
//         url: 'http://localhost:8000/fasilitas/find?id_wisata='+id_wisata,
//         type: 'GET',
//         dataType: 'JSON',
//         success: function (data) {
//             $('#count_fasilitas').text(data.data)
//         }
//     })
// }

// function getGambar(id_wisata) {
//     $.ajax({
//         url: 'http://localhost:8000/gambar/find?id_wisata=' + id_wisata,
//         type: 'GET',
//         dataType: 'JSON',
//         success: function (data) {
//             $('#count_gambar').text(data.data.length)
//         }
//     })
// }

$(document).ready(function () {
	$.ajax({
		url: API + "pariwisata",
		method: "GET",
		dataType: "JSON",
		success: function (results) {
			let pariwsata = results.data;

			const wisata = pariwsata.filter((Element) => {
				if (Element.kategori_pariwisata_id == 35) {
					return Element;
				}
			});

			const kuliner = pariwsata.filter((Element) => {
				if (Element.kategori_pariwisata_id == 36) {
					return Element;
				}
			});

			const penginapan = pariwsata.filter((Element) => {
				if (Element.kategori_pariwisata_id == 38) {
					return Element;
				}
			});

			const oleh_oleh = pariwsata.filter((Element) => {
				if (Element.kategori_pariwisata_id == 39) {
					return Element;
				}
			});

            $('.count-wisata').text(wisata.length)
            $('.count-kuliner').text(kuliner.length)
            $('.count-penginapan').text(penginapan.length)
            $('.count-oleh').text(oleh_oleh.length)
		},
	});
});