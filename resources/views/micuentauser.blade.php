@extends('layouts.base')
@section('content')
<!--Dashboard-->
<section class="events py-5">
  <div class="container">
    <div class="row justify-content-between">
      <!--username-->
      <div class="col-12">
        <h3 class="ml-4 lerma">{{ Auth::user()->nombre }}</h3>
      </div>
      <!--menu-->
      <div class="col-12 col-md-4">
        <div class="nav flex-column nav-pills shadow m-4 bg-white" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Mi Cuenta</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mis Datos</a>
          <a class="nav-link" id="v-pills-applications-tab" data-toggle="pill" href="#v-pills-applications" role="tab" aria-controls="v-pills-applications" aria-selected="false">Mis Postulaciones</a>
          <a class="nav-link" id="v-pills-cv-tab" data-toggle="pill" href="#v-pills-cv" role="tab" aria-controls="v-pills-cv" aria-selected="false">Mi Curriculum</a>
        </div>
      </div>
      <div class="col-12 col-md-8">
        <div class="tab-content m-4" id="v-pills-tabContent">
          <!--home-->
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="card">
              <div class="card-header bg-white">
                <h3 class="text-center font-weight-bold">Datos de Contacto</h3>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item"><small>Nombre:</small> <span>{{ Auth::user()->nombre }}</span></li>
                  <li class="list-group-item"><small>Teléfono:</small> <span>{{ Auth::user()->telefono }}</span></li>
                  <li class="list-group-item"><small>Email:</small> <span>{{ Auth::user()->email }}</span></li>
                </ul>
              </div>
            </div>
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="text-center font-weight-bold">Postulaciones Recientes</h5>
              </div>
              <div class="card-body">
                <div class="card-content">
                  <ul class="list-unstyled">
                    @empty($postulaciones)
                    <h4 class="text-center">Aún no te haz postulado a una vacante.</h4>
                    @else
                    @foreach($postulaciones as $postulacion)
                    <a href="{{ route('vacante', $postulacion->slug) }}" class="d-flex align-items-center p-4 rounded shadow-lg bg-white text-decoration-none" 
                    style="border-left: 10px solid #00a9e0; transition: 0.3s;">
                    <div style="height: 100px; width: 100px; 
                            background: url('archivo/{{$postulacion->foto_perfil}}') no-repeat center center; 
                            -webkit-background-size: contain;
                            -moz-background-size: contain;
                            -o-background-size: contain;
                            background-size: contain;" class="mr-3 shadow" alt="{{$postulacion->foto_perfil}}" title="{{$postulacion->foto_perfil}}"></div>
                      <div class="media-body">
                        <h5><small class="float-right txt-info">$ {{$postulacion->salario_mensual}}</small></h5>
                        <h5>{{$postulacion->titulo_puesto}}</h5>
                        <p>{{$postulacion->descripcion_breve}}.</p>
                        <small class="txt-accent"><span>{{$postulacion->lugar_vacante}}</span> / <span> {{date('d-m-o h:i a', strtotime($postulacion->fecha))}}</span></small>
                      </div>
                    </a>
                    <hr>
                    @endforeach
                    @endempty
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--profile-->
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="card">
              <div class="card-header bg-white">
                <h3 class="text-center font-weight-bold">Mis Datos</h3>
              </div>
              <div class="card-body pt-0">
                <div class="container">
                  <!-- Nav tabs -->
                  <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#verdatos">Ver Datos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#modificardatos">Editar Datos</a>
                    </li>
                  </ul>
                  <hr class="mt-0">
                  <!-- Tab panes de Ver datos y modificar datos -->
                  <div class="tab-content">
                    <div id="verdatos" class="container tab-pane data-form active"><br>
                      <div class="form-row" align="center">
                        <div class="form-group col-md-12">
                          <label for="photoUser" class="font-weight-bold">Foto de Perfil</label><br>
                          @foreach ($datos as $a)
                          <img style="border-radius:150px;" width="130px" height="130px" src="{{asset('archivo/'.$a->foto_perfil)}}" alt="{{ $a->foto_perfil }}">
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="userName" class="font-weight-bold">Nombre Completo:</label>
                          <input type="text" readonly class="form-control" id="userName" name="userName" value="@foreach($datos as $a) {{ $a->nombre_completo }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="phoneUser" class="font-weight-bold">Teléfono</label>
                          <input type="text" readonly class="form-control" id="phoneUser" name="phoneUser" value="@foreach($datos as $a) {{ $a->telefono }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="dateUser" class="font-weight-bold">Fecha de Nacimiento:</label>
                          <input type="text" readonly class="form-control" id="dateUser" name="dateUser" value="@foreach($datos as $a) {{ $a->fecha_nacimiento }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="genereUser" class="font-weight-bold">Género:</label><br>
                          <input class="form-control" type="text" readonly name="genereUser" value="@foreach($datos as $a) {{ $a->genero }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="edocivil" class="font-weight-bold">Estado Civil:</label>
                          <input type="text" readonly name="edocivil" class="form-control" id="edocivil" value="@foreach($datos as $a) {{ $a->edo_civil }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="entidadnac" class="font-weight-bold">Lugar de Nacimiento:</label>
                          <input type="text" readonly name="entidadnac" class="form-control" id="entidadnac" value="@foreach($datos as $a) {{ $a->lugar_nacimiento }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="entfed" class="font-weight-bold">Entidad Federativa:</label>
                          <input type="text" readonly name="entfed" class="form-control" id="enfed" value="@foreach($datos as $a) {{ $a->EntFed }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="municipio" class="font-weight-bold">Municipio:</label>
                          <input type="text" readonly name="municipio" class="form-control" id="municipio1" value="@foreach($datos as $a) {{ $a->municipio }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="colonia" class="font-weight-bold">Colonia:</label>
                          <input type="text" readonly class="form-control" name="colonia" value="@foreach($datos as $a) {{ $a->colonia }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="codpost" class="font-weight-bold">Código Postal:</label>
                          <input type="text" readonly class="form-control" name="codpost" value="@foreach($datos as $a) {{ $a->CP }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="calle" class="font-weight-bold">Calle:</label>
                          <input type="text" readonly class="form-control" name="calle" placeholder="Calle" value="@foreach($datos as $a) {{ $a->calle }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="num" class="font-weight-bold">Número:</label>
                          <input type="text" readonly class="form-control" name="num" value="@foreach($datos as $a) {{ $a->numero }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="disc" class="font-weight-bold">Discapacidad:</label>
                          <input type="text" readonly class="form-control" name="discap" value="@foreach($datos as $a) {{ $a->discapacidad }} @endforeach">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="curp" class="font-weight-bold">CURP:</label>
                          <input type="text" readonly class="form-control" name="curp" value="@foreach($datos as $a) {{ $a->curp }} @endforeach">
                        </div>
                        <div class="form-group col-md-12">
                          <label for="comoentero" class="font-weight-bold">¿Cómo se enteró de la "Bolsa de Trabajo Para el Municipio de Lerma"?:</label>
                          <input type="text" readonly class="form-control" name="comoentero" value="@foreach($datos as $a) {{ $a->ComSeEnt }} @endforeach">
                        </div>
                      </div>
                      <hr />
                    </div>
                    <div id="modificardatos" class="container tab-pane fade"><br>
                      {{Form::open(['route' => 'actualizardatosc','files' => true, 'class' => 'data-form'])}}
                      @csrf
                      <input type="hidden" name='actual' value="@foreach($datos as $a){{$a->foto_perfil}}@endforeach">
                      <div class="form-row" align="center">
                        <div class="form-group col-md-4">
                          <label for="photoUser" class="font-weight-bold">Foto Actual</label><br>
                          @foreach ($datos as $a)
                          <img style="border-radius:150px;" width="130px" height="130px" src="{{asset('archivo/'.$a->foto_perfil)}}" alt="{{ $a->foto_perfil }}">
                          @endforeach
                        </div>
                        <div class="form-group col-md-8">
                          <label for="photoUser" class="font-weight-bold">Foto Nueva (Opcional)</label><br>
                          <input type="file" id="photoUser" name="photoUser" class="input--style-4" accept=".jpg,.jpeg,.png" title="Solo imagenes con extensión: jpg, jpeg, png">
                        </div>
                        <hr>
                        <div class="form-group col-md-6">
                          <label for="userName" class="font-weight-bold">Nombre Completo: <font color="red">*</font></label>
                          @foreach($datos as $a)
                          <input type="text" class="form-control" id="userName" name="userName" value="{{old('userName',$a->nombre_completo)}}" required>
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="phoneUser" class="font-weight-bold">Teléfono <font color="red">*</font></label>
                          @foreach($datos as $a)
                          <input type="tel" class="form-control" id="phoneUser" name="phoneUser" pattern="[0-9]{10}" title="Ingrese número a 10 dígitos" value="{{old('phoneUser',$a->telefono)}}" required>
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="dateUser" class="font-weight-bold">Fecha de Nacimiento: <font color="red">*</font></label>
                          @foreach($datos as $a)
                          <input type="date" class="form-control" id="dateUser" name="dateUser" value="{{old('dateUser',$a->fecha_nacimiento)}}">
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="genereUser" class="font-weight-bold">Género: <font color="red">*</font></label><br>
                          @foreach($datos as $a)
                          @if($a->genero=="Masculino")
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genereUser" value="Masculino" checked>
                            <label class="form-check-label" for="genereUser">Masculino</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genereUser" value="Femenino">
                            <label class="form-check-label" for="genereUser">Femenino</label>
                          </div>
                          @else
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genereUser" value="Masculino">
                            <label class="form-check-label" for="genereUser">Masculino</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genereUser" value="Femenino" checked>
                            <label class="form-check-label" for="genereUser">Femenino</label>
                          </div>
                          @endif
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="edocivil" class="font-weight-bold">Estado Civil: <font color="red">*</font></label>
                          <select id="edocivil" name="edocivil" class="form-control" required>
                            <option disabled>Selecciona</option>
                            @foreach ($datos as $a)
                            <option value="{{$a->edo_civil}}"> {{$a->edo_civil}}</option>
                            @foreach ($edoscivil as $edocivil)
                            @if ($edocivil->EdoCivil != $a->edo_civil)
                            <option value='{{ $edocivil->EdoCivil }}'> {{ $edocivil->EdoCivil }}</option>
                            @endif
                            @endforeach
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="entidadnac" class="font-weight-bold">Lugar de Nacimiento: <font color="red">*</font></label>
                          <select id="entidadnac" name="entidadnac" class="form-control" required>
                            <option disabled> Selecciona</option>
                            @foreach ($ents as $ent)
                            @foreach ($datos as $a)
                            @if($ent->EntFed == $a->lugar_nacimiento)
                            <option value='{{ $ent->EntFed }}' selected> {{ $ent->EntFed }}</option>
                            @else
                            <option value='{{ $ent->EntFed }}'> {{ $ent->EntFed }}</option>
                            @endif
                            @endforeach
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="entfed" class="font-weight-bold">Entidad Federativa: <font color="red">*</font></label>
                          <select name="entfed" id="entfed" class="form-control" required>
                            @foreach ($ents as $ent)
                            @foreach ($datos as $a)
                            @if($ent->EntFed == $a->EntFed)
                            <option value='{{ $ent->EntFed }}' selected> {{ $ent->EntFed }}</option>
                            @else
                            <option value='{{ $ent->EntFed }}'> {{ $ent->EntFed }}</option>
                            @endif
                            @endforeach
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="municipio" class="font-weight-bold">Municipio: <font color="red">*</font></label>
                          <select name="municipio" id="municipio" class="form-control" required>
                            @foreach ($municipios as $municipio)
                            @foreach ($datos as $a)
                            @if($municipio->Municipio == $a->municipio)
                            <option value='{{ $municipio->Municipio }}' selected> {{ $municipio->Municipio }}</option>
                            @else
                            <option value='{{ $municipio->Municipio }}'> {{ $municipio->Municipio }}</option>
                            @endif
                            @endforeach
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="colonia" class="font-weight-bold">Colonia: <font color="red">*</font></label>
                          @foreach ($datos as $a)
                          <input type="text" class="form-control" name="colonia" placeholder="Colonia" value="{{old('colonia',$a->colonia)}}" required>
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="codpost" class="font-weight-bold">Código Postal: <font color="red">*</font></label>
                          @foreach ($datos as $a)
                          <input type="text" class="form-control" name="codpost" placeholder="C.P." pattern="[0-9]{5}" title="Ingrese Código Postal a 5 digitos" value="{{old('codpost',$a->CP)}}" required>
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="calle" class="font-weight-bold">Calle: <font color="red">*</font></label>
                          @foreach ($datos as $a)
                          <input type="text" class="form-control" name="calle" placeholder="Calle" value="{{old('calle',$a->calle)}}" required>
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="num" class="font-weight-bold">Número: <font color="red">*</font></label>
                          @foreach ($datos as $a)
                          <input type="text" class="form-control" name="num" placeholder="#" value="{{old('num',$a->numero)}}" required>
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="disc" class="font-weight-bold">Discapacidad: <font color="red">*</font></label>
                          @foreach ($datos as $a)
                          @if($a->discapacidad=="No")
                          <select name="discap" class="form-control" required>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                          </select>
                          @else
                          <select name="discap" class="form-control" required>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                          </select>
                          @endif
                          @endforeach
                        </div>
                        <div class="form-group col-md-6">
                          <label for="curp" class="font-weight-bold">CURP: <font color="red">*</font></label>
                          @foreach ($datos as $a)
                          <input type="text" class="form-control" name="curp" placeholder="CURP" value="{{old('curp',$a->curp)}}" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" title="Ingrese una CURP valida." required>
                          @endforeach
                        </div>
                        <div class="form-group col-md-12">
                          <label for="comoentero" class="font-weight-bold">¿Cómo se enteró de la "Bolsa de Trabajo Para el Municipio de Lerma"?: <font color="red">*</font></label>
                          @foreach ($datos as $a)
                          <input type="text" class="form-control" name="comoentero" value="{{old('comoentero',$a->ComSeEnt)}}" required>
                          @endforeach
                        </div>
                        <hr />
                        <div class="form-group col-md-12">
                          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--applications - Postulaciones-->
          <div class="tab-pane fade" id="v-pills-applications" role="tabpanel" aria-labelledby="v-pills-applications-tab">
            <div class="card">
              <div class="card-header bg-white">
                <h3 class="text-center font-weight-bold">Postulaciones</h3>
              </div>
              <div class="card-body">
                <div class="card-content">
                  <ul class="list-unstyled">
                    @empty($postulaciones)
                    <h4 class="text-center">Aún no te haz postulado a una vacante.</h4>
                    @else
                    @foreach($postulacions as $postulacion)
                    <a href="{{ route('vacante', $postulacion->slug) }}" class="d-flex align-items-center p-4 rounded shadow-lg bg-white text-decoration-none" 
                    style="border-left: 10px solid #00a9e0; transition: 0.3s;">
                      <div style="height: 100px; width: 100px; 
                            background: url('archivo/{{$postulacion->foto_perfil}}') no-repeat center center; 
                            -webkit-background-size: contain;
                            -moz-background-size: contain;
                            -o-background-size: contain;
                            background-size: contain;" class="mr-3 shadow" alt="{{$postulacion->foto_perfil}}" title="{{$postulacion->foto_perfil}}"></div>
                      <div class="media-body">
                        <h5><small class="float-right txt-info">$ {{$postulacion->salario_mensual}}</small></h5>
                        <h5>{{$postulacion->titulo_puesto}}</h5>
                        <p>{{$postulacion->descripcion_breve}}.</p>
                        <small class="txt-accent"><span>{{$postulacion->lugar_vacante}}</span> / <span> {{date('d-m-o h:i a', strtotime($postulacion->fecha))}}</span></small>
                      </div>
                    </a>
                    <hr>
                    @endforeach
                    @endempty
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Curriculum -->
          <div class="tab-pane fade" id="v-pills-cv" role="tabpanel" aria-labelledby="v-pills-cv-tab">
            <div class="card">
              <div class="card-header bg-white">
                <h3 class="text-center font-weight-bold">Mi Curriculum</h3>
              </div>
              <div class="card-body  pt-0">
                <div class="container">
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="container">
                      <button class="navbar-toggler ri" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Menu">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarToggler">
                        <ul class="nav nav-pills justify-content-center m-auto siguiente">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#verc">Ver Datos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#cv" >Descargar/Subir CV</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#modificarc">Editar Datos</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <hr class="m-0"/>
                  <div class="tab-content">
                    <div id="verc" class="container tab-pane active">
                      <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                        <div class="container">
                          <button class="navbar-toggler ri" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Menu">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarToggler">
                            <ul class="nav nav-pills justify-content-center m-auto siguiente">
                              <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#esconoc">Escolaridad</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sitlab">Situación laboral</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#perflab">Perfil laboral</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#puestodes">Puesto deseado</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <div class="tab-content">
                        <div id="esconoc" class="container tab-pane active"><br>
                          <div class="form-row data-form">
                            <div class="form-group col-md-12">
                              <h5 class="font-weight-bold">Escolaridad.</h5>
                              <hr />
                            </div>
                            <div class="form-group col-md-6">
                              <label for="ultimogrado" class="font-weight-bold">Último grado de estudios:</label>
                              <input name="ultimogrado" readonly class="form-control" value="@foreach($escolaridad as $esc) {{ $esc->grado_estudios }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="carrera" class="font-weight-bold">Situación académica:</label>
                              <input type="text" class="form-control" readonly name="situacionacad" value="@foreach($escolaridad as $esc) {{ $esc->situacion_academica }} @endforeach">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="situacionacad" class="font-weight-bold">Carrera o Especialidad:</label><br>
                              <input type="text" readonly class="form-control" name="carrera" value="@foreach($escolaridad as $esc) {{ $esc->carrera_especialidad }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="idioma" class="font-weight-bold">Idioma:</label>
                              <input type="text" readonly name="idioma" class="form-control" value="@foreach($escolaridad as $esc) {{ $esc->idioma }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="dominioidio" class="font-weight-bold">Dominio:</label><br>
                              <input type="text" readonly class="form-control" name="domidio" value="@foreach($escolaridad as $esc) {{ $esc->dominio }} @endforeach">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="conhab" class="font-weight-bold">Conocimientos específicos: <font color="red">*</font></label>
                              <input type="text" readonly class="form-control" name="conhabc" placeholder="Conocimientos específicos" value="@foreach($escolaridad as $esc) {{ $esc->conocimientos_esp }} @endforeach" required>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="conhab" class="font-weight-bold">Habilidades específicas: <font color="red">*</font></label>
                              <input type="text" readonly class="form-control" name="conhabh" placeholder="Habilidades específicas" value="@foreach($escolaridad as $esc) {{ $esc->habilidades_esp }} @endforeach" required>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="cursos" class="font-weight-bold">Cursos y Certificaciones: <font color="red">*</font></label>
                              <input type="text" readonly class="form-control" name="cursos" placeholder="Cursos y certificaciones" value="@foreach($escolaridad as $esc) {{ $esc->cursos }} @endforeach" required>
                            </div>
                          </div>
                          <hr />
                        </div>
                        <div id="sitlab" class="container tab-pane fade"><br>
                          <div class="form-row data-form" align="center">
                            <div class="form-group col-md-12">
                              <h5 class="font-weight-bold">Situación Laboral.</h5>
                              <hr />
                            </div>
                            <div class="form-group col-md-6">
                              <label for="trabajaact" class="font-weight-bold">Trabaja actualmente:</label><br>
                              <input type="text" readonly class="form-control" name="trabajaact" value="@foreach($situacion as $sit) {{ $sit->trabajo_actual }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="motivo" class="font-weight-bold">Motivo:</label>
                              <input type="text" readonly name="motivo" class="form-control" value="@foreach($situacion as $sit) {{ $sit->motivo }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="fechacombus" class="font-weight-bold">Fecha que comenzó a buscar empleo:</label>
                              <input type="text" readonly class="form-control" name="fechacombus" value="@foreach($situacion as $sit) {{ $sit->fecha_busquedaempleo }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="disponibilidad" class="font-weight-bold">Disponibilidad:</label><br>
                              <input class="form-control" type="text" readonly name="disponibilidad" value="@foreach($situacion as $sit) {{ $sit->disponibilidad }} @endforeach">
                            </div>
                          </div>
                          <hr />
                        </div>
                        <div id="perflab" class="container tab-pane fade"><br>
                          <div class="form-row data-form" align="center">
                            <div class="form-group col-md-12">
                              <h5 class="font-weight-bold">Perfil Laboral (Ultimo Puesto).</h5>
                              <hr />
                            </div>
                            <div class="form-group col-md-6">
                              <label for="nombrerazsoc" class="font-weight-bold">Nombre o Razón Social:</label>
                              <input type="text" readonly class="form-control" name="nombrerazsoc" value="@foreach($perfil as $per) {{ $per->nombre_RS }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="puestoocu" class="font-weight-bold">Título del puesto ocupado:</label>
                              <input type="text" readonly class="form-control" name="puestoocu" value="@foreach($perfil as $per) {{ $per->titulo_puesto }} @endforeach">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="funcrealiz" class="font-weight-bold">Funciones y actividades realizadas:</label>
                              <input type="text" readonly class="form-control" name="funcrealiz" value="@foreach($perfil as $per) {{ $per->funciones_actividades }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="salario" class="font-weight-bold">Salario mensual:</label>
                              <input type="text" readonly class="form-control" name="salario" value="$ @foreach($perfil as $per) {{ $per->salario_mensual }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="tipoempleo" class="font-weight-bold">Tipo de empleo:</label>
                              <input type="text" readonly name="tipoempleo" class="form-control" value="@foreach($perfil as $per) {{ $per->tipo_empleo }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="fechaingr" class="font-weight-bold">Fecha de Ingreso:</label>
                              <input type="text" readonly class="form-control" name="fechaingr" value="@foreach($perfil as $per) {{ $per->fecha_ingreso }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="fechasep" class="font-weight-bold">Fecha de Separación:</label>
                              <input type="text" readonly class="form-control" name="fechasep" value="@foreach($perfil as $per) {{ $per->fecha_separacion }} @endforeach">
                            </div>
                          </div>
                          <hr />
                        </div>
                        <div id="puestodes" class="container tab-pane fade"><br>
                          <div class="form-row data-form" align="center">
                            <div class="form-group col-md-12">
                              <h5 class="font-weight-bold">Puesto Deseado.</h5>
                              <hr />
                            </div>
                            <div class="form-group col-md-12">
                              <label for="puestodeseado" class="font-weight-bold">Puesto deseado:</label>
                              <input type="text" readonly class="form-control" name="puestodeseado" value="@foreach($puesto as $pue) {{ $pue->puesto_deseado }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="ocupacion" class="font-weight-bold">Ocupación:</label>
                              <input type="text" readonly class="form-control" name="ocupacion" value="@foreach($puesto as $pue) {{ $pue->ocupacion }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="exppuesto" class="font-weight-bold">Experiencia en el puesto:</label>
                              <input type="text" readonly name="exppuesto" class="form-control" value="@foreach($puesto as $pue) {{ $pue->experiencia_puesto }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="tipoempleo" class="font-weight-bold">Tipo de empleo deseado:</label>
                              <input type="text" readonly name="tipoempleo" class="form-control" value="@foreach($puesto as $pue) {{ $pue->tipo_empleo }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="salariopre" class="font-weight-bold">Salario mensual pretendido:</label>
                              <input type="text" readonly class="form-control" name="salariopre" value="$ @foreach($puesto as $pue) {{ $pue->salario_mensual }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="dispviajar" class="font-weight-bold">Disponibilidad para viajar:</label><br>
                              <input type="text" readonly class="form-control" name="dispviajar" value="@foreach($puesto as $pue) {{ $pue->dispo_viajar }} @endforeach">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="dispcamres" class="font-weight-bold">Disp. para radicar fuera:</label><br>
                              <input type="text" readonly class="form-control" name="dispcamres" value="@foreach($puesto as $pue) {{ $pue->dispo_radicar_fuera }} @endforeach">
                            </div>
                          </div>
                          <hr />
                        </div>
                      </div>
                    </div>
                    <div id="cv" class="container tab-pane"><br>
                      <div class="form-row" align="center">
                        <div class="form-group col-md-12">
                          <h5>Te ofrecemos un formato de tu currículum vitae de forma gratuita<h5>
                              <a class="btn btn-primary col-md-8" href="{{ url('/cvpdf') }}" target="_blank" >Descargar CV</a>
                              <hr />
                              <h5>Tambien puedes subir tu propio formato de currículum vitae aqui</h5>
                              <hr />
                              @if ($usercv)
                              <label for="cv" class="font-weight-bold">Currículum Vitae Actual</label><br>
                              @foreach ($usercv as $ucv)
                              <label for="cv" class="font-weight-bold">{{$ucv->nombre_cv}}</label><br>
                              @endforeach
                              <div class="form-row" align="center">
                                <div class="form-group col-md-6">
                                  <label for="fechacombus" class="font-weight-bold">Ver</label><br>
                                  @foreach ($usercv as $ucv)
                                  <a class="btn btn-primary col-md-6" href="archivo/{{$ucv->nombre_cv}}" target="_blank">Ver</a>
                                  @endforeach
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="disponibilidad" class="font-weight-bold">Descargar</label><br>
                                  @foreach ($usercv as $ucv)
                                  <a class="btn btn-primary col-md-6" href="archivo/{{$ucv->nombre_cv}}" download="{{$ucv->nombre_cv}}">Descargar</a>
                                  @endforeach
                                </div>
                              </div>
                              <hr />
                              <label for="cv" class="font-weight-bold">Subir nuevo currículum vitae</label><br>
                              {{Form::open(['route' => 'archivocvact','files' => true])}}
                              @csrf
                              <input type="file" name="userCV" id="userCV" accept=".pdf,.doc,.docx" title="Solo documentos con extensión: pdf, docx, doc" required><br><br>
                              <button type="submit" class="btn btn-primary">Guardar</button>
                              </form>
                              @else
                              {{Form::open(['route' => 'archivocv','files' => true])}}
                              @csrf
                              <label for="cv" class="font-weight-bold">Subir CV: (Opcional)</label><br>
                              <input type="file" name="userCV" id="userCV" accept=".pdf,.doc,.docx" title="Solo documentos con extensión: pdf, docx, doc" required><br><br>
                              <label for="cv" class="font-weight-bold">Test psicometrico: </label><br>
                              <input type="file" name="test" id="test_id" accept=".pdf,.doc,.docx" title="Solo documentos con extensión: pdf, docx, doc" required><br><br>
                              <button type="submit" class="btn btn-primary">Guardar</button>
                              </form>
                              @endif
                        </div>
                      </div>
                    </div>
                    <div id="modificarc" class="container tab-pane">
                      <nav class="navbar navbar-expand-lg navbar-dark bg-light p-0">
                        <div class="container">
                          <button class="navbar-toggler ri" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Menu">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarToggler">
                            <ul class="nav nav-pills justify-content-center m-auto siguiente">
                              <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#esconocm">Escolaridad</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sitlabm">Situación laboral</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#perflabm">Perfil laboral</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#puestodesm">Puesto deseado</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <form method="POST" action="{{ route('actualizarcurriculum') }}" class="data-form">
                        @csrf
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div id="esconocm" class="container tab-pane active"><br>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <h5 class="font-weight-bold">Escolaridad.</h5>
                                <hr />
                              </div>
                              <div class="form-group col-md-6">
                                <label for="ultimogrado" class="font-weight-bold">Último grado de estudios: <font color="red">*</font></label>
                                <select name="ultimogrado" class="form-control" required>
                                  @foreach ($escolaridad as $esc)
                                  <option value='{{ $esc->grado_estudios }}'> {{ $esc->grado_estudios }}</option>
                                  @foreach ($ultimosgr as $ultimogr)
                                  @if($ultimogr->UltimoGrado != $esc->grado_estudios)
                                  <option value='{{ $ultimogr->UltimoGrado }}'> {{ $ultimogr->UltimoGrado}}</option>
                                  @endif
                                  @endforeach
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="carrera" class="font-weight-bold">Carera o Especialidad: <font color="red">*</font></label>
                                @foreach ($escolaridad as $esc)
                                <input type="text" class="form-control" name="carrera" placeholder="Carrera" value="{{old('carrera',$esc->carrera_especialidad)}}">
                                @endforeach
                              </div>
                              <div class="form-group col-md-12">
                                @foreach ($escolaridad as $esc)
                                @if ($esc->situacion_academica == "Estudiante")
                                <label for="situacionacad" class="font-weight-bold">Situación académica: <font color="red">*</font></label><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Estudiante" checked>
                                  <label class="form-check-label" for="genero">Estudiante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Dimploma o certificado">
                                  <label class="form-check-label" for="genero">Diploma o certificado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Trunca">
                                  <label class="form-check-label" for="genero">Trunca</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Pasante">
                                  <label class="form-check-label" for="genero">Pasante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Titulado">
                                  <label class="form-check-label" for="genero">Titulado</label>
                                </div>
                                @else
                                @if ($esc->situacion_academica == "Diploma o certificado")
                                <label for="situacionacad" class="font-weight-bold">Situación académica: <font color="red">*</font></label><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Estudiante">
                                  <label class="form-check-label" for="genero">Estudiante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Dimploma o certificado" checked>
                                  <label class="form-check-label" for="genero">Diploma o certificado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Trunca">
                                  <label class="form-check-label" for="genero">Trunca</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Pasante">
                                  <label class="form-check-label" for="genero">Pasante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Titulado">
                                  <label class="form-check-label" for="genero">Titulado</label>
                                </div>
                                @else
                                @if ($esc->situacion_academica == "Trunca")
                                <label for="situacionacad" class="font-weight-bold">Situación académica: <font color="red">*</font></label><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Estudiante">
                                  <label class="form-check-label" for="genero">Estudiante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Dimploma o certificado">
                                  <label class="form-check-label" for="genero">Diploma o certificado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Trunca" checked>
                                  <label class="form-check-label" for="genero">Trunca</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Pasante">
                                  <label class="form-check-label" for="genero">Pasante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Titulado">
                                  <label class="form-check-label" for="genero">Titulado</label>
                                </div>
                                @else
                                @if ($esc->situacion_academica == "Pasante")
                                <label for="situacionacad" class="font-weight-bold">Situación académica: <font color="red">*</font></label><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Estudiante">
                                  <label class="form-check-label" for="genero">Estudiante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Dimploma o certificado">
                                  <label class="form-check-label" for="genero">Diploma o certificado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Trunca">
                                  <label class="form-check-label" for="genero">Trunca</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Pasante" checked>
                                  <label class="form-check-label" for="genero">Pasante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Titulado">
                                  <label class="form-check-label" for="genero">Titulado</label>
                                </div>
                                @else
                                @if ($esc->situacion_academica == "Titulado")
                                <label for="situacionacad" class="font-weight-bold">Situación académica: <font color="red">*</font></label><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Estudiante">
                                  <label class="form-check-label" for="genero">Estudiante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Dimploma o certificado">
                                  <label class="form-check-label" for="genero">Diploma o certificado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Trunca">
                                  <label class="form-check-label" for="genero">Trunca</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Pasante">
                                  <label class="form-check-label" for="genero">Pasante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="situacionacad" value="Titulado" checked>
                                  <label class="form-check-label" for="genero">Titulado</label>
                                </div>
                                @endif
                                @endif
                                @endif
                                @endif
                                @endif
                                @endforeach
                              </div>
                              <div class="form-group col-md-5">
                                <label for="idioma" class="font-weight-bold">Idioma: <font color="red">*</font></label>
                                <select name="idioma" class="form-control" required>
                                  @foreach ($escolaridad as $esc)
                                  <option value="{{$esc->idioma}}">{{$esc->idioma}}</option>
                                  @foreach ($idioma as $idio)
                                  @if ($idio->Idioma != $esc->idioma)
                                  <option value="{{$idio->Idioma}}">{{$idio->Idioma}}</option>
                                  @endif
                                  @endforeach
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-7">
                                <label for="dominioidio" class="font-weight-bold">Dominio: <font color="red">*</font></label><br>
                                @foreach ($escolaridad as $esc)
                                @if ($esc->dominio == "Básico")
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Básico" checked>
                                  <label class="form-check-label" for="domidio">Básico</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Intermedio">
                                  <label class="form-check-label" for="domidio">Intermedio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Avanzado">
                                  <label class="form-check-label" for="domidio">Avanzado</label>
                                </div>
                                @else
                                @if ($esc->dominio == "Intermedio")
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Básico">
                                  <label class="form-check-label" for="domidio">Básico</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Intermedio" checked>
                                  <label class="form-check-label" for="domidio">Intermedio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Avanzado">
                                  <label class="form-check-label" for="domidio">Avanzado</label>
                                </div>
                                @else
                                @if ($esc->dominio == "Avanzado")
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Básico">
                                  <label class="form-check-label" for="domidio">Básico</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Intermedio">
                                  <label class="form-check-label" for="domidio">Intermedio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="domidio" value="Avanzado" checked>
                                  <label class="form-check-label" for="domidio">Avanzado</label>
                                </div>
                                @endif
                                @endif
                                @endif
                                @endforeach
                              </div>
                              <div class="form-group col-md-12">
                                <label for="conhab" class="font-weight-bold">Conocimientos específicos: <font color="red">*</font></label>
                                @foreach($escolaridad as $esc)
                                <input class="form-control" name="conhabc" placeholder="Conocimientos específicos" value="{{old('conhabc',$esc->conocimientos_esp)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-12">
                                <label for="conhab" class="font-weight-bold">Habilidades específicas: <font color="red">*</font></label>
                                @foreach($escolaridad as $esc)
                                <input class="form-control" name="conhabh" placeholder="Habilidades específicas" value="{{old('conhabh',$esc->habilidades_esp)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-12">
                                <label for="cursos" class="font-weight-bold">Cursos y Certificaciones: <font color="red">*</font></label>
                                @foreach($escolaridad as $esc)
                                <input type="text" class="form-control" name="cursos" placeholder="Cursos y certificaciones" value="{{old('cursos',$esc->cursos)}}" required>
                                @endforeach
                              </div>
                              <hr />
                              <div class="form-group col-md-12">
                                <button type="button" class="btn btn-primary btn-centered btnNext">Siguiente >></button>
                              </div>
                            </div>
                          </div>
                          <div id="sitlabm" class="container tab-pane fade"><br>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <h5 class="font-weight-bold">Situación Laboral.</h5>
                                <hr />
                              </div>
                              <div class="form-group col-md-6">
                                <label for="trabajaact" class="font-weight-bold">Trabaja actualmente: <font color="red">*</font></label><br>
                                @foreach ($situacion as $sit)
                                @if ($sit->trabajo_actual == "Si")
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="trabajaact" value="Si" checked>
                                  <label class="form-check-label" for="trabajaact">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="trabajaact" value="No">
                                  <label class="form-check-label" for="trabajaact">No</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="trabajaact" value="Si" checked>
                                  <label class="form-check-label" for="trabajaact">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="trabajaact" value="No" checked>
                                  <label class="form-check-label" for="trabajaact">No</label>
                                </div>
                                @endif
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="motivo" class="font-weight-bold">Motivo: <font color="red">*</font></label>
                                <select name="motivo" class="form-control">
                                  @foreach ($situacion as $sit)
                                  <option value="{{$sit->motivo}}">{{$sit->motivo}}</option>
                                  @foreach ($motivos as $motivo)
                                  @if ($motivo->Motivo != $sit->motivo)
                                  <option value='{{ $motivo->Motivo }}'> {{ $motivo->Motivo}}</option>
                                  @endif
                                  @endforeach
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fechacombus" class="font-weight-bold">Fecha que comenzó a buscar empleo: <font color="red">*</font></label>
                                @foreach ($situacion as $sit)
                                <input type="date" class="form-control" name="fechacombus" value="{{old('fechacombus', $sit->fecha_busquedaempleo)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="disponibilidad" class="font-weight-bold">Disponibilidad: <font color="red">*</font></label><br>
                                @foreach ($situacion as $sit)
                                @if ($sit->disponibilidad == "Inmediata")
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="disponibilidad" value="Inmediata" checked>
                                  <label class="form-check-label" for="disponibilidadt">Inmediata</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="disponibilidad" value="A convenir">
                                  <label class="form-check-label" for="disponibilidadt">A convenir</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="disponibilidad" value="Inmediata">
                                  <label class="form-check-label" for="disponibilidadt">Inmediata</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="disponibilidad" value="A convenir" checked>
                                  <label class="form-check-label" for="disponibilidadt">A convenir</label>
                                </div>
                                @endif
                                @endforeach
                              </div>
                              <hr />
                              <div class="form-group col-md-12">
                                <button type="button" class="btn btn-primary btn-centered btnPrevious">
                                  << Anterior</button>
                                    <button type="button" class="btn btn-primary btn-centered btnNext">Siguiente >></button>
                              </div>
                            </div>
                          </div>
                          <div id="perflabm" class="container tab-pane fade"><br>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <h5 class="font-weight-bold">Perfil Laboral (Ultimo Puesto).</h5>
                                <hr />
                              </div>
                              <div class="form-group col-md-6">
                                <label for="nombrerazsoc" class="font-weight-bold">Nombre o Razón Social: <font color="red">*</font></label>
                                @foreach ($perfil as $per)
                                <input type="text" class="form-control" name="nombrerazsoc" placeholder="Nombre o Razón Social" value="{{old('nombrerazsoc', $per->nombre_RS)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="puestoocu" class="font-weight-bold">Título del puesto ocupado: <font color="red">*</font></label>
                                @foreach ($perfil as $per)
                                <input type="text" class="form-control" name="puestoocu" placeholder="Título del puesto ocupado" value="{{old('puestoocu', $per->titulo_puesto)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-12">
                                <label for="funcrealiz" class="font-weight-bold">Funciones y actividades realizadas: <font color="red">*</font></label>
                                <input type="text" class="form-control" name="funcrealiz" placeholder="Funciones y actividades realizadas" value="{{old('funcrealiz',$per->funciones_actividades)}}" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="salario" class="font-weight-bold">Salario mensual: <font color="red">*</font></label>
                                @foreach ($perfil as $per)
                                <input type="text" class="form-control" name="salario" placeholder="$" value="{{old('salario', $per->salario_mensual)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="tipoempleo" class="font-weight-bold">Tipo de empleo: <font color="red">*</font></label>
                                <select name="tipoempleo" class="form-control" required>
                                  @foreach ($perfil as $per)
                                  <option value="{{$per->tipo_empleo}}">{{$per->tipo_empleo}}</option>
                                  @foreach ($tiposemp as $tipoemp)
                                  @if ($tipoemp->TipoEmpleo != $per->tipo_empleo)
                                  <option value='{{ $tipoemp->TipoEmpleo }}'> {{ $tipoemp->TipoEmpleo }}</option>
                                  @endif
                                  @endforeach
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fechaingr" class="font-weight-bold">Fecha de Ingreso: <font color="red">*</font></label>
                                @foreach ($perfil as $per)
                                <input type="date" class="form-control" name="fechaingr" value="{{old('fechaingr', $per->fecha_ingreso)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fechasep" class="font-weight-bold">Fecha de Separación: <font color="red">*</font></label>
                                @foreach ($perfil as $per)
                                <input type="date" class="form-control" name="fechasep" value="{{old('fechasep', $per->fecha_separacion)}}" required>
                                @endforeach
                              </div>
                              <hr />
                              <div class="form-group col-md-12">
                                <button type="button" class="btn btn-primary btn-centered btnPrevious">
                                  << Anterior</button>
                                    <button type="button" class="btn btn-primary btn-centered btnNext">Siguiente >></button>
                              </div>
                            </div>
                          </div>
                          <div id="puestodesm" class="container tab-pane fade"><br>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <h5 class="font-weight-bold">Puesto Deseado.</h5>
                                <hr />
                              </div>
                              <div class="form-group col-md-12">
                                <label for="puestodeseado" class="font-weight-bold">Puesto deseado: <font color="red">*</font></label>
                                @foreach ($puesto as $pue)
                                <input type="text" class="form-control" name="puestodeseado" placeholder="Puesto deseado" value="{{old('puestodeseado', $pue->puesto_deseado)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="ocupacion" class="font-weight-bold">Ocupación: <font color="red">*</font></label>
                                @foreach ($puesto as $pue)
                                <input type="text" class="form-control" name="ocupacion" placeholder="Ocupación" value="{{old('ocupacion', $pue->ocupacion)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="exppuesto" class="font-weight-bold">Experiencia en el puesto: <font color="red">*</font></label>
                                <select name="exppuesto" class="form-control" required>
                                  @foreach ($puesto as $pue)
                                  <option value="{{$pue->experiencia_puesto}}">{{$pue->experiencia_puesto}}</option>
                                  @foreach ($exppuestos as $exppuesto)
                                  @if ($exppuesto->ExpPuesto != $pue->experiencia_puesto)
                                  <option value='{{ $exppuesto->ExpPuesto }}'> {{ $exppuesto->ExpPuesto }}</option>
                                  @endif
                                  @endforeach
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="tipoempleo" class="font-weight-bold">Tipo de empleo deseado: <font color="red">*</font></label>
                                <select name="tipoempleo" class="form-control" required>
                                  @foreach ($puesto as $pue)
                                  <option value="{{$pue->tipo_empleo}}">{{$pue->tipo_empleo}}
                                    @foreach ($tiposemp as $tipoemp)
                                    @if ($tipoemp->TipoEmpleo != $pue->tipo_empleo)
                                  <option value='{{ $tipoemp->TipoEmpleo }}'> {{ $tipoemp->TipoEmpleo }}</option>
                                  @endif
                                  @endforeach
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="salariopre" class="font-weight-bold">Salario mensual pretendido: <font color="red">*</font></label>
                                @foreach ($puesto as $pue)
                                <input type="text" class="form-control" name="salariopre" placeholder="$" value="{{old('salariopre', $pue->salario_mensual)}}" required>
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="dispviajar" class="font-weight-bold">Disponibilidad para viajar: <font color="red">*</font></label><br>
                                @foreach ($puesto as $pue)
                                @if ($pue->dispo_viajar == "Si")
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="dispviajar" value="Si" checked>
                                  <label class="form-check-label" for="dispviajar">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="dispviajar" value="No">
                                  <label class="form-check-label" for="dispviajar">No</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="dispviajar" value="Si">
                                  <label class="form-check-label" for="dispviajar">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="dispviajar" value="No" checked>
                                  <label class="form-check-label" for="dispviajar">No</label>
                                </div>
                                @endif
                                @endforeach
                              </div>
                              <div class="form-group col-md-6">
                                <label for="dispcamres" class="font-weight-bold">Disp. para radicar fuera: <font color="red">*</font></label><br>
                                @foreach ($puesto as $pue)
                                @if ($pue->dispo_radicar_fuera == "Si")
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="dispcamres" value="Si" checked>
                                  <label class="form-check-label" for="dispcamres">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="dispcamres" value="No">
                                  <label class="form-check-label" for="dispcamres">No</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="dispcamres" value="Si">
                                  <label class="form-check-label" for="dispcamres">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="dispcamres" value="No" checked>
                                  <label class="form-check-label" for="dispcamres">No</label>
                                </div>
                                @endif
                                @endforeach
                              </div>
                              <hr />
                              <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                              </div>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
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
    $('.btnNext').click(function() {
      $('.siguiente .active').parent().next('li').find('a').trigger('click');
    });

    $('.btnPrevious').click(function() {
      $('.siguiente .active').parent().prev('li').find('a').trigger('click');
    });

    $('#entfed').change(function() {
      var EntFed = $(this).val();
      $.ajax({
        url: 'getMpios',
        type: 'GET',
        data: {
          EntFed: EntFed
        },
        headers: {
          'X-CSRF-Token': '{{ csrf_token() }}',
        },
        success: function(response) {
          var datos = JSON.parse(response);
          var len = response.length;
          $("#municipio").empty();
          for (var i = 0; i < len; i++) {
            // var IdMunicipio = datos[i]['IdMunicipio'];
            var Municipio = datos[i]['Municipio'];
            $("#municipio").append("<option value='" + Municipio + "'>" + Municipio + "</option>");
          }
        }
      });
    });
  });
</script>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
@endsection
