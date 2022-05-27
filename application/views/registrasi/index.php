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
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Daftar Pengelola Ecotourism</h3>
                        <form action="" class="signin-form" enctype="multipart/form-data" id="form_registasi">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama Pengguna" required id="username" name="username" autocomplete="off">
                                <p class="text-danger username_error"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" required id="email" name="email" autocomplete="off">
                                <p class="text-danger email_error"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nomor Telepon" required id="no_telp" name="no_telp" autocomplete="off">
                                <p class="text-danger no_telp_error"></p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Kata Sandi" required autocomplete="off">
                                        <p class="text-danger password_error"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="re_password" name="re_password" type="password" class="form-control" placeholder="Konfirmasi Kata Sandi" required autocomplete="off">
                                        <p class="text-danger re_password_error"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="btn_registrasi" class="form-control btn submit px-3" style="background-color: #0093AB;">Daftar</button>
                            </div>
                        </form>
                    </div>
                    <p>Sudah punya akun? <a href="<?= base_url() ?>" style="color:aliceblue;">Masuk</a></p>
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