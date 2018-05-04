@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2 s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ __('Reset Password') }}</span>
                    <div class="row">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="col s12" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" maxlength="35" required>
                                    <label for="email" data-error="Verifique este campo." data-success="Campo validado.">Email</label>
                                </div>
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                                <div class="input-field col s12">
                                    <p><a href="{{ route('login') }}">{{ __('Volver a Inicio de sesión') }}</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
