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
                'icon' => 'fas fa-code',
                'title' => 'كود نظيف',
                'description' => 'نكتب كود عالي الجودة، قابل للقراءة والصيانة، مع توثيق شامل يسهل على فريقك المستقبلي',
                'color_from' => 'cyan-500',
                'color_to' => 'blue-600',
                'badge_text' => 'معايير عالمية',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'section' => 'why_choose_us',
                'icon' => 'fas fa-rocket',
                'title' => 'تقنيات حديثة',
                'description' => 'نستخدم أحدث التقنيات وأطر العمل مثل React، Next.js، Laravel، Flutter لضمان أداء استثنائي',
                'color_from' => 'purple-500',
                'color_to' => 'pink-600',
                'badge_text' => 'تقنيات 2025',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'section' => 'why_choose_us',
                'icon' => 'fas fa-headset',
                'title' => 'دعم مستمر',
                'description' => 'نقدم دعماً فنياً متواصلاً بعد التسليم مع صيانة دورية وتحديثات أمنية لضمان استمرارية مشروعك',
                'color_from' => 'green-500',
                'color_to' => 'emerald-600',
                'badge_text' => 'دعم 24/7',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'section' => 'why_choose_us',
                'icon' => 'fas fa-shield-alt',
                'title' => 'أمان عالي',
                'description' => 'نطبق أعلى معايير الأمان وأفضل الممارسات لحماية بياناتك وبيانات عملائك من الاختراق',
                'color_from' => 'orange-500',
                'color_to' => 'red-600',
                'badge_text' => 'حماية كاملة',
                'order' => 4,
                'is_active' => true,
            ],
            // Core Values (About Page)
            [
                'section' => 'core_values',
                'icon' => 'fas fa-star',
                'title' => 'الاحترافية',
                'description' => 'نلتزم بأعلى معايير الجودة والاحترافية في كل سطر كود نكتبه وكل تصميم ننفذه.',
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
                'icon' => 'fas fa-handshake',
                'title' => 'الشراكة',
                'description' => 'نعمل كشركاء حقيقيين مع عملائنا، نشاركهم النجاح ونحرص على تحقيق أهدافهم.',
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
                'icon' => 'fas fa-sync-alt',
                'title' => 'التطوير المستمر',
                'description' => 'نواكب أحدث التطورات التقنية ونطور مهاراتنا باستمرار لتقديم أفضل الحلول.',
                'color_from' => 'cyan-500',
                'color_to' => 'teal-500',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'section' => 'core_values',
                'icon' => 'fas fa-users',
                'title' => 'التركيز على العميل',
                'description' => 'نضع احتياجات عملائنا في المقام الأول ونعمل على تحقيق رؤيتهم.',
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
