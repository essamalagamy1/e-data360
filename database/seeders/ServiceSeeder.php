<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'تصميم وبناء لوحات معلومات Power BI',
                'short_description' => 'نحول بياناتك المعقدة إلى لوحات معلومات تفاعلية وسهلة الفهم باستخدام Microsoft Power BI.',
                'description' => 'نقوم بتحليل مصادر بياناتك، وتصميم نماذج البيانات، وبناء لوحات معلومات تفاعلية تمنحك رؤى فورية ودقيقة لدعم اتخاذ القرار.',
                'icon' => 'heroicon-o-chart-pie',
            ],
            [
                'title' => 'تحليل البيانات المتقدم باستخدام Excel',
                'short_description' => 'استفد من القوة الكاملة لبرنامج Excel مع نماذجنا وتحليلاتنا المتقدمة.',
                'description' => 'نقدم خدمات بناء نماذج مالية، وتحليل "ماذا لو"، وتقارير PivotTables متقدمة، وأتمتة المهام باستخدام VBA لتوفير الوقت وزيادة الدقة.',
                'icon' => 'heroicon-o-table-cells',
            ],
            [
                'title' => 'عروض تقديمية وتقارير PowerPoint احترافية',
                'short_description' => 'نعرض بياناتك وقصصك بطريقة جذابة ومقنعة من خلال عروض تقديمية احترافية.',
                'description' => 'نقوم بتصميم عروض PowerPoint مخصصة تعكس هوية علامتك التجارية وتوصل رسالتك بوضوح، مع دمج الرسوم البيانية والبيانات بشكل فعال.',
                'icon' => 'heroicon-o-presentation-chart-line',
            ],
        ];

        foreach ($services as $service) {
            Service::create([
                'title' => $service['title'],
                'slug' => Str::slug($service['title']),
                'short_description' => $service['short_description'],
                'description' => $service['description'],
                'icon' => $service['icon'],
                'is_active' => true,
            ]);
        }
    }
}
