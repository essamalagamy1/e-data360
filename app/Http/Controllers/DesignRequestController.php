<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesignRequest;
use App\Models\DesignRequest;
use App\Models\SeoSetting;

class DesignRequestController extends Controller
{
    public function create()
    {
        $seo = SeoSetting::where('page', 'request_design')->first();
        return view('pages.request-design', compact('seo'));
    }

    public function store(StoreDesignRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('attachment')) {
            $path = $request->file('attachment')->store('design-requests', 'public');
            $data['attachment_path'] = $path;
        }

        DesignRequest::create($data);

        return redirect()->back()->with('success', 'Your request has been submitted successfully!');
    }
}
