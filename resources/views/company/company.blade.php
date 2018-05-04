@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col s12 m7">
			<div class="card-panel">
				<h6 class="grey-text" style="font-size: 12px;"><b>Información de la empresa</b></h6>
				<h5><b>NV Ingenieurskantoor voor Scheepsbouw</b></h5>
				<p class="grey-text text-darken-3">
					Calle Corona #37 Fracc La Cumbre. CP 72130<br>
					Cuautlancingo, Pue.<br>
					2211807170<br>
					empresa@empresa.com<br>
					RFCABC123456<br>
				</p>
				<a href="#modal1" class="modal-trigger btn-floating waves-effect waves-light blue darken-1 right"><i class="material-icons">edit</i></a>
				
				<div id="modal1" class="modal">
				    <div class="modal-content">
				      <h4>Editar Empresa</h4>
				      <p>A bunch of text</p>
				    </div>
				    <div class="modal-footer">
				      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Listo</a>
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