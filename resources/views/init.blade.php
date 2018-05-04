@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m12">
            <h4>Configuración Inicial</h4> 
            <p>Es necesario configurar los aspectos esenciales de tu empresa antes de poder comenzar a realizar operaciones en el sistema. ¡Accede a cada configuración y realízala hasta completar tu progreso!</p>
            <div class="carousel">
                <div class="card carousel-item">
                    <div class="card-content center no-select">
                        <i class="material-icons " style="font-size: 80px;">business</i>
                        <span class="card-title">Empresa</span>
                        <i class="material-icons green-text">check_circle</i>
                        <a href="{{route('company')}}" class="btn light-blue darken-1">Configurar</a>
                    </div>  
                </div>
                <div class="card carousel-item">
                    <div class="card-content center no-select">
                        <i class="material-icons" style="font-size: 80px;">group</i>
                        <span class="card-title">Usuarios</span>
                        <i class="material-icons green-text">check_circle</i>
                        <a href="{{route('users')}}" class="btn light-blue darken-1">Configurar</a>
                    </div>  
                </div>
                <div class="card carousel-item">
                    <div class="card-content center no-select">
                        <i class="material-icons" style="font-size: 80px;">store</i>
                        <span class="card-title">Almacenes</span>
                        <i class="material-icons green-text">check_circle</i>
                        <a class="btn light-blue darken-1">Configurar</a>
                    </div>  
                </div>
                <div class="card carousel-item">
                    <div class="card-content center no-select">
                        <i class="material-icons" style="font-size: 80px;">store</i>
                        <span class="card-title">Sucursales</span>
                        <i class="material-icons green-text">check_circle</i>
                        <a class="btn light-blue darken-1">Configurar</a>
                    </div>  
                </div>
                <div class="card carousel-item">
                    <div class="card-content center no-select">
                        <i class="material-icons" style="font-size: 80px;">desktop_windows</i>
                        <span class="card-title">Terminales</span>
                        <i class="material-icons green-text">check_circle</i>
                        <a class="btn light-blue darken-1">Configurar</a>
                    </div>  
                </div>
                <div class="card carousel-item">
                    <div class="card-content center no-select">
                        <i class="material-icons" style="font-size: 80px;">shopping_cart</i>
                        <span class="card-title">Proveedores</span>
                        <i class="material-icons green-text">check_circle</i>
                        <a class="btn light-blue darken-1">Configurar</a>
                    </div>  
                </div>
                <div class="card carousel-item">
                    <div class="card-content center no-select">
                        <i class="material-icons" style="font-size: 80px;">person</i>
                        <span class="card-title">Clientes</span>
                        <i class="material-icons green-text">check_circle</i>
                        <a class="btn light-blue darken-1">Configurar</a>
                    </div>  
                </div>
                <div class="card carousel-item">
                    <div class="card-content center no-select">
                        <i class="material-icons" style="font-size: 80px;">shopping_basket</i>
                        <span class="card-title">Artículos</span>
                        <i class="material-icons green-text">check_circle</i>
                        <a class="btn light-blue darken-1">Configurar</a>
                    </div>  
                </div>
            </div>
            <!-- <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div> -->
        </div>
        <div class="col s12 m8 offset-m2 center">
            Progreso: 80%
            <div class="progress light-blue lighten-4">
                 <div class="determinate light-blue darken-2" style="width: 70%"></div>
             </div>
        </div>
    </div>
@endsection
