<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        $links = [
            ['platform' => 'linkedin', 'url' => 'https://linkedin.com/company/e-data360'],
            ['platform' => 'x', 'url' => 'https://x.com/e-data360'],
            ['platform' => 'whatsapp', 'url' => 'https://wa.me/1234567890'],
        ];

        foreach ($links as $link) {
            SocialLink::create($link);
        }
    }
}
