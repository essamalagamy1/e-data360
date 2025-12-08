<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            // Why Choose Us Features (Home Page)
            [
                'section' => 'why_choose_us',
                'icon' => 'fas fa-bolt',
                'title' => 'سرعة فائقة',
                'description' => 'نلتزم بتسليم مشاريعك في الوقت المحدد بدقة 100% دون أي تأخير أو تنازل عن الجودة',
                'color_from' => 'cyan-500',
                'color_to' => 'blue-600',
                'badge_text' => 'تسليم في الموعد',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'section' => 'why_choose_us',
                'icon' => 'fas fa-bullseye',
                'title' => 'دقة مطلقة',
                'description' => 'نضمن دقة البيانات والتحليلات بنسبة 100% مع مراجعة شاملة ومتعددة المراحل من فريق الخبراء',
                'color_from' => 'purple-500',
                'color_to' => 'pink-600',
                'badge_text' => 'دقة 100%',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'section' => 'why_choose_us',
                'icon' => 'fas fa-paint-brush',
                'title' => 'تصاميم مبتكرة',
                'description' => 'لوحات تحكم جذابة وعصرية وسهلة الاستخدام مع تصورات بيانية إبداعية تجعل البيانات تنطق',
                'color_from' => 'green-500',
                'color_to' => 'emerald-600',
                'badge_text' => 'تصاميم احترافية',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'section' => 'why_choose_us',
                'icon' => 'fas fa-map-marked-alt',
                'title' => 'خبرة سعودية',
                'description' => 'فهم عميق للسوق السعودي ومتطلبات الأعمال المحلية مع التزام تام بالمعايير والأنظمة',
                'color_from' => 'orange-500',
                'color_to' => 'red-600',
                'badge_text' => 'صنع في السعودية',
                'order' => 4,
                'is_active' => true,
            ],
            // Core Values (About Page)
            [
                'section' => 'core_values',
                'icon' => 'fas fa-star',
                'title' => 'الاحترافية',
                'description' => 'نلتزم بأعلى معايير الجودة والاحترافية في كل مشروع نعمل عليه، مهما كان حجمه.',
                'color_from' => 'blue-500',
                'color_to' => 'cyan-500',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'section' => 'core_values',
                'icon' => 'fas fa-lightbulb',
                'title' => 'الابتكار',
                'description' => 'نسعى دائماً لاستخدام أحدث التقنيات والأساليب لتقديم حلول مبتكرة ومتطورة.',
                'color_from' => 'purple-500',
                'color_to' => 'pink-500',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'section' => 'core_values',
                'icon' => 'fas fa-shield-alt',
                'title' => 'الموثوقية',
                'description' => 'نبني علاقات طويلة الأمد مع عملائنا من خلال الشفافية والالتزام بوعودنا.',
                'color_from' => 'green-500',
                'color_to' => 'emerald-500',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'section' => 'core_values',
                'icon' => 'fas fa-clock',
                'title' => 'الالتزام بالمواعيد',
                'description' => 'نحترم وقتك ونلتزم بتسليم المشاريع في المواعيد المحددة دون تأخير.',
                'color_from' => 'orange-500',
                'color_to' => 'red-500',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'section' => 'core_values',
                'icon' => 'fas fa-headset',
                'title' => 'الدعم المستمر',
                'description' => 'نقدم دعماً فنياً متواصلاً حتى بعد تسليم المشروع لضمان نجاحك.',
                'color_from' => 'cyan-500',
                'color_to' => 'teal-500',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'section' => 'core_values',
                'icon' => 'fas fa-users',
                'title' => 'التركيز على العميل',
                'description' => 'نضع احتياجات عملائنا في المقام الأول ونعمل على تحقيق أهدافهم.',
                'color_from' => 'indigo-500',
                'color_to' => 'purple-500',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
