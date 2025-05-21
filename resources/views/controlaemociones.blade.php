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
        <center><h1 style="color:#545859; font-size: 40px;">Consejos para Controlar tus Emociones</h1></center>
        <p class="text-center">El manejo adecuado de las emociones es esencial para el bienestar personal y profesional. Aquí te ofrecemos algunos consejos:</p>

        <ol>
            <li> <h4>Practica la Respiración Profunda </h4>
                <ul>
                    <li><i class="fas fa-lungs"></i> Inhala lentamente por la nariz, mantén el aire y exhala por la boca.</li>
                </ul>
            </li>

            <li> <h4>Incorpora la Meditación</h4>
                <ul>
                    <li><i class="fas fa-yin-yang"></i> La meditación ayuda a reducir la ansiedad y mejorar la concentración.</li>
                </ul>
            </li>

            <li> <h4>Organiza tu Tiempo</h4>
                <ul>
                    <li><i class="fas fa-calendar-alt"></i> Usa listas y calendarios para gestionar tus tareas.</li>
                </ul>
            </li>

            <li> <h4>Mejora tu Comunicación</h4>
                <ul>
                    <li> <i class="fas fa-heart"></i>Expresa tus sentimientos de forma clara y respetuosa.</li>
                </ul>
            </li>

            <li> <h4>Establece Límites</h4>
                <ul>
                    <li><i class="fas fa-ban"></i> Aprende a decir "no" y respeta tu propio bienestar.</li>
                </ul>
            </li>

            <li> <h4>Busca Apoyo Profesional</h4>
                <ul>
                    <li><i class="fas fa-hand-holding-heart"></i> Un terapeuta puede ayudarte a manejar emociones complejas.</li>
                </ul>
            </li>

            <li> <h4>Haz Ejercicio</h4>
                <ul>
                    <li><i class="fas fa-dumbbell"></i> Mantente activo para reducir el estrés y mejorar tu estado de ánimo.</li>
                </ul>
            </li>
        </ol>

        <a href="javascript:history.back()" class="back-button"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>
</section>

@endsection
