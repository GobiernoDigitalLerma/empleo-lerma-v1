@extends('layouts.base')

@section('content')

<!--Vacancies-->
<section class="pt-md-3 m-3">
  <div class="container my-md-5">
    <div class="row justify-content-md-center">
      <div class="col-12 mb-3">
        <h2 class="text-center">{{$vacante->titulo_puesto}}</h2>
        <hr>
      </div>
      <div class="col-12 col-md-8">
        <div class="card-group vacancies mr-md-4 " style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 15px !important; padding: 8px 15px;">
          <div class="card text-center mb-0 mb-md-3" style="color: #00a9e0">
            <div class="card-header mt-3 ">
              <h6 class="mb-0">Sueldo Mensual</h6>
            </div>
            <div class="card-body pt-0">
              <h5 class="mb-0">${{$vacante->salario_mensual}}</h5>
            </div>
          </div>
          <div class="card  text-center mb-0 mb-md-3" style="color: #00a9e0">
            <div class="card-header mt-3">
              <h6 class="mb-0">Lugar</h6>
            </div>
            <div class="card-body pt-0">
              <h5 class="mb-0">{{$vacante->lugar_vacante}}</h5>
            </div>
          </div>
          <div class="card text-center mb-0 mb-md-3" style="color: #00a9e0">
            <div class="card-header mt-3">
              <h6 class="mb-0">Tipo</h6>
            </div>
            <div class="card-body pt-0">
              <h5 class="mb-0">{{$vacante->tipo_empleo}}</h5>
            </div>
          </div>
        </div>
        <h4 class="my-3 font-weight-bold">Datos de la Vacante: </h4>
        <div class="content mr-md-4">
          <ul>
            <li>
              <p><b>Descripción: </b>{{$vacante->descripcion_breve}}</p>
            </li>
            <li>
              <p><b>Funciones y actividades a realizar: </b>{{$vacante->FunActi_realizar}}</p>
            </li>
            <li>
              <p><b>Conocimientos y habilidades requeridas: </b>{{$vacante->conocimientos_requeridos}}</p>
            </li>
            <li>
              <p><b>Dias laborales: </b>{{$vacante->dias_laboral}}</p>
            </li>
            <li>
              <p><b>Horario: </b>De {{date('h:i a', strtotime($vacante->hora_entrada))}} A {{date('h:i a', strtotime($vacante->hora_salida))}}</p>
            </li>
            <li>
              <p><b>Prestaciones ofrecidas: </b>{{$requisitos->prestaciones_ofrecidas}}</p>
            </li>
            <li>
              <p><b>Dirección: </b>{{$vacante->direccioncompleta}}</p>
            </li>
            <ul>
        </div>
        <h4 class="my-3 font-weight-bold">Requisitos: </h4>
        <div class="content mr-md-4">
          @auth
          <ul>
            <li>
              <p><b>Acepta personas con discapacidad: </b>{{$requisitos->personas_con_discapacidad}}, {{$requisitos->mencione_discapacidad}}</p>
            </li>
            <li>
              <p><b>Escolaridad: </b>{{$requisitos->escolaridad}}</p>
            </li>
            <li>
              <p><b>Carrera o especialidad: </b>{{$requisitos->carrera_especialidad}}</p>
            </li>
            <li>
              <p><b>Situación academica: </b>{{$requisitos->situacion_academica}}</p>
            </li>
            <li>
              <p><b>Experiencia: </b>{{$requisitos->experiencia_MinRequerida}}</p>
            </li>
            <li>
              <p><b>Rango de edad: </b>De {{$requisitos->minima_edad}} años a {{$requisitos->maxima_edad}} años</p>
            </li>
            <li>
              <p><b>Idioma: </b>{{$requisitos->idioma}}</p>
            </li>
            <li>
              <p><b>Conocimientos en computación: </b>{{$requisitos->computacion}}</p>
            </li>
            <li>
              <p><b>Sexo: </b>{{$requisitos->sexo}}</p>
            </li>
            <li>
              <p><b>Disponibilidad de viajar: </b>{{$requisitos->disponibilidad_viajar}}</p>
            </li>
            <li>
              <p><b>Disponibilidad de radicar fuera: </b>{{$requisitos->disponibilidad_RadicarFuera}}</p>
            </li>
            <li>
              <p><b>Observaciones: </b>{{$requisitos->observaciones}}</p>
            </li>
          </ul>
          @endauth
          @guest
    
          <a href="{{ route('login') }}" style="color:#00a9e0">Inicia sesion para ver datos.</a>
          @endguest
        </div>
        <h4 class="my-3 font-weight-bold">Contacto: </h4>
        <div class="content mr-md-4">
          @auth
          <ul>
            <li>
              <p><b>Nombre: </b>{{$contacto->nombre_contacto}}
              <p>
            </li>
            <li>
              <p><b>Cargo: </b>{{$contacto->cargo}}
              <p>
            </li>
            <li>
              <p><b>Teléfono: </b>{{$contacto->telefono}}
              <p>
            </li>
            <li>
              <p><b>Correo Electrónico: </b>{{$contacto->email}}
              <p>
            </li>
            <li>
              <p><b>Medio preferente: </b>{{$contacto->medio_preferente_contacto}}
              <p>
            </li>
          </ul>
          @endauth
          @guest
          <a href="{{ route('register') }}" style="color:#00a9e0">Inicia sesion para ver datos.</a>
          @endguest
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="mb-4 ml-md-4">
          <div class="card postulation shadow p-3">
            <div style="height: 120px; width: 120px; margin:auto; 
                          background: url('{{asset('archivo/'.$empresa->foto_perfil)}}') no-repeat center center; 
                          -webkit-background-size: contain;
                          -moz-background-size: contain;
                          -o-background-size: contain;
                          background-size: contain;" class="card-img-top" alt="{{$empresa->foto_perfil}}"></div>
            <div class="card-body p-0">
              <h5 class="card-title text-center">{{$empresa->nombre_RS}}</h5>
              <div class="classification text-center mb-4">
                <ol>
                  <i class="fas fa-star mx-2"></i>
                  <i class="fas fa-star mx-2"></i>
                  <i class="fas fa-star mx-2"></i>
                  <i class="fas fa-star mx-2"></i>
                  <i class="far fa-star mx-2"></i>
                </ol>
              </div>
              @guest
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-block" data-toggle="modal" data-target="#applyModal" style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 15px !important; padding: 8px 15px;">Postularme</button>
              <!-- <a href="#" class="btn btn-primary btn-block">Postularme</a> -->
              @else
              @empty($postulacion)
              <!-- Button trigger modal -->
              <button id="btn-postulate" type="button" class="btn btn-block" data-toggle="modal" data-target="#applyModal" style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 15px !important; padding: 8px 15px;">Postularme</button>
              <!-- <a href="#" class="btn btn-primary btn-block">Postularme</a> -->
              @else
              <button type="button" class="btn btn-block" style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 15px !important; padding: 8px 15px;"  disabled>Ya te haz postulado</button>
              @endempty
              @endguest
            </div>
          </div>
          <!-- <h6 class="sharer mt-5">
                Comparte esta vacante
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a> 
              </h6> -->
        </div>
      </div>
      @guest
      <!-- Modal con notificación para iniciar sesión -->
      <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header bg-info text-white rounded-top">              <h5 class="modal-title">Lo sentimos, no puedes postularte a esta vacante.</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color:white" aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div align="center">
                <h6>Para poder postularte, primero debes:</h6>
              </div>
              <div align="center">
                <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn  btn-block" style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 15px !important; padding: 8px 15px;">Iniciar Sesión</a>
              </div>
              <div align="center">
                <h6>ó</h6>
              </div>
              <div align="center">
                <a href="{{route('register')}}" class="btn btn-block" style="border: 2px solid #00a9e0; background-color: transparent; color: #00a9e0; border-radius: 15px !important; padding: 8px 15px;">Registrarte</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      @if ($datos && $escolaridad)
      <!-- Modal para postulación -->
      <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header gradient-brand">
              <h5 class="modal-title" style="color:white" id="exampleModalLongTitle">Confirmación de Postulante.</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color:white" aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6>¿Deseas Postularte a <b>"{{$vacante->titulo_puesto}}"</b> ofrecido por <b>"{{$empresa->nombre_RS}}"</b>?</h6>
            </div>
            <div class="modal-footer">
              <form id="apply-form" method="POST" action="{{ route('postulacion') }}">
                @csrf
                <input type="hidden" name="idvacante" value="{{$vacante->id_vacante}}">
                <input type="hidden" name="url" value="{{url()->current()}}">
                <button id="btn-apply" type="submit" class="btn gradient-brand text-white">Postularme</button>
              </form>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      @else
      <!-- Modal para llenar datos obligatorios -->
      <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header bg-info text-white rounded-top">              <h5 class="modal-title" style="color:white" id="exampleModalLongTitle">Para continuar con esta acción:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="color:white" aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div>
                <h6>Debes tener completo el registro de datos que se te piden en <b><a href="{{route('micuenta')}}">"Mi Cuenta"</a>,</b> tales como:</h6>
                <li><b>Mis Datos</b> (Fecha de nacimiento, género, estado civil, dirección, etc.).</li>
                <li><b>Mi Curriculum</b> (Escolaridad, situación laboral, perfil laboral y puesto deseado).</li>
              </div>
            </div>
            <div class="modal-footer">
              <a href="{{route('micuenta')}}" class="btn btn-primary">Ir a Mi Cuenta</a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endguest
    </div>
  </div>
