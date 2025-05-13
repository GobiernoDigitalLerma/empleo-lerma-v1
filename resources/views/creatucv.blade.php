@extends('layouts.base')

@section('content')
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

.emotion-tips {
    background-color: #ffffff; /* Fondo blanco para más profesionalismo */
    border-left: 8px solid #FE5000; /* Línea lateral naranja */
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    font-family: 'Poppins', sans-serif;
    color: #545859; /* Gris oscuro para mejor contraste */
}

.emotion-tips h1 {
    color: #FE5000; /* Naranja institucional */
    font-size: 2.5rem;
    font-weight: 600;
}

.emotion-tips p {
    color: #333; /* Negro suave */
    font-size: 1.1rem;
    line-height: 1.6;
}

.emotion-tips ol {
    list-style: none;
    padding-left: 0;
}

.emotion-tips li {
    margin-bottom: 15px;
    font-size: 1.1rem;
    line-height: 1.6;
    padding-left: 35px;
    position: relative;
}

.emotion-tips li i {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    color: #00A9E0; /* Azul para los íconos */
    font-size: 1.3rem;
}

.emotion-tips ul {
    list-style: none;
    padding-left: 0;
}

.emotion-tips ul li {
    padding-left: 30px;
    position: relative;
}

.emotion-tips ul li i {
    color: #00B140; /* Verde para detalles importantes */
}

.emotion-tips strong {
    color: #2C3E50; /* Azul oscuro */
}

.back-button {
    display: inline-block;
    margin-top: 20px;
    background-color: #00A9E0; 
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
}

.back-button:hover {
    background-color: #0078A0;
}

</style>

<section>
    <div class="container my-md-5 emotion-tips">
        <center><h1 style="color:#545859; font-size: 40px;">Tips para Crear tu CV</h1></center>
        <p class="text-center">Un currículum bien estructurado y atractivo puede marcar la diferencia en tu búsqueda de empleo. Aquí tienes algunos consejos para crear un CV que destaque y te ayude a conseguir la entrevista:</p>

        <ol>
    <li><h4>Personaliza tu CV para cada Aplicación </h4>

                <ul>
                    <li><i class="fas fa-cogs"></i> Adapta tu currículum al puesto específico para el que estás aplicando. Destaca habilidades y experiencias relevantes para cada oferta de trabajo.</li>
                </ul>
            </li>

            <li><h4>Utiliza un Formato Claro y Profesional</h4>
                <ul>
                    <li><i class="fas fa-align-left"></i> Usa un formato limpio y organizado. Asegúrate de que tu CV sea fácil de leer, con secciones claramente delimitadas y un diseño coherente.</li>
                </ul>
            </li>

            <li><h4>Incluye un Resumen Profesional</h4>
                <ul>
                    <li><i class="fas fa-quote-right"></i> Comienza tu CV con un resumen o perfil profesional que resuma tus habilidades, experiencia y objetivos profesionales.</li>
                </ul>
            </li>

            <li><h4>Destaca tu Experiencia Laboral Relevante</h4>
                <ul>
                    <li><i class="fas fa-calendar-check"></i> Enumera tus trabajos anteriores en orden cronológico inverso. Incluye responsabilidades clave y logros para cada puesto.</li>
                </ul>
            </li>

            <li><h4>Incluye tu Formación Académica</h4>
                <ul>
                    <li><i class="fas fa-book"></i> Menciona tus títulos académicos y cualquier certificación relevante. Incluye el nombre de la institución y las fechas de estudio.</li>
                </ul>
            </li>

            <li><h4>Resalta Habilidades y Competencias Clave</h4>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Incluye una sección de habilidades donde resaltes las competencias técnicas y blandas que posees y que son relevantes para el puesto.</li>
                </ul>
            </li>

            <li><h4>Menciona Idiomas y Competencias Adicionales </h4>
                <ul>
                    <li><i class="fas fa-globe-americas"></i> Si hablas varios idiomas o tienes habilidades adicionales, inclúyelos en tu CV. Esto puede ser un punto a favor en muchas aplicaciones.</li>
                </ul>
            </li>

            <li><h4>Incluye Información de Contacto Actualizada</h4>
                <ul>
                    <li><i class="fas fa-phone"></i> Asegúrate de que tu información de contacto esté actualizada, incluyendo tu número de teléfono y dirección de correo electrónico.</li>
                </ul>
            </li>

            <li><h4>Revisa y Corrige Errores</h4>
                <ul>
                    <li><i class="fas fa-check"></i> Revisa tu CV cuidadosamente para detectar errores gramaticales y ortográficos. Un CV sin errores refleja profesionalismo y atención al detalle.</li>
                </ul>
            </li>
        </ol>

        <a href="javascript:history.back()" class="back-button"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>
</section>


@endsection