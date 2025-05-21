@extends('layouts.base')

@section('content')
<h1 class="text-center"style="color:#545859; font-size: 40px;" >Encuentra el trabajo que quieres</h1>
<br>
<br>


<div class="container">
  <div class="row text-center">
    <div class="col-12 col-md-4 mb-5"> 
      <a href="{{ route('register') }}">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/cv1.png') }}" alt="Card image cap" width="200" height="300">
          <div class="card-body">
            <h4 class="card-title" style="color:#545859">Regístrate y crea tu CV con nosotros</h4>
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 mb-5"> 
      <a href="{{ route('register') }}">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/search.png') }}" alt="Card image cap" width="200" height="300">
          <div class="card-body">
            <h4 class="card-title" style="color:#545859">Descubre vacantes de acuerdo a tus intereses</h4>
          </div>
        </div>
      </a>  
    </div>

    <div class="col-12 col-md-4 mb-3"> 
      <a href="{{ route('register') }}">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/aplicar.png') }}" alt="Card image cap" width="200" height="300">
          <div class="card-body">
            <h4 class="card-title" style="color:#545859">Postúlate y conecta con reclutadores</h4>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="col text-center">
  <a href="{{ route('register') }}" class="btn btn-lg" 
     style="border: 2px solid #e40046; background-color: transparent; color: #e40046; border-radius: 15px !important; padding: 10px 20px; transition: 0.3s;">
     Empezar
  </a>
</div>
<br>
<br>
@endsection
