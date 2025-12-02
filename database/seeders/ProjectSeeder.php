<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'لوحة معلومات مبيعات التجزئة',
                'short_description' => 'تحليل أداء المبيعات عبر المناطق والفئات باستخدام Power BI.',
                'description' => 'تم تصميم لوحة المعلومات هذه لتوفير رؤية شاملة لأداء المبيعات، وتتبع مؤشرات الأداء الرئيسية (KPIs) مثل الإيرادات، وهامش الربح، ومعدل التحويل. يمكن للمستخدمين تصفية البيانات حسب المنطقة، المتجر، وفئة المنتج.',
                'main_image' => 'seeders/project1.jpg',
                'is_featured' => true,
            ],
            [
                'title' => 'نموذج مالي لشركة ناشئة',
                'short_description' => 'نموذج Excel متكامل لتوقعات الإيرادات والمصروفات والتدفقات النقدية.',
                'description' => 'نموذج مالي مرن يسمح للشركة بتخطيط سيناريوهات مختلفة للنمو، وتقييم الاحتياجات التمويلية، وتقديم توقعات مالية دقيقة للمستثمرين. يتضمن قوائم الدخل والميزانية العمومية والتدفقات النقدية المتوقعة لخمس سنوات.',
                'main_image' => 'seeders/project2.jpg',
                'is_featured' => true,
            ],
            [
                'title' => 'عرض تقديمي لنتائج الربع السنوي',
                'short_description' => 'تصميم عرض PowerPoint جذاب لعرض النتائج المالية للمساهمين.',
                'description' => 'عرض تقديمي احترافي يترجم الأرقام المالية المعقدة إلى رسوم بيانية واضحة وقصة متماسكة. تم تصميم العرض ليكون جذابًا بصريًا وسهل المتابعة، مع التركيز على الإنجازات الرئيسية والتحديات والخطط المستقبلية.',
                'main_image' => 'seeders/project3.jpg',
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $project) {
            Project::create([
                'title' => $project['title'],
                'slug' => Str::slug($project['title']),
                'short_description' => $project['short_description'],
                'description' => $project['description'],
                'main_image' => $project['main_image'],
                'is_featured' => $project['is_featured'],
                'status' => 'published',
            ]);
        }
    }
}
