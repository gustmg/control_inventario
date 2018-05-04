<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
        @auth
        header,nav, main, footer {
            padding-left: 275px;
        }
        @media only screen and (max-width : 992px) {
          header, nav, main, footer {
            padding-left: 0;
          }
        }
        @endauth
    </style>
</head>
<body>
    <div id="app">
        @auth
        <div class="navbar-fixed">
            <nav>
                <div id="nav-bar" class="nav-wrapper blue-grey darken-4 trans-color">
                    <ul class="left">
                        <a href="#" data-activates="slide-out" class="menu hide-on-large-only"><i class="material-icons">menu</i></a>
                    </ul>
                    <a href="#!" class="breadcrumb hide-on-small-only">Configuración</a>
                    <a href="#!" class="breadcrumb hide-on-small-only">Usuarios</a>

                    <a class="brand-logo right" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <ul id="multiple-users-select-menu" class="right scale-transition scale-out">
                        <li><a href="#" class="tooltipped black-text" data-position="bottom" data-delay="50" data-tooltip="Eliminar usuarios seleccionados"><i class="material-icons">delete</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="collapsible side-nav fixed" data-collapsible="accordion" style="border-top:0;border-left:0;border-right: 0;width: 275px;">
            <div class="card blue-grey darken-3" style="margin-top: 0;margin-bottom: 0;border-radius: 0;">
                <div class="card-content white-text">
                    <h5>{{Auth::user()->UserFirstName}}</h5>
                    <h6>Perfil</h6>
                    <a href="{{route('home')}}" class="btn-floating tooltipped halfway-fab waves-effect waves-light blue darken-3 no-padding" data-position="bottom" data-delay="50" data-tooltip="Ir a la página principal"><i class="material-icons">home</i></a>
                </div>
            </div>
            <li class="no-padding" style="color: black;margin-left: 16px;">
                Módulos
            </li>
            <li id="purchases-menu" class="no-padding">
                <a class="collapsible-header">Compras<i class="material-icons">shopping_cart</i></a>
                <div class="collapsible-body">
                    <ul style="background-color:#ddd;">
                        <li><a href="#!">Artículos</a></li>
                        <li><a href="#!">Órdenes de Compra</a></li>
                        <li><a href="#!">Proveedores</a></li>
                        <li><a href="#!">Requisiciones de Compra</a></li>
                    </ul>
                </div>
            </li>
            <li id="production-menu" class="no-padding">
                <a class="collapsible-header"><i class="material-icons">business</i>Producción</a>
                <div class="collapsible-body">
                    <ul style="background-color:#ddd;">
                        <li><a href="#!">Materias Primas</a></li>
                        <li><a href="#!">Manufactura</a></li>
                    </ul>
                </div>
            </li>
            <li id="sales-menu" class="no-padding">
                <a class="collapsible-header">Ventas<i class="material-icons">local_offer</i></a>
                <div class="collapsible-body">
                    <ul style="background-color:#ddd;">
                        <li><a href="#!">Clientes</a></li>
                        <li><a href="#!">Punto de Venta</a></li>
                        <li><a href="#!">Ordenes de Venta</a></li>
                    </ul>
                </div>
            </li>
            <li id="inventory-menu" class="no-padding">
                <a class="collapsible-header">Inventarios<i class="material-icons">assignment</i></a>
                <div class="collapsible-body">
                    <ul style="background-color:#ddd;">
                        <li><a href="#!">Ajustes</a></li>
                        <li><a href="#!">Existencias</a></li>
                        <li><a href="#!">Almacenes</a></li>
                    </ul>
                </div>
            </li>
            <div class="divider"></div>
            <li id="config-menu" class="no-padding">
                <a class="collapsible-header">Configuración<i class="material-icons">settings</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('company')}}">Empresa</a></li>
                        <li><a href="{{route('users')}}">Usuarios</a></li>
                        <li><a href="#!">Perfiles</a></li>
                    </ul>
                </div>
            </li>
            <li class="no-padding">
                <a class="collapsible-header">Ayuda<i class="material-icons">help</i></a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header">Reportar un error<i class="material-icons">error</i></a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión<i class="material-icons">power_settings_new</i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        @endauth

        <main>
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".menu").sideNav();

            @if ($errors->has('email'))
                Materialize.toast('{{ $errors->first('email') }}', 2000);
            @endif
            @if ($errors->has('password'))
                Materialize.toast('{{ $errors->first('password') }}', 2000);
            @endif
            $('.carousel').carousel();

            $('.modal').modal();            

            var purchases_menu= document.getElementById("purchases-menu");
            var production_menu= document.getElementById("production-menu");
            var sales_menu= document.getElementById("sales-menu");
            var inventory_menu= document.getElementById("inventory-menu");
            var config_menu= document.getElementById("config-menu");

            purchases_menu.addEventListener("click", setActiveMenuColor, false);
            production_menu.addEventListener("click", setActiveMenuColor, false);
            sales_menu.addEventListener("click", setActiveMenuColor, false);
            inventory_menu.addEventListener("click", setActiveMenuColor, false);
            config_menu.addEventListener("click", setActiveMenuColor, false);

            $('.btn-floating.white.z-depth-0').mouseover(function(event) {
                //$(this).find('i').fadeTo(100, 1);
                $(this).find('i').css('opacity','1');
            });
            $('.btn-floating.white.z-depth-0').mouseout(function(event) {
                //$(this).find('i').fadeTo(100, .5);
                $(this).find('i').css('opacity','.5');
            });
        });

        function setActiveMenuColor(){
            if($('a i',this).hasClass('blue-text darken-1')){
                $('a i',this).removeClass('blue-text darken-1');
            }
            else{
                unsetAllActiveMenuColor();
                $('a i',this).addClass('blue-text darken-1');   
            }
        }

        function unsetAllActiveMenuColor(){
            $('#slide-out li a i').removeClass('blue-text darken-1');
        }

        function toggleSelectedUserMenu(){
            $('#multiple-users-select-menu').toggleClass('scale-in');
            $('#nav-bar').toggleClass('blue-grey darken-4 white');
            $('.menu').toggleClass('hide');
            $('.breadcrumb').toggleClass('hide');
            $('.brand-logo').toggleClass('hide');
            $('.toggle-selected-user').toggleClass('grey blue darken-3');
            $('.card-action.center.no-padding.no-select').slideToggle('fast');
        }
    </script>
</body>
</html>
