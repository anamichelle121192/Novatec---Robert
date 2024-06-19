<!DOCTYPE html>
<html lang="en">
    <head>
        <!--  Title -->
        <title>NOVATEC | INICIO DE SESION</title>
        <!--  Required Meta Tag -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="handheldfriendly" content="true" />
        <meta name="MobileOptimized" content="width" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="keywords" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--  Favicon -->
        <link rel="shortcut icon" type="image/png" href="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo_2023_favicon-03.png" />
        <!-- Core Css -->
        <link  id="themeColors"  rel="stylesheet" href="/theme/css/style.min.css" />
        <style>
            .fondo-log {background: url('/theme/images/backgrounds/fondo-login.jpg');background-size: cover;}
            .fondo-log img {max-height: 55px;}
            @media screen and (max-width: 1299px){.fondo-log {background: none;}}
        </style>
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader"><img src="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo_2023_favicon-03.png" alt="loader" class="lds-ripple img-fluid" /></div>
        <!-- Preloader -->
        <div class="preloader"><img src="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo_2023_favicon-03.png" alt="loader" class="lds-ripple img-fluid" /></div>
        <!--  Body Wrapper -->
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <div class="position-relative overflow-hidden radial-gradient min-vh-100">
                <div class="position-relative z-index-5">
                    <div class="row">
                        <div class="col-xl-7 col-xxl-8 fondo-log" >
                            <a href="/" class="text-nowrap logo-img d-block px-4 py-9 w-100"><img src="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo-2023.png" width="auto" alt="" ></a>
                            <!-- <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);"><img src="/theme/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500"></div> -->
                        </div>
                        <div class="col-xl-5 col-xxl-4">
                            <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                                <div class="col-sm-8 col-md-6 col-xl-9">
                                    <h2 class="mb-3 fs-7 fw-bolder">BIENVENIDO A NOVATEC</h2>
                                    <p class=" mb-9">&nbsp;</p>
                                    <!-- <div class="row"><div class="col-6 mb-2 mb-sm-0"><a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button"><img src="/theme/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18" height="18"><span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google</a></div><div class="col-6"><a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button"><img src="/theme/images/svgs/facebook-icon.svg" alt="" class="img-fluid me-2" width="18" height="18"><span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>FB</a></div></div> -->
                                    <!-- <div class="position-relative text-center my-4"><p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">or sign in with</p><span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span></div> -->
                                    <livewire:auth /> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    
        <!--  Import Js Files -->
        <script src="/theme/libs/jquery/dist/jquery.min.js"></script>
        <script src="/theme/libs/simplebar/dist/simplebar.min.js"></script>
        <script src="/theme/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!--  core files -->
        <script src="/theme/js/app.min.js"></script>
        <script src="/theme/js/app.init.js"></script>
        <script src="/theme/js/app-style-switcher.js"></script>
        <script src="/theme/js/sidebarmenu.js"></script>
        
        <script src="/theme/js/custom.js"></script>

    </body>
</html>