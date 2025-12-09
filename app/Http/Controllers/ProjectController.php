<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', 'published')->paginate(9);
        $seo = SeoSetting::where('page', 'portfolio')->first();
        
        return view('pages.portfolio', [
            'projects' => $projects,
            'seo' => $seo,
            'heroSection' => \App\Models\HeroSection::where('page', 'portfolio')->where('is_active', true)->first(),
            'stats' => \App\Models\Stat::where('page', 'portfolio')->where('is_active', true)->orderBy('order')->get(),
            'companySettings' => \App\Models\CompanySetting::first(),
            'socialLinks' => \App\Models\SocialLink::where('is_active', true)->get(),
        ]);
    }

    public function show(Project $project)
    {
        // SEO for project details page can be dynamic based on the project
        return view('pages.project-details', compact('project'));
    }
}
