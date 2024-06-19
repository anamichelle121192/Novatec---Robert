<!DOCTYPE html>
<html lang="es">
    @include('layouts.head')
    <body>
        
        <!-- Preloader -->
        <div class="preloader"><img src="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo_2023_favicon-03.png" alt="loader" class="lds-ripple img-fluid" /></div>
        <!-- Preloader -->
        <div class="preloader"><img src="https://gruponovalty.com/wp-content/uploads/2023/10/novalty_logo_2023_favicon-03.png" alt="loader" class="lds-ripple img-fluid" /></div>

        <!-- CONTENIDO DE BODY -->
       
        <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <!--  MENU -->
            @include('layouts.aside')
            <!--  FIN MENU -->

            <!--  Main -->
            <div class="body-wrapper">
                <!-- HEADER -->
                @include('layouts.header')
                <!-- FIN HEADER -->

                <!-- CONTENIDO DE LA PAGINA -->
                <div class="container-fluid mw-100">
                    @yield('content')
                    
                </div>
            </div>
            <div class="dark-transparent sidebartoggler"></div>
            <div class="dark-transparent sidebartoggler"></div>
        </div>

        @include('layouts.footer')
    </body>
</html>