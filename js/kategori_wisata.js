$(document).ready(function () {
	var table = $("#table_kategori_wisata");
	grid_kategori_wisata = table.DataTable({
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
			url: API + "kategori_wisata",
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
					return full.kategori;
				},
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="container">
                        <button title="Edit wisata" onclick="edit('${full.id_kategori_wisata}')" type="button" class="btn btn_aksi edit_button"><i class="fa fa-edit"></i></button>
                        <button onclick="hapus('${full.id_kategori_wisata}')" type="button" class="btn btn_aksi delete_button"><i class="fa fa-trash"></i></button>
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
	$("#kategoriModalLabel").text("Tambah Kategori Wisata");
	$("#form_kategori")[0].reset();
	$("#form_kategori label").text("Nama kategori wisata");
	$("#btn_submitKategori").text("Tambah");
	console.log("ok");
});

$("#btn_submitKategori").on("click", function (e) {
	e.preventDefault();
	let data = {};
	let method = "";

	if (tipe == "tambah") {
		data.kategori = $("#kategori").val();
		method = "POST";
	} else if (tipe == "ubah") {
		data.kategori = $("#kategori").val();
		data.id_kategori_wisata = $("#id_kategori").val();
		method = "PUT";
	}
	$.ajax({
		url: API + "kategori_wisata",
		type: method,
		dataType: "JSON",
		data,
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success(results.message);
				grid_kategori_wisata.ajax.reload();
				$("#kategoriModal").modal("hide");
			}
		},
	});
});

function edit(id) {
	$("#kategoriModal").modal("show");
	$("#kategoriModalLabel").text("Ubah Kategori Wisata");
	$("#form_kategori")[0].reset();
	$("#form_kategori label").text("Nama kategori wisata");
	$("#btn_submitKategori").text("Ubah");
	tipe = "ubah";

	$.ajax({
		url: API + "kategori_wisata/" + id,
		type: "GET",
		dataType: "JSON",
		success: function (result) {
			$("#kategori").val(result.data.kategori);
			$("#id_kategori").val(result.data.id_kategori_wisata);
		},
	});
}

function hapus(id) {
	Swal.fire({
		title: "Yakin ingin menghapus data kategori wisata ?",
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
				url: API + "kategori_wisata/",
				type: "DELETE",
				data: {
					id_kategori_wisata: id,
				},
				dataType: "JSON",
				success: function (results) {
					if (results.code != 200) {
						error(result.message);
					} else {
						success(results.message);
						grid_kategori_wisata.ajax.reload();
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
