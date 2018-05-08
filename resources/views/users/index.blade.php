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
		    <div id="updateUserModal{{$user->id}}" class="modal modal-fixed-footer updateUserModal">
		    	<div class="modal-content">
		    		<div class="row">
		    			<div class="col s12">
		    				<h5 class="truncate">Editar Usuario</h5>
		    			</div>
		    			<form id="updateUserForm{{$user->id}}" action="users/{{$user->id}}" class="col s12 no-padding" method="POST">
		    				{{ csrf_field() }}
		    				@method('PUT')
		    				<div class="row">
		    					<div class="col s12"><b>Información general</b></div>
		    					<div class="input-field col s5">
		    					    <input id="first_name" type="text" class="validate" name="first_name" value="{{ $user->first_name }}" maxlength="35" required autofocus>
		    					    <label for="first_name" data-error="Rellene este campo." data-success="Campo validado.">Nombre</label>
		    					</div>
		    					<div class="input-field col s7">
		    					    <input id="last_name" type="text" class="validate" name="last_name" value="{{ $user->last_name }}" maxlength="35" required>
		    					    <label for="last_name" data-error="Rellene este campo." data-success="Campo validado.">Apellidos</label>
		    					</div>
		    					<div class="input-field col s7">
		    					    <input id="email" type="email" class="validate" name="email" value="{{ $user->email }}" maxlength="35" disabled>
		    					</div>
		    					<div class="input-field col s5">
		    					    <input id="phone" type="tel" class="validate" name="phone" value="{{ $user->phone }}" pattern=".{10,10}" maxlength="10" required>
		    					    <label for="phone" data-error="Verifique este campo." data-success="Campo validado.">Teléfono</label>
		    					</div>
		    				</div>
		    				{{-- <div class="row">
		    					<div class="col s12"><b>Cambio de contraseña</b></div>
		    					<div class="input-field col s12">
		    					    <input id="actual_password" type="password" class="validate" name="actual_password" pattern=".{6,}" required>
		    					    <label for="actual_password" data-error="Verifique este campo." data-success="Campo validado.">Contraseña actual</label>
		    					</div>
		    					<div class="input-field col s12">
		    						<input id="password" type="password" class="validate" name="password" pattern=".{6,}" required>
		    					    <label for="password" data-error="Verifique este campo." data-success="Campo validado.">Contraseña nueva</label>
		    					</div>
		    					<div class="input-field col s12">
		    					    <input id="password-confirm" type="password" class="validate" name="password_confirmation" pattern=".{6,}" required>
		    					    <label for="password-confirm" data-error="Verifique este campo." data-success="Campo validado.">Confirma tu nueva contraseña</label>
		    					</div>
		    				</div> --}}
		    			</form>
		    		</div>
		    	</div>
		    	<div class="modal-footer">
		    		<button class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></button>
		    		<button id="submit_button" onclick="submitUpdateUser({{$user->id}});" class="modal-action btn waves-effect submit_button">
		    			<b>Editar</b>
		    		</button>
		    	</div>
		    </div>
		    <div id="deleteUserModal{{$user->id}}" class="modal deleteUserModal">
		    	<div class="modal-content">
		    		<h5>Eliminar usuario?</h5>
		    	</div>
		    	<div class="modal-footer">
		    		<a href="#!" class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></a>
		    		<button id="delete_button" onclick="submitDeleteUser({{$user->id}});" class="modal-action btn-flat waves-effect"><b>Eliminar</b></button>
		    	</div>
		    </div>
		    <form id="deleteUserForm{{$user->id}}" method="POST" action="users/{{$user->id}}">
		    	{{ csrf_field() }}
		    	@method('DELETE')
		    </form>
	@endforeach
</div>
{{-- <a href="#" style="position:fixed;bottom: 24px;right: 24px;" class="btn-floating btn-large waves-effect waves-light blue darken-3">
	<i class="material-icons">person_add</i>
</a> --}}
@endsection