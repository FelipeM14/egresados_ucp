<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="Portal egresados Universidad Catolica de Pereira">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main.css') }}" rel="stylesheet">
    <link href="{{ mix('css/change_styles.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">

        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

            <!--ENCABEZADO -->
            <div class="app-header header-shadow bg-success">
                <div class="app-header__logo">

                    <div  class="logo-src"></div>
                    <div class="header__pane ml-auto">

                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <h4 class="hamburger-box text-white">
                                    <i class="fas fa-bars"></i>
                                </h4>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="app-header__content">
                    <div class="app-header-left">
                    </div>
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">

                                            <ul class="navbar-nav ml-auto">
                                                @guest
                                                    <li class="nav-item">
                                                        <a class="nav-link active text-white" href="{{ route('login') }}">Ingresar</a>
                                                    </li>
                                                @else
                                                    <li class="nav-item dropdown active">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                Salir
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </li>
                                                @endguest
                                            </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-main">

                <!-- MENU IZQUIERO -->
                <div class="app-sidebar sidebar-shadow">
                    @include('layouts.menus.left_app_menu')
                </div>

                <div class="app-main__outer">

                    <!-- CONTENIDO CENTRAL-->
                    <div id="app" class="app-main__inner p-3">

                        @yield('content')

                    </div>

                    <!-- PIE DE PAGINA-->
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                Footer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
