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
            'company_name' => 'E-Data360',
            'main_email' => 'info@e-data360.com',
            'phone_primary' => '+1234567890',
            'whatsapp_number' => '+1234567890',
            'location_text' => 'Riyadh, Saudi Arabia',
            'about_short' => 'E-Data360 is a company specialized in data analysis, Excel, Power BI, and PowerPoint dashboards & reports.',
            'logo_path' => 'path/to/your/logo.png', // Default placeholder
        ]);
    }
}
