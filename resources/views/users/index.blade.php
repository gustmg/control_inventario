@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row" style="margin-bottom: 0;">
		<div class="card hoverable col s12 m12" style="float: none;">
				<div class="input-field valign-wrapper" >
				<i class="material-icons prefix">search</i>
				<input placeholder="Buscar" id="first_name" type="text" style="border-bottom: none!important;box-shadow: none!important;margin-bottom: 0;">
			</div>
		</div>
	</div>
</div>
<div class="row">
	@foreach($users as $key=>$user)
			<div class="col m6 s12 l4">
				<div class="card hoverable">
					<div class="card-content center">
						<img src="{{asset('img/profile-picture.png')}}" alt="" class="circle responsive-img">
						<span class="card-title"><b>{{($user->first_name).' '.($user->last_name)}}</b></span>
						<p class="truncate">Administrator<br>{{$user->email}}</p>
						<a class="btn-floating grey z-depth-0 tooltipped top-left toggle-selected-user no-select" data-position="bottom" data-delay="100" data-tooltip="Seleccionar usuario" onclick="toggleSelectedUserMenu();"><i class="material-icons">check</i></a>	
					</div>
					<div class="card-action center no-padding no-select scale-transition">
		            	<a href="#" class="btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Asignar a una tienda">
		            		<i class="material-icons black-text" style="opacity: .6;">store</i>
		            	</a>
		            	<a href="#deleteUserModal{{$user->id}}" class="modal-trigger btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Eliminar usuario">
		            		<i class="material-icons black-text" style="opacity: .6;">delete</i>
		            	</a>
		            	<a href="#updateUserModal{{$user->id}}" class="modal-trigger btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Editar usuario">
		            		<i class="material-icons black-text" style="opacity: .6;">edit</i>
		            	</a>
		            </div>
				</div>
		    </div>
	@endforeach
</div>
@endsection