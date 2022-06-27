$(document).ready(function () {
	var table = $("#table_penginapan");
	grid_penginapan = table.DataTable({
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
			url: "http://localhost:8000/penginapan",
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
					return full.nama_penginapan;
				},
				width: "10%",
			},
			{
				render: function (data, type, full, meta) {
					var num_chart = 120;
					var length = full.deskripsi_penginapan.length;
					if (length > num_chart) {
						var link = `<a href="javascript:;" onclick="deskripsi('${full.deskripsi_penginapan}')"><span class="badge badge-pill readmore_button">selengkapnya</span></a>`;
						a = full.deskripsi_penginapan.substr(0, num_chart);
						full.deskripsi_penginapan = a + " ... " + link;
					} else {
						full.deskripsi_penginapan.substr(0, num_chart);
					}
					return full.deskripsi_penginapan == null
						? "-"
						: full.deskripsi_penginapan;
				},
				width: "39%",
			},
			{
				render: function (data, type, full, meta) {
					return full.alamat_penginapan;
				},
				width: "35%",
			},
			{
				render: function (data, type, full, meta) {
					return `
					<div class="container">
					<div class="row align-items-center">
                    <div class="col-md-3 mt-2">
                        <button type="button" onclick="detail_penginapan('${full.id_penginapan}')" target="_blank" class="btn btn_aksi detail_button btn-sm"><i class="fas fa-info-circle"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="edit_penginapan('${full.id_penginapan}')" type="button" class="btn btn_aksi edit_button btn-sm"><i class="fa fa-edit"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="hapus_penginapan('${full.id_penginapan}')" type="button" class="btn btn_aksi delete_button btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="gambar_penginapan('${full.id_penginapan}')" type="button" class="btn btn_aksi gambar_button btn-sm"><i class="fa fa-camera"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="kamar_penginapan('${full.id_penginapan}')" type="button" class="btn btn_aksi tiket_button btn-sm"><i class="fas fa-tag"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="fasilitas_penginapan('${full.id_penginapan}')" type="button" class="btn btn_aksi fasilitas_button btn-sm"><i class="fa fa-landmark"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="item_penginapan('${full.id_penginapan}')" type="button" class="btn btn_aksi item_button btn-sm"><i class="fa fa-th-list"></i></button>
                    </div>
                	</div>
				    </div>`;
				},
				width: "15%",
				className: "text-center",
			},
		],
	});
});

function edit_penginapan(id_penginapan) {
	localStorage.setItem("id_penginapan", id_penginapan);
	location.href = base_url + "Penginapan/edit";
}

