@extends('layouts.base')

@section('content')
<style>

.interview-tips {
    background-color: #ffffff; 
    border-left: 8px solid #FE5000; 
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    font-family: 'Poppins', sans-serif;
}

.interview-tips h3 {
    color: #FE5000;
    font-size: 1.8rem;
    font-weight: 600;
}

.interview-tips p {
    color: #333; 
    font-size: 1.1rem;
    line-height: 1.6;
}

.interview-tips ol {
    list-style: none;
    padding-left: 0;
}

.interview-tips li {
    margin-bottom: 15px;
    font-size: 1.1rem;
    line-height: 1.6;
    padding-left: 35px;
    position: relative;
}

.interview-tips li i {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}

.interview-tips li i {
    color: #00A9E0; 
    font-size: 1.3rem;
}

.interview-tips ul {
    list-style: none;
    padding-left: 0;
}

.interview-tips ul li {
    padding-left: 30px;
    position: relative;
}

.interview-tips ul li i {
    color: #00B140; 
}

.interview-tips strong {
    color: #2C3E50; 
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


@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    </style>

  <section>
	<div class="container my-md-5 interview-tips">
		<h1 class="text-center" style="color:#545859; font-size: 40px;">Tips para una Entrevista de Trabajo</h1>
		<br>
		<p>Prepararse para una entrevista de trabajo puede ser una tarea desafiante, pero con la preparación adecuada, puedes aumentar significativamente tus posibilidades de éxito. Aquí te ofrecemos algunos consejos prácticos para que te presentes como el candidato ideal:</p>
		
		<ol>
			<li><h4>Investiga la Empresa</h4>
				<ul>
					<li><i class="fas fa-bullseye"></i>Conoce la Misión y Visión: Familiarízate con los valores y objetivos de la empresa. Esto te ayudará a alinear tus respuestas con lo que ellos buscan en un candidato.</li>
					<li><i class="fas fa-trophy"></i>Revisa los Proyectos y Logros Recientes: Menciona proyectos específicos o logros recientes de la empresa para demostrar tu interés y conocimiento.</li>
				</ul>
			</li>

			<li><h4>Prepara tu CV y Carta de Presentación</h4>
				<ul>
					<li><i class="fas fa-check-circle"></i>Revisa y Actualiza: Asegúrate de que tu currículum y carta de presentación estén actualizados y adaptados al puesto al que estás aplicando.</li>
					<li><i class="fas fa-star"></i>Enfócate en Logros Clave: Destaca tus logros más relevantes y cómo contribuyeron a tus anteriores empleadores.</li>
				</ul>
			</li>

			<li><h4>Practica Respuestas a Preguntas Comunes</h4>
				<ul>
					<li><i class="fas fa-briefcase"></i>Preguntas sobre Experiencia: Prepárate para hablar sobre tu experiencia laboral, incluyendo éxitos y desafíos.</li>
					<li><i class="fas fa-cogs"></i>Preguntas de Comportamiento: Usa el método STAR (Situación, Tarea, Acción, Resultado) para estructurar tus respuestas a preguntas sobre cómo has manejado situaciones específicas.</li>
				</ul>
			</li>

			<li><h4>Haz Preguntas Relevantes</h4>
				<ul>
					<li><i class="fas fa-tachometer-alt"></i>Preguntas sobre el Rol: Pregunta sobre las responsabilidades diarias, el equipo con el que trabajarás y las expectativas para el primer año.</li>
					<li><i class="fas fa-users"></i>Preguntas sobre la Cultura Corporativa: Investiga sobre el ambiente de trabajo y el estilo de gestión de la empresa.</li>
				</ul>
			</li>

			<li><h4>Cuida tu Apariencia y Lenguaje Corporal</h4>
				<ul>
					<li><i class="fas fa-suitcase"></i>Vístete Apropiadamente: Adapta tu vestimenta al entorno de la empresa. Opta por un atuendo profesional que te haga sentir seguro.</li>
					<li><i class="fas fa-handshake"></i>Muestra Confianza: Mantén una postura erguida, haz contacto visual y ofrece un apretón de manos firme.</li>
				</ul>
			</li>

			<li><h4>Llega Puntual</h4>
				<ul>
					<li><i class="fas fa-calendar-check"></i>Planifica con Anticipación: Calcula el tiempo que necesitarás para llegar al lugar de la entrevista y asegúrate de llegar con al menos 10-15 minutos de antelación.</li>
				</ul>
			</li>

			<li><h4>Sé Claro y Conciso</h4>
				<ul>
					<li><i class="fas fa-comment-dots"></i>Comunicación Efectiva: Responde a las preguntas de manera clara y concisa. Evita divagar y mantén el enfoque en lo que te están preguntando.</li>
				</ul>
			</li>

			<li><h4>Muestra Entusiasmo y Motivación</h4>
				<ul>
					<li><i class="fas fa-heart"></i>Demuestra Interés: Expresa tu entusiasmo por el puesto y la empresa. Un candidato motivado es siempre más atractivo para los empleadores.</li>
				</ul>
			</li>

			<li><h4>Sigue el Protocolo Post-Entrevista</h4>
				<ul>
					<li><i class="fas fa-thumbs-up"></i>Agradece el Tiempo: Envía un correo de agradecimiento al entrevistador, reiterando tu interés en el puesto y destacando un punto relevante discutido durante la entrevista.</li>
				</ul>
			</li>

			<li><h4>Reflexiona y Aprende</h4>
				<ul>
					<li><i class="fas fa-lightbulb"></i>Evaluación Personal: Después de la entrevista, reflexiona sobre qué salió bien y qué podrías mejorar para futuras entrevistas.</li>
				</ul>
			</li>
		</ol>
    <a href="javascript:history.back()" class="back-button"><i class="fas fa-arrow-left"></i> Regresar</a>
  </div>

</section>

@endsection