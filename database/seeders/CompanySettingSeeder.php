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
            'company_name' => 'EDATA 360',
            'main_email' => 'info@edata360.com',
            'secondary_email' => 'support@edata360.com',
            'phone_primary' => '+966 50 123 4567',
            'phone_secondary' => '+966 50 765 4321',
            'whatsapp_number' => '+966 50 123 4567',
            'location_text' => 'الرياض، المملكة العربية السعودية',
            'about_short' => 'شريكك الموثوق في تحويل البيانات إلى رؤى استراتيجية قابلة للتنفيذ. نقدم حلول تحليل البيانات ولوحات التحكم الاحترافية.',
            'logo_path' => null,
        ]);
    }
}
