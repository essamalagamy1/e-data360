<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    public function run(): void
    {
        $heroSections = [
            [
                'page' => 'home',
                'badge_icon' => 'fas fa-chart-line',
                'badge_text' => 'رائدون في تحليل البيانات والذكاء الاصطناعي',
                'title_line1' => 'حوّل بياناتك إلى',
                'title_line2' => 'قرارات استراتيجية',
                'subtitle' => 'نساعدك على اتخاذ قرارات مبنية على البيانات من خلال لوحات تحكم تفاعلية و تقارير احترافية باستخدام أحدث تقنيات Excel و Power BI',
                'cta_primary_text' => 'ابدأ مشروعك الآن',
                'cta_primary_link' => '/request-a-design',
                'cta_secondary_text' => 'استكشف معرض الأعمال',
                'cta_secondary_link' => '/portfolio',
                'is_active' => true,
            ],
            [
                'page' => 'about',
                'badge_icon' => 'fas fa-users',
                'badge_text' => 'تعرف علينا أكثر',
                'title_line1' => 'نحن',
                'title_line2' => 'EDATA 360',
                'subtitle' => 'شريكك الموثوق في تحويل البيانات إلى رؤى استراتيجية قابلة للتنفيذ',
                'is_active' => true,
            ],
            [
                'page' => 'services',
                'badge_icon' => 'fas fa-briefcase',
                'badge_text' => 'حلول متكاملة وشاملة',
                'title_line1' => 'خدماتنا',
                'title_line2' => 'الاحترافية',
                'subtitle' => 'نقدم مجموعة شاملة من الخدمات المتطورة لتحويل بياناتك إلى أصول استراتيجية قيّمة',
                'is_active' => true,
            ],
            [
                'page' => 'contact',
                'badge_icon' => 'fas fa-envelope',
                'badge_text' => 'نحن بانتظارك',
                'title_line1' => 'تواصل',
                'title_line2' => 'معنا',
                'subtitle' => 'نحن هنا لمساعدتك. تواصل معنا الآن وسنكون سعداء بالرد على استفساراتك',
                'is_active' => true,
            ],
            [
                'page' => 'portfolio',
                'badge_icon' => 'fas fa-th-large',
                'badge_text' => 'أعمالنا المميزة',
                'title_line1' => 'معرض',
                'title_line2' => 'الأعمال',
                'subtitle' => 'استعرض مجموعة من أفضل مشاريعنا التي ساعدت عملائنا على تحقيق نتائج استثنائية',
                'is_active' => true,
            ],
        ];

        foreach ($heroSections as $section) {
            HeroSection::create($section);
        }
    }
}
