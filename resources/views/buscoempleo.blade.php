@extends('layouts.base')

@section('content')
<!-- Search -->
<section>
	<div class="container my-md-5">
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
		<center><h5>TEST DE AYUDA PARA ENCONTRAR EL EMPLEO QUE DESEAS</h5></center>
	</div>
</section>
<main class="container mt-4">
    <!-- Sección 1 -->
    <div class="section">
      <img src="https://repositorio-uapa.cuaieed.unam.mx/repositorio/moodle/pluginfile.php/2893/mod_resource/content/1/UAPA-Caracteristicas-Esenciales-Pruebas-Psicologicas-Area-Clinica/img/psicometria.png" alt="Imagen 1">
      <div class="section-content">
        <h4>Evaluación Psicométrica</h4>
        <p>Las evaluaciones psicométricas se utilizan en diversos contextos, incluyendo la selección de personal, el desarrollo profesional, la orientación vocacional y la investigación científica. Estas pruebas son diseñadas para ser objetivas y comparables, proporcionando datos valiosos que ayudan a comprender mejor a los individuos en diferentes aspectos.</p>
       <a href="file:///C:/Users/Empleo/Desktop/test%20personalidad.htm" class="btn btn-custom">Ir a la Evaluación</a>

      </div>
    </div>
    
    <!-- Sección 2 -->
    <div class="section">
      <img src="https://global-uploads.webflow.com/5f65510b3a72cfb536ab067c/618a3db51a535c802efddca5_Trabajo%20entrevista%20gde.jpg " alt="Imagen 2">
      <div class="section-content">
        <h4>Tips para una entrevista de trabajo</h4>
        <p>Prepararse para una entrevista de trabajo es esencial para causar una buena impresión y aumentar tus posibilidades de éxito. Investiga a fondo la empresa para conocer su cultura, misión y productos o servicios. Practica respuestas a preguntas comunes y prepara ejemplos específicos de tus logros.</p>
        <button class="btn btn-custom">Ver Más</button>
      </div>
    </div>
    
    <!-- Sección 3 -->
  <body>
  <div class="section">
    <video width="320" height="240" controls>
      <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
      Tu navegador no soporta la etiqueta de video.
    </video>
    <div class="section-content">
      <h4>Historia de éxito</h4>
      <p>Descripción breve de la sección 3.</p>
      <button class="btn btn-custom" onclick="playVideo()">Ver Más</button>
    </div>
  </div>

  <script>
    function playVideo() {
      var video = document.querySelector("video");
      if (video.paused) {
        video.play();
      } else {
        video.pause();
      }
    }
  </script>
</body>
    
    <!-- Sección 4 -->
    <div class="section">
      <img src="https://lh7-us.googleusercontent.com/docsz/AD_4nXdw3314U-oDOFdmnDblF04V3BZEUgjq4d08JdUgts75TvWYpgtMbpfOsC7IQtS4UxtI5r84sxXC9McSKzje7Gyt27ndDLI2LzfxGxlTryAh4p4vyqPD0kNA605cyhwq_3XDcbJ8fWG0lgSfr63HmtceLbKA?key=Srr5PWicN-16qMNJKP862A" alt="Imagen 4">
      <div class="section-content">
        <h4>Consejos para controlar tus emociones</h4>
        <p>Controlar tus emociones es clave para mantener la calma y tomar decisiones acertadas en situaciones difíciles. Practica la autoobservación para identificar y entender tus emociones. Utiliza técnicas de respiración profunda y meditación para calmarte en momentos de estrés. Mantén una actitud positiva y reestructura tus pensamientos negativos. </p>
        <button class="btn btn-custom">Ver Más</button>
      </div>
    </div>
    
    <!-- Sección 5 -->
    <div class="section">
      <img src="https://www.cvmaker.com.mx/shared/images/illustrations/active/blog-category/cv.svg" alt="Imagen 5">
      <div class="section-content">
        <h4>Tips para crear tu CV</h4>
        <p>Un buen CV es crucial para destacar en el proceso de selección. Primero, asegúrate de incluir tus datos personales actualizados y un objetivo profesional claro que resuma tus metas y cómo puedes aportar valor a la empresa. Detalla tu experiencia laboral y educación en orden cronológico inverso, destacando tus responsabilidades y logros en cada puesto.</p>
        <button class="btn btn-custom">Ver Más</button>
      </div>
    </div>
    
    <!-- Sección 6 (con botón para agregar archivo PDF) -->
    <div class="section">
      <img src="https://conecta.tec.mx/sites/default/files/styles/header_full/public/2023-01/como-elaborar-un-curriculum-nota-conecta.jpg.webp?itok=Tkx4buBA" alt="Imagen 6">
      <div class="section-content">
        <h4>Sube tu CV</h4>
        <p>Mantén tu perfil activo y actualizado para aprovechar al máximo las oportunidades laborales que se presenten.</p>
        <input type="file" id="pdfUploader" accept=".pdf">
        <button class="btn btn-custom mt-2" onclick="uploadPDF()">Agregar PDF</button>
      </div>
    </div>
  </main>

  <footer class="text-center py-4">
    <!-- Footer content -->
  </footer>

  <script>
    function uploadPDF() {
      var input = document.getElementById('pdfUploader');
      if (input.files.length > 0) {
        alert('Archivo PDF seleccionado: ' + input.files[0].name);
      } else {
        alert('No se ha seleccionado ningún archivo.');
      }
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b2d5760d1d.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>

</html>




	</div>
</section>
@endsection