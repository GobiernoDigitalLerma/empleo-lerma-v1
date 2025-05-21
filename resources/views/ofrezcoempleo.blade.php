@extends('layouts.base')

@section('content')
<section>
    <div class="container my-md-5" style="position: relative; z-index: 2; background-image: url('tu-imagen.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 p-4" style="background-color: #ffffff; border-left: 5px solid #e40046; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); position: relative; margin-bottom: 1.5rem; transition: transform 0.3s ease;">
                <h2 class="text-center" style="position: relative; background-color: #ffffff; padding: 0 1rem;">Ofrezco Empleo</h2>
                <p class="text-center" style="color:#545859">¡Muchas gracias por usar la aplicación!</p>
                <p class="text-center" style="color:#545859">Si necesitas personal para laborar contigo, puedes publicar y contactar a personas desde esta plataforma.<br/>
                Es muy sencillo, solo necesitas seguir los siguientes pasos:</p>
            </div>
            
            <div class="col-12 col-md-8 p-4 mt-3" style="background-color: #ffffff; border-left: 5px solid #e40046; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); position: relative; margin-bottom: 1.5rem; transition: transform 0.3s ease;">
                <h4 style=" position: relative; background-color: #ffffff; padding: 0 1rem;">Regístrate</h4>
                <br>
                <ul style="list-style-type: none; padding-left: 0;">
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Selecciona en la opción registrarse.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Se mostrará un formulario para tu registro. Selecciona la opción de empresa, posteriormente los datos solicitados (guarda tu contraseña).</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Recibirás un correo de confirmación de cuenta. Da clic en Confirmar Cuenta o sigue el enlace que aparece en el correo.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Te regresará nuevamente a la página principal, posteriormente selecciona Mi cuenta.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Completa la información restante con tu perfil empresarial.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Empleo Lerma validará tu perfil empresarial.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Recibirás un correo de activación de perfil.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> ¡Ahora ya puedes registrar tus vacantes!</li>
                </ul>
            </div>
            
            <div class="col-12 col-md-8 p-4 mt-3" style="background-color: #ffffff; border-left: 5px solid #e40046; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); position: relative; margin-bottom: 1.5rem; transition: transform 0.3s ease;">
                <h4 style="position: relative; background-color: #ffffff; padding: 0 1rem;">Publica Vacantes</h4>
                <br>
                <ul style="list-style-type: none; padding-left: 0;">
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Da clic en la opción de NUEVA VACANTE.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Llena todos los campos de la vacante.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Cubre los requisitos de la vacante.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Ingresa la información del contacto.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Selecciona la opción de publicación de periódico de ofertas y portal de Empleo.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Una vez finalizado el llenado COMPLETO de las vacantes, selecciona crear vacante.</li>
                    <li style="color:#545859"><i class="fas fa-check-circle" style="color: #00b140; margin-right: 8px;"></i> Listo, se visualizará la vacante publicada.</li>
                </ul>
            </div>
            
            <div class="col-12 col-md-8 p-4 mt-3" style="text-align: center;">
                <a href="https://empleo.lerma.gob.mx/archivo/ofrezco_empleo_lerma.pdf" target="_blank" style="color: #e40046; text-decoration: underline; font-weight: bold;">Aquí tienes un tutorial más detallado</a>
            </div>
        </div>
    </div>
</section>
@endsection