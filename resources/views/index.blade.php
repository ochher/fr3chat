<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Chat</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets/img/favicon.svg') }}" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">




    <!-- css chat -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">



    <!-- CSS no -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">




</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="index.blade.php" class="logo">
                <img src="assets/img/logo3.svg" width="130px" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

            <div class="container-fluid">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pr-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Buscar ..." class="form-control">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                            <li>
                                <div class="dropdown-title d-flex justify-content-between align-items-center">
                                    Messages
                                    <a href="#" class="small">Mark all as read</a>
                                </div>
                            </li>
                            <li>
                                <div class="message-notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/jm_denis.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jimmy Denis</span>
                                                <span class="block">
                                                    How are you ?
                                                </span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/chadengle.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Chad</span>
                                                <span class="block">
                                                    Ok, Thanks !
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/mlane.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jhon Doe</span>
                                                <span class="block">
                                                    Ready for the meeting today...
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/talha.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Talha</span>
                                                <span class="block">
                                                    Hi, Apa Kabar ?
                                                </span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="notification">4</span>
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            <li>
                                <div class="dropdown-title">Tienes 4 notificaciones</div>
                            </li>
                            <li>
                                <div class="notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                            <div class="notif-content">
													<span class="block">
														Departamento de RH
													</span>
                                                <span class="time">Hace 5 minutos</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                            <div class="notif-content">
													<span class="block">
														Notificación de ventas
													</span>
                                                <span class="time">Hace 12 minutos</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
													<span class="block">
														Soporte
													</span>
                                                <span class="time">Hace 3 minutos</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                            <div class="notif-content">
													<span class="block">
														Departamento de quejas
													</span>
                                                <span class="time">Hace 2 minutos</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- <li>
                                <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fas fa-layer-group"></i>
                        </a>
                        <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                            <div class="quick-actions-header">
                                <span class="title mb-1">Acciones Rapidas</span>
                            </div>
                            <div class="quick-actions-scroll scrollbar-outer">
                                <div class="quick-actions-items">
                                    <div class="row m-0">
                                        <a class="col-6 col-md-4 p-0" href="nuevo-usuario.html">
                                            <div class="quick-actions-item">
                                                <i class="fas fa fa-user"></i>
                                                <span class="text">Nuevo Usuario</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="nuevo-departamento.html">
                                            <div class="quick-actions-item">
                                                <i class="fas fa fa-building"></i>
                                                <span class="text">Nuevo Departamento</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="perfil.html">
                                            <div class="quick-actions-item">
                                                <i class="fas fa fa-gear"></i>
                                                <span class="text">Ir a configuración</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="assets/img/mariana.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg"><img src="assets/img/mariana.jpg" alt="image profile" class="avatar-img rounded"></div>
                                        <div class="u-text">
                                            <h4 class="text-dark">Mariana Boo</h4>
                                            <p class="text-muted">hello@example.com</p><a href="perfil.html" class="btn btn-xs btn-secondary btn-sm">Ver perfil</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="perfil.html">Ajustes</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#outModal">Cerrar sesión</a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="assets/img/mariana.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Mariana Boo
									<span class="user-level">Administrador</span>
									<span class="caret"></span>
								</span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="perfil.html">
                                        <span class="link-collapse">Mi perfil</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="perfil.html">
                                        <span class="link-collapse">Ajustes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#outModal">
                                        <span class="link-collapse">Cerrar sesión</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">

                    <li class="nav-item active">
                        <a href="index.blade.php">
                            <i class="fas fa-comment"></i>
                            <p>Chats</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="departamentos.html">
                            <i class="fa fa-building"></i>
                            <p>Departamentos</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="usuarios.html">
                            <i class="fas fa-user-friends"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="historial.html">
                            <i class="fas fa-history"></i>
                            <p>Historial</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->














    <!-- Panel general derecho -->
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold pl-3">Chats</h2>
                            <!-- 								<h5 class="text-white op-7 mb-2">Departamentos</h5>
                             -->							</div>
                        <div class="ml-md-auto py-2 py-md-0 pr-3">
                            <a href="nuevo-departamento.html" class="btn btn-white btn-border btn-round mr-2">Nuevo departamento</a>
                            <a href="nuevo-usuario.html" class="btn btn-secondary btn-round">Nuevo usuario</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interior de pagina -->
            <div class="page-inner mt--5">


                <!-- tabs -->
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <ul class="nav nav-pills nav-secondary nav-pills-no-bd text-center" id="pills-tab-without-border" role="tablist">
                                <li class="nav-item">
                                    <a href="nuevo-departamento.html" class="nav-link"><img src="vendors/images/plus.svg" width="50px" class="rounded-circle chat-img" alt=""></a>
                                    <p>Nuevo</p>
                                    <!-- <a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">Home</a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-selected="true"><img src="assets/img/chat/nina.jpg" class="rounded-circle chat-img" alt=""></a>
                                    <p>Soporte</p>
                                    <!-- <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-selected="true"><img src="assets/img/chat/mariana.jpg" class="rounded-circle chat-img" alt=""></a>
                                    <p>Ventas</p>
                                    <!-- <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-selected="true"><img src="assets/img/chat/mandy.jpg" class="rounded-circle chat-img" alt=""></a>
                                    <p><i class="fa fa-comments text-danger"></i>RH</p>
                                    <!-- <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Contact</a> -->
                                </li>
                            </ul>

                            <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                                <div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">

                                    <!-- inicio de chat -->
                                    <div class="bg-white border-radius-4 box-shadow">
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="chat-list bg-light-gray">
                                                    <div class="chat-search">
                                                        <span class="fa fa-search"></span>
                                                        <input type="text" placeholder="Buscar chat">
                                                    </div>
                                                    <div class="notification-list chat-notification-list customscroll">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li class="active">
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 5 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 4 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 3 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-sm-12">
                                                <div class="chat-detail">
                                                    <div class="chat-profile-header clearfix">
                                                        <div class="left">
                                                            <div class="clearfix">
                                                                <div class="chat-profile-photo">
                                                                    <img src="assets/img/chat/nina.jpg" alt="">
                                                                </div>
                                                                <div class="chat-profile-name">
                                                                    <h3>Lizbeth Pacheco</h3>
                                                                    <span>Soporte</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right text-right">
                                                            <div class="dropdown">
                                                                <a class="btn btn-outline-primary" href="#" role="button" data-toggle="dropdown">
                                                                    Opciones
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#finishModal">Terminar chat</a>
                                                                    <a class="dropdown-item" href="#"data-toggle="modal" data-target="#transferModal">Transferir Chat</a>
                                                                    <a class="dropdown-item text-light-orange" href="#" data-toggle="modal" data-target="#trashModal">Borrar Chat</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-box">
                                                        <div class="chat-desc customscroll">
                                                            <ul>
                                                                <li class="clearfix admin_chat">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img2.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Hola, buenas noches.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img2.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Como puedo ayudarle?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img1.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Hola, me podría dar mas información sobre los productos y servicios que manejan actualmente?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img1.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have requirements prepared. Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img2.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Maybe you already have additional info?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img2.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>It is to early to provide some kind of estimation here. We need user stories.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img1.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>We are just writing up the user stories now so will have requirements for you next week. We are just writing up the user stories now so will have requirements for you next week.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img1.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have requirements prepared. Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix upload-file">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img1.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <div class="upload-file-box clearfix">
                                                                            <div class="left">
                                                                                <img src="assets/img/chat/upload-file-img.jpg" alt="">
                                                                                <div class="overlay">
                                                                                    <a href="#">
                                                                                        <span><i class="fa fa-angle-down"></i></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right">
                                                                                <h3>Big room.jpg</h3>
                                                                                <a href="#">Download</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix upload-file admin_chat">
												<span class="chat-img">
													<img src="assets/img/chat/chat-img2.jpg" alt="">
												</span>
                                                                    <div class="chat-body clearfix">
                                                                        <div class="upload-file-box clearfix">
                                                                            <div class="left">
                                                                                <img src="assets/img/chat/upload-file-img.jpg" alt="">
                                                                                <div class="overlay">
                                                                                    <a href="#">
                                                                                        <span><i class="fa fa-angle-down"></i></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right">
                                                                                <h3>Big room.jpg</h3>
                                                                                <a href="#">Download</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="chat-footer">
                                                            <div class="file-upload"><a href="#"><i class="fa fa-paperclip"></i></a></div>
                                                            <div class="chat_text_area">
                                                                <textarea placeholder="Escriba su mensaje…"></textarea>
                                                            </div>
                                                            <div class="chat_send">
                                                                <button class="btn btn-link" type="submit"><i class="fas fa-paper-plane"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin de chat -->
                                </div>


                                <!-- contenido de tab -->
                                <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                                    <!-- inicio de chat -->
                                    <div class="bg-white border-radius-4 box-shadow">
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="chat-list bg-light-gray">
                                                    <div class="chat-search">
                                                        <span class="fa fa-search"></span>
                                                        <input type="text" placeholder="Buscar chat">
                                                    </div>
                                                    <div class="notification-list chat-notification-list customscroll">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li class="active">
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 5 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 4 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 3 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-sm-12">
                                                <div class="chat-detail">
                                                    <div class="chat-profile-header clearfix">
                                                        <div class="left">
                                                            <div class="clearfix">
                                                                <div class="chat-profile-photo">
                                                                    <img src="assets/img/chat/mariana.jpg" alt="">
                                                                </div>
                                                                <div class="chat-profile-name">
                                                                    <h3>Mariana Pérez</h3>
                                                                    <span>Ventas</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right text-right">
                                                            <div class="dropdown">
                                                                <a class="btn btn-outline-primary" href="#" role="button" data-toggle="dropdown">
                                                                    Opciones
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Transferir Chat</a>
                                                                    <a class="dropdown-item" href="#">Search</a>
                                                                    <a class="dropdown-item text-light-orange" href="#">Borrar Chat</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-box">
                                                        <div class="chat-desc customscroll">
                                                            <ul>
                                                                <li class="clearfix admin_chat">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img2.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Hola, buenas noches.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img2.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Como puedo ayudarle?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img1.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Hola, me podría dar mas información sobre los productos y servicios que manejan actualmente?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img1.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have requirements prepared. Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img2.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Maybe you already have additional info?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img2.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>It is to early to provide some kind of estimation here. We need user stories.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img1.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>We are just writing up the user stories now so will have requirements for you next week. We are just writing up the user stories now so will have requirements for you next week.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img1.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have requirements prepared. Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix upload-file">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img1.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <div class="upload-file-box clearfix">
                                                                            <div class="left">
                                                                                <img src="assets/img/chat/upload-file-img.jpg" alt="">
                                                                                <div class="overlay">
                                                                                    <a href="#">
                                                                                        <span><i class="fa fa-angle-down"></i></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right">
                                                                                <h3>Big room.jpg</h3>
                                                                                <a href="#">Download</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix upload-file admin_chat">
																		<span class="chat-img">
																			<img src="assets/img/chat/chat-img2.jpg" alt="">
																		</span>
                                                                    <div class="chat-body clearfix">
                                                                        <div class="upload-file-box clearfix">
                                                                            <div class="left">
                                                                                <img src="assets/img/chat/upload-file-img.jpg" alt="">
                                                                                <div class="overlay">
                                                                                    <a href="#">
                                                                                        <span><i class="fa fa-angle-down"></i></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right">
                                                                                <h3>Big room.jpg</h3>
                                                                                <a href="#">Download</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="chat-footer">
                                                            <div class="file-upload"><a href="#"><i class="fa fa-paperclip"></i></a></div>
                                                            <div class="chat_text_area">
                                                                <textarea placeholder="Escriba su mensaje…"></textarea>
                                                            </div>
                                                            <div class="chat_send">
                                                                <button class="btn btn-link" type="submit"><i class="fas fa-paper-plane"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin de chat -->
                                </div>
                                <!-- fin de contenido de tab -->

                                <!-- contenido de tab -->
                                <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
                                    <!-- inicio de chat -->
                                    <div class="bg-white border-radius-4 box-shadow">
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="chat-list bg-light-gray">
                                                    <div class="chat-search">
                                                        <span class="fa fa-search"></span>
                                                        <input type="text" placeholder="Buscar chat">
                                                    </div>
                                                    <div class="notification-list chat-notification-list customscroll">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li class="active">
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-green"></i> online</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 5 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 4 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-warning"></i> active 3 min</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="assets/img/chat/img.jpg" alt="">
                                                                    <h3 class="clearfix">Víctor Manuelle</h3>
                                                                    <p><i class="fa fa-circle text-light-orange"></i> offline</p>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-sm-12">
                                                <div class="chat-detail">
                                                    <div class="chat-profile-header clearfix">
                                                        <div class="left">
                                                            <div class="clearfix">
                                                                <div class="chat-profile-photo">
                                                                    <img src="assets/img/chat/mandy.jpg" alt="">
                                                                </div>
                                                                <div class="chat-profile-name">
                                                                    <h3>Jaqueline Sosa</h3>
                                                                    <span>Recursos Humanos</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right text-right">
                                                            <div class="dropdown">
                                                                <a class="btn btn-outline-primary" href="#" role="button" data-toggle="dropdown">
                                                                    Opciones
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Transferir Chat</a>
                                                                    <a class="dropdown-item" href="#">Search</a>
                                                                    <a class="dropdown-item text-light-orange" href="#">Borrar Chat</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-box">
                                                        <div class="chat-desc customscroll">
                                                            <ul>
                                                                <li class="clearfix admin_chat">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img2.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Hola, buenas noches.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img2.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Como puedo ayudarle?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img1.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Hola, me podría dar mas información sobre los productos y servicios que manejan actualmente?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img1.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have requirements prepared. Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img2.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Maybe you already have additional info?</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix admin_chat">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img2.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>It is to early to provide some kind of estimation here. We need user stories.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img1.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>We are just writing up the user stories now so will have requirements for you next week. We are just writing up the user stories now so will have requirements for you next week.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img1.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <p>Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have requirements prepared. Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have.</p>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix upload-file">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img1.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <div class="upload-file-box clearfix">
                                                                            <div class="left">
                                                                                <img src="assets/img/chat/upload-file-img.jpg" alt="">
                                                                                <div class="overlay">
                                                                                    <a href="#">
                                                                                        <span><i class="fa fa-angle-down"></i></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right">
                                                                                <h3>Big room.jpg</h3>
                                                                                <a href="#">Download</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix upload-file admin_chat">
																			<span class="chat-img">
																				<img src="assets/img/chat/chat-img2.jpg" alt="">
																			</span>
                                                                    <div class="chat-body clearfix">
                                                                        <div class="upload-file-box clearfix">
                                                                            <div class="left">
                                                                                <img src="assets/img/chat/upload-file-img.jpg" alt="">
                                                                                <div class="overlay">
                                                                                    <a href="#">
                                                                                        <span><i class="fa fa-angle-down"></i></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right">
                                                                                <h3>Big room.jpg</h3>
                                                                                <a href="#">Download</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat_time">09:40PM</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="chat-footer">
                                                            <div class="file-upload"><a href="#"><i class="fa fa-paperclip"></i></a></div>
                                                            <div class="chat_text_area">
                                                                <textarea placeholder="Escriba su mensaje…"></textarea>
                                                            </div>
                                                            <div class="chat_send">
                                                                <button class="btn btn-link" type="submit"><i class="fas fa-paper-plane"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin de chat -->
                                    <!-- fin de contenido de tab	 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin de tabs -->





            </div>
            <!-- fin de interior de pagina -->

        </div>
        <!-- fin de panel general derecho -->


        <!-- inicio de footer -->
        <footer class="footer">
            <div class="container-fluid">
                <!-- <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <div class="copyright ml-auto">
                    2021, Derechos reservados, <strong>Powered by </strong><a href="https://fr3estudio.mx/" class="text-footer" target="_blank">FR3ESTUDIO</a>
                </div>
            </div>
        </footer>
    </div>
    <!-- fin de footer -->
