$(document).ready(function () {
	semua_pengguna();
	pengelola_wisata();
	wisatawan();
});

function semua_pengguna() {
	var table = $("#table_semua_pengguna");
	grid_all = table.DataTable({
		// scrollX: true,
		// scrollCollapse: true,
		aaSorting: [],
		initComplete: function (settings, json) {},
		retrieve: true,
		processing: true,
		ajax: {
			type: "GET",
			url: "http://localhost:8000/pengguna/filter?status=1",
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
					return full.username;
				},
			},
			{
				render: function (data, type, full, meta) {
					return full.email;
				},
			},
			{
				render: function (data, type, full, meta) {
					return full.role.role;
				},
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="container">
                        <button onclick="edit(${full.id_pengguna})" type="button" class="btn edit_button"><i class="fa fa-edit"></i></button>
                        <button onclick="hapus(${full.id_pengguna})" type="button" class="btn delete_button"><i class="fa fa-trash"></i></button>
                        <button onclick="password(${full.id_pengguna})" type="button" class="btn btn-secondary"><i class="fas fa-key"></i></button>
                </div>`;
				},
			},
		],
	});
}

function pengelola_wisata() {
	var table = $("#table_pengelola");
	grid_pengelola = table.DataTable({
		// scrollX: true,
		// scrollCollapse: true,
		aaSorting: [],
		initComplete: function (settings, json) {},
		retrieve: true,
		processing: true,
		ajax: {
			type: "GET",
			url: "http://localhost:8000/pengguna/filter?role_id=2&status=1",
			data: function (d) {
				no_pengelola = 0;
			},
			dataSrc: "data",
		},
		columns: [
			{
				render: function (data, type, full, meta) {
					no_pengelola += 1;

					return no_pengelola;
				},
				className: "text-center",
			},
			{
				render: function (data, type, full, meta) {
					return full.username;
				},
			},
			{
				render: function (data, type, full, meta) {
					return full.email;
				},
			},
			{
				render: function (data, type, full, meta) {
					return full.role.role;
				},
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="container">
                        <button onclick="edit(${full.id_pengguna})" type="button" class="btn edit_button"><i class="fa fa-edit"></i></button>
                        <button onclick="hapus(${full.id_pengguna})" type="button" class="btn delete_button"><i class="fa fa-trash"></i></button>
						 <button onclick="password(${full.id_pengguna})" type="button" class="btn btn-secondary"><i class="fas fa-key"></i></button>
                </div>`;
				},
			},
		],
	});
}

