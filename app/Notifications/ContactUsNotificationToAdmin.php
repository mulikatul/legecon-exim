<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsNotificationToAdmin extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Contact Us')
            ->from(config( 'constants.mail.noReply' ))
            ->greeting('Hello Admin,')
            ->line('You received an email from : ' .$this->data['name'])
            ->line('Here are the details:')
            ->line('Name : ' . $this->data['name'])
            ->line('Email : ' . $this->data['email'])
            ->line('Phone No :' . $this->data['phone_no'])
            ->line('Service Required : ' . $this->data['service_required'])
            ->line('industry : ' . $this->data['industry'])
            ->line('Product Description : ' . $this->data['product_description']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
