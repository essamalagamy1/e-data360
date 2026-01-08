<?php

namespace App\Listeners;

use App\Events\TestimonialSubmitted;

class SendTestimonialNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TestimonialSubmitted $event): void
    {
        $testimonial = $event->testimonial;

        // Notify Admins
        $admins = \App\Models\User::where('is_admin', true)->get();
        foreach ($admins as $admin) {
            \Filament\Notifications\Notification::make()
                ->title('تقييم جديد من '.$testimonial->client_name)
                ->body('التقييم: '.$testimonial->rating.'/5')
                ->icon('heroicon-o-star')
                ->iconColor('warning')
                ->sendToDatabase($admin);
        }

        // Notify Company
        $companySettings = \App\Models\CompanySetting::first();
        if ($companySettings && $companySettings->main_email) {
            \Illuminate\Support\Facades\Notification::route('mail', $companySettings->main_email)
                ->notify(new \App\Notifications\NewTestimonial($testimonial));
        }
    }
}
