<?php

namespace App\View\Composers;

use App\Models\CompanySetting;
use App\Models\SocialLink;
use App\Models\Service;
use Illuminate\View\View;

class AppComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'companySettings' => CompanySetting::first(),
            'socialLinks' => SocialLink::where('is_active', true)->get(),
            'footerServices' => Service::where('is_active', true)->inRandomOrder()->take(4)->get(),
        ]);
    }
}
