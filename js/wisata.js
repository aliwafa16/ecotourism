$(document).ready(function () {
	var table = $("#table_wisata");
	grid_wisata = table.DataTable({
		// scrollX: true,
		// scrollCollapse: true,
		aaSorting: [],
		initComplete: function (settings, json) {},
		retrieve: true,
		processing: true,
		lengthMenu: [
			[5, 10, 25, 50, -1],
			[5, 10, 25, 50, "All"],
		],

		ajax: {
			type: "GET",
			url: "http://localhost:8000/wisata/filter?status=1",
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
				width: "39%",
			},
			{
				render: function (data, type, full, meta) {
					return full.alamat_wisata;
				},
				width: "35%",
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="row align-items-center">
                    <div class="col-md-3 mt-2">
                        <button type="button" onclick="detail_wisata('${full.id_wisata}')" target="_blank" class="btn btn_aksi detail_button btn-sm"><i class="fas fa-info-circle"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="edit_wisata('${full.id_wisata}')" type="button" class="btn btn_aksi edit_button btn-sm"><i class="fa fa-edit"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="hapus_wisata('${full.id_wisata}')" type="button" class="btn btn_aksi delete_button btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="gambar_wisata('${full.id_wisata}')" type="button" class="btn btn_aksi gambar_button btn-sm"><i class="fa fa-camera"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="tiket_wisata('${full.id_wisata}')" type="button" class="btn btn_aksi tiket_button btn-sm"><i class="fa fa-ticket-alt"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="fasilitas_wisata('${full.id_wisata}')" type="button" class="btn btn_aksi fasilitas_button btn-sm"><i class="fa fa-landmark"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="jadwal_wisata('${full.id_wisata}')" type="button" class="btn btn_aksi jadwal_button btn-sm"><i class="fa fa-calendar-alt"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="item_wisata('${full.id_wisata}')" type="button" class="btn btn_aksi item_button btn-sm"><i class="fa fa-th-list"></i></button>
                    </div>
                </div>`;
				},
				width: "15%",
				className: "text-center",
			},
		],
	});
});

function detail_wisata(id_wisata) {
	localStorage.setItem("id_wisata", id_wisata);
	location.href = base_url + "wisata/detail";
}

function edit_wisata(id_wisata) {
	localStorage.setItem("id_wisata", id_wisata);
	location.href = base_url + "wisata/edit";
}

function jadwal_wisata(id_wisata) {
	$("#jadwalModal").modal("show");
	$("#form_jadwal")[0].reset();
	$(".wisata_id").val(id_wisata);
}

$("#submit_addJadwal").on("click", function (e) {
	e.preventDefault();
	let data = {
		id_pariwisata: $(".wisata_id").val(),
		hari: $("#hari").val(),
		jam_buka: $("#jam_buka").val(),
		jam_tutup: $("#jam_tutup").val(),
		keterangan: $("#keterangan_jadwal").val(),
	};

	$.ajax({
		url: "http://localhost:8000/jadwal",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(result.message);
			} else {
				success("Data jadwal wisata berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

function fasilitas_wisata(id_wisata) {
	$("#fasilitasModal").modal("show");
	$("#form_fasilitas")[0].reset();
	$(".wisata_id").val(id_wisata);
}

$("#submit_addFasilitas").on("click", function (e) {
	e.preventDefault();
	let data = {
		id_pariwisata: $(".wisata_id").val(),
		nama_fasilitas: $("#fasilitas").val(),
		keterangan: $("#keterangan_fasilitas").val(),
	};
	$.ajax({
		url: "http://localhost:8000/fasilitas",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(result.message);
			} else {
				success("Data fasilitas wisata berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

function tiket_wisata(id_wisata) {
	$("#tiketModal").modal("show");
	$("#form_tiket")[0].reset();
	$(".wisata_id").val(id_wisata);
}

$("#submit_addTiket").on("click", function (e) {
	e.preventDefault();
	let data = {
		id_pariwisata: $(".wisata_id").val(),
		tiket: $("#tiket").val(),
		harga: $("#harga").val(),
		keterangan: $("#keterangan_tiket").val(),
	};

	$.ajax({
		url: "http://localhost:8000/tiket",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(result.message);
			} else {
				success("Data tiket wisata berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

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

$("#btn_editWisata").on("click", function (e) {
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
			editIsClick();
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
				setTimeout(function () {
					location.href = base_url + "wisata";
				}, 1000);
			}
		},
	});
}

function editIsClick() {
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
				setTimeout(function () {
					location.href = base_url + "wisata";
				}, 1000);
			}
		},
	});
}


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
