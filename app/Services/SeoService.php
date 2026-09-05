<?php

namespace App\Services;

use App\Models\CompanySetting;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\Article;
use App\Models\SeoSetting;
use Illuminate\Support\Facades\URL;

class SeoService
{
    /**
     * Get dynamic SEO meta data for any page
     */
    public function getPageSeo(string $page = 'home', array $overrides = []): array
    {
        $company = CompanySetting::first();
        $appName = $company?->company_name ?: config('app.name', 'E-DATA360');
        $primaryCity = $company?->city_primary ?: 'الرياض';
        $secondaryCity = $company?->city_secondary ?: 'جدة';

        // Extract active service titles dynamically
        $activeServices = class_exists(Service::class)
            ? Service::where('is_active', true)->orderBy('order')->pluck('title')->toArray()
            : [];
        $servicesText = !empty($activeServices) ? implode('، ', $activeServices) : 'لوحات تحكم Excel، تقارير Power BI، تحليل أداء الأعمال';

        $pageTitles = [
            'home' => "{$appName} | تحليل البيانات ولوحات تحكم Excel و Power BI في السعودية",
            'services' => "خدماتنا الذكية | لوحات تحكم تفاعلية وحلول بيانات متكاملة - {$appName}",
            'portfolio' => "معرض النماذج والمشاريع | نماذج لوحات تحكم تفاعلية - {$appName}",
            'about' => "من نحن | شريكك الاستراتيجي لتحويل البيانات إلى قرارات - {$appName}",
            'contact' => "تواصل معنا | احصل على استشارة ولوحة تحكم مخصصة - {$appName}",
            'testimonials' => "آراء وتجارب عملائنا في المملكة العربية السعودية - {$appName}",
            'careers' => "انضم إلى فريق خبراء البيانات والتحليلات - {$appName}",
            'articles' => "المدونة المعرفية | مقالات تحليل البيانات وذكاء الأعمال - {$appName}",
            'request-design.create' => "طلب تصميم لوحة تحكم مخصصة | استلم مشروعك في 3-5 أيام - {$appName}",
            'privacy' => "سياسة الخصوصية وحماية البيانات - {$appName}",
            'terms' => "الشروط والأحكام والضمان - {$appName}",
        ];

        $pageDescriptions = [
            'home' => "شركة {$appName} الرائدة في المملكة العربية السعودية ({$primaryCity} و {$secondaryCity}) لتحويل بيانات منشأتك إلى لوحات تحكم تفاعلية (Excel & Power BI) وقرارات دقيقة تدعم نمو أعمالك ومستهدفات رؤية 2030.",
            'services' => "نقدم في {$appName} حلولاً وخدمات احترافية متكاملة تشمل ({$servicesText}) للشركات والمؤسسات في {$primaryCity} وكافة مناطق المملكة بتسليم سريع وضمان كامل.",
            'portfolio' => "استعرض أحدث نماذج لوحات التحكم التفاعلية وتقارير مؤشرات الأداء (KPIs) المصممة بواسطة خبراء {$appName} للشركات في السوق السعودي.",
            'about' => "تعرف على شركة {$appName} ورؤيتنا في تمكين قطاع الأعمال السعودي بأحدث أدوات ذكاء الأعمال والتحليلات المتقدمة ودعم اتخاذ القرار.",
            'contact' => "تواصل مباشرة مع مستشاري {$appName} في {$primaryCity} أو عبر الواتساب للحصول على عرض سعر فوري وتصميم لوحة تحكم تناسب متطلباتك.",
            'testimonials' => "اطلع على تقييمات وتجارب شركاء النجاح مع {$appName} في تصميم الداشبوردات وإدارة وتحليل أداء المنشآت بالسعودية.",
            'articles' => "دليلك الشامل ومقالات متخصصة في هندسة لوحات التحكم، معادلات Excel المتقدمة، نماذج DAX في Power BI، وحوكمة البيانات بالسعودية.",
        ];

        $defaultTitle = $pageTitles[$page] ?? "{$appName} | خدمات وحلول تحليل البيانات في {$primaryCity}";
        $defaultDesc = $pageDescriptions[$page] ?? ($company?->about_short ?: "شريكك الموثوق في المملكة العربية السعودية لتحويل البيانات إلى لوحات تحكم تفاعلية وقرارات ذكية.");

        $keywords = [
            $appName,
            "إي داتا 360",
            "تحليل البيانات السعودية",
            "لوحات تحكم Excel {$primaryCity}",
            "تقارير Power BI {$secondaryCity}",
            "مؤشرات الأداء الرئيسية KPI",
            "ذكاء الأعمال BI السعودية",
            "داشبورد تفاعلي",
            "تحليل أداء الشركات السعودية",
            "رؤية السعودية 2030 بيانات",
        ];
        if (!empty($activeServices)) {
            $keywords = array_merge($keywords, $activeServices);
        }

        // Check if DB custom SEO settings exist for this page
        $seoSetting = class_exists(SeoSetting::class) ? SeoSetting::forPage($page) : null;

        $defaults = [
            'meta_title' => $seoSetting?->meta_title ?: $defaultTitle,
            'meta_description' => $seoSetting?->meta_description ?: $defaultDesc,
            'meta_keywords' => $seoSetting?->meta_keywords ?: implode(', ', $keywords),
            'og_title' => $seoSetting?->og_title ?: $defaultTitle,
            'og_description' => $seoSetting?->og_description ?: $defaultDesc,
            'og_type' => $seoSetting?->og_type ?: 'website',
            'og_image' => $seoSetting?->og_image 
                ? asset('storage/' . $seoSetting->og_image) 
                : ($company?->logo_path ? asset('storage/' . $company->logo_path) : asset('images/og-default.jpg')),
            'twitter_card' => $seoSetting?->twitter_card ?: 'summary_large_image',
            'twitter_site' => $seoSetting?->twitter_site ?: '@edata360',
            'twitter_creator' => $seoSetting?->twitter_creator ?: '@edata360',
            'canonical_url' => $seoSetting?->canonical_url ?: URL::current(),
            'robots' => $seoSetting?->robots ?: 'index,follow,max-image-preview:large',
            'structured_data' => $seoSetting?->structured_data,
            'ga4_measurement_id' => $seoSetting?->ga4_measurement_id ?: 'G-TN8PE7Q0VP',
            'gsc_verification_code' => $seoSetting?->gsc_verification_code,
            'gtm_container_id' => $seoSetting?->gtm_container_id,
        ];

        return array_merge($defaults, $overrides);
    }

