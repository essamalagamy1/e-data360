<?php

namespace App\Listeners;

use App\Events\DesignRequestSubmitted;

class SendDesignRequestNotification
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
    public function handle(DesignRequestSubmitted $event): void
    {
        $designRequest = $event->designRequest;

        // Notify Admins
        $admins = \App\Models\User::where('is_admin', true)->get();
        foreach ($admins as $admin) {
            \Filament\Notifications\Notification::make()
                ->title('طلب تصميم جديد من '.$designRequest->name)
                ->body('نوع المشروع: '.$designRequest->project_type)
                ->icon('heroicon-o-paint-brush')
                ->iconColor('success')
                ->sendToDatabase($admin);
        }

        // Notify Company
        $companySettings = \App\Models\CompanySetting::first();
        if ($companySettings && $companySettings->main_email) {
            \Illuminate\Support\Facades\Notification::route('mail', $companySettings->main_email)
                ->notify(new \App\Notifications\NewDesignRequest($designRequest));
        }
    }
}
