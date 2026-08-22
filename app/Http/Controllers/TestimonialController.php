<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use App\Models\SocialLink;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        $ratingFilter = $request->query('rating');

        $query = Testimonial::where('is_active', true);

        if ($ratingFilter && in_array($ratingFilter, ['1', '2', '3', '4', '5'])) {
            $query->where('rating', (int)$ratingFilter);
        }

        $testimonials = $query->orderBy('order', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(12)
            ->withQueryString();

        // Calculate statistics for header summary
        $allActive = Testimonial::where('is_active', true)->get();
        $totalCount = $allActive->count();
        $averageRating = $totalCount > 0 ? round($allActive->avg('rating'), 1) : 5.0;
        $fiveStarCount = $allActive->where('rating', 5)->count();
        $fourStarCount = $allActive->where('rating', 4)->count();
        $threeStarCount = $allActive->where('rating', 3)->count();
        $twoStarCount = $allActive->where('rating', 2)->count();
        $oneStarCount = $allActive->where('rating', 1)->count();
        $verifiedCount = $allActive->where('is_verified', true)->count();

        return view('pages.testimonials', [
            'testimonials' => $testimonials,
            'companySettings' => CompanySetting::first(),
            'socialLinks' => SocialLink::where('is_active', true)->get(),
            'stats' => [
                'total' => $totalCount,
                'average' => number_format($averageRating, 1),
                'fiveStar' => $fiveStarCount,
                'fourStar' => $fourStarCount,
                'threeStar' => $threeStarCount,
                'twoStar' => $twoStarCount,
                'oneStar' => $oneStarCount,
                'verified' => $verifiedCount,
            ],
            'selectedRating' => $ratingFilter,
        ]);
    }

    public function create()
    {
        return view('pages.add-testimonial', [
            'companySettings' => CompanySetting::first(),
            'socialLinks' => SocialLink::where('is_active', true)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_position' => 'nullable|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'testimonial' => 'required|string|min:10',
            'rating' => 'required|integer|min:1|max:5',
        ], [
            'client_name.required' => 'الاسم مطلوب',
            'client_position.required' => 'المنصب مطلوب',
            'testimonial.required' => 'نص التقييم مطلوب',
            'testimonial.min' => 'يجب أن يكون التقييم 10 أحرف على الأقل',
            'rating.required' => 'التقييم مطلوب',
            'rating.min' => 'التقييم يجب أن يكون من 1 إلى 5',
            'rating.max' => 'التقييم يجب أن يكون من 1 إلى 5',
        ]);

        // Create testimonial with default values
        $testimonial = Testimonial::create([
            'client_name' => $validated['client_name'],
            'client_position' => $validated['client_position'],
            'client_company' => $validated['client_company'],
            'testimonial' => $validated['testimonial'],
            'rating' => $validated['rating'],
            'is_active' => true, // Requires admin approval
            'is_featured' => true,
            'is_verified' => false,
            'order' => 0,
        ]);

        \App\Events\TestimonialSubmitted::dispatch($testimonial);

        return redirect()->route('testimonial.create')->with('success', 'شكراً لك! تم إرسال تقييمك بنجاح. سيتم مراجعته ونشره قريباً.');
    }
}
