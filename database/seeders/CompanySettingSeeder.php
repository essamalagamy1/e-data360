<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanySetting::create([
            'company_name' => 'E-DATA360',
            'main_email' => 'info@e-data360.com',
            'secondary_email' => 'support@e-data360.com',
            'phone_primary' => '+966 50 123 4567',
            'phone_secondary' => '+966 50 765 4321',
            'whatsapp_number' => '+966 50 123 4567',
            'location_text' => 'الرياض، المملكة العربية السعودية',
            'about_short' => 'شريكك الموثوق في التحول الرقمي. نطور مواقع ويب احترافية، تطبيقات جوال متميزة، وحلول برمجية متكاملة باستخدام أحدث التقنيات. من الفكرة إلى الإطلاق، نرافقك في كل خطوة.',
            'logo_path' => null,
        ]);
    }
}
