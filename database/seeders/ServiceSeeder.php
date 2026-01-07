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
                'title' => 'تطوير الويب المتقدم',
                'short_description' => 'بناء مواقع وتطبيقات ويب تفاعلية باستخدام أحدث أطر العمل (React, Next.js, Laravel) لضمان السرعة والأمان.',
                'description' => 'نطور مواقع وتطبيقات ويب متطورة باستخدام أحدث التقنيات مثل React، Next.js، Vue.js، وLaravel. نركز على الأداء العالي، تجربة المستخدم الممتازة، والتوافق مع جميع الأجهزة. نضمن كود نظيف وقابل للصيانة والتوسع.',
                'icon' => 'fas fa-code',
            ],
            [
                'title' => 'تطبيقات الجوال',
                'short_description' => 'تطوير تطبيقات Native و Cross-platform تعمل بسلاسة على جميع الأجهزة وتوفر تجربة مستخدم فريدة.',
                'description' => 'نصمم ونطور تطبيقات جوال احترافية لأنظمة iOS و Android باستخدام تقنيات React Native و Flutter. نركز على الأداء السلس، واجهات المستخدم الجذابة، والتكامل مع الأنظمة الخلفية بشكل آمن وفعال.',
                'icon' => 'fas fa-mobile-alt',
            ],
            [
                'title' => 'تصميم UI/UX',
                'short_description' => 'نحول الأفكار المعقدة إلى واجهات بسيطة وجذابة تركز على رحلة المستخدم وتزيد من معدلات التحويل.',
                'description' => 'نقدم خدمات تصميم واجهات المستخدم وتجربة المستخدم بناءً على أفضل الممارسات. نجري أبحاث المستخدمين، نصمم الـ Wireframes والـ Prototypes، ونختبر التصاميم لضمان تجربة استثنائية تحقق أهداف عملك.',
                'icon' => 'fas fa-paint-brush',
            ],
            [
                'title' => 'الاستضافة والسيرفرات',
                'short_description' => 'حلول استضافة وإدارة خوادم سحابية (DevOps) لضمان استقرار وتوسع مشاريعك دون توقف.',
                'description' => 'نوفر خدمات DevOps متكاملة تشمل إعداد البنية التحتية السحابية على AWS، Google Cloud، وDigitalOcean. نقوم بتهيئة CI/CD، مراقبة الأداء، النسخ الاحتياطي الآلي، وضمان أعلى مستويات الأمان والتوافر.',
                'icon' => 'fas fa-server',
            ],
            [
                'title' => 'أنظمة إدارة المحتوى',
                'short_description' => 'تطوير أنظمة CMS مخصصة أو تخصيص WordPress و Laravel لإدارة محتواك بسهولة.',
                'description' => 'نطور أنظمة إدارة محتوى مخصصة تناسب احتياجاتك أو نخصص المنصات المشهورة مثل WordPress و Filament. نضمن سهولة الاستخدام، الأداء العالي، والتوافق مع SEO لزيادة ظهورك في محركات البحث.',
                'icon' => 'fas fa-newspaper',
            ],
            [
                'title' => 'حلول التجارة الإلكترونية',
                'short_description' => 'بناء متاجر إلكترونية متكاملة مع بوابات الدفع والشحن وإدارة المخزون.',
                'description' => 'نبني متاجر إلكترونية احترافية باستخدام Shopify، WooCommerce، أو حلول مخصصة. نوفر التكامل مع بوابات الدفع المحلية والعالمية، أنظمة الشحن، إدارة المخزون، وأدوات التسويق الآلي لزيادة مبيعاتك.',
                'icon' => 'fas fa-shopping-cart',
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
