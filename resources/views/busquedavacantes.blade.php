@extends ('layouts.base')
@section ('content')
<br>
<br>
<!-- Search -->
<section> 
    <div class="form-container text-center" 
        style="margin: auto; background: rgba(255, 255, 255, 0.8); 
        border: 3px solid #00a9e0; border-radius: 10px; padding: 20px; 
        max-width: 1000px; text-align: center;">
        
        <h1 class="text-center" style="color:#545859; font-size: 40px;">
            Descubre vacantes de acuerdo a tus intereses
        </h1>

        <form action="{{ route('buscar') }}" class="row data-form form-search" method="GET">
            <div class="col-12 col-md-6">
                <div class="form-group text-center">
                    <label style="color:#545859" for="searchText">¿Qué trabajo buscas?</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-briefcase"></i></div>
                        </div>
                        <input style="border: 2px solid #00a9e0; background-color: transparent; 
                        color: #00a9e0; border-radius: 8px;" type="text" class="form-control" 
                        id="vacantes" name="titulo_puesto" placeholder="Puesto o Área Deseada">
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group text-center">
                    <label style="color:#545859" for="searchCity">¿Dónde?</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                        </div>
                        <input style="border: 2px solid #00a9e0; background-color: transparent; 
                        color: #00a9e0; border-radius: 8px; padding: 16px 30px;" 
                        type="text" class="form-control" id="municipio" name="lugar_vacante" 
                        placeholder="Municipio, Colonia o Ciudad" value="{{old('lugar_vacante',$lugar)}}">
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-2">
                <button style="border: 2px solid #00a9e0; background-color: transparent; 
                color: #00a9e0; border-radius: 15px !important; padding: 8px 15px;" 
                type="submit" class="btn btn-lg"> 
                    <i class="fa fa-search"></i> Buscar 
                </button>
            </div>
        </form>
    </div>
</section>


<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center mb-4">
      <h1 style="color:#545859; font-size: 40px;">Vacantes Recientes</h1>
      </div>

     

      <!-- Vacantes -->
      <div class="col-12 col-md-8">
        <ul class="list-unstyled">
          @foreach($vacantes as $vacante)
          <a href="{{ route('vacante', $vacante->slug) }}" 
               class="d-flex align-items-center p-4 rounded shadow-sm bg-white text-decoration-none" 
               style="border-left: 10px solid #00a9e0; transition: 0.3s;">
              
              <img src="{{ asset('archivo/'.$vacante->foto_perfil) }}" 
                   class="rounded-circle shadow-sm mr-3" 
                   style="height: 90px; width: 90px; object-fit: cover;" 
                   alt="{{ $vacante->titulo_puesto }}" 
                   title="{{ $vacante->titulo_puesto }}">
            <div class="media-body">
              <h5 class="mb-2 d-flex justify-content-between">
                <span>{{ $vacante->titulo_puesto }}</span>
                <small class="txt-info">$ {{ $vacante->salario_mensual }}</small>
              </h5>
              <p class="text-muted mb-1">{{ $vacante->descripcion_breve }}</p>
              <small class="text-muted">
                <span>{{ $vacante->lugar_vacante }}</span> / 
                <span>{{ date('d-m-Y h:i a', strtotime($vacante->fecha)) }}</span>
              </small>
            </div>
          </a>
          <hr>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection