<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'business_type',
        'main_email',
        'secondary_email',
        'phone_primary',
        'phone_secondary',
        'whatsapp_number',
        'location_text',
        'city_primary',
        'country_primary',
        'latitude_primary',
        'longitude_primary',
        'location_secondary',
        'city_secondary',
        'country_secondary',
        'latitude_secondary',
        'longitude_secondary',
        'about_short',
        'logo_path',
        'logo_2_path',
        'favicon_path',
        'google_review_url',
        'google_place_id',
        'google_places_api_key',
    ];
}
