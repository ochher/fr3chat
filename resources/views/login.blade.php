<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Chat</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{asset('assets/img/favicon.svg')}}" type="image/x-icon"/>
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
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/atlantis.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}">
</head>

<body class="login-page">
<div class="login-box">
    <div class="login-box-body">
        <div class="text-center">
            <img src="{{asset('assets/img/logo3.svg')}}" class="logo-login" alt="">
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group fontuser">
                <label for="email"><b>{{__('Email')}}</b></label>
                <input type="email" class="form-control" placeholder="{{__('Ingrese su Email')}}" id="email" name="email" required>
                <i class="fa fa-envelope fa-lg"></i>
            </div>
            <div class="form-group fontuser">
                <label for="password">
                    <b>{{__('Contraseña')}}</b>
                </label>
                <input type="password" placeholder="{{__('Ingrese su contraseña')}}" id="password" name="password" required>
                <i class="fa fa-lock fa-lg"></i>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-login btn-round mt-3">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
        <div class="mt-3">
            <a href="{{route('login')}}" class="forget">{{__('Olvidé mi contraseña')}}</a>
        </div>
    </div>

    <script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
</body>
</html>
