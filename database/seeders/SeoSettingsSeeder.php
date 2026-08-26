<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Seeder;

class SeoSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seoSettings = [
            // Home Page
            [
                'page' => 'home',
                'meta_title' => 'E-DATA360 | حلول تحليل البيانات المتقدمة ولوحات تحكم Excel و Power BI في السعودية',
                'meta_description' => 'شركة E-DATA360 الرائدة بالمملكة العربية السعودية في هندسة لوحات التحكم التفاعلية Excel و Power BI، مؤشرات الأداء KPIs، وتحليلات الأعمال الذكية للمنشآت والشركات بالرياض وجدة والدمام.',
                'meta_keywords' => 'تحليل البيانات السعودية, لوحات تحكم Excel الرياض, لوحات تحكم Power BI جدة, تصميم داشبورد تفاعلي, مؤشرات أداء KPI, ذكاء الأعمال للمنشآت, تقارير هيئة الزكاة والضريبة, استشارات بيانات الرياض, E-DATA360, إي داتا 360',
                'og_title' => 'E-DATA360 | خبراء تحليل البيانات ولوحات التحكم التفاعلية في السعودية',
                'og_description' => 'نحول بيانات منشأتك إلى رؤى استراتيجية وقرارات دقيقة عبر لوحات تحكم مخصصة وسريعة التنفيذ.',
                'og_type' => 'website',
                'twitter_card' => 'summary_large_image',
                'twitter_site' => '@edata360',
                'robots' => 'index,follow',
                'is_active' => true,
            ],

            // About Page
            [
                'page' => 'about',
                'meta_title' => 'من نحن - E-DATA360 | بيت خبرة تحليل البيانات وهندسة لوحات التحكم بالمملكة',
                'meta_description' => 'تعرف على E-DATA360، الشريك الوطني الموثوق للمنشآت والشركات السعودية في تحويل البيانات إلى أصول استراتيجية تدعم مستهدفات النمو ورؤية المملكة 2030.',
                'meta_keywords' => 'عن E-DATA360, خبراء تحليل البيانات السعودية, مهندسو Power BI الرياض, محللو بيانات معتمدون, ذكاء الأعمال المملكة, من نحن',
                'og_title' => 'من نحن - E-DATA360 للتحليلات ولوحات التحكم',
                'og_description' => 'فريق سعودي وعالمي رائد في تحويل البيانات المعقدة إلى لوحات تحكم تنفيذية واضحة.',
                'og_type' => 'website',
                'twitter_card' => 'summary_large_image',
                'robots' => 'index,follow',
                'is_active' => true,
            ],

            // Services Page
            [
                'page' => 'services',
                'meta_title' => 'خدماتنا - E-DATA360 | لوحات تحكم Excel و Power BI وذكاء الأعمال للمنشآت',
                'meta_description' => 'خدمات متكاملة للمنشآت والشركات في السعودية: تصميم لوحات تحكم Power BI و Excel متطورة، بناء مؤشرات أداء KPI، أتمتة التقارير المالية والتشغيلية، واستشارات تحليل البيانات.',
                'meta_keywords' => 'خدمات تحليل البيانات, تصميم لوحة تحكم Power BI, لوحات تحكم إكسل احترافية, داشبورد مبيعات الفروع, مؤشرات الأداء التنفيذية, أتمتة التقارير, استشارات ذكاء الأعمال بالسعودية',
                'og_title' => 'خدمات E-DATA360 - حلول متقدمة لهندسة البيانات ولوحات التحكم',
                'og_description' => 'من تجميع وتنظيف البيانات إلى تصميم لوحات تفاعلية بأسعار تنافسية وتسليم سريع خلال 3-5 أيام.',
                'og_type' => 'website',
                'twitter_card' => 'summary_large_image',
                'robots' => 'index,follow',
                'is_active' => true,
            ],

            // Portfolio Page
            [
                'page' => 'portfolio',
                'meta_title' => 'معرض الأعمال - E-DATA360 | نماذج حية للوحات التحكم والمشاريع المنجزة',
                'meta_description' => 'استعرض نماذج أعمالنا الواقعية للوحات تحكم Excel و Power BI لمختلف القطاعات بالسعودية: مبيعات التجزئة، المقاولات، سلاسل الإمداد، الرعاية الصحية، والشركات الخدمية.',
                'meta_keywords' => 'معرض أعمال لوحات التحكم, نماذج Power BI السعودية, أمثلة لوحات إكسل, مشاريع تحليل بيانات منجزة, داشبوردات تفاعلية, E-DATA360 Portfolio',
                'og_title' => 'معرض أعمال E-DATA360 - مشاريع ناجحة في تحليل البيانات',
                'og_description' => 'شاهد نماذج حية وتفاعلية من لوحات التحكم المصممة لأبرز المنشآت والشركات.',
                'og_type' => 'website',
                'twitter_card' => 'summary_large_image',
                'robots' => 'index,follow',
                'is_active' => true,
            ],

            // Contact Page
            [
                'page' => 'contact',
                'meta_title' => 'تواصل معنا - E-DATA360 | استشارة بيانات مجانية ودعم مباشر في الرياض',
                'meta_description' => 'تواصل مع مستشاري E-DATA360 بالرياض للحصول على استشارة مجانية وعرض سعر فوري لمشروع تحليل بياناتك ولوحة التحكم الخاصة بك. خدمة سريعة عبر واتساب وهاتفياً.',
                'meta_keywords' => 'تواصل معنا, استشارة تحليل بيانات مجانية, رقم E-DATA360, واتساب تحليل بيانات, خبراء داشبورد الرياض, طلب عرض سعر لوحة تحكم',
                'og_title' => 'تواصل مع خبراء E-DATA360 بالرياض',
                'og_description' => 'احصل على استشارة فورية وعرض سعر مخصص لمنشأتك.',
                'og_type' => 'website',
                'twitter_card' => 'summary',
                'robots' => 'index,follow',
                'is_active' => true,
            ],

            // Request Design Page
            [
                'page' => 'request_design',
                'meta_title' => 'اطلب تصميم لوحة تحكم - E-DATA360 | عرض سعر فوري وتنفيذ سريع خلال 3-5 أيام',
                'meta_description' => 'قدم طلب تصميم لوحة تحكم مخصصة لمنشأتك في السعودية (Power BI أو Excel). تسليم فوري، جودة استثنائية، وضمان سرية البيانات التامة باتفاقيات رسمية.',
                'meta_keywords' => 'طلب تصميم لوحة تحكم, طلب داشبورد إكسل, تصميم Power BI بالسعودية, تسعير لوحات تحكم, عرض سعر تحليل بيانات',
                'og_title' => 'اطلب تصميم لوحة تحكم مخصصة - E-DATA360',
                'og_description' => 'خطتك ولوحتك التفاعلية جاهزة خلال 3-5 أيام عمل بأعلى معايير الدقة والأمان.',
                'og_type' => 'website',
                'twitter_card' => 'summary_large_image',
                'robots' => 'index,follow',
                'is_active' => true,
            ],
        ];

        foreach ($seoSettings as $setting) {
            SeoSetting::updateOrCreate(
                ['page' => $setting['page']],
                $setting
            );
        }

        $this->command->info('✅ تم تحديث إعدادات SEO لجميع الصفحات باستهداف السوق السعودي (E-DATA360)');
    }
}
