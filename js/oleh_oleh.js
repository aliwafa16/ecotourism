$(document).ready(function () {
	var table = $("#table_oleh_oleh");
	grid_oleh_oleh = table.DataTable({
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
			url: "http://localhost:8000/oleh_oleh",
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
					return full.nama_oleh_oleh;
				},
				width: "10%",
			},
			{
				render: function (data, type, full, meta) {
					var num_chart = 120;
					var length = full.deskripsi_oleh_oleh.length;
					if (length > num_chart) {
						var link = `<a href="javascript:;" onclick="deskripsi('${full.deskripsi_oleh_oleh}')"><span class="badge badge-pill readmore_button">selengkapnya</span></a>`;
						a = full.deskripsi_oleh_oleh.substr(0, num_chart);
						full.deskripsi_oleh_oleh = a + " ... " + link;
					} else {
						full.deskripsi_oleh_oleh.substr(0, num_chart);
					}
					return full.deskripsi_oleh_oleh == null
						? "-"
						: full.deskripsi_oleh_oleh;
				},
				width: "34%",
			},
			{
				render: function (data, type, full, meta) {
					return full.alamat_oleh_oleh;
				},
				width: "35%",
			},
			{
				render: function (data, type, full, meta) {
					return `
					<div class="container">
					<div class="row align-items-center">
                    <div class="col-md-4">
                        <button onclick="edit_oleh_oleh('${full.id_oleh_oleh}')" type="button" class="btn btn_aksi edit_button"><i class="fa fa-edit"></i></button>
                    </div>
                    <div class="col-md-4">
                        <button onclick="hapus_oleh_oleh('${full.id_oleh_oleh}')" type="button" class="btn btn_aksi delete_button"><i class="fa fa-trash"></i></button>
                    </div>
					<div class="col-md-4">
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-cogs"></i>
						</button>
						<div class="dropdown-menu" style="font-size:13px" aria-labelledby="dropdownMenu2">
							<button class="dropdown-item" type="button" onclick="detail_oleh_oleh('${full.id_oleh_oleh}')">Detail</button>
							<button class="dropdown-item" type="button" onclick="gambar_oleh_oleh('${full.id_oleh_oleh}')">Tambah Gambar</button>
							<button class="dropdown-item" type="button" onclick="menu_oleh_oleh('${full.id_oleh_oleh}')">Tambah Menu</button>
							<button class="dropdown-item" type="button" onclick="fasilitas_oleh_oleh('${full.id_oleh_oleh}')">Tambah Fasilitas</button>
							<button class="dropdown-item" type="button" onclick="jadwal_oleh_oleh('${full.id_oleh_oleh}')">Tambah Jadwal</button>
							<button class="dropdown-item" type="button" onclick="item_oleh_oleh('${full.id_oleh_oleh}')">Tambah Item</button>
						</div>
						</div>
					</div>
                </div>
				</div>`;
				},
				width: "20%",
				className: "text-center",
			},
		],
	});
});

function item_oleh_oleh(id_oleh_oleh) {
	$("#itemModal").modal("show");
	$("#form_item")[0].reset();
	$(".oleh_oleh_id").val(id_oleh_oleh);
}

