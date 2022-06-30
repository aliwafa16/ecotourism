<!doctype html>
<html lang="en">

<head>
    <title>Ecotourism Administator</title>
    <link rel="icon" href="<?= base_url('assets/auth/') ?>images/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/auth/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
    <script src="<?= base_url('assets/js/') ?>jquery-3.6.0.min.js"></script>
</head>

<script>
    const base_url = `<?= base_url() ?>`
</script>

<body class="img js-fullheight" style="background-image: url(<?= base_url('assets/auth/') ?>images/a.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Ecotourism Administator</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Lupa password</h3>
                        <p class="text-center">Silahkan masukan email untuk reset kata sandi</p>
                        <form action="" class="signin-form" enctype="multipart/form-data" id="form_sendEmail">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" required id="email" name="email" autocomplete="off">
                                <p class="text-danger email_error"></p>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="btn_sendEmail" class="form-control btn submit px-3" style="background-color: #0093AB;">Kirim</button>
                            </div>
                        </form>
                        <div class="d-flex">
                            <p style="color:lightgray">Sudah punya akun ?<a href="<?= base_url() ?>Auth/" class="font-weight-bold" style="color:white;"> Masuk</a> </p>
                        </div>
                    </div>
                    <!-- <div class="row justify-content-center">
                        <div class="col-lg-6 col-sm-6 text-center">
                            <a class="btn btn-primary btn-sm" style="background-color:#53BF9D !important; font-size:12px !important; border:none !important; color:white !important" href="<?= base_url() ?>Auth/registrasi">Daftar</a>
                        </div>
                        <div class="col-lg-6 col-sm-6-center">
                            <a class="btn btn-primary btn-sm" style="background-color: #F87474 !important; font-size:12px !important; border:none !important; color:white !important" href="<?= base_url() ?>Auth/lupa_password">Lupa password</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assets/auth/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/auth/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/auth/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/auth/') ?>js/main.js"></script>
    <script src="<?= base_url() ?>js/auth.js"></script>
    <script src="<?= base_url('assets/jquery-validation/dist/') ?>jquery.validate.js"></script>

</body>

</html>