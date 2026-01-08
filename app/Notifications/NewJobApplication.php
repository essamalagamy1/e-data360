<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewJobApplication extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public \App\Models\JobApplication $jobApplication)
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
            ->subject('طلب توظيف جديد: '.$this->jobApplication->name)
            ->greeting('مرحباً بك،')
            ->line('تم استلام طلب توظيف جديد.')
            ->line('الاسم: '.$this->jobApplication->name)
            ->line('التخصص: '.$this->jobApplication->specialization)
            ->line('سنوات الخبرة: '.$this->jobApplication->years_of_experience)
            ->action('عرض الطلب', url('/admin/job-applications/'.$this->jobApplication->id.'/edit'))
            ->line('شكراً لاستخدامك تطبيقنا!');
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
