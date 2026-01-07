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
                'badge_icon' => 'fas fa-code',
                'badge_text' => 'شريكك في التحول الرقمي',
                'title_line1' => 'نحول أفكارك إلى',
                'title_line2' => 'منتجات رقمية ناجحة',
                'subtitle' => 'نطور مواقع وتطبيقات مبتكرة باستخدام أحدث التقنيات. من الفكرة إلى الإطلاق، نرافقك في كل خطوة لتحقيق رؤيتك الرقمية.',
                'cta_primary_text' => 'ابدأ مشروعك',
                'cta_primary_link' => '/request-a-design',
                'cta_secondary_text' => 'استكشف أعمالنا',
                'cta_secondary_link' => '/portfolio',
                'is_active' => true,
            ],
            [
                'page' => 'about',
                'badge_icon' => 'fas fa-users',
                'badge_text' => 'تعرف علينا أكثر',
                'title_line1' => 'نحن',
                'title_line2' => 'فريق E-DATA 360',
                'subtitle' => 'فريق من المطورين والمصممين المحترفين نسعى لتحويل رؤيتك إلى واقع رقمي متميز',
                'is_active' => true,
            ],
            [
                'page' => 'services',
                'badge_icon' => 'fas fa-laptop-code',
                'badge_text' => 'حلول برمجية متكاملة',
                'title_line1' => 'خدماتنا',
                'title_line2' => 'التقنية',
                'subtitle' => 'نقدم مجموعة شاملة من الخدمات البرمجية من تطوير الويب والتطبيقات إلى التصميم والاستضافة',
                'is_active' => true,
            ],
            [
                'page' => 'contact',
                'badge_icon' => 'fas fa-envelope',
                'badge_text' => 'نحن بانتظارك',
                'title_line1' => 'تواصل',
                'title_line2' => 'معنا',
                'subtitle' => 'هل لديك مشروع في ذهنك؟ تواصل معنا الآن ودعنا نحوله إلى واقع',
                'is_active' => true,
            ],
            [
                'page' => 'portfolio',
                'badge_icon' => 'fas fa-th-large',
                'badge_text' => 'أعمالنا المميزة',
                'title_line1' => 'معرض',
                'title_line2' => 'الأعمال',
                'subtitle' => 'استعرض مجموعة من أفضل المشاريع البرمجية التي نفذناها لعملائنا',
                'is_active' => true,
            ],
        ];

        foreach ($heroSections as $section) {
            HeroSection::create($section);
        }
    }
}
