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
		@if(count($article_categories)===0)
			<div class="col s12 center"><h5>No hay categorías de artículos registradas :^( </h5></div>
		@else
			@foreach($article_categories as $key => $article_category)
				<div class="col s12 m6">
					<div class="card hoverable">
						<div class="card-content">
							<h5 class="truncate"><b>{{ $article_category->article_category_name}}</b></h5>
							<a href="/article_categories/{{$article_category->article_category_id}}">Ver artículos</a>
							<div class="right-align">
								<a href="#deleteArticleCategorModal{{$article_category->article_category_id}}" class="modal-trigger btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Eliminar categoría">
									<i class="material-icons black-text" style="opacity: .6;">delete</i>
								</a>
								<a href="#" class="modal-trigger btn-floating white z-depth-0 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Editar categoría">
									<i class="material-icons black-text" style="opacity: .6;">edit</i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div id="deleteArticleCategorModal{{$article_category->article_category_id}}" class="modal deleteArticleCategoryModal">
					<div class="modal-content">
						<h5>Eliminar categoría?</h5>
						<p>Todos los artículos que tengas registrados dentro de esta categoría serán eliminados.</p>
					</div>
					<div class="modal-footer">
						<a href="#!" class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></a>
						<button id="delete_button" onclick="submitDeleteArticleCategory({{$article_category->article_category_id}});" class="modal-action btn-flat waves-effect"><b>Eliminar</b></button>
					</div>
				</div>
				<form id="deleteArticleCategoryForm{{$article_category->article_category_id}}" method="POST" action="article_categories/{{$article_category->article_category_id}}">
					{{ csrf_field() }}
					@method('DELETE')
				</form>
			@endforeach
		@endif
	</div>
	<button style="position:fixed;bottom: 24px;right: 24px;" class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#newArticleCategoryModal">
		<i class="material-icons">add</i>
	</button>
	<div id="newArticleCategoryModal" class="modal newArticleCategoryModal">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h5>Nueva categoría de artículos</h5>
				</div>
				<form id="newArticleCategoryForm" class="col s12 no-padding" method="POST" action="article_categories">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 10px;">
						<div class="col s12 grey-text text-darken-2"><b>Información general</b></div>
						<div class="input-field col s12">
							<input id="article_category_name" name="article_category_name" type="text" class="validate article_category_name" onblur="validateForm();" required>
							<label for="article_category_name" data-error="Verifique este campo" data-success="Campo validado">Nombre de la categoría *</label>
				        </div>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect btn-flat"><b>Cancelar</b></a>
			<button id="submit_button" onclick="submitNewArticleCategory();" class="modal-action btn waves-effect submit_button" disabled><b>Registrar</b></button>
		</div>
	</div>
@endsection