@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m12 center">
            <div class="card-panel yellow darken-1">
                <h5>¡Bienvenido!</h5> 
                <p>Es necesario que realicemos un par de configuraciones iniciales en tu sistema.</p>
                <a href="{{route('init')}}" class="waves-effect waves-light btn pulse light-blue darken-1">Comenzar</a>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
            </div>
        </div>
    </div>
@endsection
