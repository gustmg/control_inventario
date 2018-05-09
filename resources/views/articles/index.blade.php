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
		@if(count($articles)===0)
			<div class="col s12 center"><h5>No hay artículos registrados :^(</h5></div>
		@else
			<div class="col s12 center"><h5>{{ $article_category->article_category_name}}</h5></div>
			<div class="col s12">
				<table class="card highlight" style="table-layout:fixed;">
					<thead class="grey darken-4 white-text">
						<tr>
							<th style="width: 20%;" class="center">Código Interno</th>
							<th style="width: 30%;" class="center">Artículo</th>
							<th style="width: 50%;" class="center">Precio</th>
						</tr>
					</thead>
					<tbody>
						@foreach($articles as $key=>$article)
						<tr>
							<td class="center">{{$article->article_internal_code}}</td>
							<td class="truncate tooltipped" data-position="bottom" data-delay="600" data-tooltip="{{$article->article_name}}">{{$article->article_name}}</td>
							<td class="center tooltipped" data-position="bottom" data-delay="600" data-tooltip="{{$article->article_price}}">{{$article->article_price}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		@endif
	</div>
	<button style="position:fixed;bottom: 24px;right: 24px;" class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#newArticleModal">
		<i class="material-icons">add</i>
	</button>
	<div id="newArticleModal" class="modal newArticleModal">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h5>Nuevo artículo</h5>
				</div>
				<form id="newArticleForm" class="col s12 no-padding" method="POST" action="articles">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 10px;">
						<div class="input-field col s12 m8">
							<input id="article_name" name="article_name" type="text" class="validate article_name" onblur="validateForm();" required>
							<label for="article_name" data-error="Verifique este campo" data-success="Campo validado">Nombre del artículo *</label>
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
							<input id="article_description" name="article_description" type="text" class="article_description">
							<label for="article_description" data-error="Verifique este campo" data-success="Campo validado">Descripción del artículo</label>
				        </div>
				        <div class="input-field col s12 m4">
							<input id="article_internal_code" name="article_internal_code" type="text" class="article_internal_code">
							<label for="article_internal_code" data-error="Verifique este campo" data-success="Campo validado">Código interno del artículo</label>
				        </div>
				        <div class="input-field col s12 m4">
							<input id="article_part_number" name="article_part_number" type="text" class="article_part_number">
							<label for="article_part_number" data-error="Verifique este campo" data-success="Campo validado">Número de parte del artículo</label>
				        </div>
				        <div class="input-field col s12 m4">
							<input id="article_price" name="article_price" type="number" class="validate article_price" onblur="validateForm();" required>
							<label for="article_price" data-error="Verifique este campo" data-success="Campo validado">Precio del artículo *</label>
				        </div>
				        <input id="article_cateory_id" name="article_cateory_id" type="hidden" value="{{$article_category->article_category_id}}">
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></a>
			<button id="submit_button" onclick="submitNewArticle();" class="modal-action btn waves-effect submit_button" disabled><b>Registrar</b></button>
		</div>
	</div>
@endsection