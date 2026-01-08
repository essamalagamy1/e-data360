<?php

namespace App\Listeners;

use App\Events\JobApplicationSubmitted;

class SendJobApplicationNotification
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
    public function handle(JobApplicationSubmitted $event): void
    {
        $jobApplication = $event->jobApplication;

        // Notify Admins (Filament Database)
        $admins = \App\Models\User::where('is_admin', true)->get();
        foreach ($admins as $admin) {
            \Filament\Notifications\Notification::make()
                ->title('طلب توظيف جديد من '.$jobApplication->name)
                ->body('التخصص: '.$jobApplication->specialization)
                ->icon('heroicon-o-briefcase')
                ->iconColor('success')
                ->sendToDatabase($admin);
        }

        // Notify Company (Email)
        $companySettings = \App\Models\CompanySetting::first();
        if ($companySettings && $companySettings->main_email) {
            \Illuminate\Support\Facades\Notification::route('mail', $companySettings->main_email)
                ->notify(new \App\Notifications\NewJobApplication($jobApplication));
        }
    }
}
