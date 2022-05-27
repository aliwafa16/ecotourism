$(document).ready(function () {
	var table = $("#table_wisata");
	grid_wisata = table.DataTable({
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
				className: "text-center",
				width: "1%",
			},
			{
				render: function (data, type, full, meta) {
					return full.nama_wisata;
				},
				width: "10%",
			},
			{
				render: function (data, type, full, meta) {
					var num_chart = 120;
					var length = full.deskripsi_wisata.length;
					if (length > num_chart) {
						var link = `<a href="javascript:;" onclick="deskripsi('${full.deskripsi_wisata}')"><span class="badge badge-pill readmore_button">selengkapnya</span></a>`;
						a = full.deskripsi_wisata.substr(0, num_chart);
						full.deskripsi_wisata = a + " ... " + link;
					} else {
						full.deskripsi_wisata.substr(0, num_chart);
					}
					return full.deskripsi_wisata == null ? "-" : full.deskripsi_wisata;
				},
				width: "44%",
			},
			{
				render: function (data, type, full, meta) {
					return full.alamat_wisata;
				},
				width: "35%",
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="row">
                      <div class="col-md-12">
                          <button type="button" onclick="detail_wisata('${full.id_wisata}')" target="_blank" class="btn detail_button btn-sm"><i class="fa fa-info"></i></button>
                          <button onclick="edit_wisata('${full.id_wisata}')" type="button" class="btn edit_button btn-sm"><i class="fa fa-edit"></i></button>
                          <button onclick="hapus_wisata('${full.id_wisata}')" type="button" class="btn delete_button btn-sm"><i class="fa fa-trash"></i></button>
                      </div>
                  </div>`;
				},
				width: "10%",
				className: "text-center",
			},
		],
	});
});

function detail_wisata(id_wisata) {
	$.ajax({
		url: "http://localhost:8000/wisata/" + id_wisata,
		type: "GET",
		dataType: "JSON",
		success: function (data) {
			console.log(data);
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
		},
	});
}

function tambahWisata() {
	tipe = "add";
	$("#kategori_wisata").html("");
	$("#pengguna_id").html("");
	$("#form_wisata")[0].reset();

	$("#tambahWisataModal").modal("show");

	$.ajax({
		url: "http://localhost:8000/kategori_wisata",
		type: "GET",
		dataType: "JSON",
		success: function (result) {
			let kategori_wisata = result.data;
			console.log(kategori_wisata);

			kategori_wisata.forEach((element) => {
				$("#kategori_wisata").append(
					`<option value="${element.id_kategori_wisata}">${element.kategori}</option>`
				);
			});
		},
	});

	$.ajax({
		url: "http://localhost:8000/pengguna/filter?role_id=2&status=1&verifikasi=1",
		type: "GET",
		dataType: "JSON",
		success: function (result) {
			$("#pengguna_id").append(
				`<option value="0">--Belum ada akun pengguna--</option>`
			);
			let pengelola = result.data;
			pengelola.forEach((element) => {
				$("#pengguna_id").append(
					`<option value="${element.id_pengguna}">${element.username}</option>`
				);
			});
		},
	});
}

$("#btn_submitWisata").on("click", function (e) {
	$("#form_wisata").validate({
		rules: {
			nama_wisata: {
				required: true,
			},
			deskripsi_wisata: {
				required: true,
			},
			alamat_wisata: {
				required: true,
			},
			latitude: {
				required: true,
				number: true,
			},
			longitude: {
				required: true,
			},
			email: {
				email: true,
			},
			no_cs: {
				minlength: 10,
				number: true,
			},
		},
		messages: {
			nama_wisata: {
				required: "Nama wisata harus diisi !",
			},
			deskripsi_wisata: {
				required: "Deskripsi wisata harus diisi !",
			},
			alamat_wisata: {
				required: "Alamat wisata harus diisi !",
			},
			latitude: {
				required: "Latitude wisata harus diisi !",
			},
			longitude: {
				required: "Longitude wisata harus diisi !",
			},
			email: {
				email: "Format email salah !",
			},
			no_cs: {
				minlength: "Nomor telepon minimal 10 karakter !",
				number: "Format nomor telepon salah !",
			},
		},
		submitHandler: function (form) {
			submitIsClick();
		},
	});
});

function submitIsClick() {
	let email = $("#email").val();
	let no_cs = $("#no_cs").val();
	let instagram = $("#instagram").val();
	let facebook = $("#facebook").val();
	let twitter = $("#twitter").val();
	let tiktok = $("#tiktok").val();
	let website = $("#website").val();
	let youtube = $("#youtube").val();
	let data = {
		kategori_pariwisata_id: 35,
		kategori_wisata_id: $("#kategori_wisata").val(),
		nama_wisata: $("#nama_wisata").val(),
		deskripsi_wisata: $("#deskripsi_wisata").val(),
		alamat_wisata: $("#alamat_wisata").val(),
		latitude: $("#latitude").val(),
		longitude: $("#longitude").val(),
		pengguna_id: $("#pengguna_id").val(),
	};
	data.email = email == "" ? null : $("#email").val();
	data.no_cs = no_cs == "" ? null : "+62" + $("#no_cs").val();
	data.instagram =
		instagram == ""
			? null
			: "https://www.instagram.com/" + $("#instagram").val();
	data.facebook =
		facebook == "" ? null : "https://web.facebook.com/" + $("#facebook").val();
	data.twitter =
		twitter == "" ? null : "https://twitter.com/" + $("#twitter").val();
	data.tiktok =
		tiktok == "" ? null : "https://www.tiktok.com/" + $("#tiktok").val();
	data.website = website == "" ? null : $("#website").val();
	data.youtube =
		youtube == "" ? null : "https://www.youtube.com/" + $("#youtube").val();
	if (tipe == "add") {
		data.status = role_id == 1 ? 1 : 0;
		$.ajax({
			url: "http://localhost:8000/wisata/",
			data: data,
			type: "POST",
			dataType: "JSON",
			success: function (result) {
				if (result.code != 200) {
					error(result.message);
				} else {
					success("Data wisata berhasil ditambahkan");
					grid_wisata.ajax.reload();
					$("#tambahWisataModal").modal("hide");
				}
			},
		});
	} else {
		data.status = $("#status").val();
		data.id_wisata = $("#id_wisata").val();
		$.ajax({
			url: "http://localhost:8000/wisata/",
			data: data,
			type: "PUT",
			dataType: "JSON",
			success: function (result) {
				if (result.code != 200) {
					error(result.message);
				} else {
					success("Data wisata berhasil diubah");
					grid_wisata.ajax.reload();
					$("#tambahWisataModal").modal("hide");
				}
			},
		});
	}
}

function edit_wisata(id) {
	tipe = "edit";
	$("#tambahWisataModal").modal("show");
	$("#kategori_wisata").html("");
	$("#pengguna_id").html("");

	$.ajax({
		url: "http://localhost:8000/wisata/" + id,
		type: "GET",
		success: function (result) {
			if (result.code != 200) {
				error(result.message);
			} else {
				let wisata = result.data;

				let urlInstagram =
					wisata.instagram != null
						? new URL(wisata.instagram).pathname.slice(1)
						: null;
				let urlFacebook =
					wisata.facebook != null
						? new URL(wisata.facebook).pathname.slice(1)
						: null;
				let urlYoutube =
					wisata.youtube != null
						? new URL(wisata.youtube).pathname.slice(1)
						: null;
				let urlTwitter =
					wisata.twitter != null
						? new URL(wisata.twitter).pathname.slice(1)
						: null;
				let urlTiktok =
					wisata.tiktok != null
						? new URL(wisata.tiktok).pathname.slice(1)
						: null;
				let no_cs = wisata.no_cs != null ? wisata.no_cs.slice(3) : null;

				$("#id_wisata").val(wisata.id_wisata);
				$("#nama_wisata").val(wisata.nama_wisata);
				$("#deskripsi_wisata").val(wisata.deskripsi_wisata);
				$("#alamat_wisata").val(wisata.alamat_wisata);
				$("#latitude").val(wisata.latitude);
				$("#longitude").val(wisata.longitude);
				$("#email").val(wisata.email);
				$("#no_cs").val(no_cs);
				$("#instagram").val(urlInstagram);
				$("#facebook").val(urlFacebook);
				$("#twitter").val(urlTwitter);
				$("#tiktok").val(urlTiktok);
				$("#website").val(wisata.website);
				$("#youtube").val(urlYoutube);
				$("#status").val(wisata.status);

				$.ajax({
					url: "http://localhost:8000/kategori_wisata",
					type: "GET",
					dataType: "JSON",
					success: function (result) {
						const kategori_wisata_id = wisata.kategori_wisata_id;
						let kategori_wisata = result.data;
						kategori_wisata.forEach((element) => {
							if (kategori_wisata_id == element.id_kategori_wisata) {
								$("#kategori_wisata").append(
									`<option value="${element.id_kategori_wisata}" selected>${element.kategori}</option>`
								);
							} else {
								$("#kategori_wisata").append(
									`<option value="${element.id_kategori_wisata}">${element.kategori}</option>`
								);
							}
						});
					},
				});

				$.ajax({
					url: "http://localhost:8000/pengguna/filter?role_id=2&status=1&verifikasi=1",
					type: "GET",
					dataType: "JSON",
					success: function (result) {
						const pengguna_id = wisata.pengguna_id;
						let pengelola = result.data;

						if (pengguna_id == 0) {
							$("#pengguna_id").append(
								`<option value="0" selected>--Belum ada akun pengguna--</option>`
							);
						}
						pengelola.forEach((element) => {
							if (pengguna_id == element.id_pengguna) {
								$("#pengguna_id").append(
									`<option value="${element.id_pengguna}" selected>${element.username}</option>`
								);
							} else {
								$("#pengguna_id").append(
									`<option value="${element.id_pengguna}">${element.username}</option>`
								);
							}
						});
					},
				});
			}
		},
	});
}

// $("#btn_editWisata").on("click", function (e) {
// 	$("#form_wisata").validate({
// 		rules: {
// 			nama_wisata: {
// 				required: true,
// 			},
// 			deskripsi_wisata: {
// 				required: true,
// 			},
// 			alamat_wisata: {
// 				required: true,
// 			},
// 			latitude: {
// 				required: true,
// 				number: true,
// 			},
// 			longitude: {
// 				required: true,
// 			},
// 			email: {
// 				email: true,
// 			},
// 			no_cs: {
// 				minlength: 11,
// 				number: true,
// 			},
// 		},
// 		messages: {
// 			nama_wisata: {
// 				required: "Nama wisata harus diisi !",
// 			},
// 			deskripsi_wisata: {
// 				required: "Deskripsi wisata harus diisi !",
// 			},
// 			alamat_wisata: {
// 				required: "Alamat wisata harus diisi !",
// 			},
// 			latitude: {
// 				required: "Latitude wisata harus diisi !",
// 			},
// 			longitude: {
// 				required: "Longitude wisata harus diisi !",
// 			},
// 			email: {
// 				email: "Format email salah !",
// 			},
// 			no_cs: {
// 				minlength: "Nomor telepon minimal 11 karakter !",
// 				number: "Format nomor telepon salah !",
// 			},
// 		},
// 		submitHandler: function (form) {
// 			submitIsClick({ edit: true });
// 		},
// 	});
// });

function hapus_wisata(id_wisata) {
	Swal.fire({
		title: "Yakin ingin menghapus data wisata ?",
		text: "Data wisata yang sudah dihapus, tidak bisa dikembalikan lagi",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: "http://localhost:8000/wisata/",
				type: "DELETE",
				data: {
					id_wisata,
				},
				dataType: "JSON",
				success: function (results) {
					if (results.code != 200) {
						error("Gagal menghapus");
					} else {
						success(results.message);
						grid_wisata.ajax.reload();
					}
				},
			});
		}
	});
}

function deskripsi(deskripsi) {
	$("#deskripsiModal").modal("show");
	$("#deskripsi").text("");
	$("#deskripsi").text(deskripsi);
}

function success(params) {
	Swal.fire({
		icon: "success",
		title: "" + params,
		showConfirmButton: false,
		timer: 1500,
	});
}

function error(params) {
	Swal.fire({
		icon: "error",
		title: "Oops...",
		text: "" + params,
	});
}
