<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform',
        'url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getIconAttribute(): string
    {
        $platform = strtolower($this->platform ?? '');
        return match (true) {
            str_contains($platform, 'twitter') || str_contains($platform, 'x') => 'fa-brands fa-x-twitter',
            str_contains($platform, 'linkedin') => 'fa-brands fa-linkedin-in',
            str_contains($platform, 'instagram') => 'fa-brands fa-instagram',
            str_contains($platform, 'facebook') => 'fa-brands fa-facebook-f',
            str_contains($platform, 'youtube') => 'fa-brands fa-youtube',
            str_contains($platform, 'whatsapp') => 'fa-brands fa-whatsapp',
            str_contains($platform, 'telegram') => 'fa-brands fa-telegram',
            str_contains($platform, 'behance') => 'fa-brands fa-behance',
            str_contains($platform, 'github') => 'fa-brands fa-github',
            str_contains($platform, 'tiktok') => 'fa-brands fa-tiktok',
            str_contains($platform, 'snapchat') => 'fa-brands fa-snapchat',
            default => 'fa-solid fa-share-nodes',
        };
    }
}
