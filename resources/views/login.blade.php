<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Chat</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{asset('assets/img/favicon.svg')}}" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/atlantis.min.css')}}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">




    <!-- css chat -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">



    <!-- CSS no -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}">

</head>




<body class="login-page">
<div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="text-center">
            <img src="../assets/img/logo3.svg" class="logo-login" alt="">
        </div>



        <form action="#" method="post" class="text-left login-form">


            <div class="form-group fontuser">
                <label><b>E-mail</b></label>
                <input type="text"
                       placeholder="Ingrese su e-mail"
                       name="uname" required>
                <i class="fa fa-envelope fa-lg"></i>
            </div>

            <div class="form-group fontuser">
                <label><b>Contraseña</b></label>
                <input type="text"
                       placeholder="Ingrese su contraseña"
                       name="uname" required>
                <i class="fa fa-lock fa-lg"></i>
            </div>

            <!-- <div class="form-group">
                <label for="email2">E-mail</label>
                <input type="email" class="form-control" id="" placeholder="Ingrese su E-mail">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="" placeholder="Ingrese su contraseña">
            </div> -->

            <div class="text-center">
                <a href="login-establecer.html" class="btn btn-login btn-round mt-3">Ingresar</a>
            </div>
        </form>

        <div class="mt-3">
            <a href="login-reestablecer.html" class="forget">Olvidé mi contraseña</a>
        </div>

    </div>












    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <!-- <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script> -->

    <!-- jQuery Scrollbar -->
    <!-- <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->


    <!-- Chart JS -->

    <!-- jQuery Sparkline -->

    <!-- Chart Circle -->

    <!-- Datatables -->

</body>
</html>
