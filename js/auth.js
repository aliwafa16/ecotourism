$('#btn_login').on('click', function () {
    $('#form_login').validate({
        rules: {
            email: 'required',
            password:'required'
        },
        messages: {
            email: {
                required : 'Email harus diisi !'
            },
            password: {
                required : 'Kata sandi harus diisi !'
            }
        },
        submitHandler: function (forms) {
            submitIsClick(forms);
        }
    })
})


$('#btn_registrasi').on('click', function () {
    $('#form_registasi').validate({
        rules: {
            email: {
                required: true,
                email:true
            },
            password: {
                required: true,
                minlength : 5,
            },
            username: 'required',
            re_password: {
                required: true,
                minlength: 5,
                equalTo : '#password'
            }
        },
        messages: {
            email: {
                required: 'Email harus diisi !',
                email : 'Format email salah !'
            },
            password: {
                required: 'Kata sandi harus diisi !',
                minlength : 'Kata sandi minimal 5 karakter'
            },
            username: {
                required: 'Username harus diisi !'
            },
            re_password: {
                required: 'Konfirmasi kata sandi harus diisi !',
                minlength: 'Kata sandi minimal 5 karakter',
                equalTo : 'Konfirmasi kata sandi salah !'
            }
        },
        submitHandler: function (forms) {
            submitRegistrationIsClick(forms)
        }
    })
})


function submitRegistrationIsClick(forms) {
    let data = {
        email: $('#email').val(),
        password: $('#password').val(),
        username: $('#username').val(),
        pengelola : true
    }

    $.ajax({
        url: 'http://localhost:8000/auth/registration',
        type: 'POST',
        dataType: 'JSON',
        data: data,
        success: function (results) {
            if (results.code !== 200) {
                error(results.message)
            } else {
                success_registration(results.message);
            }
        }
    })
}

function submitIsClick(forms) {
    let data = {
        email: $('#email').val(),
        password : $('#password').val()
    }
    // console.log(data)
    $.ajax({
        url: 'http://localhost:8000/auth',
        type: 'POST',
        dataType: 'JSON',
        data: data,
        success: function (data) {
            if (data.code != 200) {
                error(data.message)
            } else {
                success(data.message)
                let datas = data.data

                if(datas.role_id==2){
                    $.ajax({
                        url: 'http://localhost:8000/pariwisata/search?pengguna_id=' + datas.id_pengguna,
                        type: 'GET',
                        success: function (pariwisata) {
                            let kategori = pariwisata.data[0]
                            if(kategori.id_kategori_pariwisata == 35){
                                datas.wisata = kategori.wisata[0]
                            }else if(kategori.id_kategori_pariwisata == 36){
                                datas.wisata = kategori.kuliner[0]
                            }else if(kategori.id_kategori_pariwisata == 38){
                                datas.wisata = kategori.penginapan[0]
                            }else if(kategori.id_kategori_pariwisata == 39){
                                datas.wisata = kategori.oleh_oleh[0]
                            }

                            verify(datas)
                        }
                    })
                }else{

                    verify(datas)
                }

                // if (datas.role_id == 2) {
                //     $.ajax({
                //         url: 'http://localhost:8000/pariwisata/search?pengguna_id=' + datas.id_pengguna,
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
        }
    })
}

function verify(data) {
    $.ajax({
        url: base_url + 'Auth/verify/',
        data: data,
        type: 'POST',
        dataType: 'JSON',
        success: function (result) {
            setTimeout(function(){
                    location.href = base_url + 'dashboard'
            }, 1000)
        }
    })
}

function error(params) {
    Swal.fire({
icon: 'error',
  title: 'Oops...',
  text: ''+params,
})
}

function success_registration(params) {
    Swal.fire({
        icon: 'success',
        title: ''+params,
        text: 'Data akan divalidasi oleh adminstrator utama, silahkan cek email',
        showConfirmButton: true,
    }).then(function (isConfirm) {
        if (isConfirm) {
            location.href = base_url
        }
    })
}

function success(params) {
    Swal.fire({
        icon: 'success',
        title: ''+params,
        showConfirmButton: false,
        timer: 1500,
    })
}