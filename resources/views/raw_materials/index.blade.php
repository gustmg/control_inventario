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
		@if(count($raw_materials)===0)
			<div class="col s12 center"><h5>No hay materias primas registradas :^(</h5></div>
		@else
			<div class="col s12 center"><h5>{{ $raw_material_category->raw_material_category_name}}</h5></div>
			<div class="col s12">
				<table class="card highlight" style="table-layout:fixed;">
					<thead class="grey darken-4 white-text">
						<tr>
							<th style="width: 20%;" class="center">Código Interno</th>
							<th style="width: 60%;" class="center">Artículo</th>
							<th style="width: 20%;" class="center">Precio</th>
						</tr>
					</thead>
					<tbody>
						@foreach($raw_materials as $key=>$raw_material)
						<tr style="cursor: pointer;">
							<td class="center">{{$raw_material->raw_material_internal_code}}</td>
							<td class="truncate">
								<span class="title"><b>{{$raw_material->raw_material_name}}</b> <b class="grey-text">({{$raw_material->raw_material_part_number}})</b></span><br>
								<span class="grey-text">{{$raw_material->raw_material_description}}</span>
							</td>
							<td class="center">$ {{$raw_material->raw_material_price}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		@endif
	</div>
	<button style="position:fixed;bottom: 24px;right: 24px;" class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#newRawMaterialModal">
		<i class="material-icons">add</i>
	</button>
	<div id="newRawMaterialModal" class="modal newRawMaterialModal">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h5>Nueva materia prima</h5>
				</div>
				<form id="newRawMaterialForm" class="col s12 no-padding" method="POST" action="{{route('raw_material_categories.raw_materials.store', $raw_material_category->raw_material_category_id)}}">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 10px;">
						<div class="input-field col s12 m8">
							<input id="raw_material_name" name="raw_material_name" type="text" class="validate raw_material_name" onblur="validateForm();" required>
							<label for="raw_material_name" data-error="Verifique este campo" data-success="Campo validado">Nombre de la materia prima *</label>
				        </div>
				        <div class="input-field col s12 m4">
							<select name="measurement_unit_id">
								@foreach($measurement_units as $key => $measurement_unit)
									<option value="{{$measurement_unit->measurement_unit_id}}">{{$measurement_unit->measurement_unit_name}}</option>
								@endforeach
							</select>
							<label>Unidad de Medida</label>
				        </div>
				        <div class="input-field col s12 m12">
							<input id="raw_material_description" name="raw_material_description" type="text" class="raw_material_description">
							<label for="raw_material_description" data-error="Verifique este campo" data-success="Campo validado">Descripción de la materia prima</label>
				        </div>
				        <div class="input-field col s12 m4">
							<input id="raw_material_internal_code" name="raw_material_internal_code" type="text" class="raw_material_internal_code">
							<label for="raw_material_internal_code" data-error="Verifique este campo" data-success="Campo validado">Código interno de la materia prima</label>
				        </div>
				        <div class="input-field col s12 m4">
							<input id="raw_material_part_number" name="raw_material_part_number" type="text" class="raw_material_part_number">
							<label for="raw_material_part_number" data-error="Verifique este campo" data-success="Campo validado">Número de parte de la materia prima</label>
				        </div>
				        <div class="input-field col s12 m4">
							<input id="raw_material_price" name="raw_material_price" type="number" step="any" class="validate raw_material_price" onblur="validateForm();" required>
							<label for="raw_material_price" data-error="Verifique este campo" data-success="Campo validado">Precio de la materia prima *</label>
				        </div>
				        <input id="raw_material_cateory_id" name="raw_material_category_id" type="hidden" value="{{$raw_material_category->raw_material_category_id}}">
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></a>
			<button id="submit_button" onclick="submitNewRawMaterial();" class="modal-action btn waves-effect submit_button" disabled><b>Registrar</b></button>
		</div>
	</div>
@endsection