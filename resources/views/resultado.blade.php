<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Test</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
<body>
    <h1>Resultados del Test</h1>
   <h2 style="text-align: center;">Nombre : {{Auth::user()->nombre}}</h2>
    <h2>Aptitud</h2>
    <ul>
        <li><strong>Habilidad destacada:</strong> {{ $datos['habilidad_mas_destacada'] }}</li>
        <li><strong>Motivación en el trabajo:</strong> {{ $datos['motivacion_trabajo'] }}</li>
        <li><strong>Manejo del estrés:</strong> {{ $datos['manejo_estres'] }}</li>
        <li><strong>Mayor logro profesional:</strong> {{ $datos['mayor_logro_profesional'] }}</li>
        <li><strong>Trabajo en equipo:</strong> {{ $datos['trabajo_equipo'] }}</li>
        <li><strong>Habilidades a mejorar:</strong> {{ $datos['habilidades_mejorar'] }}</li>
    </ul>

    <h2>Personalidad</h2>
    <ul>
        <li><strong>Descripcion personal :</strong> {{ $datos['pregunta1_personalidad'] }}</li>
        <li><strong>¿Qué te hace sentir más satisfecho en tu vida?:</strong> {{ $datos['pregunta2_personalidad'] }}</li>
        <li><strong>Toma de decisiones importantes:</strong> {{ $datos['pregunta3_personalidad'] }}</li>
        <li><strong>¿Cómo te relacionas con personas que tienen opiniones diferentes a las tuyas?:</strong> {{ $datos['pregunta4_personalidad'] }}</li>
        <li><strong>Acciones para valorar una amistad:</strong> {{ $datos['pregunta5_personalidad'] }}</li>
        <li><strong>Manejo de problemas personales:</strong> {{ $datos['pregunta6_personalidad'] }}</li>
    </ul>

    <h2>Habilidades</h2>
    <ul>
        <li><strong>Describe una habilidad que consideras tu punto fuerte :</strong> {{ $datos['pregunta1_habilidades'] }}</li>
        <li><strong>¿Qué habilidad te gustaría desarrollar más y por qué? :</strong> {{ $datos['pregunta2_habilidades'] }}</li>
        <li><strong>¿Cómo has utilizado tus habilidades en tu trabajo o estudios? :</strong> {{ $datos['pregunta3_habilidades'] }}</li>
        <li><strong>¿Qué habilidades consideras necesarias para el rol que deseas ocupar? :</strong> {{ $datos['pregunta4_habilidades'] }}</li>
        <li><strong>¿Puedes dar un ejemplo de un desafío que has superado utilizando tus habilidades? :</strong> {{ $datos['pregunta5_habilidades'] }}</li>
        <li><strong>¿Qué estrategias sigues para mejorar tus habilidades? :</strong> {{ $datos['pregunta6_habilidades'] }}</li>
    </ul>

    <h2>Intereses</h2>
    <ul>
        <li><strong>¿Qué tipo de tareas disfrutas más en tu trabajo o en proyectos personales?:</strong> {{ $datos['pregunta1_intereses'] }}</li>
        <li><strong>¿En qué entorno te sientes más cómodo/a y productivo/a? :</strong> {{ $datos['pregunta2_intereses'] }}</li>
        <li><strong>¿Qué tipo de actividades prefieres en tu tiempo libre? :</strong> {{ $datos['pregunta3_intereses'] }}</li>
        <li><strong>¿Cómo prefieres estructurar tu trabajo? :</strong> {{ $datos['pregunta4_intereses'] }}</li>
        <li><strong>¿Qué aspecto de un trabajo te resulta más atractivo? :</strong> {{ $datos['pregunta5_intereses'] }}</li>
        <li><strong>¿Qué tipo de logros en tu carrera te resultan más satisfactorios? :</strong> {{ $datos['pregunta6_intereses'] }}</li>
    </ul>
</body>
</html>
