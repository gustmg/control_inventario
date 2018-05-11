@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col s12 m7">
			<div class="card-panel">
				<h6 class="grey-text" style="font-size: 12px;"><b>Información de la empresa</b></h6>
				<h5><b>{{$company->company_name}}</b></h5>
				<p class="grey-text text-darken-3">
					@if($company->company_address===null)
						<span class="grey-text">Dirección no registrada</span><br>
					@else
						<span>{{$company->company_address}}</span><br>
					@endif

					@if($company->company_phone===null)
						<span class="grey-text">Teléfono no registrada</span><br>
					@else
						<span>{{$company->company_phone}}</span><br>
					@endif

					@if($company->company_email===null)
						<span class="grey-text">E-mail no registrada</span><br>
					@else
						<span>{{$company->company_email}}</span><br>
					@endif

					@if($company->company_rfc===null)
						<span class="grey-text">RFC no registrado</span><br>
					@else
						<span>{{$company->company_rfc}}</span><br>
					@endif
				</p>
				<a href="#updateCompanyModal" class="modal-trigger btn-floating waves-effect waves-light blue darken-1 right"><i class="material-icons">edit</i></a>
				<div id="updateCompanyModal" class="modal updateCompanyModal">
				    <div class="modal-content">
				    	<div class="row">
				    		<div class="col s12">
				    			<h4>Editar Empresa</h4>
				    		</div>
				    		<form id="updateCompanyForm" class="col s12 no-padding" method="POST" action="company/1">
				    		    {{ csrf_field() }}
				    			@method('PUT')
				    		    <div class="row" style="margin-bottom: 10px;">
				    		        <div class="col s12 grey-text text-darken-2"><b>Información general</b></div>
				    		        <div class="input-field col s12 m7">
				    		            <input id="company_name" name="company_name" value="{{$company->company_name}}" type="text" class="validate company_name" required>
				    		            <label for="company_name" data-error="Verifique este campo" data-success="Campo validado">Nombre de la empresa *</label>
				    		        </div>
				    		        <div class="input-field col s12 m5">
				    		            <input id="company_rfc" name="company_rfc" value="{{$company->company_rfc}}" type="text">
				    		            <label for="company_rfc">RFC de la empresa</label>
				    		        </div>
				    		        <div class="input-field col s12 m12">
				    		            <input id="company_address" name="company_address" value="{{$company->company_address}}" type="text">
				    		            <label for="company_address">Dirección de la empresa</label>
				    		        </div>
				    		        <div class="input-field col s12 m6">
				    		            <input id="company_email" name="company_email" value="{{$company->company_email}}" type="email">
				    		            <label for="company_email">E-mail de la empresa</label>
				    		        </div>
				    		        <div class="input-field col s12 m6">
				    		            <input id="company_phone" name="company_phone" value="{{$company->company_phone}}" type="tel">
				    		            <label for="company_phone">Teléfono de la empresa</label>
				    		        </div>
				    		    </div>
				    		</form>
				    	</div>
				    </div>
				    <div class="modal-footer">
						<button id="cancel_button" class="modal-close btn-flat waves-effect"><b>Cancelar</b></button>
				    	<button id="update_button" onclick="updateCompany();" class="modal-action btn waves-effect submit_button"><b>Editar</b></button>
				    </div>
				</div>
	        </div>
		</div>
		<div class="col s12 m5">
			<div class="card-panel">
				<h6 class="grey-text" style="font-size: 12px;"><b>Información de plan de renta</b></h6>
				<div class="row">
					<div class="col s7 m7 no-padding">
						<p><b>
							Plan contratado:<br>
							Tipo de renta:<br>
							Inicio plan:<br>
							Fin plan:<br>
							Usuarios en uso:<br>
						</b></p>		
					</div>
					<div class="col s5 m5 right no-padding">
						<p class="right"><b>
							Plan A<br>
							Mensual<br>
							Ene 17, 2018<br>
							Feb 17, 2018<br>
							3 de 5<br>
						</b></p>		
					</div>
					<div class="col m12 no-padding">
						<a href="#">Agregar usuario extra</a><br>
						<a href="#">Cambiar plan de renta</a><br>
						<a href="#">Ver usuarios en uso</a><br>
						<a href="#">Ver detalles del plan...</a><br>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection