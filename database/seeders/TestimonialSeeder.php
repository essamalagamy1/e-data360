<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'محمد العتيبي',
                'client_position' => 'مدير عام',
                'client_company' => 'شركة تجارية رائدة',
                'rating' => 5,
                'testimonial' => 'خدمة ممتازة واحترافية لا مثيل لها. لوحة التحكم التي صمموها لنا ساعدتنا في اتخاذ قرارات أفضل وزيادة المبيعات بنسبة 35% في 3 أشهر فقط!',
                'badge_text' => 'عميل VIP',
                'badge_color_from' => 'blue-600',
                'badge_color_to' => 'cyan-500',
                'is_verified' => true,
                'is_featured' => true,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'client_name' => 'سارة القحطاني',
                'client_position' => 'مديرة الموارد البشرية',
                'rating' => 5,
                'testimonial' => 'فريق محترف جداً وسريع في التنفيذ. التقارير أصبحت أسهل وأوضح بكثير. وفرنا ساعات عمل كثيرة! أنصح بهم بشدة لكل من يبحث عن الاحترافية.',
                'badge_text' => 'شريك نجاح',
                'badge_color_from' => 'purple-600',
                'badge_color_to' => 'pink-500',
                'is_verified' => true,
                'is_featured' => true,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => 'خالد الدوسري',
                'client_position' => 'مدير مالي',
                'client_company' => 'مؤسسة استثمارية',
                'rating' => 5,
                'testimonial' => 'تجربة رائعة من البداية للنهاية. الفريق متعاون جداً وفاهم احتياجاتنا بشكل ممتاز. النتائج فاقت توقعاتنا!',
                'badge_text' => 'عميل مميز',
                'badge_color_from' => 'green-600',
                'badge_color_to' => 'emerald-500',
                'is_verified' => true,
                'is_featured' => true,
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
