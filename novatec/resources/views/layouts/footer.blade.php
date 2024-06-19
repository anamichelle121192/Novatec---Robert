@yield('modal')

<!-- MENU OTHER -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
    <nav class="sidebar-nav scroll-sidebar">
        <div class="offcanvas-header justify-content-between">
            <img src="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo_2023_favicon-03.png" style="max-height: 50px;" alt="" class="img-fluid">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar=""  data-simplebar>
            <ul id="sidebarnav">
                <!-- <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><span><i class="ti ti-apps"></i></span><span class="hide-menu">Apps</span></a>
                    <ul aria-expanded="false" class="collapse first-level my-3">
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"><img src="/theme/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24"></div>
                                <div class="d-inline-block"><h6 class="mb-1 bg-hover-primary">Chat Application</h6><span class="fs-2 d-block fw-normal text-muted">New messages arrived</span></div>
                            </a>
                        </li>                
                        <ul class="px-8 mt-7 mb-4">
                            <li class="sidebar-item mb-3"><h5 class="fs-5 fw-semibold">Quick Links</h5></li>
                            <li class="sidebar-item py-2"><a class="fw-semibold text-dark" href="#">Pricing Page</a></li>
                        </ul>
                    </ul>
                </li> -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/" aria-expanded="false">
                        <span><i class="ti ti-calendar"></i></span>
                        <span class="hide-menu">Calendario</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- FIN MENU OTHER -->

<!-- BUSCADOR -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-1">
            <div class="modal-header border-bottom">
                <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                <span data-bs-dismiss="modal" class="lh-1 cursor-pointer"><i class="ti ti-x fs-5 ms-3"></i></span>
            </div>
            <div class="modal-body message-body" data-simplebar="">
                <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                <ul class="list mb-0 py-2">
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Modern</span>
                            <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- FIN BUSCADOR -->

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
<!--  current page js files -->
<script src="/theme/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="/theme/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="/theme/js/dashboard.js"></script>

@yield('footer')