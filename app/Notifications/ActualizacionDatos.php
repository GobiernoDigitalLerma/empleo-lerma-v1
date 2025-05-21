<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ActualizacionDatos extends Notification
{
    use Queueable;

    protected $empresa;
    protected $correoDestino; 
    
    public function __construct($empresa, $correoDestino)
    {
        $this->empresa = $empresa;
        $this->correoDestino = $correoDestino; 
    }

   
    public function via($notifiable)
    {
        return ['mail'];
    }

  
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->from('contacto@lerma.gob.mx', 'Empleo Lerma')
                    ->subject('Una Empresa ha Actualizado sus Datos: ' . $this->empresa->nombre_RS)
                    ->greeting('Hola Empleo Lerma!!!')
                    ->line('Se han actualizado de datos de una empresa en la aplicación Empleo Lerma.')
                    ->line('**Nombre o Razón Social:** ' . $this->empresa->nombre_RS)
                    ->line('**RFC:** ' . $this->empresa->RFC)
                    ->line('**Teléfono:** ' . $this->empresa->tel1)
                    ->line('**Email:** ' . $this->empresa->email)
                    ->line('**Actividad Económica:** ' . $this->empresa->actividad_economica)
                    ->action('Ver detalles en Empleo Lerma', url('/'))
                    ->salutation('Saludos');
    }
}
