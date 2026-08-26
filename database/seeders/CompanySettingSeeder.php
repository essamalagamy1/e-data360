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
        CompanySetting::updateOrCreate(
            ['id' => 1],
            [
                'company_name' => 'E-DATA360',
                'main_email' => 'info@e-data360.com',
                'secondary_email' => 'support@e-data360.com',
                'phone_primary' => '+966 50 123 4567',
                'phone_secondary' => '+966 50 765 4321',
                'whatsapp_number' => '+966 50 123 4567',
                'location_text' => 'الرياض - طريق الملك فهد، المملكة العربية السعودية',
                'about_short' => 'شريكك الاستراتيجي في المملكة العربية السعودية لتحويل البيانات إلى لوحات تحكم وقرارات دقيقة تدعم نمو منشأتك ومستهدفات رؤية 2030.',
                'logo_path' => null,
            ]
        );

        $this->command->info('✅ تم تحديث بيانات الشركة E-DATA360 وبيانات الرياض والمملكة');
    }
}
