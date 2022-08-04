$(document).ready(function () {
	var table = $("#table_wisata");
	grid_all = table.DataTable({
		aaSorting: [],
		initComplete: function (settings, json) {},
		retrieve: true,
		processing: true,
		ajax: {
			type: "GET",
			url: API + "role/",
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
					return full.role;
				},
			},
			{
				render: function (data, type, full, meta) {
					return `<div class="container">
                          <button onclick="edit('${full.id_role}')" type="button" class="btn edit_button"><i class="fa fa-edit"></i></button>
                  </div>`;
				},
			},
		],
	});
});

function edit(param) {
	$("#roleModal").modal("show");
	$.ajax({
		url: API + "role/" + param,
		type: "GET",
		dataType: "JSON",
		success: function (results) {
			$("#role").val(results.data.role);
			$("#id_role").val(results.data.id_role);
		},
	});
}

$("#btn_submitRole").on("click", function (e) {
	e.preventDefault();
	$.ajax({
		url: API + "role/",
		type: "PUT",
		dataType: "JSON",
		data: {
			id_role: $("#id_role").val(),
			role: $("#role").val(),
		},
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success(results.message);
				$("#roleModal").modal("hide");
				grid_all.ajax.reload();
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
