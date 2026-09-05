<?php

namespace App\Services;

use App\Models\CompanySetting;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleReviewsService
{
    /**
     * Fetch reviews from Google Places API (New v1) and sync to Testimonials table
     */
    public function syncReviews(): array
    {
        $company = CompanySetting::first();

        $apiKey = $company?->google_places_api_key ?: config('services.google.places_api_key', env('GOOGLE_PLACES_API_KEY'));
        $placeId = $company?->google_place_id ?: config('services.google.place_id', env('GOOGLE_PLACE_ID'));

        if (empty($apiKey) || empty($placeId)) {
            return [
                'success' => false,
                'message' => 'بيانات الربط مع خرائط جوجل غير مكتملة (Google Place ID أو API Key مفقود في إعدادات الشركة).',
                'synced_count' => 0,
            ];
        }

        try {
            // Call Google Places API (New v1)
            $response = Http::withHeaders([
                'X-Goog-Api-Key' => $apiKey,
                'X-Goog-FieldMask' => 'displayName,rating,userRatingCount,reviews',
            ])->get("https://places.googleapis.com/v1/places/{$placeId}", [
                'languageCode' => 'ar',
            ]);

            if ($response->failed()) {
                Log::error('Google Places API Error: ' . $response->body());
                return [
                    'success' => false,
                    'message' => 'فشل الاتصال بـ Google Places API: ' . $response->status(),
                    'synced_count' => 0,
                ];
            }

            $data = $response->json();
            $reviews = $data['reviews'] ?? [];

            $syncedCount = 0;

            foreach ($reviews as $review) {
                $authorName = $review['authorAttribution']['displayName'] ?? 'عميل موثق';
                $authorPhoto = $review['authorAttribution']['photoUri'] ?? null;
                $authorUri = $review['authorAttribution']['uri'] ?? ($company->google_review_url ?? null);
                $rating = (int) round($review['rating'] ?? 5);
                $text = $review['text']['text'] ?? ($review['originalText']['text'] ?? '');

                if (empty($text)) {
                    continue;
                }

                Testimonial::updateOrCreate(
                    [
                        'client_name' => $authorName,
                        'source' => 'google',
                    ],
                    [
                        'client_position' => 'عميل خرائط Google موثق',
                        'client_company' => 'مراجعة Google Maps',
                        'client_avatar' => $authorPhoto,
                        'rating' => max(1, min(5, $rating)),
                        'testimonial' => $text,
                        'badge_text' => 'مراجعة Google موثقة ✦',
                        'badge_color_from' => 'emerald-500',
                        'badge_color_to' => 'cyan-500',
                        'is_verified' => true,
                        'is_featured' => true,
                        'is_active' => true,
                        'review_url' => $authorUri,
                    ]
                );

                $syncedCount++;
            }

            return [
                'success' => true,
                'message' => "تمت مزامنة {$syncedCount} من مراجعات خرائط جوجل بنجاح.",
                'synced_count' => $syncedCount,
                'user_rating_count' => $data['userRatingCount'] ?? 0,
                'rating' => $data['rating'] ?? 5.0,
            ];

        } catch (\Throwable $e) {
            Log::error('Google Reviews Sync Exception: ' . $e->getMessage());
            return [
                'success' => false,
                'message' => 'حدث خطأ أثناء مزامنة المراجعات: ' . $e->getMessage(),
                'synced_count' => 0,
            ];
        }
    }
}
