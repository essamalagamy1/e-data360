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
                'badge_text' => 'الخيار الأول للمنشآت والشركات في السعودية والخليج',
                'title_line1' => 'حوّل بيانات منشأتك إلى',
                'title_line2' => 'لوحات تحكم تفاعلية وقرارات ذكية',
                'subtitle' => 'نصمم لوحات تحكم احترافية عبر Excel و Power BI تمنحك رؤية شاملة 360 درجة لمؤشرات الأداء، الأرباح، والنمو لدعم مستهدفات رؤية المملكة 2030.',
                'cta_primary_text' => 'اطلب لوحة تحكم الآن',
                'cta_primary_link' => '/request-a-design',
                'cta_secondary_text' => 'استكشف معرض النماذج',
                'cta_secondary_link' => '/portfolio',
                'is_active' => true,
            ],
            [
                'page' => 'about',
                'badge_icon' => 'fas fa-users',
                'badge_text' => 'بيت الخبرة في علم البيانات بالمملكة',
                'title_line1' => 'نحن',
                'title_line2' => 'E-DATA360',
                'subtitle' => 'شريكك الاستراتيجي في المملكة العربية السعودية لتحويل البيانات إلى أصول وقرارات استثمارية وتشغيلية ناجحة.',
                'is_active' => true,
            ],
            [
                'page' => 'services',
                'badge_icon' => 'fas fa-briefcase',
                'badge_text' => 'حلول متكاملة للمنشآت السعودية',
                'title_line1' => 'خدماتنا',
                'title_line2' => 'في هندسة وتحليل البيانات',
                'subtitle' => 'من تجميع وتجهيز البيانات المعقدة إلى تصميم لوحات Power BI و Excel متطورة بأعلى معايير الدقة والأمان.',
                'is_active' => true,
            ],
            [
                'page' => 'contact',
                'badge_icon' => 'fas fa-envelope',
                'badge_text' => 'فريق الاستشارات بالرياض في خدمتك',
                'title_line1' => 'تواصل',
                'title_line2' => 'مع مستشاري E-DATA360',
                'subtitle' => 'احصل على استشارة فورية وعرض سعر مخصص لمشروعك عبر الواتساب أو النموذج المباشر.',
                'is_active' => true,
            ],
            [
                'page' => 'portfolio',
                'badge_icon' => 'fas fa-th-large',
                'badge_text' => 'نماذج حية لمشاريع سعودية ناجحة',
                'title_line1' => 'معرض',
                'title_line2' => 'لوحات التحكم والأعمال',
                'subtitle' => 'استعرض لوحات تحكم واقعية تم تنفيذها لشركات التجزئة، المقاولات، سلاسل الإمداد، والخدمات بالمملكة.',
                'is_active' => true,
            ],
        ];

        foreach ($heroSections as $section) {
            HeroSection::updateOrCreate(
                ['page' => $section['page']],
                $section
            );
        }

        $this->command->info('✅ تم تحديث أقسام Hero بالهوية السعودية لـ E-DATA360');
    }
}