function wisatawan() {
	var table = $("#table_wisatawan");
	grid_wisatawan = table.DataTable({
		// scrollX: true,
		// scrollCollapse: true,
		aaSorting: [],
		initComplete: function (settings, json) {},
		retrieve: true,
		processing: true,
		ajax: {
			type: "GET",
			url: "http://localhost:8000/pengguna/filter?role_id=3&status=1",
			data: function (d) {
				no_wisatawan = 0;
			},
			dataSrc: "data",
		},
		columns: [
			{
				render: function (data, type, full, meta) {
					no_wisatawan += 1;

					return no_wisatawan;
				},
				className: "text-center",
			},
			{
				render: function (data, type, full, meta) {
					return full.username;
				},
			},
			{
				render: function (data, type, full, meta) {
					return full.email;
				},
			},
			{
				render: function (data, type, full, meta) {
					return full.role.role;
				},
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="container">
                        <button onclick="edit(${full.id_pengguna})" type="button" class="btn edit_button"><i class="fa fa-edit"></i></button>
                        <button onclick="hapus(${full.id_pengguna})" type="button" class="btn delete_button"><i class="fa fa-trash"></i></button>
						 <button onclick="password(${full.id_pengguna})" type="button" class="btn btn-secondary"><i class="fas fa-key"></i></button>
                </div>`;
				},
			},
		],
	});
}

function password(id_pengguna) {
	$("#passwordModal").modal("show");
	$("#ps_id_pengguna").val(id_pengguna);
}

$("#btn_password").on("click", function () {
	$("#form_password").validate({
		rules: {
			ubahpassword: {
				required: true,
				minlength: 5,
			},
			ubahre_password: {
				required: true,
				minlength: 5,
				equalTo: "#ubahpassword",
			},
		},
		messages: {
			ubahpassword: {
				required: "kata sandi harus diisi !",
				minlength: "Kata sandi minimal 5 karakter !",
			},
			ubahre_password: {
				required: "Kata sandi harus diisi !",
				minlength: "Kata sandi minimal 5 karakter !",
				equalTo: "Konfirmasi kata sandi salah !",
			},
		},
		submitHandler: function (forms) {
			ubah_sandi(forms);
		},
	});
});

function ubah_sandi() {
	$.ajax({
		url: "http://localhost:8000/pengguna/password",
		type: "PUT",
		data: {
			password: $("#ubahpassword").val(),
			id_pengguna: $("#ps_id_pengguna").val(),
		},
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success(results.message);
				$("#passwordModal").modal("hide");
				grid_all.ajax.reload();
				grid_pengelola.ajax.reload();
				grid_wisatawan.ajax.reload();
			}
		},
	});
}

$("#btn_addPengguna").on("click", function (e) {
	$("#addModal").modal("show");
	$("#form_pengguna")[0].reset();
});

$("#btn_submitPengguna").on("click", function (e) {
	$("#form_pengguna").validate({
		rules: {
			email: {
				required: true,
				email: true,
			},
			username: {
				required: true,
			},
			password: {
				required: true,
				minlength: 5,
			},
			re_password: {
				required: true,
				minlength: 5,
				equalTo: "#password",
			},
		},
		messages: {
			email: {
				required: "Email harus diisi !",
				email: "Format email salah !",
			},
			username: {
				required: "Nama pengguna harus diisi !",
			},
			password: {
				required: "kata sandi harus diisi !",
				minlength: "Kata sandi minimal 5 karakter !",
			},
			re_password: {
				required: "Kata sandi harus diisi !",
				minlength: "Kata sandi minimal 5 karakter !",
				equalTo: "Konfirmasi kata sandi salah !",
			},
		},
		submitHandler: function (forms) {
			submit(forms);
		},
	});
});

function submit() {
	$.ajax({
		url: "http://localhost:8000/pengguna/",
		type: "POST",
		data: {
			role_id: $("#role_id").val(),
			username: $("#username").val(),
			email: $("#email").val(),
			password: $("#password").val(),
		},
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success(results.message);
				$("#addModal").modal("hide");
				grid_all.ajax.reload();
				grid_pengelola.ajax.reload();
				grid_wisatawan.ajax.reload();
			}
		},
	});
}

function edit(id_pengguna) {
	$("#editModal").modal("show");
	$("#form_editpengguna")[0].reset();
	$.ajax({
		url: "http://localhost:8000/pengguna/" + id_pengguna,
		type: "GET",
		dataType: "JSON",
		success: function (results) {
			$("#id_pengguna").val(results.data.id_pengguna);
			$("#edit_username").val(results.data.username);
			$("#edit_role_id").val(results.data.role_id);
			$("#edit_email").val(results.data.email);
			$("#edit_password").val(results.data.password);
		},
	});
}

$("#btn_submiteditPengguna").on("click", function (e) {
	$("#form_editpengguna").validate({
		rules: {
			email: {
				required: true,
				email: true,
			},
			username: {
				required: true,
			},
		},
		messages: {
			email: {
				required: "Email harus diisi !",
				email: "Format email salah !",
			},
			username: {
				required: "Nama pengguna harus diisi !",
			},
		},
		submitHandler: function (forms) {
			submit_edit(forms);
		},
	});
});

function submit_edit() {
	$.ajax({
		url: "http://localhost:8000/pengguna/",
		type: "PUT",
		data: {
			id_pengguna: $("#id_pengguna").val(),
			role_id: $("#edit_role_id").val(),
			username: $("#edit_username").val(),
			email: $("#edit_email").val(),
			password: $("#edit_password").val(),
		},
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success(results.message);
				$("#editModal").modal("hide");
				grid_all.ajax.reload();
				grid_pengelola.ajax.reload();
				grid_wisatawan.ajax.reload();
			}
		},
	});
}

function hapus(id_pengguna) {
	console.log(id_pengguna);
	Swal.fire({
		title: "Yakin ingin menghapus data pengguna ?",
		text: "Data pengguna yang sudah dihapus, tidak bisa dikembalikan lagi",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: "http://localhost:8000/pengguna/",
				type: "DELETE",
				data: {
					id_pengguna,
				},
				dataType: "JSON",
				success: function (results) {
					if (results.code != 200) {
						error(results.message);
					} else {
						success(results.message);
						grid_all.ajax.reload();
						grid_pengelola.ajax.reload();
						grid_wisatawan.ajax.reload();
					}
				},
			});
		}
	});
}

$(".custom-file-input").on("change", function () {
	var fileName = $(this).val();
	$(this).next(".form-control-file").addClass("selected").html(fileName);
});



function success(params) {
    Swal.fire({
        icon: 'success',
        title: ''+params,
        showConfirmButton: false,
        timer: 1500,
    })
}


function error(params) {
    Swal.fire({
    icon: 'error',
      title: 'Oops...',
      text: ''+params,
})
}