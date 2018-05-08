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
		@if(count($warehouses)===0)
			<div class="col s12 center"><h5>No hay almacenes registrados :^(</h5></div>
		@else
			@foreach($warehouses as $key=>$warehouse)
				<div class="col s12 m6">
					<div class="card hoverable">
						<div class="card-content center">
							<span><i class="material-icons large">widgets</i></span>
							<span class="card-title"><b>{{$warehouse->warehouse_name}}</b></span>
							<span><b>Administrado por:</b> <a href="#">Nombre del Admin</a></span>
							<p class="truncate"><br>
								{{$warehouse->warehouse_address}}<br>
							</p>
						</div>
						<div class="card-action center no-padding no-select scale-transition">
			            	<a href="#" class="btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Asignar a una tienda">
			            		<i class="material-icons black-text" style="opacity: .6;">store</i>
			            	</a>
			            	<a href="#deleteWarehouseModal" class="modal-trigger btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Eliminar usuario">
			            		<i class="material-icons black-text" style="opacity: .6;">delete</i>
			            	</a>
			            	<a href="#updateWarehouseModal" class="modal-trigger btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Editar usuario">
			            		<i class="material-icons black-text" style="opacity: .6;">edit</i>
			            	</a>
			            </div>
					</div>
			    </div>
			@endforeach
		@endif
	</div>
	<button style="position:fixed;bottom: 24px;right: 24px;" class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#newWarehouseModal">
		<i class="material-icons">add</i>
	</button>
	<div id="newWarehouseModal" class="modal newWarehouseModal">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h5>Nuevo almacén</h5>
				</div>
				<form id="newWarehouseForm" class="col s12 no-padding" method="POST" action="warehouses">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 10px;">
						<div class="col s12 grey-text text-darken-2"><b>Información general</b></div>
						<div class="input-field col s12 m8">
							<input id="warehouse_name" name="warehouse_name" type="text" class="validate warehouse_name" onblur="validateForm();" required>
							<label for="warehouse_name" data-error="Verifique este campo" data-success="Campo validado">Nombre del almacén *</label>
				        </div>
				        <div class="input-field col s12">
							<input id="warehouse_address" name="warehouse_address" type="text" class="warehouse_address validate" onblur="validateForm();" required>
							<label for="warehouse_address" data-error="Verifique este campo" data-success="Campo validado">Dirección del almacén</label>
				        </div>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></a>
			<button id="submit_button" onclick="submitNewWarehouse();" class="modal-action btn waves-effect submit_button" disabled><b>Registrar</b></button>
		</div>
	</div>

@endsection