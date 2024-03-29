$(document).ready(function () {
	console.log(API);
});

$("#btn_login").on("click", function () {
	$("#form_login").validate({
		rules: {
			email: "required",
			password: "required",
		},
		messages: {
			email: {
				required: "Email harus diisi !",
			},
			password: {
				required: "Kata sandi harus diisi !",
			},
		},
		submitHandler: function (forms) {
			submitIsClick(forms);
		},
	});
});

$("#btn_registrasi").on("click", function () {
	$("#form_registasi").validate({
		rules: {
			email: {
				required: true,
				email: true,
			},
			password: {
				required: true,
				minlength: 5,
			},
			no_telp: {
				required: true,
				minlength: 12,
			},
			username: "required",
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
			password: {
				required: "Kata sandi harus diisi !",
				minlength: "Kata sandi minimal 5 karakter",
			},
			username: {
				required: "Username harus diisi !",
			},
			no_telp: {
				required: "Nomor telepon harus diisi !",
				minlength: "Nomor telepon minimal 12 angka",
			},
			re_password: {
				required: "Konfirmasi kata sandi harus diisi !",
				minlength: "Kata sandi minimal 5 karakter",
				equalTo: "Konfirmasi kata sandi salah !",
			},
		},
		submitHandler: function (forms) {
			submitRegistrationIsClick(forms);
		},
	});
});

function submitRegistrationIsClick(forms) {
	let data = {
		email: $("#email").val(),
		password: $("#password").val(),
		username: $("#username").val(),
		no_telp: $("#no_telp").val(),
		pengelola: true,
	};

	console.log(data);

	$.ajax({
		url: API + "auth/registration",
		type: "POST",
		dataType: "JSON",
		data: data,
		success: function (results) {
			console.log(results)
			if (results.code !== 200) {
				error(results.message);
			} else {
				success_registration(
					results.message,
					"Silahkan cek mail, untuk memverifikasi akun email"
				);
			}
		},
	});
}

function submitIsClick(forms) {
	let data = {
		email: $("#email").val(),
		password: $("#password").val(),
	};
	// console.log(data)
	$.ajax({
		url: API + "auth",
		type: "POST",
		dataType: "JSON",
		data: data,
		success: function (data) {
			if (data.code != 200) {
				error(data.message);
			} else {
				success(data.message);
				let datas = data.data;

				if (datas.role_id == 2) {
					$.ajax({
						url: API + "pariwisata/search?pengguna_id=" + datas.id_pengguna,
						type: "GET",
						success: function (pariwisata) {
							let kategori = pariwisata.data[0];
							if (kategori.id_kategori_pariwisata == 35) {
								datas.wisata = kategori.wisata[0];
							} else if (kategori.id_kategori_pariwisata == 36) {
								datas.wisata = kategori.kuliner[0];
							} else if (kategori.id_kategori_pariwisata == 38) {
								datas.wisata = kategori.penginapan[0];
							} else if (kategori.id_kategori_pariwisata == 39) {
								datas.wisata = kategori.oleh_oleh[0];
							}

							verify(datas);
						},
					});
				} else {
					verify(datas);
				}

				// if (datas.role_id == 2) {
				//     $.ajax({
				//         url: API+'pariwisata/search?pengguna_id=' + datas.id_pengguna,
				//         type: 'GET',
				//         success: function (wisata) {
				//             datas.wisata = wisata.data[0]
				//             verify(datas)
				//         }
				//     })
				// } else {
				// verify(datas)
				// }
			}
		},
	});
}

$("#btn_cekEmail").on("click", function () {
	$(".error-email").html("");
	$(".success-email").html("");
	$.ajax({
		url: API + "auth/cekEmail",
		data: {
			email: $("#email").val(),
		},
		type: "POST",
		dataType: "JSON",
		success: function (results) {
			console.log(results);
			if (results.code != 200) {
				error(results.message);
			} else {
				success(results.message);
			}
		},
	});
});

$("#btn_sendEmail").on("click", function () {
	$("#form_sendEmail").validate({
		rules: {
			email: {
				required: true,
				email: true,
			},
		},
		messages: {
			email: {
				required: "Email harus diisi !",
				email: "Format email salah !",
			},
		},
		submitHandler: function (forms) {
			submitSendEmailIsClick();
		},
	});
});

function submitSendEmailIsClick() {
	$.ajax({
		url: API + "auth/lupa_password",
		type: "POST",
		data: {
			email: $("#email").val(),
		},
		dataType: "JSON",
		success: function (results) {
			if (results.code != 200) {
				error(results.message);
			} else {
				success_registration(
					"Link lupa password berhasil dikirim",
					"Silahkan cek email anda",
					"lupa password"
				);
			}
		},
	});
}

function verify(data) {
	$.ajax({
		url: base_url + "Auth/verify/",
		data: data,
		type: "POST",
		dataType: "JSON",
		success: function (result) {
			setTimeout(function () {
				location.href = base_url + "dashboard";
			}, 1000);
		},
	});
}

function error(params) {
	Swal.fire({
		icon: "error",
		title: "Oops...",
		text: "" + params,
	});
}

function success_registration(title = null, text = null, type = null) {
	Swal.fire({
		icon: "success",
		title: "" + title,
		text: "" + text,
		showConfirmButton: true,
	}).then(function (isConfirm) {
		if (isConfirm) {
			if (type == "lupa password") {
				location.href = base_url + "Auth/reset_password";
			} else {
				location.href = base_url;
			}
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
