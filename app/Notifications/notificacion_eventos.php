<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmploymentEventNotification extends Notification
{
    use Queueable;

    protected $eventTitle;
    protected $eventDate;
    protected $eventLocation;

    /**
     * Create a new notification instance.
     *
     * @param string $eventTitle
     * @param string $eventDate
     * @param string $eventLocation
     * @return void
     */
    public function __construct($eventTitle, $eventDate, $eventLocation)
    {
        $this->eventTitle = $eventTitle;
        $this->eventDate = $eventDate;
        $this->eventLocation = $eventLocation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from('contacto@lerma.gob.mx', 'Empleo Lerma')
            ->subject('¡Próxima Feria del Empleo: ' . $this->eventTitle . '!')
            ->greeting('Hola ' . $notifiable->nombre)
            ->line('Te invitamos a la próxima Jornada Del Empleo' . $this->eventTitle . ' que se realizará en el Kiosco de Lerma de Villada ' . $this->eventLocation . ' el día 28 de noviemnbre  ' . $this->eventDate . '.')
            ->line('Es una excelente oportunidad para conocer empresas y explorar nuevas oportunidades laborales.')
            ->action('Más información', url('/eventos'))
            ->line('Esperamos verte allí!')
            ->salutation('¡Saludos cordiales!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'eventTitle' => $this->eventTitle,
            'eventDate' => $this->eventDate,
            'eventLocation' => $this->eventLocation,
        ];
    }
}
