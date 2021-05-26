<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactNotification extends Notification
{
    use Queueable;

    /**
     * @var Contact $contact
     */
    public $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Bonjour')
                    ->subject('Nouveau contact')
                    ->line('Une nouvelle demande de contact a bien été ajouter')
                    ->line('Nom et prénom : ' . $this->contact->name)
                    ->line('Adresse E-mail : ' . $this->contact->email)
                    ->line('Numéro de Téléphone : ' . $this->contact->phone);
    }

}
