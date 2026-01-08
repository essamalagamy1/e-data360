<?php

namespace App\Listeners;

use App\Events\ContactMessageSent;

class SendContactMessageNotification
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
    public function handle(ContactMessageSent $event): void
    {
        $message = $event->contactMessage;

        // Notify Admins
        $admins = \App\Models\User::where('is_admin', true)->get();
        foreach ($admins as $admin) {
            \Filament\Notifications\Notification::make()
                ->title('رسالة جديدة من '.$message->name)
                ->body(substr($message->message, 0, 100).'...')
                ->icon('heroicon-o-envelope')
                ->iconColor('info')
                ->sendToDatabase($admin);
        }

        // Notify Company
        $companySettings = \App\Models\CompanySetting::first();
        if ($companySettings && $companySettings->main_email) {
            \Illuminate\Support\Facades\Notification::route('mail', $companySettings->main_email)
                ->notify(new \App\Notifications\NewContactMessage($message));
        }
    }
}
