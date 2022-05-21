$('#btn_login').on('click', function () {
    $('#form_login').validate({
        rules: {
            username: 'required',
            password:'required'
        },
        messages: {
            username: {
                required : 'Username harus diisi !'
            },
            password: {
                required : 'password harus diisi !'
            }
        },
        submitHandler: function (forms) {
            submitIsClick(forms);
        }
    })
})

function submitIsClick(forms) {
    let data = {
        nama: $('#username').val(),
        password : $('#password').val()
    }
    // console.log(data)
    $.ajax({
        url: 'http://localhost:8000/auth/sign-in/',
        type: 'POST',
        dataType: 'JSON',
        data: data,
        success: function (data) {
            if (data.code != 200) {
                error(data.message)
            } else {
                success(data.message)
                let datas = data.data

                if (datas.id_role == 2) {
                    $.ajax({
                        url: 'http://localhost:8000/wisata/find?id=' + datas.id_wisata,
                        type: 'GET',
                        success: function (wisata) {
                            datas.wisata = wisata.data[0]
                            verify(datas)
                        }
                    })
                } else {
                verify(datas)    
                }
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

function success(params) {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: ''+params,
        showConfirmButton: false,
        timer: 1500,
        width: '15rem'
    })
}