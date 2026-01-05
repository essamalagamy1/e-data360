<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <!-- Google tag (gtag.js) -->
    @php
        $analyticsSettings = \App\Models\AnalyticsSetting::first();
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

    <!-- SEO Meta Tags -->
    <title>{{ $seo->meta_title ?? 'E-DATA 360 - تحليل البيانات الاحترافي | لوحات تحكم Excel و Power BI' }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? 'شركة E-DATA 360 متخصصة في تحليل البيانات وإنشاء لوحات التحكم الاحترافية باستخدام Excel و Power BI. أكثر من 150 عميل و 200 لوحة تحكم تم تسليمها.' }}">
    <meta name="keywords" content="تحليل البيانات, لوحات تحكم, Excel, Power BI, KPI, تقارير, السعودية, E-DATA 360">
    <meta name="author" content="E-DATA 360">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $seo->meta_title ?? 'E-DATA 360 - تحليل البيانات الاحترافي' }}">
    <meta property="og:description" content="{{ $seo->meta_description ?? 'شركة متخصصة في تحليل البيانات ولوحات التحكم الاحترافية' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Favicon -->
    @if(isset($companySettings) && $companySettings->favicon_path)
        <link rel="icon" type="image/x-icon" href="{{ Storage::url($companySettings->favicon_path) }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url($companySettings->favicon_path) }}">
        <link rel="apple-touch-icon" href="{{ Storage::url($companySettings->favicon_path) }}">
    @else
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @endif
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Scripts -->
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css" />

    <style>
        /* Additional inline styles for immediate rendering */
        body {
            font-family: 'Cairo', 'Inter', sans-serif;
        }
        
        /* Swiper RTL customization */
        .swiper-button-next, .swiper-button-prev {
            color: white !important;
            z-index: 50 !important;
        }
        
        .swiper-button-next:after, .swiper-button-prev:after {
            font-size: 18px !important;
            font-weight: 900 !important;
        }
        
        .swiper-pagination {
            z-index: 50 !important;
        }
        
        .swiper-pagination-bullet {
            background: #06b6d4 !important;
            opacity: 0.5;
        }
        
        .swiper-pagination-bullet-active {
            opacity: 1 !important;
            background: linear-gradient(to right, #2563eb, #06b6d4) !important;
        }
        
        /* Equal height for testimonial cards */
        .testimonials-swiper .swiper-slide {
            height: auto !important;
            display: flex !important;
        }
        
        .testimonials-swiper .swiper-slide > div {
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        
        /* Equal height for project cards */
        .projects-swiper .swiper-slide {
            height: auto !important;
            display: flex !important;
        }
        
        .projects-swiper .swiper-slide > div {
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        
        /* Custom Scrollbar Styling */
        /* For Webkit browsers (Chrome, Safari, Edge) */
        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #06b6d4, #2563eb);
            border-radius: 10px;
            border: 2px solid #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #0891b2, #1d4ed8);
        }
        
        /* For Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #06b6d4 #f1f5f9;
        }
    </style>
    {{-- {!! CookieConsent::styles() !!} --}}
</head>
<body class="font-sans antialiased" dir="rtl">
    <div class="min-h-screen bg-gray-50">
        <x-navbar />

        <!-- Page Content -->
        <main class="mt-12">
            {{ $slot }}
        </main>

        <x-footer />
    </div>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
    
    <!-- Scroll Reveal Script -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-modern');
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }
        });
        
        // Reveal on scroll
        function reveal() {
            const reveals = document.querySelectorAll('.reveal');
            reveals.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
        }
        
        window.addEventListener('scroll', reveal);
        reveal(); // Initial check
        
        // Initialize Swiper for Testimonials
        window.addEventListener('load', function() {
            setTimeout(function() {
                if (document.querySelector('.testimonials-swiper')) {
                    // Count number of slides
                    const slidesCount = document.querySelectorAll('.testimonials-swiper .swiper-slide').length;
                    
                    const swiper = new Swiper('.testimonials-swiper', {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: slidesCount > 3, // Only enable loop if we have more than 3 slides
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.testimonials-swiper-button-next',
                            prevEl: '.testimonials-swiper-button-prev',
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 30,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                        },
                        // RTL support
                        rtl: true,
                        dir: 'rtl',
                        // Observer to update on DOM changes
                        observer: true,
                        observeParents: true,
                        observeSlideChildren: true,
                    });
                    
                    // Manual event listeners for navigation buttons
                    const nextButton = document.querySelector('.testimonials-swiper-button-next');
                    const prevButton = document.querySelector('.testimonials-swiper-button-prev');
                    
                    if (nextButton) {
                        nextButton.addEventListener('click', function(e) {
                            e.preventDefault();
                            swiper.slideNext();
                        });
                    }
                    
                    if (prevButton) {
                        prevButton.addEventListener('click', function(e) {
                            e.preventDefault();
                            swiper.slidePrev();
                        });
                    }
                    
                    // Force update after initialization
                    setTimeout(() => {
                        swiper.update();
                    }, 100);
                }
                
                // Initialize Swiper for Projects
                if (document.querySelector('.projects-swiper')) {
                    // Count number of slides
                    const projectSlidesCount = document.querySelectorAll('.projects-swiper .swiper-slide').length;
                    
                    const projectsSwiper = new Swiper('.projects-swiper', {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: projectSlidesCount > 3, // Only enable loop if we have more than 3 slides
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.projects-swiper .swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.projects-swiper-button-next',
                            prevEl: '.projects-swiper-button-prev',
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 30,
                            },
                            1024: {
                                slidesPerView: 4,
                                spaceBetween: 30,
                            },
                        },
                        // RTL support
                        rtl: true,
                        dir: 'rtl',
                        // Observer to update on DOM changes
                        observer: true,
                        observeParents: true,
                        observeSlideChildren: true,
                    });
                    
                    // Manual event listeners for navigation buttons
                    const projectNextButton = document.querySelector('.projects-swiper-button-next');
                    const projectPrevButton = document.querySelector('.projects-swiper-button-prev');
                    
                    if (projectNextButton) {
                        projectNextButton.addEventListener('click', function(e) {
                            e.preventDefault();
                            projectsSwiper.slideNext();
                        });
                    }
                    
                    if (projectPrevButton) {
                        projectPrevButton.addEventListener('click', function(e) {
                            e.preventDefault();
                            projectsSwiper.slidePrev();
                        });
                    }
                    
                    // Force update after initialization
                    setTimeout(() => {
                        projectsSwiper.update();
                    }, 100);
                }
            }, 100);
        });
    </script>
    
    {{-- Google Analytics & Marketing Scripts --}}
    <script>
        @php
            $analyticsSettings = \App\Models\AnalyticsSetting::first();
        @endphp
        
        // Load Facebook Pixel when user consents
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
            
            console.log('Facebook Pixel loaded');
            @endif
        }
        
        // Load Google Tag Manager when user consents
        @if($analyticsSettings && $analyticsSettings->gtm_enabled && $analyticsSettings->gtm_container_id)
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ $analyticsSettings->gtm_container_id }}');
        @endif
    </script>
    
    {{-- {!! CookieConsent::scripts() !!} --}}
</body>
</html>
