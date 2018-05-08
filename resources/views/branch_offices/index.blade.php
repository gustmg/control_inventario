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
		@if(count($branch_offices)===0)
			<div class="col s12 center"><h5>No hay tiendas registradas :^(</h5></div>
		@else
			@foreach($branch_offices as $key=>$branch_office)
				<div class="col s12 m6">
					<div class="card hoverable">
						<div class="card-content center">
							<span><i class="material-icons large">store</i></span>
							<span class="card-title"><b>{{$branch_office->branch_office_name}}</b></span>
							<span><b>Administrada por:</b> <a href="#">Nombre del Admin</a></span>
							<p class="truncate"><br>
								{{$branch_office->branch_office_address}}<br>
								{{$branch_office->branch_office_phone}}<br>
								{{$branch_office->branch_office_email}}<br>
							</p>
						</div>
						<div class="card-action center no-padding no-select scale-transition">
			            	<a href="#" class="btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Asignar a una tienda">
			            		<i class="material-icons black-text" style="opacity: .6;">store</i>
			            	</a>
			            	<a href="#deleteBranchOfficeModal" class="modal-trigger btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Eliminar usuario">
			            		<i class="material-icons black-text" style="opacity: .6;">delete</i>
			            	</a>
			            	<a href="#updateBranchOfficeModal" class="modal-trigger btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Editar usuario">
			            		<i class="material-icons black-text" style="opacity: .6;">edit</i>
			            	</a>
			            </div>
					</div>
			    </div>
			@endforeach
		@endif
	</div>
	<button style="position:fixed;bottom: 24px;right: 24px;" class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#newBranchOfficeModal">
		<i class="material-icons">add</i>
	</button>
	<div id="newBranchOfficeModal" class="modal newBranchOfficeModal modal-fixed-footer">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h5>Nueva Sucursal</h5>
				</div>
				<form id="newBranchOfficeForm" class="col s12 no-padding" method="POST" action="branch_offices">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 10px;">
						<div class="col s12 grey-text text-darken-2"><b>Información general</b></div>
						<div class="input-field col s12 m8">
							<input id="branch_office_name" name="branch_office_name" type="text" class="validate branch_office_name" onblur="validateForm();" required>
							<label for="branch_office_name" data-error="Verifique este campo" data-success="Campo validado">Nombre de la sucursal *</label>
				        </div>
				        <div class="input-field col s12">
							<input id="branch_office_address" name="branch_office_address" type="text" class="branch_office_address validate" onblur="validateForm();" required>
							<label for="branch_office_address" data-error="Verifique este campo" data-success="Campo validado">Dirección de la sucursal</label>
				        </div>
				        <div class="input-field col s12 m8">
							<input id="branch_office_email" name="branch_office_email" type="email" class="branch_office_email validate" maxlength="35">
							<label for="branch_office_email" data-error="Verifique este campo" data-success="Campo validado">Email de la sucursal</label>
				        </div>
				        <div class="input-field col s12 m4">
							<input id="branch_office_phone" name="branch_office_phone" type="tel" class="branch_office_phone validate" pattern=".{10,10}" maxlength="10">
							<label for="branch_office_phone" data-error="Verifique este campo" data-success="Campo validado">Teléfono de la sucursal</label>
				        </div>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></a>
			<button id="submit_button" onclick="submitNewBranchOffice();" class="modal-action btn waves-effect submit_button" disabled><b>Registrar</b></button>
		</div>
	</div>
@endsection