$("#btn_editPenginapan").on("click", function (e) {
	$("#form_penginapan").validate({
		rules: {
			nama_penginapan: {
				required: true,
			},
			deskripsi_penginapan: {
				required: true,
			},
			alamat_penginapan: {
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
			nama_penginapan: {
				required: "Nama penginapan harus diisi !",
			},
			deskripsi_penginapan: {
				required: "Deskripsi penginapan harus diisi !",
			},
			alamat_penginapan: {
				required: "Alamat penginapan harus diisi !",
			},
			latitude: {
				required: "Latitude penginapan harus diisi !",
			},
			longitude: {
				required: "Longitude penginapan harus diisi !",
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
		kategori_pariwisata_id: 36,
		kategori_penginapan_id: $("#kategori_penginapan").val(),
		nama_penginapan: $("#nama_penginapan").val(),
		deskripsi_penginapan: $("#deskripsi_penginapan").val(),
		alamat_penginapan: $("#alamat_penginapan").val(),
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
	data.id_penginapan = $("#id_penginapan").val();

	$.ajax({
		url: "http://localhost:8000/penginapan/",
		data: data,
		type: "PUT",
		dataType: "JSON",
		success: function (result) {
			if (result.code != 200) {
				error(result.message);
			} else {
				success("Data penginapan berhasil diubah");
				setTimeout(function () {
					location.href = base_url + "penginapan";
				}, 1000);
			}
		},
	});
}

function deskripsi(deskripsi) {
	$("#deskripsiModal").modal("show");
	$("#deskripsi").text("");
	$("#deskripsi").text(deskripsi);
}

function detail_penginapan(id_penginapan) {
	localStorage.setItem("id_penginapan", id_penginapan);
	location.href = base_url + "penginapan/detail";
}

function hapus_penginapan(id_penginapan) {
	Swal.fire({
		title: "Yakin ingin menghapus data penginapan ?",
		text: "Data penginapan yang sudah dihapus, tidak bisa dikembalikan lagi",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: "http://localhost:8000/penginapan/",
				type: "DELETE",
				data: {
					id_penginapan,
				},
				dataType: "JSON",
				success: function (results) {
					if (results.code != 200) {
						error("Gagal menghapus");
					} else {
						success(results.message);
						grid_penginapan.ajax.reload();
					}
				},
			});
		}
	});
}

$("#btn_submitPenginapan").on("click", function (e) {
	$("#form_penginapan").validate({
		rules: {
			nama_penginapan: {
				required: true,
			},
			deskripsi_penginapan: {
				required: true,
			},
			alamat_penginapan: {
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
			nama_penginapan: {
				required: "Nama penginapan harus diisi !",
			},
			deskripsi_penginapan: {
				required: "Deskripsi penginapan harus diisi !",
			},
			alamat_penginapan: {
				required: "Alamat penginapan harus diisi !",
			},
			latitude: {
				required: "Latitude penginapan harus diisi !",
			},
			longitude: {
				required: "Longitude penginapan harus diisi !",
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
		kategori_pariwisata_id: 38,
		kategori_penginapan_id: $("#kategori_penginapan").val(),
		nama_penginapan: $("#nama_penginapan").val(),
		deskripsi_penginapan: $("#deskripsi_penginapan").val(),
		alamat_penginapan: $("#alamat_penginapan").val(),
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

	console.log(data);

	$.ajax({
		url: "http://localhost:8000/penginapan/",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (result) {
			if (result.code != 200) {
				error(result.message);
			} else {
				success("Data penginapan berhasil ditambahkan");
				setTimeout(function () {
					location.href = base_url + "penginapan";
				}, 1000);
			}
		},
	});
}

function kamar_penginapan(id_penginapan) {
	$("#kamarPenginapanModal").modal("show");
	$("#form_kamar_penginapan")[0].reset();
	$(".penginapan_id").val(id_penginapan);
}

$("#submit_addKamarPenginapan").on("click", function (e) {
	e.preventDefault();
	let data = {
		penginapan_id: $(".penginapan_id").val(),
		tipe_kamar: $("#tipe_kamar").val(),
		kapasitas: $("#kapasitas").val(),
		harga: $("#harga").val(),
		keterangan: $("#keterangan_kamar_penginapan").val(),
	};

	console.log(data);

	$.ajax({
		url: "http://localhost:8000/jenis_kamar",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success("Data kamar penginapan berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

function fasilitas_penginapan(id_penginapan) {
	$("#fasilitasModal").modal("show");
	$("#form_fasilitas")[0].reset();
	$(".penginapan_id").val(id_penginapan);
}

$("#submit_addFasilitas").on("click", function (e) {
	e.preventDefault();
	let data = {
		id_pariwisata: $(".penginapan_id").val(),
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
				error(results.message);
			} else {
				success("Data fasilitas penginapan berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

function fasilitas_kamar_penginapan(id_penginapan) {
	$("#fasilitasKamarModal").modal("show");
	$("#form_fasilitas_kamar")[0].reset();
	$(".penginapan_id").val(id_penginapan);

	const data = {
		id_penginapan,
	};
	$("#tipe_kamar_id").html("");
	$.ajax({
		url:
			"http://localhost:8000/jenis_kamar/find?penginapan_id=" + id_penginapan,
		type: "GET",
		data: data,
		dataType: "JSON",
		success: function (results) {
			let result = results.data;
			result.forEach((element) => {
				$("#tipe_kamar_id").append(
					`<option value="${element.id_kamar_penginapan}">${element.tipe_kamar}</option>`
				);
			});
		},
	});
}

$("#submit_addFasilitasKamar").on("click", function (e) {
	e.preventDefault();
	let data = {
		penginapan_id: $(".penginapan_id").val(),
		kamar_penginapan_id: $("#tipe_kamar_id").val(),
		nama_fasilitas: $("#fasilitas_kamar").val(),
		keterangan: $("#keterangan_fasilitas_kamar").val(),
	};

	$.ajax({
		url: "http://localhost:8000/fasilitas_kamar",
		type: "POST",
		data,
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success("Data fasilitas kamar berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});


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