</section>
<!--Related
    <section class="bg-light">
      <div class="container my-md-5">
        <div class="row justify-content-between">
          <!-- reviews
          <div class="col-12 ">
            <h4 class="mb-4 mx-3">Vacantes Similares</h4>
            <div class="card-deck mx-3 mx-md-0">
              <div class="card">
                <div class="card-body">
                  <a href="#">
                    <h5 class="card-title">Vacante Similar</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <small class="txt-accent"><span>Lerma</span> / <span> hace 3 min</span></small>
                  </a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="#">
                    <h5 class="card-title">Vacante Similar</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <small class="txt-accent"><span>Lerma</span> / <span> hace 3 min</span></small>
                  </a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="#">
                    <h5 class="card-title">Vacante Similar</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <small class="txt-accent"><span>Lerma</span> / <span> hace 3 min</span></small>
                  </a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="#">
                    <h5 class="card-title">Vacante Similar</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <small class="txt-accent"><span>Lerma</span> / <span> hace 3 min</span></small>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->


@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $('#apply-form').submit(function(e){
      e.preventDefault();
      $("#btn-apply").text("Postulandose...");
      let form = $(this);
      let url = form.attr('action');

      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
          //alert(data); // show response from the php script.
          $('#applyModal').modal('hide');

          Swal.fire({
            position: 'center',
            icon: 'success',
            title: data.name, 
            text: data.success,
            showConfirmButton: false,
            timer: 1500
          });
          $("#btn-apply").text("Postularme");
          $("#btn-postulate").hide();
        }
      });
    });

  });
</script>
@endsection