<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewTestimonial extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public \App\Models\Testimonial $testimonial)
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
            ->subject('تقييم جديد من: '.$this->testimonial->client_name)
            ->line('تم استلام تقييم جديد.')
            ->line('الاسم: '.$this->testimonial->client_name)
            ->line('التقييم: '.$this->testimonial->rating.'/5')
            ->line('النص: '.$this->testimonial->testimonial)
            ->action('عرض التقييمات', url('/admin/testimonials'))
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
