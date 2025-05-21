
@extends('layouts.register')

@section('content')
<body style="background-color: #00a9e0;">
  <div class="container">
    <div class="row justify-content-md-center align-items-center vh-100">
      <div class="col-12 col-md-7 bg-white shadow">
        <div class="brand text-center mb-2">
        <a href="{{url('/')}}">
              <img src="{{asset('assets/img/logo_lerma.png')}}" alt="lerma" style="max-width: 50%; height: auto;">
            </a> 
        </div>
        <div class="p-4">
          <h5 class="card-title">{{ __('Restablecer contraseña') }}</h5>
          <hr />
          @if (session('status'))
              <div class="alert alert-info" role="alert">
                {{ session('status') }}
              </div>
          @endif
          <p>{{ __('Para poder restablecer tu contraseña, ingresa la información necesaria que se te pide a continuación.') }}</p><br/>
          <form method="POST" action="{{ route('password.email') }}" class="data-form">
            @csrf
            <div class="form-group row">
                <label style="color:#545859" for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>
                <div class="col-md-6">
                  <input style="border-radius: 10px !important;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Ingrese su correo electrónico." autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
            </div>
            <br>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn " style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 20px !important;  padding: 10px 20px; transition: 0.3s;">
                    {{ __('Recuperar Contraseña') }}
                  </button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>M
