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
      <nav class="navbar navbar-expand-md navbar-light p-0">
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
                <a href="{{ route('login') }}" class="btn"> Iniciar Sesión </a>
              </li>
             
              @if (Route::has('register'))
              <li class="nav-item">
                <a href="{{ route('register') }}" class="btn"> Registrarse </a>
              </li>
              @endif
            @else
            <li class="nav-item ">
                <a  class= "btn" href="{{ route('micuenta') }}" style="color:#545859"> @auth {{ Auth::user()->nombre }} @endauth</a> 
              </li>
           
              <li class="nav-item ">
                <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:#545859">
                  {{ __('Cerrar Sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
              
            @endguest

            <li class="nav-item facebook">
              <a href="https://www.facebook.com/Ayuntamiento-de-Lerma-467953823268730" class="s-i" target="_blank">
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
  

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #00a9e0;">

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
          <a class="nav-link" href="/modificacioneventos">
            <i class="fas fa-edit me-2"></i> Administrar eventos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admineventos">
            <i class="fas fa-clipboard-list me-2"></i> Crear nuevos eventos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/eventos">
            <i class="fas fa-calendar-alt me-2"></i> Ver eventos
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</header>
@section('content')
<!--Dashboard-->
<section class="events py-5">
  <div class="container">

    <div class="row justify-content-between">
      <!--username-->
      <div class="col-12">
        <h3 class="ml-4 lerma text-center font-weight-bold">Administrador : {{Auth::user()->nombre}}</h3>
      </div>
      <!--menu-->
      <div class="col-12 col-md-4">
        <div class="nav flex-column nav-pills shadow m-4 bg-white" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Resumen</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Usuarios</a>
          <a class="nav-link" id="v-pills-applications-tab" data-toggle="pill" href="#v-pills-applications" role="tab" aria-controls="v-pills-applications" aria-selected="false">Empresas</a>
          <a class="nav-link" id="v-pills-vacancies-tab" data-toggle="pill" href="#v-pills-vacancies" role="tab" aria-controls="v-pills-vacancies" aria-selected="false">Vacantes</a>
        </div>
        <div class="col text-center">
        <a href="/admineventos" class="btn btn-lg" 
     style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 15px !important; padding: 10px 20px; transition: 0.3s;">
     Crear nuevo evento
  </a>
  </div>
      </div>
      <div class="col-12 col-md-8">
        <div class="tab-content m-4" id="v-pills-tabContent">
          <!--home-->
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h3 class="text-center font-weight-bold">Resumen</h3>
            <hr>
            <div class="row row-cols-1 row-cols-md-3">
              <div class="col mb-4">
                <div class="card">
                  <div class="card-body text-center">
                    Usuarios Totales:
                    <h5 class="card-title text-info">{{$contciudadanos}}</h5>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <div class="card-body text-center">
                    Usuarios Postulados:
                    <h5 class="card-title text-info">{{$contpostulados}}</h5>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <div class="card-body text-center">
                    Usuarios Contratados:
                    <h5 class="card-title text-info">/</h5>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <div class="card-body text-center">
                    Vacantes Totales:
                    <h5 class="card-title text-info">{{$contvacantes}}</h5>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <div class="card-body text-center">
                    Vacantes Activas:
                    <h5 class="card-title text-info">{{$contvacactivas}}</h5>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <div class="card-body text-center">
                    Empresas Activas:
                    <h5 class="card-title text-info">{{$contempactivas}}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!--users-->
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
  <h3 class=" text-center font-weight-bold">Usuarios</h3>
  <br>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Usuario</th>
          <th scope="col">Nombre</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datosciudadanos as $ciudadano)
        <tr>
          <th scope="row"><a href="/editar/{{$ciudadano->id_persona}}">{{$ciudadano->id_persona}}</a></th>
          <td>{{$ciudadano->nombre_completo}}</td>
          <td>{{$ciudadano->telefono}}</td>
          <td>{{$ciudadano->email}}</td>
          <td>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $datosciudadanos->appends(request()->query())->links() }}
  </div>
</div>

          <!--companies-->
          <div class="tab-pane fade" id="v-pills-applications" role="tabpanel" aria-labelledby="v-pills-applications-tab">
            <h3 class="text-center font-weight-bold">Empresas</h3>
            <!--<a href="http://" class="btn btn-primary" style="width: 100%;">Nueva Empresa</a>-->
            <br>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($datosempresas as $empresa)
                  <tr>
                    <th scope="row"><a href="/editar/">{{$empresa->id_empresa}}</a></th>
                    <td>{{$empresa->nombre_RS}}</td>
                    <td>{{$empresa->tel1}}</td>
                    <td>{{$empresa->email}}</td>
                    <td>
                      <span id="is_active{{$empresa->id_empresa}}">{{$empresa->is_active ? "Activa": "Inactiva"}}</span>
                      <a data-id="{{$empresa->id_empresa}}" href="#" class="bg-light rounded m-1 text-secondary toggle-class">&nbsp;
                        <small id="update_active{{$empresa->id_empresa}}">{{$empresa->is_active ? "desactivar": "activar"}}</small>&nbsp;
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $datosempresas->appends(request()->query())->links() }}
            </div>
          </div>
          <!--vacancies-->
          <div class="tab-pane fade" id="v-pills-vacancies" role="tabpanel" aria-labelledby="v-pills-vacancies-tab">
            <h3 class="text-center font-weight-bold">Vacantes</h3>
            <!--<a href="http://" class="btn btn-primary" style="width: 100%;">Nueva Vacante</a>-->
            <br>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Vacante</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($vacantes as $vacante)
                  <tr>
                    <th scope="row"><a href="/editar/">{{$vacante->id_vacante}}</a></th>
                    <td>{{$vacante->nombre_RS}}</td>
                    <td>{{$vacante->titulo_puesto}}</td>
                    <td>Activa</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $vacantes->appends(request()->query())->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $('.toggle-class').click(function() {
      var empresa_id = $(this).data('id');
      $("#update_active"+empresa_id).text("aplicando cambios...");
      $.ajax({
        type: "GET",
        dataType: "json",
        url: '/modificarestadoemp',
        data: {
          'emp_id': empresa_id
        },
        success: function(data) {
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: data.name, 
            text: data.success,
            showConfirmButton: false,
            timer: 1500
          });
          //changes by new vaules
          $("#is_active"+empresa_id).text(data.is_active ? "Activa" : "Inactiva");
          $("#update_active"+empresa_id).text(data.is_active ? "desactivar" : "activar");
        }
      });
    });
  });
</script>


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
            <i class="fas fa-phone fa-xs fa-footer pr-3"></i><a href="tel:722 706 3143" class="text-light">722 706 3143</a><br>
            <i class="far fa-envelope fa-xs fa-footer pr-3"></i><a href="mailto:empleolerma@gmail.com" class="text-light">empleo.lerma@gmail.com</a><br>
            <i class="fas fa-map-marker-alt fa-xs fa-footer pr-3"></i><a href="#" class="text-light">Palacio Municipal s/n Col. Centro, Lerma, Estado de México</a>
          </div>
          <div class="col-10 col-md-3">
            <h5 class="text-uppercase pb-1">Síguenos</h5>
            <i class="fab fa-facebook fa-xs fa-footer pr-3"></i><a href="#" class="text-light">Facebook</a><br>
            <i class="fab fa-instagram-square fa-xs fa-footer pr-3"></i><a href="#" class="text-light">Instagram</a><br>
            <i class="fab fa-youtube fa-xs fa-footer pr-3"></i><a href="#" class="text-light">YouTube</a><br>
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