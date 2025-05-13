@extends('layouts.base')

@section('content')
<style>
    .section {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }
    .section img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }
    .section-content {
      margin-left: 20px;
    }
    .section-content h4 {
      margin-top: 0;
    }
    .section-content p {
      font-size: 1rem;
    }
    .btn-custom {
      background-color: #dc3545;
      color: white;
      border: none;
    }
    .btn-custom:hover {
      background-color: #c82333;
    }
.section {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .section img {
      width: 170px;
      height: 170px;
    }
    .section-content {
      margin-left: 20px;
    }
    .btn-custom {
      background-color: red;
      color: white;
    }
</style>
<section>
	<div class="container my-md-5">
		<center><h1 style="color:#545859; font-size: 40px;" >Recursos Complementarios</h1></center>
	</div>
</section>
<section>
<main class="container mt-4">
    <!-- Sección 1 -->
    <div class="section">
    <img src="{{ asset('assets/img/evaluacion.png') }}" alt="Imagen 1">
    <div class="section-content">
        <h4 style="color:#545859">Evaluación Psicométrica</h4>
        <p style="color:#545859">
            Las evaluaciones psicométricas se utilizan en diversos contextos, incluyendo la selección de personal, el desarrollo profesional, la orientación vocacional y la investigación científica. Estas pruebas son diseñadas para ser objetivas y comparables, proporcionando datos valiosos que ayudan a comprender mejor a los individuos en diferentes aspectos.
        </p>

        @auth
           
            <a style="border: 2px solid #e40046; background-color: transparent; color: #e40046; border-radius: 10px !important; padding: 10px 20px; transition: 0.3s;" href="/test" class="btn btn-custom">Ir a la Evaluación</a>
        @else
           
            <a style="border: 2px solid #e40046; background-color: transparent; color: #e40046; border-radius: 10px !important; padding: 10px 20px; transition: 0.3s;" href="{{ route('register') }}" class="btn btn-custom">Regístrate para acceder</a>
        @endauth
    </div>
</div>

    </div>
    
    <!-- Sección 2 -->
    <div class="section">
      <img  src="{{ asset('assets/img/entrevista.png') }}" alt="Imagen 2">
      <div class="section-content">
        <h4 style="color:#545859">Tips para una entrevista de trabajo</h4>
        <p style="color:#545859">Prepararse para una entrevista de trabajo es esencial para causar una buena impresión y aumentar tus posibilidades de éxito. Investiga a fondo la empresa para conocer su cultura, misión y productos o servicios. Practica respuestas a preguntas comunes y prepara ejemplos específicos de tus logros.</p>
        <a style="border: 2px solid #e40046; background-color: transparent; color: #e40046; border-radius: 10px !important; padding: 10px 20px; transition: 0.3s;" href="/tipsentrevista" class="btn btn-custom">Ver Más ...</a>
      </div>
    </div>
</body>
    
    <!-- Sección 4 -->
    <div class="section">
      <img  src="{{ asset('assets/img/tips.png') }}" alt="Imagen 4">
      <div class="section-content">
        <h4 style="color:#545859">Consejos para controlar tus emociones</h4>
        <p style="color:#545859">Controlar tus emociones es clave para mantener la calma y tomar decisiones acertadas en situaciones difíciles. Practica la autoobservación para identificar y entender tus emociones. Utiliza técnicas de respiración profunda y meditación para calmarte en momentos de estrés. Mantén una actitud positiva y reestructura tus pensamientos negativos. </p>
        <a style="border: 2px solid #e40046; background-color: transparent; color: #e40046; border-radius: 10px !important; padding: 10px 20px; transition: 0.3s;" href="/controlaemociones" class="btn btn-custom">Ver Más ...</a>
      </div>
    </div>
    
    <!-- Sección 5 -->
    <div class="section">
      <img  src="{{ asset('assets/img/cv3.png') }}" alt="Imagen 5">
      <div class="section-content">
        <h4 style="color:#545859">Tips para crear tu CV</h4>
        <p style="color:#545859">Un buen CV es crucial para destacar en el proceso de selección. Primero, asegúrate de incluir tus datos personales actualizados y un objetivo profesional claro que resuma tus metas y cómo puedes aportar valor a la empresa. Detalla tu experiencia laboral y educación en orden cronológico inverso, destacando tus responsabilidades y logros en cada puesto.</p>
        <a style="border: 2px solid #e40046; background-color: transparent; color: #e40046; border-radius: 10px !important; padding: 10px 20px; transition: 0.3s;" href="/creatucv" class="btn btn-custom">Ver Más ...</a>
      </div>
    </div>
    
    <!-- Sección 6 (con botón para agregar archivo PDF) -->
 
      <div class="section">
          <img  src="{{ asset('assets/img/cv2.png') }}" alt="Imagen 6">
          <div class="section-content">
              <h4 style="color:#545859">Actualiza tus datos</h4>
              <p style="color:#545859">Mantén tu perfil activo y actualizado para aprovechar al máximo las oportunidades laborales que se presenten.</p>
              <a style="border: 2px solid #e40046; background-color: transparent; color: #e40046; border-radius: 10px !important; padding: 10px 20px; transition: 0.3s;" href="/login" class="btn btn-custom">Actualiza ahora</a>
          </div>
      </div>
      </section>
  @endsection
  