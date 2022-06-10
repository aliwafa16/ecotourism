$(document).ready(function () {
	var table = $("#table_kuliner");
	grid_kuliner = table.DataTable({
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
				className: "text-center",
				width: "1%",
			},
			{
				render: function (data, type, full, meta) {
					return full.nama_kuliner;
				},
				width: "10%",
			},
			{
				render: function (data, type, full, meta) {
					var num_chart = 120;
					var length = full.deskripsi_kuliner.length;
					if (length > num_chart) {
						var link = `<a href="javascript:;" onclick="deskripsi('${full.deskripsi_kuliner}')"><span class="badge badge-pill readmore_button">selengkapnya</span></a>`;
						a = full.deskripsi_kuliner.substr(0, num_chart);
						full.deskripsi_kuliner = a + " ... " + link;
					} else {
						full.deskripsi_kuliner.substr(0, num_chart);
					}
					return full.deskripsi_kuliner == null ? "-" : full.deskripsi_kuliner;
				},
				width: "39%",
			},
			{
				render: function (data, type, full, meta) {
					return full.alamat_kuliner;
				},
				width: "35%",
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="row align-items-center">
                    <div class="col-md-3 mt-2">
                        <button type="button" onclick="detail_kuliner('${full.id_kuliner}')" target="_blank" class="btn btn_aksi detail_button btn-sm"><i class="fas fa-info-circle"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="edit_kuliner('${full.id_kuliner}')" type="button" class="btn btn_aksi edit_button btn-sm"><i class="fa fa-edit"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="hapus_kuliner('${full.id_kuliner}')" type="button" class="btn btn_aksi delete_button btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="gambar_kuliner('${full.id_kuliner}')" type="button" class="btn btn_aksi gambar_button btn-sm"><i class="fa fa-camera"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="menu_kuliner('${full.id_kuliner}')" type="button" class="btn btn_aksi tiket_button btn-sm"><i class="fas fa-pizza-slice"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="fasilitas_kuliner('${full.id_kuliner}')" type="button" class="btn btn_aksi fasilitas_button btn-sm"><i class="fa fa-landmark"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="jadwal_kuliner('${full.id_kuliner}')" type="button" class="btn btn_aksi jadwal_button btn-sm"><i class="fa fa-calendar-alt"></i></button>
                    </div>
                    <div class="col-md-3 mt-2">
                        <button onclick="item_kuliner('${full.id_kuliner}')" type="button" class="btn btn_aksi item_button btn-sm"><i class="fa fa-th-list"></i></button>
                    </div>
                </div>`;
				},
				width: "15%",
				className: "text-center",
			},
		],
	});
});

function jadwal_kuliner(id_kuliner) {
	$("#jadwalModal").modal("show");
	$("#form_jadwal")[0].reset();
	$(".kuliner_id").val(id_kuliner);
}

$("#submit_addJadwal").on("click", function (e) {
	e.preventDefault();
	let data = {
		id_pariwisata: $(".kuliner_id").val(),
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
				success("Data jadwal wisata kuliner berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

$("#btn_submitKuliner").on("click", function (e) {
	$("#form_kuliner").validate({
		rules: {
			nama_kuliner: {
				required: true,
			},
			deskripsi_kuliner: {
				required: true,
			},
			alamat_kuliner: {
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
			nama_kuliner: {
				required: "Nama kuliner harus diisi !",
			},
			deskripsi_kuliner: {
				required: "Deskripsi kuliner harus diisi !",
			},
			alamat_kuliner: {
				required: "Alamat kuliner harus diisi !",
			},
			latitude: {
				required: "Latitude kuliner harus diisi !",
			},
			longitude: {
				required: "Longitude kuliner harus diisi !",
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

function menu_kuliner(id_kuliner) {
	$("#menuModal").modal("show");
	$("#form_menu")[0].reset();
	$(".kuliner_id").val(id_kuliner);
}

$("#submit_addMenu").on("click", function (e) {
	e.preventDefault();
	let data = {
		kuliner_id: $(".kuliner_id").val(),
		nama_menu: $("#menu_kuliner").val(),
		harga: $("#harga").val(),
		keterangan: $("#keterangan_menu").val(),
	};

	console.log(data);

	$.ajax({
		url: "http://localhost:8000/menu_kuliner",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success("Data menu kuliner berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

function fasilitas_kuliner(id_kuliner) {
	$("#fasilitasModal").modal("show");
	$("#form_fasilitas")[0].reset();
	$(".kuliner_id").val(id_kuliner);
}

$("#submit_addFasilitas").on("click", function (e) {
	e.preventDefault();
	let data = {
		id_pariwisata: $(".kuliner_id").val(),
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
				success("Data fasilitas wisata kuliner berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
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
		kategori_pariwisata_id: 36,
		kategori_kuliner_id: $("#kategori_kuliner").val(),
		nama_kuliner: $("#nama_kuliner").val(),
		deskripsi_kuliner: $("#deskripsi_kuliner").val(),
		alamat_kuliner: $("#alamat_kuliner").val(),
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
		url: "http://localhost:8000/kuliner/",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (result) {
			if (result.code != 200) {
				error(result.message);
			} else {
				success("Data kuliner berhasil ditambahkan");
				setTimeout(function () {
					location.href = base_url + "kuliner";
				}, 1000);
			}
		},
	});
}

$("#btn_editKuliner").on("click", function (e) {
	$("#form_kuliner").validate({
		rules: {
			nama_kuliner: {
				required: true,
			},
			deskripsi_kuliner: {
				required: true,
			},
			alamat_kuliner: {
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
			nama_kuliner: {
				required: "Nama kuliner harus diisi !",
			},
			deskripsi_kuliner: {
				required: "Deskripsi kuliner harus diisi !",
			},
			alamat_kuliner: {
				required: "Alamat kuliner harus diisi !",
			},
			latitude: {
				required: "Latitude kuliner harus diisi !",
			},
			longitude: {
				required: "Longitude kuliner harus diisi !",
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
		kategori_kuliner_id: $("#kategori_kuliner").val(),
		nama_kuliner: $("#nama_kuliner").val(),
		deskripsi_kuliner: $("#deskripsi_kuliner").val(),
		alamat_kuliner: $("#alamat_kuliner").val(),
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
	data.id_kuliner = $("#id_kuliner").val();

	$.ajax({
		url: "http://localhost:8000/kuliner/",
		data: data,
		type: "PUT",
		dataType: "JSON",
		success: function (result) {
			if (result.code != 200) {
				error(result.message);
			} else {
				success("Data kuliner berhasil diubah");
				setTimeout(function () {
					location.href = base_url + "kuliner";
				}, 1000);
			}
		},
	});
}

function hapus_kuliner(id_kuliner) {
	Swal.fire({
		title: "Yakin ingin menghapus data kuliner ?",
		text: "Data kuliner yang sudah dihapus, tidak bisa dikembalikan lagi",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: "http://localhost:8000/kuliner/",
				type: "DELETE",
				data: {
					id_kuliner,
				},
				dataType: "JSON",
				success: function (results) {
					if (results.code != 200) {
						error("Gagal menghapus");
					} else {
						success(results.message);
						grid_kuliner.ajax.reload();
					}
				},
			});
		}
	});
}

function detail_kuliner(id_kuliner) {
	localStorage.setItem("id_kuliner", id_kuliner);
	location.href = base_url + "kuliner/detail";
}

function edit_kuliner(id_kuliner) {
	localStorage.setItem("id_kuliner", id_kuliner);
	location.href = base_url + "kuliner/edit";
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