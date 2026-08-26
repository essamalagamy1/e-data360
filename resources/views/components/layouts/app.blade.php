<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="scroll-smooth">
<head>
    <!-- Google tag (gtag.js) -->
    @php
        $analyticsSettings = \App\Models\AnalyticsSetting::first();
        $companySettings = $companySettings ?? \App\Models\CompanySetting::first();
    @endphp
    @if($analyticsSettings && $analyticsSettings->ga_enabled && $analyticsSettings->ga_measurement_id)
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $analyticsSettings->ga_measurement_id }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ $analyticsSettings->ga_measurement_id }}');
    </script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#071520">

    <!-- SEO Meta Tags -->
    <title>{{ $seo->meta_title ?? 'E-DATA360 | تحليل البيانات ولوحات تحكم Excel و Power BI في السعودية' }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? 'شركة E-DATA360 الرائدة في السعودية لتحليل البيانات وتصميم لوحات تحكم تفاعلية متقدمة عبر Excel و Power BI للمنشآت والشركات بالرياض وكافة مناطق المملكة.' }}">
    <meta name="keywords" content="تحليل البيانات السعودية, لوحات تحكم Excel الرياض, لوحات Power BI جدة, مؤشرات أداء المنشآت KPI, ذكاء الأعمال السعودية, تقارير هيئة الزكاة والضريبة, داشبورد تفاعلي, E-DATA360, إي داتا 360">
    <meta name="author" content="E-DATA360">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="ar-SA" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
    
    <!-- Saudi Arabia GEO Location Meta Tags -->
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="الرياض، المملكة العربية السعودية">
    <meta name="geo.position" content="24.7136;46.6753">
    <meta name="ICBM" content="24.7136, 46.6753">
    <meta name="language" content="Arabic">
    <meta name="country" content="Saudi Arabia">
    
    <!-- Open Graph & Social Meta Tags -->
    <meta property="og:site_name" content="E-DATA360">
    <meta property="og:title" content="{{ $seo->meta_title ?? 'E-DATA360 | حلول تحليل البيانات ولوحات التحكم في السعودية' }}">
    <meta property="og:description" content="{{ $seo->meta_description ?? 'نحول بيانات منشأتك إلى لوحات تحكم وقرارات استراتيجية تفاعلية بأسعار تنافسية وتسليم سريع في 3-5 أيام.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="ar_SA">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo->meta_title ?? 'E-DATA360 | تحليل البيانات ولوحات التحكم' }}">
    <meta name="twitter:description" content="{{ $seo->meta_description ?? 'لوحات تحكم Excel و Power BI احترافية للشركات السعودية.' }}">
    
    <!-- Schema.org JSON-LD Structured Data for Saudi Local Business & Organization -->
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            'name' => 'E-DATA360',
            'alternateName' => 'إي داتا 360 لتحليل البيانات',
            'description' => 'شركة سعودية متخصصة في تحليل البيانات وهندسة لوحات التحكم التفاعلية عبر Excel و Power BI وذكاء الأعمال للمنشآت والشركات.',
            'url' => url('/'),
            'telephone' => $companySettings->phone_primary ?? '+966501234567',
            'email' => $companySettings->main_email ?? 'info@e-data360.com',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'طريق الملك فهد',
                'addressLocality' => 'الرياض',
                'addressRegion' => 'منطقة الرياض',
                'postalCode' => '12214',
                'addressCountry' => 'SA',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 24.7136,
                'longitude' => 46.6753,
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'],
                'opens' => '09:00',
                'closes' => '18:00',
            ],
            'priceRange' => 'SAR 320 - SAR 10000',
            'currenciesAccepted' => 'SAR',
            'paymentAccepted' => 'Bank Transfer, Mada, Apple Pay, Credit Card',
            'areaServed' => [
                ['@type' => 'Country', 'name' => 'Saudi Arabia'],
                ['@type' => 'City', 'name' => 'الرياض'],
                ['@type' => 'City', 'name' => 'جدة'],
                ['@type' => 'City', 'name' => 'الدمام'],
                ['@type' => 'City', 'name' => 'الخبر'],
                ['@type' => 'City', 'name' => 'مكة المكرمة'],
                ['@type' => 'City', 'name' => 'المدينة المنورة'],
            ],
        ];
    @endphp
    <script type="application/ld+json">
    {!! json_encode($schemaData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    
    <!-- Favicon -->
    @if(isset($companySettings) && $companySettings->favicon_path)
        <link rel="icon" type="image/x-icon" href="{{ Storage::url($companySettings->favicon_path) }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url($companySettings->favicon_path) }}">
        <link rel="apple-touch-icon" href="{{ Storage::url($companySettings->favicon_path) }}">
    @else
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @endif
    
    <!-- Google Fonts: Cairo, Tajawal, Plus Jakarta Sans, Inter, Fira Code -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Fira+Code:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css" />

    <!-- Compiled Assets via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        window.ANALYTICS_SITE_KEY = 'UoA5RqUCM3AnoV7icu8b8MP5zYan1wOa';
        window.ANALYTICS_API_URL = 'https://analytics.nafezly.com/api/analytics/track';
    </script>
    <script async src="https://analytics.nafezly.com/js/analytics.js"></script>
</head>
<body class="font-sans antialiased text-slate-900 bg-slate-50 selection:bg-cyan-500/20 selection:text-cyan-900 flex flex-col min-h-screen" dir="rtl">
    
    <!-- Top Navigation Bar -->
    <x-navbar :companySettings="$companySettings" />

    <!-- Main Page Content -->
    <main class="flex-grow pt-20">
        {{ $slot }}
    </main>

    <!-- Footer Component -->
    <x-footer :companySettings="$companySettings" />

    <!-- Floating WhatsApp Quick Connect Button -->
    @php
        $rawWhatsapp = $companySettings->whatsapp_number ?? '+966501234567';
        $cleanWhatsapp = preg_replace('/[^0-9]/', '', $rawWhatsapp);
    @endphp
    <aside class="fixed bottom-6 left-6 z-40 flex flex-col items-center gap-3" aria-label="أدوات المساعدة السريعة">
        <!-- WhatsApp Floating CTA -->
        <a href="https://wa.me/{{ $cleanWhatsapp }}?text={{ urlencode('مرحباً فريق E-DATA 360، أود الاستفسار عن حلول لوحات التحكم وتحليل البيانات.') }}"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="تواصل مباشر عبر واتساب"
           class="group relative flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-tr from-emerald-600 to-green-500 text-white shadow-xl shadow-emerald-600/40 hover:shadow-2xl hover:shadow-emerald-500/60 hover:scale-110 active:scale-95 transition-all duration-300">
            <!-- Pulsing Halo Beacon -->
            <span class="absolute inset-0 rounded-full bg-emerald-400 opacity-75 animate-ping -z-10"></span>
            
            <i class="fab fa-whatsapp text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
            
            <!-- Tooltip Hover Badge -->
            <span class="absolute right-full mr-3 px-3 py-1.5 rounded-xl bg-slate-900/90 text-white text-xs font-semibold whitespace-nowrap shadow-lg border border-slate-700/60 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200">
                تحدث مع خبير البيانات الآن 💬
            </span>
        </a>

        <!-- Back to Top Button -->
        <button id="back-to-top"
                type="button"
                aria-label="العودة لأعلى الصفحة"
                class="opacity-0 invisible translate-y-6 w-11 h-11 rounded-full bg-slate-900/80 hover:bg-cyan-600 text-white shadow-lg border border-slate-700/60 backdrop-blur-md flex items-center justify-center transition-all duration-300 hover:scale-105 active:scale-95">
            <i class="fas fa-chevron-up text-sm"></i>
        </button>
    </aside>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>

    <!-- Swiper and Fancybox Carousel Initializer -->
    <script>
        window.addEventListener('load', () => {
            // Testimonials Swiper
            if (document.querySelector('.testimonials-swiper')) {
                new Swiper('.testimonials-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 24,
                    loop: true,
                    autoplay: { delay: 5000, disableOnInteraction: false, pauseOnMouseEnter: true },
                    pagination: { el: '.swiper-pagination', clickable: true },
                    navigation: {
                        nextEl: '.testimonials-swiper-button-next',
                        prevEl: '.testimonials-swiper-button-prev',
                    },
                    breakpoints: {
                        640: { slidesPerView: 1, spaceBetween: 20 },
                        768: { slidesPerView: 2, spaceBetween: 24 },
                        1024: { slidesPerView: 3, spaceBetween: 28 },
                    },
                    rtl: true,
                    observer: true,
                    observeParents: true,
                });
            }

            // Projects Swiper
            if (document.querySelector('.projects-swiper')) {
                new Swiper('.projects-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 24,
                    loop: true,
                    autoplay: { delay: 4500, disableOnInteraction: false, pauseOnMouseEnter: true },
                    pagination: { el: '.projects-swiper .swiper-pagination', clickable: true },
                    navigation: {
                        nextEl: '.projects-swiper-button-next',
                        prevEl: '.projects-swiper-button-prev',
                    },
                    breakpoints: {
                        640: { slidesPerView: 1, spaceBetween: 20 },
                        768: { slidesPerView: 2, spaceBetween: 24 },
                        1024: { slidesPerView: 3, spaceBetween: 28 },
                    },
                    rtl: true,
                    observer: true,
                    observeParents: true,
                });
            }

            // Fancybox Bindings
            if (typeof Fancybox !== 'undefined') {
                Fancybox.bind('[data-fancybox]', {
                    Toolbar: {
                        display: {
                            left: ['infobar'],
                            middle: [],
                            right: ['zoom', 'slideshow', 'fullscreen', 'download', 'close'],
                        },
                    },
                });
            }
        });
    </script>

    {{-- Google Analytics & Marketing Scripts --}}
    <script>
        @php
            $analyticsSettings = \App\Models\AnalyticsSetting::first();
        @endphp
        
        function loadFacebookPixel() {
            @if($analyticsSettings && $analyticsSettings->fb_pixel_enabled && $analyticsSettings->fb_pixel_id)
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ $analyticsSettings->fb_pixel_id }}');
            fbq('track', 'PageView');
            @endif
        }
        
        @if($analyticsSettings && $analyticsSettings->gtm_enabled && $analyticsSettings->gtm_container_id)
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ $analyticsSettings->gtm_container_id }}');
        @endif
    </script>
</body>
</html>
