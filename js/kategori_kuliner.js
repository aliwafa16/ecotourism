$(document).ready(function () {
	console.log(API);
	var table = $("#table_kategori_kuliner");
	grid_kategori_kuliner = table.DataTable({
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
			url: API + "kategori_kuliner",
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
			},
			{
				render: function (data, type, full, meta) {
					return full.jenis_kuliner;
				},
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="container">
                        <button title="Edit wisata" onclick="edit('${full.id_kategori_kuliner}')" type="button" class="btn btn_aksi edit_button"><i class="fa fa-edit"></i></button>
                        <button onclick="hapus('${full.id_kategori_kuliner}')" type="button" class="btn btn_aksi delete_button"><i class="fa fa-trash"></i></button>
					</div>`;
				},
				className: "text-center",
			},
		],
	});
});

$("#btn_addKategori").on("click", function (e) {
	e.preventDefault();
	tipe = "tambah";
	$("#kategoriModal").modal("show");
	$("#kategoriModalLabel").text("Tambah Kategori kuliner");
	$("#form_kategori")[0].reset();
	$("#form_kategori label").text("Nama kategori kuliner");
	$("#btn_submitKategori").text("Tambah");
	console.log("ok");
});

$("#btn_submitKategori").on("click", function (e) {
	e.preventDefault();
	let data = {};
	let method = "";

	if (tipe == "tambah") {
		data.jenis_kuliner = $("#kategori").val();
		method = "POST";
	} else if (tipe == "ubah") {
		data.jenis_kuliner = $("#kategori").val();
		data.id_kategori_kuliner = $("#id_kategori").val();
		method = "PUT";
	}
	$.ajax({
		url: API + "kategori_kuliner",
		type: method,
		dataType: "JSON",
		data,
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success(results.message);
				grid_kategori_kuliner.ajax.reload();
				$("#kategoriModal").modal("hide");
			}
		},
	});
});

function edit(id) {
	$("#kategoriModal").modal("show");
	$("#kategoriModalLabel").text("Ubah Kategori Kuliner");
	$("#form_kategori")[0].reset();
	$("#form_kategori label").text("Nama kategori kuliner");
	$("#btn_submitKategori").text("Ubah");
	tipe = "ubah";

	$.ajax({
		url: API + "kategori_kuliner/" + id,
		type: "GET",
		dataType: "JSON",
		success: function (result) {
			$("#id_kategori").val(result.data.id_kategori_kuliner);
			$("#kategori").val(result.data.jenis_kuliner);
		},
	});
}

function hapus(id) {
	Swal.fire({
		title: "Yakin ingin menghapus data kategori kuliner ?",
		text: "Data yang sudah dihapus, tidak bisa dikembalikan lagi",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: API + "kategori_kuliner/",
				type: "DELETE",
				data: {
					id_kategori_kuliner: id,
				},
				dataType: "JSON",
				success: function (results) {
					if (results.code != 200) {
						error(result.message);
					} else {
						success(results.message);
						grid_kategori_kuliner.ajax.reload();
					}
				},
			});
		}
	});
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