</div>


<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="assets/js/atlantis.min.js"></script>



<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="assets/js/setting-demo.js"></script>
<script src="assets/js/demo.js"></script>
<script>
    Circles.create({
        id:'circles-1',
        radius:45,
        value:60,
        maxValue:100,
        width:7,
        text: 5,
        colors:['#f1f1f1', '#FF9E27'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    Circles.create({
        id:'circles-2',
        radius:45,
        value:70,
        maxValue:100,
        width:7,
        text: 36,
        colors:['#f1f1f1', '#2BB930'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    Circles.create({
        id:'circles-3',
        radius:45,
        value:40,
        maxValue:100,
        width:7,
        text: 12,
        colors:['#f1f1f1', '#F25961'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: 'bar',
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
            datasets : [{
                label: "Total Income",
                backgroundColor: '#ff9e27',
                borderColor: 'rgb(23, 125, 255)',
                data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false //this will remove only the label
                    },
                    gridLines : {
                        drawBorder: false,
                        display : false
                    }
                }],
                xAxes : [ {
                    gridLines : {
                        drawBorder: false,
                        display : false
                    }
                }]
            },
        }
    });

    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
</script>



<!-- js chat -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>




<!-- modal finish -->
<div class="modal fade" id="finishModal" tabindex="-1" role="dialog" aria-labelledby="finishModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-body">
                <img src="assets/img/iconos/alert2.svg" width="60px" alt="" class="modal-icon">
                <h3>¿Esta seguro de terminar el chat?</h3>
            </div>
            <div class="modal-footer">
                <div>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- modal transfer -->
<div class="modal fade" id="transferModal" tabindex="-1" role="dialog" aria-labelledby="transferModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="row">
                <div class="col-12">


                    <div class="modal-body">
                        <h3>¿A que área deseas transferir el chat?</h3>


                        <div class="text-center">
                            <ul class="nav nav-pills nav-secondary nav-pills-no-bd modal-circle" id="pills-tab-without-border" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" role="tab" aria-selected="true"><img src="assets/img/chat/nina.jpg" class="rounded-circle chat-img" alt=""></a>
                                    <p>Soporte</p>
                                    <!-- <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="#" role="tab" aria-selected="true"><img src="assets/img/chat/mariana.jpg" class="rounded-circle chat-img" alt=""></a>
                                    <p>Ventas</p>
                                    <!-- <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="#" role="tab" aria-selected="true"><img src="assets/img/chat/mandy.jpg" class="rounded-circle chat-img" alt=""></a>
                                    <p>RH</p>
                                    <!-- <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Contact</a> -->
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <div>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal trash -->
<div class="modal fade" id="trashModal" tabindex="-1" role="dialog" aria-labelledby="trashModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-body">
                <img src="assets/img/iconos/alert2.svg" width="60px" alt="" class="modal-icon">
                <h3>¿Esta seguro de eliminar el chat?</h3>
            </div>
            <div class="modal-footer">
                <div>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- modal out -->
<div class="modal fade" id="outModal" tabindex="-1" role="dialog" aria-labelledby="outModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-body">
                <img src="assets/img/iconos/alert2.svg" width="60px" alt="" class="modal-icon">
                <h3>¿Desea Salir?</h3>
            </div>
            <div class="modal-footer">
                <div>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>
