<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContactMessage extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public \App\Models\ContactMessage $message)
    {
        //
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
            ->subject('رسالة جديدة من: '.$this->message->name)
            ->line('رسالة جديدة من نموذج التواصل.')
            ->line('الاسم: '.$this->message->name)
            ->line('البريد: '.$this->message->email)
            ->line('الرسالة: '.\Illuminate\Support\Str::limit($this->message->message, 200))
            ->action('عرض الرسالة', url('/admin/contact-messages'))
            ->line('شكراً لك!');
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
