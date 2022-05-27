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
                <div class="col-md-8 col-lg-12">
                    <h1 style="color:white; text-align:center" id="pesan"></h1>
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


    <script>
        $( document ).ready(function() {
            const pathArray = window.location.pathname.split("/");
            const token = pathArray[4]
            if(!token){
                location.href = base_url;
            }else{
                $.ajax({
                    url:'http://localhost:8000/auth/verifikasi',
                    data:{
                        token
                    },
                    type:'POST',
                    dataType : 'JSON',
                    success: function(result){
                        $('#pesan').text(result.message)
                    }
                })
            }
        });
    </script>

</body>

</html>