<?php

namespace App\Http\Controllers;

use App\Models\SeoSetting;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $seo = SeoSetting::where('page', 'about')->first();
        return view('pages.about', compact('seo'));
    }

    public function services()
    {
        $services = Service::where('is_active', true)->get();
        $seo = SeoSetting::where('page', 'services')->first();
        return view('pages.services', compact('services', 'seo'));
    }

    public function contact()
    {
        $seo = SeoSetting::where('page', 'contact')->first();
        return view('pages.contact', compact('seo'));
    }
}
