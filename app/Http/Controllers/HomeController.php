<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::where('is_featured', true)->where('status', 'published')->get();
        $seo = SeoSetting::where('page', 'home')->first();
        return view('pages.home', compact('featuredProjects', 'seo'));
    }
}
