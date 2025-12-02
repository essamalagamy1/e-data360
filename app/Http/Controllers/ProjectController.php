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
        return view('pages.portfolio', compact('projects', 'seo'));
    }

    public function show(Project $project)
    {
        // SEO for project details page can be dynamic based on the project
        return view('pages.project-details', compact('project'));
    }
}
