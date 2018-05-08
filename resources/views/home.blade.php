@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m12 center">
            <div class="card-panel yellow darken-1">
                <h5>¡Bienvenido!</h5> 
                <p>Es necesario que realicemos un par de configuraciones iniciales en tu sistema.</p>
                <a href="#" class="waves-effect waves-light btn pulse light-blue darken-1">Comenzar</a>
            </div>
        </div>
    </div>
    @if($company===null)
    <div id="newCompanyModal" class="modal newCompanyModal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <h5>Comienza por el comienzo</h5>
                    <p>Introduce la información esencial de tu empresa.</p>
                </div>
                <form id="newCompanyForm" class="col s12 no-padding" method="POST" action="company">
                    {{ csrf_field() }}
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col s12 grey-text text-darken-2"><b>Información general</b></div>
                        <div class="input-field col s12 m7">
                            <input id="company_name" name="company_name" type="text" class="validate company_name" required>
                            <label for="company_name" data-error="Verifique este campo" data-success="Campo validado">Nombre de la empresa *</label>
                        </div>
                        <div class="input-field col s12 m5">
                            <input id="company_rfc" name="company_rfc" type="text">
                            <label for="company_rfc">RFC de la empresa</label>
                        </div>
                        <div class="input-field col s12 m12">
                            <input id="company_address" name="company_address" type="text">
                            <label for="company_address">Dirección de la empresa</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="company_email" name="company_email" type="email">
                            <label for="company_email">E-mail de la empresa</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="company_phone" name="company_phone" type="tel">
                            <label for="company_phone">Teléfono de la empresa</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button id="submit_button" onclick="submitNewCompany();" class="modal-action btn waves-effect submit_button" disabled><b>Registrar</b></button>
        </div>
    </div>
    @endif
@endsection


