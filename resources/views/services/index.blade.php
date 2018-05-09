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
		@if(count($services)===0)
			<div class="col s12 center"><h5>No hay servicios registrados :^(</h5></div>
		@else
			@foreach($services as $key=>$service)
				<div class="col s12">
					<table class="card highlight" style="table-layout:fixed;">
						<thead class="grey darken-4 white-text">
							<tr>
								<th style="width: 20%;" class="center">Código Interno</th>
								<th style="width: 30%;" class="center">Servicio</th>
								<th style="width: 50%;" class="center">Descripción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="center">{{$service->service_internal_code}}</td>
								<td class="truncate tooltipped" data-position="bottom" data-delay="600" data-tooltip="{{$service->service_name}}">{{$service->service_name}}</td>
								<td class="center tooltipped" data-position="bottom" data-delay="600" data-tooltip="{{$service->service_description}}">{{$service->service_description}}</td>
							</tr>
						</tbody>
					</table>
				</div>
			@endforeach
		@endif
	</div>
	<button style="position:fixed;bottom: 24px;right: 24px;" class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#newServiceModal">
		<i class="material-icons">add</i>
	</button>
	<div d="newServiceModal" class="modal newServiceModal">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h5>Nuevo servicio</h5>
				</div>
				<form id="newServiceForm" class="col s12 no-padding" method="POST" action="services">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 10px;">
						<div class="col s12 grey-text text-darken-2"><b>Información general</b></div>
						<div class="input-field col s12 m8">
							<input id="service_name" name="service_name" type="text" class="validate service_name" onblur="validateForm();" required>
							<label for="service_name" data-error="Verifique este campo" data-success="Campo validado">Nombre del servicio *</label>
				        </div>
				        <div class="input-field col s12 m12">
							<input id="service_description" name="service_description" type="text" class="service_description">
							<label for="service_description" data-error="Verifique este campo" data-success="Campo validado">Descripción del servicio</label>
				        </div>
				        <div class="input-field col s12 m6">
							<input id="service_internal_code" name="service_internal_code" type="text" class="service_internal_code">
							<label for="service_internal_code" data-error="Verifique este campo" data-success="Campo validado">Código interno del servicio</label>
				        </div>
				        <div class="input-field col s12 m6">
							<input id="service_price" name="service_price" type="number" class="service_price validate" onblur="validateForm();" required>
							<label for="service_price" data-error="Verifique este campo" data-success="Campo validado">Costo del servicio</label>
				        </div>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></a>
			<button id="submit_button" onclick="submitNewService();" class="modal-action btn waves-effect submit_button" disabled><b>Registrar</b></button>
		</div>
	</div>
@endsection