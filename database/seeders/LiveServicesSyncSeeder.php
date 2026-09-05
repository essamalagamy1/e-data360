<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use App\Models\Service;
use App\Models\ServiceFeature;
use Illuminate\Database\Seeder;

class LiveServicesSyncSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Update Company Settings with real Live Saudi info
        CompanySetting::updateOrCreate(
            ['id' => 1],
            [
                'company_name' => 'E-DATA360',
                'business_type' => 'ProfessionalService',
                'main_email' => 'work@e-data360.com',
                'secondary_email' => 'info@e-data360.com',
                'phone_primary' => '+966 55 397 0641',
                'phone_secondary' => '+966 50 123 4567',
                'whatsapp_number' => '966553970641',
                'location_text' => 'الرياض - طريق الملك فهد، المملكة العربية السعودية',
                'city_primary' => 'الرياض',
                'country_primary' => 'SA',
                'latitude_primary' => 24.7136000,
                'longitude_primary' => 46.6753000,
                'location_secondary' => 'جدة - طريق الملك عبدالعزيز، المملكة العربية السعودية',
                'city_secondary' => 'جدة',
                'country_secondary' => 'SA',
                'latitude_secondary' => 21.4858000,
                'longitude_secondary' => 39.1925000,
                'about_short' => 'شريكك الموثوق لإدارة كل بياناتك وتحويلها لرؤية واضحة في المملكة العربية السعودية. مع أدواتنا ولوحات التحكم الذكية، تقدر تفهم بياناتك أكثر، تاخذ قرارات أذكى، وتحقق نتائج ملموسة بسهولة.',
            ]
        );

        // 2. Deactivate any old unrelated services
        Service::whereNotIn('slug', [
            'power-bi-course',
            'business-performance-management',
            'excel-dashboards',
            'power-bi-dashboards',
            'custom-software-web-solutions',
            'powerpoint-presentations-reports',
        ])->update(['is_active' => false]);

        // 3. Define the exact 6 live services from https://e-data360.com/services
        $liveServices = [
            [
                'title' => 'كورس Power BI',
                'slug' => 'power-bi-course',
                'icon' => 'fas fa-graduation-cap',
                'duration' => 'مده الكورس',
                'price_starting' => null,
                'price_label' => 'مده الكورس',
                'cta_text' => 'اطلب الآن',
                'cta_link' => '/request-a-design',
                'short_description' => 'كورس Power BI عملي يركّز على التطبيق الفعلي، يساعدك تطوّر مهاراتك خطوة بخطوة لتصبح محترف في تحليل البيانات وتصميم لوحات التحكم التفاعلية.',
                'description' => 'كورس Power BI عملي يركّز على التطبيق الفعلي، يساعدك تطوّر مهاراتك خطوة بخطوة لتصبح محترف في تحليل البيانات وتصميم لوحات التحكم التفاعلية في السوق السعودي والخليجي.',
                'color_from' => 'blue-600',
                'color_to' => 'cyan-500',
                'badge_icon' => 'fas fa-graduation-cap',
                'badge_color' => 'cyan-400',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1,
                'features' => [
                    'تطبيق مباشر على بيانات حقيقية',
                    'تصميم داشبوردات تفاعلية وسهلة الاستخدام',
                    'استيراد، تنظيف، وتحليل البيانات بكفاءة',
                    'تحوّل الأرقام لرؤى واضحة تساعدك في عملك',
                    'مناسب للموظفين، الأفراد، وأصحاب الأعمال',
                ],
            ],
            [
                'title' => 'باقات إدارة وتحليل أداء الأعمال',
                'slug' => 'business-performance-management',
                'icon' => 'fas fa-business-time',
                'duration' => 'شهريا',
                'price_starting' => null,
                'price_label' => 'شهريا',
                'cta_text' => 'اطلب الآن',
                'cta_link' => '/request-a-design',
                'short_description' => 'حل متكامل مناسب لشركات الصغيره والمتوسطة لمتابعة وتحليل أداء شركتك بشكل مستمر، من جمع البيانات وربطها إلى التقارير والتوصيات التي تساعدك على اتخاذ قرارات أفضل.',
                'description' => 'حل متكامل مناسب للشركات الصغيرة والمتوسطة في المملكة العربية السعودية لمتابعة وتحليل أداء شركتك بشكل مستمر، من جمع البيانات وربطها إلى التقارير والتوصيات التي تساعدك على اتخاذ قرارات أفضل.',
                'color_from' => 'blue-600',
                'color_to' => 'cyan-500',
                'badge_icon' => 'fas fa-clock',
                'badge_color' => 'cyan-400',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2,
                'features' => [
                    'متابعة أهم مؤشرات شركتك باستمرار.',
                    'تحويل الأرقام إلى رؤى واضحة.',
                    'اقتراحات عملية لتحسين الأداء.',
                    'تقارير وبيانات محدثة بشكل دوري.',
                ],
            ],
            [
                'title' => 'لوحات تحكم Excel',
                'slug' => 'excel-dashboards',
                'icon' => 'fas fa-file-excel',
                'duration' => '3-5 أيام',
                'price_starting' => '320 ر.س',
                'price_label' => 'يبدأ من',
                'cta_text' => 'اطلب الآن',
                'cta_link' => '/request-a-design',
                'short_description' => 'تصميم لوحات تحكم تفاعلية متقدمة واحترافيه باستخدام Excel مع معادلات ديناميكية، جداول محورية، ورسوم بيانية احترافية',
                'description' => 'تصميم لوحات تحكم تفاعلية متقدمة واحترافية باستخدام Excel مع معادلات ديناميكية، جداول محورية، ورسوم بيانية احترافية لتتبع المبيعات والمصاريف والأرباح بدقة.',
                'color_from' => 'green-600',
                'color_to' => 'emerald-500',
                'badge_icon' => 'fas fa-star',
                'badge_color' => 'yellow-400',
                'is_featured' => true,
                'is_active' => true,
                'order' => 3,
                'features' => [
                    'تصميم احترافي وجذاب',
                    'معادلات متقدمة وديناميكية',
                    'جداول محورية تفاعلية',
                    'رسوم بيانية احترافية',
                    'سهولة في التحديث والاستخدام',
                ],
            ],
            [
                'title' => 'لوحات تحكم Power BI',
                'slug' => 'power-bi-dashboards',
                'icon' => 'fas fa-chart-bar',
                'duration' => '3-5 أيام',
                'price_starting' => '350 ر.س',
                'price_label' => 'يبدأ من',
                'cta_text' => 'اطلب الآن',
                'cta_link' => '/request-a-design',
                'short_description' => 'في Power BI نساعدك على تحليل بياناتك بشكل شامل وإنشاء لوحات تحكم تفاعلية تُمكّنك من متابعة الأداء، اكتشاف الفرص، وحل المشكلات بسرعة. نحوّل البيانات المعقدة لرؤى واضحة',
                'description' => 'في Power BI نساعدك على تحليل بياناتك بشكل شامل وإنشاء لوحات تحكم تفاعلية تُمكّنك من متابعة الأداء، اكتشاف الفرص، وحل المشكلات بسرعة. نحوّل البيانات المعقدة لرؤى واضحة ومباشرة تدعم قرارات الإدارة العليا.',
                'color_from' => 'amber-500',
                'color_to' => 'orange-500',
                'badge_icon' => 'fas fa-fire',
                'badge_color' => 'red-500',
                'is_featured' => true,
                'is_active' => true,
                'order' => 4,
                'features' => [
                    'تحديثات تلقائية للبيانات',
                    'تفاعلية متقدمة جداً',
                    'وصول من أي جهاز',
                    'ربط بمصادر بيانات متعددة',
                    'مشاركة سهلة مع الفريق',
                ],
            ],
            [
                'title' => 'تصميم مواقع وبرامج مخصصة لاحتياجاتك',
                'slug' => 'custom-software-web-solutions',
                'icon' => 'fas fa-laptop-code',
                'duration' => 'حسب الحجم',
                'price_starting' => null,
                'price_label' => 'حسب الحجم',
                'cta_text' => 'احصل على عرض سعر',
                'cta_link' => '/request-a-design',
                'short_description' => 'تصميم المواقع والبرامج توفر حلول رقمية مخصصة لاحتياجاتك، من تصميم واجهات جذابة وسهلة الاستخدام، إلى برمجة أنظمة قوية ومرنة تدعم أعمالك اليومية وتُسهّل إدارة العمليات وتحليل البيانات.',
                'description' => 'تصميم المواقع والبرامج توفر حلول رقمية مخصصة لاحتياجاتك، من تصميم واجهات جذابة وسهلة الاستخدام، إلى برمجة أنظمة قوية ومرنة تدعم أعمالك اليومية وتُسهّل إدارة العمليات وتحليل البيانات.',
                'color_from' => 'blue-600',
                'color_to' => 'indigo-600',
                'badge_icon' => 'fas fa-code',
                'badge_color' => 'blue-400',
                'is_featured' => true,
                'is_active' => true,
                'order' => 5,
                'features' => [
                    'واجهات جذابة وسهلة الاستخدام',
                    'حلول برمجية مرنة تلبي احتياجات أعمالك',
                    'الربط مع الأنظمة والأدوات الأخرى بسهولة',
                    'ضمان تجربة سلسة للمستخدم النهائي',
                    'تمكينك من إدارة العمليات بكفاءة',
                ],
            ],
            [
                'title' => 'عروض تقديمية وتقارير PowerPoint احترافية',
                'slug' => 'powerpoint-presentations-reports',
                'icon' => 'fas fa-file-powerpoint',
                'duration' => 'حسب الحجم',
                'price_starting' => null,
                'price_label' => 'حسب الحجم',
                'cta_text' => 'احصل على عرض سعر',
                'cta_link' => '/request-a-design',
                'short_description' => 'نقوم بتصميم عروض PowerPoint مخصصة تعكس هوية علامتك التجارية وتوصل رسالتك بوضوح، مع دمج الرسوم البيانية والبيانات بشكل فعال.',
                'description' => 'نقوم بتصميم عروض PowerPoint مخصصة تعكس هوية علامتك التجارية وتوصل رسالتك بوضوح لمجالس الإدارة والمستثمرين، مع دمج الرسوم البيانية والبيانات بشكل فعال وجذاب.',
                'color_from' => 'rose-600',
                'color_to' => 'orange-500',
                'badge_icon' => 'fas fa-file-powerpoint',
                'badge_color' => 'rose-400',
                'is_featured' => true,
                'is_active' => true,
                'order' => 6,
                'features' => [
                    'تطبيق مباشر على بيانات حقيقية',
                    'تصميم داشبوردات تفاعلية وسهلة الاستخدام',
                    'استيراد، تنظيف، وتحليل البيانات بكفاءة',
                ],
            ],
        ];

        foreach ($liveServices as $data) {
            $features = $data['features'];
            unset($data['features']);

            $service = Service::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );

            // Sync features
            ServiceFeature::where('service_id', $service->id)->delete();
            foreach ($features as $idx => $featTitle) {
                ServiceFeature::create([
                    'service_id' => $service->id,
                    'feature_text' => $featTitle,
                    'order' => $idx + 1,
                ]);
            }
        }
    }
}