    /**
     * Generate Comprehensive Schema.org JSON-LD Graph for the Saudi market
     */
    public function getDynamicSchema(string $page = 'home', array $extraData = []): array
    {
        $company = CompanySetting::first();
        $appName = $company?->company_name ?: config('app.name', 'E-DATA360');
        $siteUrl = rtrim(config('app.url', url('/')), '/');
        $businessType = $company?->business_type ?: 'ProfessionalService';

        // 1. Dynamic Services OfferCatalog
        $servicesCatalog = [];
        $faqItems = [];

        if (class_exists(Service::class)) {
            $services = Service::where('is_active', true)->with('features')->orderBy('order')->get();
            foreach ($services as $service) {
                $serviceUrl = route('services') . '#' . ($service->slug ?: $service->id);
                $servicesCatalog[] = [
                    '@type' => 'Offer',
                    'priceCurrency' => 'SAR',
                    'price' => $service->price_starting ? preg_replace('/[^0-9.]/', '', $service->price_starting) : '320',
                    'priceValidUntil' => now()->addYear()->format('Y-m-d'),
                    'availability' => 'https://schema.org/InStock',
                    'url' => $serviceUrl,
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => $service->title,
                        'description' => strip_tags($service->short_description ?: $service->description ?: ''),
                        'provider' => [
                            '@type' => $businessType,
                            'name' => $appName,
                        ],
                        'serviceType' => 'Data Analytics & Business Intelligence',
                        'areaServed' => [
                            ['@type' => 'Country', 'name' => 'Saudi Arabia'],
                            ['@type' => 'City', 'name' => 'الرياض'],
                            ['@type' => 'City', 'name' => 'جدة'],
                            ['@type' => 'City', 'name' => 'الدمام'],
                            ['@type' => 'City', 'name' => 'الخبر'],
                        ],
                    ],
                ];

                // Build rich Q&A from service features for rich snippets
                if ($service->features && $service->features->count() > 0) {
                    $featuresList = $service->features->pluck('feature_text')->implode('، ');
                    $faqItems[] = [
                        '@type' => 'Question',
                        'name' => "ما هي مميزات خدمة {$service->title} من {$appName}؟",
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => "تشمل خدمة {$service->title}: {$featuresList}. وتتيح لك متابعة الأداء بدقة وسرعة اتخاذ القرارات.",
                        ],
                    ];
                }
            }
        }

        // Add standard Saudi market FAQs for rich results
        $faqItems[] = [
            '@type' => 'Question',
            'name' => "كم يستغرق تصميم وتسليم لوحة تحكم Excel أو Power BI في {$appName}؟",
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => "يتم تسليم لوحات التحكم الاحترافية في غضون 3 إلى 5 أيام عمل، مع تقديم جلسة تدريب وضمان كامل للدعم والتعديلات.",
            ],
        ];
        $faqItems[] = [
            '@type' => 'Question',
            'name' => "هل تدعم خدمات E-DATA360 الشركات في كافة مناطق المملكة العربية السعودية؟",
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => "نعم، نقدم خدمات تحليل البيانات وتصميم لوحات التحكم للشركات والمؤسسات والجهات الحكومية في الرياض، جدة، الدمام، وكافة مناطق المملكة العربية السعودية.",
            ],
        ];

        // 2. Aggregate Rating from Testimonials
        $ratingData = null;
        if (class_exists(Testimonial::class)) {
            $count = Testimonial::where('is_active', true)->count();
            $avg = Testimonial::where('is_active', true)->avg('rating') ?: 5.0;
            if ($count > 0) {
                $ratingData = [
                    '@type' => 'AggregateRating',
                    'ratingValue' => (string) round($avg, 1),
                    'bestRating' => '5',
                    'worstRating' => '1',
                    'ratingCount' => (string) $count,
                    'reviewCount' => (string) $count,
                ];
            }
        }

        // 3. Dual Branches / Departments (الرياض HQ + جدة)
        $departments = [];
        if ($company?->city_primary || $company?->location_text) {
            $departments[] = array_filter([
                '@type' => [$businessType, 'LocalBusiness'],
                '@id' => "{$siteUrl}/#branch-riyadh",
                'name' => "{$appName} - المقر الرئيسي بالرياض",
                'telephone' => $company?->phone_primary ?: '+966553970641',
                'email' => $company?->main_email ?: 'work@e-data360.com',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => $company?->location_text ?: 'طريق الملك فهد',
                    'addressLocality' => $company?->city_primary ?: 'الرياض',
                    'addressRegion' => 'منطقة الرياض',
                    'postalCode' => '12214',
                    'addressCountry' => 'SA',
                ],
                'geo' => ($company?->latitude_primary && $company?->longitude_primary) ? [
                    '@type' => 'GeoCoordinates',
                    'latitude' => (string) $company->latitude_primary,
                    'longitude' => (string) $company->longitude_primary,
                ] : [
                    '@type' => 'GeoCoordinates',
                    'latitude' => '24.7136',
                    'longitude' => '46.6753',
                ],
                'openingHoursSpecification' => [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'],
                    'opens' => '09:00',
                    'closes' => '18:00',
                ],
            ]);
        }

        if ($company?->location_secondary || $company?->city_secondary) {
            $departments[] = array_filter([
                '@type' => [$businessType, 'LocalBusiness'],
                '@id' => "{$siteUrl}/#branch-jeddah",
                'name' => "{$appName} - فرع منطقة مكة المكرمة وجدة",
                'telephone' => $company?->phone_secondary ?: $company?->phone_primary,
                'email' => $company?->main_email ?: 'work@e-data360.com',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => $company?->location_secondary ?: 'طريق الملك عبدالعزيز',
                    'addressLocality' => $company?->city_secondary ?: 'جدة',
                    'addressRegion' => 'منطقة مكة المكرمة',
                    'addressCountry' => 'SA',
                ],
                'geo' => ($company?->latitude_secondary && $company?->longitude_secondary) ? [
                    '@type' => 'GeoCoordinates',
                    'latitude' => (string) $company->latitude_secondary,
                    'longitude' => (string) $company->longitude_secondary,
                ] : [
                    '@type' => 'GeoCoordinates',
                    'latitude' => '21.4858',
                    'longitude' => '39.1925',
                ],
            ]);
        }

        // 4. Main Organization / ProfessionalService Schema
        $orgSchema = array_filter([
            '@type' => ['Organization', $businessType],
            '@id' => "{$siteUrl}/#organization",
            'name' => $appName,
            'alternateName' => ['إي داتا 360', 'E-Data360 Analytics', 'E-Data 360'],
            'url' => $siteUrl,
            'logo' => $company?->logo_path ? asset('storage/' . $company->logo_path) : "{$siteUrl}/images/logo.png",
            'description' => $company?->about_short ?: "شريكك الموثوق لتحليل البيانات وهندسة لوحات التحكم التفاعلية للمنشآت في المملكة العربية السعودية.",
            'telephone' => $company?->phone_primary ?: '+966553970641',
            'email' => $company?->main_email ?: 'work@e-data360.com',
            'priceRange' => 'SAR 320 - SAR 10000',
            'currenciesAccepted' => 'SAR',
            'paymentAccepted' => 'Bank Transfer, Mada, Apple Pay, Credit Card',
            'aggregateRating' => $ratingData,
            'areaServed' => [
                ['@type' => 'Country', 'name' => 'Saudi Arabia'],
                ['@type' => 'City', 'name' => 'الرياض'],
                ['@type' => 'City', 'name' => 'جدة'],
                ['@type' => 'City', 'name' => 'الدمام'],
                ['@type' => 'City', 'name' => 'الخبر'],
                ['@type' => 'City', 'name' => 'مكة المكرمة'],
                ['@type' => 'City', 'name' => 'المدينة المنورة'],
            ],
            'hasOfferCatalog' => !empty($servicesCatalog) ? [
                '@type' => 'OfferCatalog',
                'name' => "دليل خدمات لوحات التحكم وتحليل البيانات - {$appName}",
                'itemListElement' => $servicesCatalog,
            ] : null,
            'department' => !empty($departments) ? $departments : null,
        ]);

        // 5. WebSite Schema
        $webSiteSchema = [
            '@type' => 'WebSite',
            '@id' => "{$siteUrl}/#website",
            'url' => $siteUrl,
            'name' => $appName,
            'description' => "منصة وحلول تحليل البيانات ولوحات التحكم التفاعلية للشركات السعودية",
            'publisher' => ['@id' => "{$siteUrl}/#organization"],
            'inLanguage' => 'ar-SA',
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => "{$siteUrl}/services?search={search_term_string}",
                'query-input' => 'required name=search_term_string',
            ],
        ];

        // 6. BreadcrumbList Schema
        $breadcrumbSchema = $this->getBreadcrumbSchema([
            ['name' => 'الرئيسية', 'url' => $siteUrl],
            ['name' => ($page === 'home' ? 'الرئيسية' : ($extraData['breadcrumb_title'] ?? $page)), 'url' => URL::current()],
        ]);

        // Build entire @graph
        $graph = [
            $orgSchema,
            $webSiteSchema,
            $breadcrumbSchema,
        ];

        // Add FAQPage Schema if we have FAQ items
        if (!empty($faqItems)) {
            $graph[] = [
                '@type' => 'FAQPage',
                '@id' => "{$siteUrl}/#faq",
                'mainEntity' => array_slice($faqItems, 0, 8),
            ];
        }

        return [
            '@context' => 'https://schema.org',
            '@graph' => $graph,
        ];
    }

    /**
     * Generate Organization Schema (Backwards compatibility helper)
     */
    public function getOrganizationSchema(): array
    {
        $schema = $this->getDynamicSchema();
        return $schema['@graph'][0] ?? [];
    }

    /**
     * Generate WebSite Schema (Backwards compatibility helper)
     */
    public function getWebSiteSchema(): array
    {
        $schema = $this->getDynamicSchema();
        return $schema['@graph'][1] ?? [];
    }

    /**
     * Generate Breadcrumb Schema
     */
    public function getBreadcrumbSchema(array $breadcrumbs = []): array
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');
        
        if (empty($breadcrumbs)) {
            $breadcrumbs = [
                ['name' => 'الرئيسية', 'url' => $siteUrl],
                ['name' => 'الصفحة الحالية', 'url' => URL::current()],
            ];
        }

        $items = [];
        foreach ($breadcrumbs as $index => $breadcrumb) {
            $items[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $breadcrumb['name'],
                'item' => $breadcrumb['url'],
            ];
        }

        return [
            '@type' => 'BreadcrumbList',
            '@id' => URL::current() . '#breadcrumb',
            'itemListElement' => $items,
        ];
    }
}