$("#submit_addItem").on("click", function (e) {
	e.preventDefault();
	let formdata = new FormData($("#form_item")[0]);
	let id = $(".oleh_oleh_id").val();
	console.log(id);
	$.ajax({
		url: "http://localhost:8000/item/" + id,
		type: "POST",
		data: formdata,
		contentType: false,
		processData: false,
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success(results.message);
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

function deskripsi(deskripsi) {
	$("#deskripsiModal").modal("show");
	$("#deskripsi").text("");
	$("#deskripsi").text(deskripsi);
}

$("#btn_submitOlehOleh").on("click", function (e) {
	$("#form_oleh_oleh").validate({
		rules: {
			nama_oleh_oleh: {
				required: true,
			},
			deskripsi_oleh_oleh: {
				required: true,
			},
			alamat_oleh_oleh: {
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
			nama_oleh_oleh: {
				required: "Nama oleh-oleh harus diisi !",
			},
			deskripsi_oleh_oleh: {
				required: "Deskripsi oleh-oleh harus diisi !",
			},
			alamat_oleh_oleh: {
				required: "Alamat oleh-oleh harus diisi !",
			},
			latitude: {
				required: "Latitude oleh-oleh harus diisi !",
			},
			longitude: {
				required: "Longitude oleh-oleh harus diisi !",
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
		kategori_pariwisata_id: 39,
		nama_oleh_oleh: $("#nama_oleh_oleh").val(),
		deskripsi_oleh_oleh: $("#deskripsi_oleh_oleh").val(),
		alamat_oleh_oleh: $("#alamat_oleh_oleh").val(),
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
		url: "http://localhost:8000/oleh_oleh/",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (result) {
			if (result.code != 200) {
				error(result.message);
			} else {
				success("Data oleh-oleh berhasil ditambahkan");
				setTimeout(function () {
					location.href = base_url + "Oleh_Oleh";
				}, 1000);
			}
		},
	});
}

function detail_oleh_oleh(id_oleh_oleh) {
	localStorage.setItem("id_oleh_oleh", id_oleh_oleh);
	location.href = base_url + "Oleh_Oleh/detail";
}

function edit_oleh_oleh(id_oleh_oleh) {
	localStorage.setItem("id_oleh_oleh", id_oleh_oleh);
	location.href = base_url + "oleh_oleh/edit";
}

$("#btn_editOlehOleh").on("click", function (e) {
	$("#form_oleh_oleh").validate({
		rules: {
			nama_oleh_oleh: {
				required: true,
			},
			deskripsi_oleh_oleh: {
				required: true,
			},
			alamat_oleh_oleh: {
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
			nama_oleh_oleh: {
				required: "Nama oleh-oleh harus diisi !",
			},
			deskripsi_oleh_oleh: {
				required: "Deskripsi oleh-oleh harus diisi !",
			},
			alamat_oleh_oleh: {
				required: "Alamat oleh-oleh harus diisi !",
			},
			latitude: {
				required: "Latitude oleh-oleh harus diisi !",
			},
			longitude: {
				required: "Longitude oleh-oleh harus diisi !",
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
		kategori_pariwisata_id: 39,
		nama_oleh_oleh: $("#nama_oleh_oleh").val(),
		deskripsi_oleh_oleh: $("#deskripsi_oleh_oleh").val(),
		alamat_oleh_oleh: $("#alamat_oleh_oleh").val(),
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
	data.id_oleh_oleh = $("#id_oleh_oleh").val();

	console.log(data);

	$.ajax({
		url: "http://localhost:8000/oleh_oleh/",
		data: data,
		type: "PUT",
		dataType: "JSON",
		success: function (result) {
			if (result.code != 200) {
				error(result.message);
			} else {
				success("Data oleh-oleh berhasil diubah");
				setTimeout(function () {
					location.href = base_url + "Oleh_Oleh";
				}, 1000);
			}
		},
	});
}

function hapus_oleh_oleh(id_oleh_oleh) {
	Swal.fire({
		title: "Yakin ingin menghapus data Oleh-oleh ?",
		text: "Data Oleh-oleh yang sudah dihapus, tidak bisa dikembalikan lagi",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: "http://localhost:8000/oleh_oleh/",
				type: "DELETE",
				data: {
					id_oleh_oleh,
				},
				dataType: "JSON",
				success: function (results) {
					if (results.code != 200) {
						error("Gagal menghapus");
					} else {
						success(results.message);
						grid_oleh_oleh.ajax.reload();
					}
				},
			});
		}
	});
}

function fasilitas_oleh_oleh(id_oleh_oleh) {
	$("#fasilitasModal").modal("show");
	$("#form_fasilitas")[0].reset();
	$(".oleh_oleh_id").val(id_oleh_oleh);
}

$("#submit_addFasilitas").on("click", function (e) {
	e.preventDefault();
	let data = {
		id_pariwisata: $(".oleh_oleh_id").val(),
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
				success("Data fasilitas wisata oleh-oleh berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

function jadwal_oleh_oleh(id_oleh_oleh) {
	$("#jadwalModal").modal("show");
	$("#form_jadwal")[0].reset();
	$(".oleh_oleh_id").val(id_oleh_oleh);
}

$("#submit_addJadwal").on("click", function (e) {
	e.preventDefault();
	let data = {
		id_pariwisata: $(".oleh_oleh_id").val(),
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
				success("Data jadwal wisata oleh-oleh berhasil ditambahkan");
				setTimeout(function () {
					location.reload();
				}, 2000);
			}
		},
	});
});

function menu_oleh_oleh(id_oleh_oleh) {
	$("#menuModal").modal("show");
	$("#form_menu")[0].reset();
	$(".oleh_oleh_id").val(id_oleh_oleh);
}

$("#submit_addMenu").on("click", function (e) {
	e.preventDefault();
	let data = {
		oleh_oleh_id: $(".oleh_oleh_id").val(),
		nama_item: $("#nama_item").val(),
		harga: $("#harga").val(),
		keterangan: $("#keterangan_oleholeh").val(),
	};

	console.log(data);

	$.ajax({
		url: "http://localhost:8000/item_oleh_oleh",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success("Data menu berhasil ditambahkan");
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
