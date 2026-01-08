<?php

namespace App\Http\Controllers;

class JobApplicationController extends Controller
{
    public function create()
    {
        return view('pages.careers');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'years_of_experience' => 'required|integer|min:0',
            'specialization' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ], [
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني غير صالح',
            'phone.required' => 'رقم الهاتف مطلوب',
            'years_of_experience.required' => 'عدد سنوات الخبرة مطلوب',
            'specialization.required' => 'التخصص مطلوب',
            'cv.required' => 'السيرة الذاتية مطلوبة',
            'cv.mimes' => 'يجب أن يكون الملف من نوع: pdf, doc, docx',
            'cv.max' => 'حجم الملف يجب ألا يتجاوز 5 ميجابايت',
        ]);

        if ($request->hasFile('cv')) {
            $path = $request->file('cv')->store('cvs', 'public');
            $validated['cv_path'] = $path;
        }

        unset($validated['cv']); // Remove valid file object, keep path

        $jobApplication = \App\Models\JobApplication::create($validated);

        \App\Events\JobApplicationSubmitted::dispatch($jobApplication);

        return redirect()->back()->with('success', 'تم استلام طلبك بنجاح! سنتواصل معك قريباً.');
    }
}
