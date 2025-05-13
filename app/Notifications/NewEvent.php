<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewEvent extends Notification
{
    use Queueable;

    protected $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nuevo Evento Disponible')
            ->greeting('Hola ' . $notifiable->nombre)
            ->line('Un nuevo evento ha sido publicado en nuestra plataforma.')
            ->line('Evento: ' . $this->event->titulo)
            ->line('Fecha: ' . $this->event->fecha)
            ->action('Ver Evento', url('/eventos/' . $this->event->id))
            ->line('¡No te lo pierdas!')
            ->salutation('Saludos, Empleo Lerma');
    }
}
