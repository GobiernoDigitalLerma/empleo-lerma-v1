@extends('layouts.register')

@section('content')
  <body style="background-color: #00a9e0;">
    <div class="container">
      <div class="row justify-content-md-center align-items-center vh-100">
        <div class="col-12 col-md-5 bg-white  p-5">
          <div class="brand text-center mb-2">
            <a href="{{url('/')}}">
              <img src="{{asset('assets/img/logo_lerma.png')}}" alt="lerma" style="max-width: 50%; height: auto;">
            </a> 
            
          </div>
          <form method="POST" action="{{ route('login') }}" class="data-form">
          <div class="form-group">
            
          <h3 class="text-center" style="color:#545859">Iniciar sesión</h3>
        
            @csrf
           
              <label  style="color:#545859" for="userEmail">{{ __('Correo Electrónico :') }}</label>
              <input style="border-radius: 10px !important;" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresa tu email" value="{{ old('email') }}" required title="ejemplo@mail.com" autocomplete="email" autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror              
            </div>
            <div class="form-group" >
              <label style="color:#545859" for="passwdUser">{{ __('Contraseña :') }}</label>
              <input style="border-radius: 10px !important;" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresa tu contraseña" required autocomplete="current-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
              @if (Route::has('password.request'))
              <small class="form-text text-muted">
                <a class="text-info" href="{{ route('password.request') }}">
                  {{ __('¿Olvidaste tu Contraseña?') }}
                </a>
              </small>
              @endif
            </div>
            <div class="form-group">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember" style="color:#545859">{{ __('Mantenerme Conectado') }}</label>
              </div>
              <div class="col text-center">
    <button type="submit" class="btn btn-block" 
        style="border: 2px solid #00a9e0; background-color: transparent; 
               color: #00a9e0; border-radius: 20px !important; 
               padding: 10px 20px; transition: 0.3s;">
        {{ __('Iniciar Sesión') }}
    </button>
</div>

              <br>
              <div class="col text-center">
                <p style="color:#545859">¿No tienes cuenta? <a href="/register" class="text-info" >Registrate aquí</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b2d5760d1d.js" crossorigin="anonymous"></script>
  </body>
@endsection
