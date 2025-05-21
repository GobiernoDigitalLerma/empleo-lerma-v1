<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Empleo Lerma</title>
  <link href="{{asset('assets/img/escudo-de-armas-lerma.png')}}" rel="shortcut icon">
  <meta name="robots" content="index,follow">
  <meta name="description" content="Empleo Lerma">
  <meta name="author" content="LERMA.GOB.MX">
  <meta name="keywords" content="lerma, empleo, municipio">
  <meta name="copyright" content="Copyright 2020 Ayuntamiento de Lerma">
  <link rel="canonical" href="https://empleo.lerma.gob.mx">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://empleo.lerma.gob.mx">
  <meta property="og:title" content="Empleo Lerma">
  <meta property="og:description" content="Empleo Lerma">
  <meta property="og:image" content="https://empleo.lerma.gob.mx/img/logos-lerma.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/src/style.min.css')}}">
  @laravelPWA
</head>

<body>
  @laravelPWA
  <!--header-->
  <header>
  <div class="social-icons">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a href="{{url('/')}}" class="navbar-brand">
          <img src="{{asset('assets/img/logo_lerma.png')}}" alt="lerma" width="120" height="auto">
        </a>
        
        <button style="border-color:white;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerAccount" aria-controls="navbarTogglerAccount" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-ellipsis-h"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerAccount">
    <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item">
                <a href="{{ route('login') }}" class="btn" style="color:#545859"  > Iniciar Sesión </a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="btn" style="color:#545859"> Registrarse </a>
                </li>
            @endif
        @else
            <li class="nav-item ">
                <a class="btn" href="{{ route('micuenta') }}" style="color:#545859"> 
                    @auth {{ Auth::user()->nombre }} @endauth
                </a>
            </li>

            <li class="nav-item ">
                <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"style="color:#545859" >
                    {{ __('Cerrar Sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endguest
    </ul>
</div>
            <li class="nav-item facebook">
              <a href="https://www.facebook.com/profile.php?id=100063389460196" class="s-i" target="_blank">
              </a>
            </li>
            <li class="nav-item instagram">
              <a href="https://www.instagram.com/lermamex/" class="s-i" target="_blank">
              </a>
            </li>
            <li class="nav-item youtube">
              <a href="https://www.youtube.com/channel/UC8IK9ozLAiYcvIftlzb1NWw" class="s-i" target="_blank">
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00a9e0;">

  <div class="container">
    <!-- Botón del menú para pantallas pequeñas -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
      aria-controls="navbarToggler" aria-expanded="false" aria-label="Menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú de navegación -->
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">
            <i class="fas fa-home me-2"></i> Inicio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/busco_empleo">
            <i class="fas fa-search me-2"></i> Busco Empleo
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ofrezco_empleo">
            <i class="fas fa-briefcase me-2"></i> Ofrezco Empleo
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/eventos">
            <i class="fas fa-calendar-alt me-2"></i> Eventos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/materialapoyo">
            <i class="fa fa-info"></i>  Recursos Complementarios
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</header>

  @yield('content')
  <!--footer-->
  <footer>
    <div class="container-fluid bg-dark text-light">
      <div class="container">
        <div class="row py-5 justify-content-center">
          <div class="col-4 col-md-1">
            <img src="{{asset('assets/img/lerma-footer.png')}}" alt="" class="img-fluid">
          </div>
          <div class="col-10 col-md-4">
            <h5 class="text-uppercase pb-1">Contáctanos</h5>
            <i class="fas fa-phone fa-xs fa-footer pr-3"></i><a href="tel:722 706 3143" class="text-light"> 722 706 3143</a><br>
            <i class="far fa-envelope fa-xs fa-footer pr-3"></i><a href="mailto:empleolerma@gmail.com" class="text-light">empleo.lerma@gmail.com</a><br>
            <i class="fas fa-map-marker-alt fa-xs fa-footer pr-3"></i><a href="#" class="text-light">Palacio Municipal s/n Col. Centro, Lerma, Estado de México</a>
          </div>
          <div class="col-10 col-md-3">
            <h5 class="text-uppercase pb-1">Síguenos</h5>
            <i class="fab fa-facebook fa-xs fa-footer pr-3"></i><a href="https://www.facebook.com/profile.php?id=100063389460196" class="text-light">Facebook</a><br>
            <i class="fab fa-instagram-square fa-xs fa-footer pr-3"></i><a href="https://www.instagram.com/lermamex/" class="text-light">Instagram</a><br>
            <i class="fab fa-youtube fa-xs fa-footer pr-3"></i><a href="https://www.youtube.com/channel/UC8IK9ozLAiYcvIftlzb1NWw" class="text-light">YouTube</a><br>
          </div>
          <div class="col-10 col-md-4">
            <h5 class="text-uppercase pb-1">Enlaces de interes</h5>
            <a href="https://www.lerma.gob.mx/" class="text-light">Ayuntamiento de Lerma</a><br>
            <a href="https://strabajo.edomex.gob.mx" class="text-light">Secretaría del Trabajo del Estado de México</a><br>
            <a href="https://www.gob.mx/stps" class="text-light">Secretaría del Trabajo y Previsión Social</a><br>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-secondary">
      <div class="container">
        <div class="row py-3 justify-content-md-center text-center">
          <div class="col-12 col-md-8 copy">
            <a href="#" class="text-white small text-uppercase pr-4">Derechos reservados 2019</a>
            <a href="http://www.lerma.gob.mx/ayuntamiento/aviso-de-privacidad/" class="text-white small text-uppercase pr-4">Anuncio de privacidad</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b2d5760d1d.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @yield('scripts')
</body>

</html>