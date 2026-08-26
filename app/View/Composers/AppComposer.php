<?php

namespace App\View\Composers;

use App\Models\CompanySetting;
use App\Models\SocialLink;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class AppComposer
{
    /**
     * Bind data to the view with caching for ultra-fast response.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        try {
            $companySettings = Cache::remember('global_company_settings', 1800, function () {
                return CompanySetting::first();
            });

            $socialLinks = Cache::remember('global_social_links', 1800, function () {
                return SocialLink::where('is_active', true)->get();
            });

            $footerServices = Cache::remember('global_footer_services', 1800, function () {
                return Service::where('is_active', true)->orderBy('order')->take(4)->get();
            });

            $view->with([
                'companySettings' => $companySettings,
                'socialLinks' => $socialLinks,
                'footerServices' => $footerServices,
            ]);
        } catch (\Exception $e) {
            $view->with([
                'companySettings' => null,
                'socialLinks' => collect(),
                'footerServices' => collect(),
            ]);
        }
    }
}
