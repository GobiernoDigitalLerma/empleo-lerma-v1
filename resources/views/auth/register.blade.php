@extends('layouts.register')
@section('content')
<body style="background-color: #00a9e0;">
    <div class="container">
      <div class="row justify-content-md-center align-items-center vh-100">
        <div class="col-12 col-md-5 bg-white shadow p-4">
          <div class="brand text-center mb-2">
            <a href="{{url('/')}}">
              <img src="{{asset('assets/img/logo_lerma.png')}}" alt="lerma" style="max-width: 50%; height: auto;">
            </a> 
          </div>
          <form method="POST" action="{{ route('register') }}" class="data-form">
          @csrf
            <div class="form-group">
            <h3 class="text-center" style="color:#545859">Registro</h3>
              <label style="color:#545859" for="typeUser" class="font-weight-bold">{{ __('Soy') }}</label>
              <select style="border-radius: 10px !important;" name="tipo_user" class="form-control text-info" required>
                <option value="user">Ciudadano</option>
                <option value="company">Empresa</option>

              </select> 
            </div>
            <div class="form-group">
              <label style="color:#545859" for="userName">{{ __('Nombre Completo :') }}</label>
              <input style="border-radius: 10px !important;" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Escribe tu nombre completo" required autocomplete="name" aria-describedby="emailHelp">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label style="color:#545859" for="mailUser">{{ __('Correo Electrónico :') }}</label>
              <input style="border-radius: 10px !important;" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Escribe tu correo electrónico" required autocomplete="email">
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label style="color:#545859" for="phoneUser">{{ __('Teléfono') }}</label>
              <input style="border-radius: 10px !important;" type="tel" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Ingresa tu número de teléfono" pattern="[0-9]{10}" title="Ingrese número a 10 dígitos" required autocomplete="telefono">
              <p id="errortelefono"></p>
              @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label style="color:#545859" for="passwdUser">{{ __('Contraseña :') }}</label>
              <input style="border-radius: 10px !important;" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Escribe tu contraseña" required autocomplete="new-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label style="color:#545859" for="passwdUser">{{ __('Confirma tu Contraseña :') }}</label>
              <input style="border-radius: 10px !important;" type="password" class="form-control" id="password-confirm" name="password_confirmation" required placeholder="Vuelve a escribir tu contraseña" autocomplete="new-password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="keepConnected" onclick="registrar.disabled = !this.checked">
              <label style="color:#545859" class="form-check-label" for="keepConnected">He leído y acepto la <a class="text-info" style="text-decoration-line: underline;" href="https://lerma.gob.mx/ayuntamiento/aviso-de-privacidad/" target="_blank">política de privacidad</a>.</label>
            </div>
            <div class="col text-center">
            <button type="submit" name="registrar" class="btn btn-block" style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 20px !important;  padding: 10px 20px; transition: 0.3s;">Registrarme</button>
        </div>
        <div class="text-center">
                <p style="color:#545859">¿Ya tienes una cuenta? <a href="/login" class="text-info"> Inicia sesión</a></p>
              </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b2d5760d1d.js" crossorigin="anonymous"></script>
@endsection
