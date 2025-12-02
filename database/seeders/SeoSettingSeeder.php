<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = ['home', 'about', 'services', 'portfolio', 'contact', 'request_design'];

        foreach ($pages as $page) {
            SeoSetting::create([
                'page' => $page,
                'meta_title' => 'E-Data360 - ' . ucfirst($page),
                'meta_description' => 'Default meta description for the ' . $page . ' page.',
            ]);
        }
    }
}
