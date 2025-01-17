<!--  Header Start -->
<header class="app-header"> 
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)"><i class="ti ti-menu-2"></i></a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="ti ti-search"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav quick-links d-none d-lg-flex">
            <!-- <li class="nav-item dropdown hover-dd d-none d-lg-block">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Apps<span class="mt-1"><i class="ti ti-chevron-down"></i></span></a>
                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                    <div class="row">
                        <div class="col-8">
                            <div class=" ps-7 pt-7">
                                <div class="border-bottom">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="position-relative">
                                                <a href="./app-chat.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none"><div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"><img src="/theme/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24"></div><div class="d-inline-block"><h6 class="mb-1 fw-semibold bg-hover-primary">Chat Application</h6><span class="fs-2 d-block text-dark">New messages arrived</span></div></a>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-8"><a class="fw-semibold text-dark d-flex align-items-center lh-1 text-decoration-none" href="#"><i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a></div>
                                    <div class="col-4"><div class="d-flex justify-content-end pe-4"><button class="btn btn-primary">Check</button></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ms-n4">
                            <div class="position-relative p-7 border-start h-100">
                                <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                <ul class="">
                                    <li class="mb-3"><a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="./page-pricing.html">Pricing Page</a></li>                          
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li> -->
            <li class="nav-item dropdown-hover d-none d-lg-block"><a class="nav-link" href="/">Calendario</a></li>
        </ul>
        <div class="d-block d-lg-none">
            <img src="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo-2023.png" class="dark-logo" style="max-height: 30px;" alt="" />
            <img src="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo_2023_bl_logo.png" class="light-logo" style="max-height: 30px;" alt="" />
        </div>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="p-2"><i class="ti ti-dots fs-7"></i></span></button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between">
                <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions"><i class="ti ti-align-justified fs-7"></i></a>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">                 
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-bell-ringing"></i><div class="notification bg-primary rounded-circle"></div></a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                <h5 class="mb-0 fs-5 fw-semibold">Notificaciones</h5>
                                <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 nuevos</span>
                            </div>
                            <div class="message-body" data-simplebar>
                        
                                <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                    <span class="me-3"><img src="/theme/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" /></span>
                                    <div class="w-75 d-inline-block v-middle">
                                        <h6 class="mb-1 fw-semibold">New message</h6>
                                        <span class="d-block">Salma sent you new message</span>
                                    </div>
                                </a>                        
                            
                            </div>
                            <div class="py-6 px-7 mb-1"><button class="btn btn-outline-primary w-100"> Mostrar todas las notificaciones </button></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="user-profile-img"><img src="/theme/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="" /></div>
                            </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                            <div class="profile-dropdown position-relative" data-simplebar>
                                <div class="py-3 px-7 pb-0"><h5 class="mb-0 fs-5 fw-semibold">Perfil de usuario</h5></div>
                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                    <img src="/theme/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="" />
                                    <div class="ms-3">
                                        <h5 class="mb-1 fs-3">{{ session('user')['nom'] }}</h5>
                                        <span class="mb-1 d-block text-dark">{{ session('user')['car'] }}</span>
                                        <p class="mb-0 d-flex text-dark align-items-center gap-2"><i class="ti ti-mail fs-4"></i> <span style="font-size: 11px;">{{ session('user')['usu'] }}</span></p>
                                    </div>
                                </div>
                                <div class="message-body">
                                    <a href="/perfil" class="py-8 px-7 mt-8 d-flex align-items-center">
                                        <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6"><img src="/theme/images/svgs/icon-account.svg" alt="" width="24" height="24"></span>
                                        <div class="w-75 d-inline-block v-middle ps-3">
                                            <h6 class="mb-1 bg-hover-primary fw-semibold"> Mi Perfil </h6>
                                            <span class="d-block text-dark">Configuración de Cuenta</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-grid py-4 px-7 pt-8"><a href="/logout" class="btn btn-outline-primary">Cerrar Sesión</a></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--  Header End -->