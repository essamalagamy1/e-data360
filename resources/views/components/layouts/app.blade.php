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
    <title>{{ $seo->meta_title ?? 'E-DATA 360 | شركة تطوير مواقع وتطبيقات احترافية' }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? 'E-DATA 360 شريكك في التحول الرقمي. نطور مواقع ويب، تطبيقات جوال، وحلول برمجية متكاملة باستخدام أحدث التقنيات. +200 مشروع منجز.' }}">
    <meta name="keywords" content="تطوير مواقع, تطبيقات جوال, برمجة, Laravel, React, تصميم UI UX, شركة برمجة, السعودية, E-DATA 360">
    <meta name="author" content="E-DATA 360">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $seo->meta_title ?? 'E-DATA 360 | شركة تطوير مواقع وتطبيقات' }}">
    <meta property="og:description" content="{{ $seo->meta_description ?? 'شريكك في التحول الرقمي - تطوير مواقع وتطبيقات احترافية' }}">
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
        /* ========== COLOR SYSTEM ========== */
        /* Colors are loaded from config/colors.php - edit that file to change colors site-wide */
:root {
    /* Primary Colors - Deep Blue */
    --color-primary: {{ config('colors.primary') }};
    --color-primary-light: {{ config('colors.primary_light') }};
    --color-primary-lighter: {{ config('colors.primary_lighter') }};
    --color-primary-dark: {{ config('colors.primary_dark') }};
    
    /* Background Colors */
    --color-bg-dark: {{ config('colors.bg_dark') }};
    --color-bg-dark-lighter: {{ config('colors.bg_dark_lighter') }};
    
    /* Accent Colors */
    --color-accent-green: {{ config('colors.accent_green') }};
    --color-accent-red: {{ config('colors.accent_red') }};
    --color-accent-yellow: {{ config('colors.accent_yellow') }};
    --color-accent-blue: {{ config('colors.accent_blue') }};
    
    /* Gradient */
    --gradient-primary: linear-gradient(to right, var(--color-primary), var(--color-primary-light));
    --gradient-dark: linear-gradient(135deg, var(--color-bg-dark), var(--color-bg-dark-lighter));
    
    /* Shadows */
    --shadow-primary: 0 0 20px {{ config('colors.primary_30') }};
    --shadow-primary-strong: 0 0 40px rgba(13, 27, 42, 0.5);
    
    /* Transparency variations */
    --color-primary-10: {{ config('colors.primary_10') }};
    --color-primary-15: {{ config('colors.primary_15') }};
    --color-primary-20: {{ config('colors.primary_20') }};
    --color-primary-30: {{ config('colors.primary_30') }};
}
        
        /* ========== UTILITY CLASSES FOR COLORS ========== */
        /* Use these classes instead of inline styles */
        
        /* Background Colors */
        .bg-primary { background-color: var(--color-primary) !important; }
        .bg-primary-light { background-color: var(--color-primary-light) !important; }
        .bg-primary-lighter { background-color: var(--color-primary-lighter) !important; }
        .bg-primary-dark { background-color: var(--color-primary-dark) !important; }
        .bg-dark { background-color: var(--color-bg-dark) !important; }
        .bg-dark-lighter { background-color: var(--color-bg-dark-lighter) !important; }
        .bg-primary-10 { background-color: var(--color-primary-10) !important; }
        .bg-primary-15 { background-color: var(--color-primary-15) !important; }
        .bg-primary-20 { background-color: var(--color-primary-20) !important; }
        
        /* Text Colors */
        .text-primary { color: var(--color-primary) !important; }
        .text-primary-light { color: var(--color-primary-light) !important; }
        .text-primary-lighter { color: var(--color-primary-lighter) !important; }
        .text-primary-dark { color: var(--color-primary-dark) !important; }
        
        /* Border Colors */
        .border-primary { border-color: var(--color-primary) !important; }
        .border-primary-light { border-color: var(--color-primary-light) !important; }
        
        /* Gradient Backgrounds */
        .bg-gradient-primary { background: var(--gradient-primary) !important; }
        .bg-gradient-dark { background: var(--gradient-dark) !important; }

/* Font setup */
body {
    font-family: 'Cairo', 'Inter', sans-serif;
}

        
        /* ========== ANIMATIONS ========== */
        
        /* Fade In Up Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Fade In Animation */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Slide In from Right (for RTL) */
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        /* Pulse Glow Animation */
        @keyframes pulseGlow {
            0%, 100% { 
                box-shadow: var(--shadow-primary);
                transform: scale(1);
            }
            50% { 
                box-shadow: var(--shadow-primary-strong);
                transform: scale(1.02);
            }
        }
        
        /* Scale In Animation */
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        /* Bounce Animation */
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* Shimmer Animation for backgrounds */
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        
        /* ========== ANIMATION CLASSES ========== */
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        .animate-slide-in-right {
            animation: slideInRight 0.8s ease-out forwards;
        }
        
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        
        .animate-pulse-glow {
            animation: pulseGlow 3s ease-in-out infinite;
        }
        
        .animate-scale-in {
            animation: scaleIn 0.6s ease-out forwards;
        }
        
        .animate-bounce {
            animation: bounce 2s ease-in-out infinite;
        }
        
        /* Delay Classes */
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-600 { animation-delay: 0.6s; }
        .delay-700 { animation-delay: 0.7s; }
        .delay-800 { animation-delay: 0.8s; }
        
        /* Initial state for animated elements */
        .animate-on-load {
            opacity: 0;
        }
        
        /* Reveal on Scroll Classes */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .reveal-on-scroll.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        
        .reveal-scale {
            opacity: 0;
            transform: scale(0.95);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .reveal-scale.revealed {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Card Hover Animations */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        /* Icon Animation on Hover */
        .icon-hover {
            transition: all 0.3s ease;
        }
        
        .icon-hover:hover i {
            transform: scale(1.2);
        }
        
        .icon-hover i {
            transition: transform 0.3s ease;
        }
        
        /* Number Counter Animation */
        .counter-number {
            display: inline-block;
        }
        
        /* Navbar Link Animation */
        .nav-link-animated {
            position: relative;
            overflow: hidden;
        }
        
        .nav-link-animated::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 0;
            height: 2px;
            background: var(--color-primary);
            transition: width 0.3s ease;
        }
        
        .nav-link-animated:hover::after {
            width: 100%;
        }
        
        /* Button Shine Effect */
        .btn-shine {
            position: relative;
            overflow: hidden;
        }
        
        .btn-shine::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }
        
        .btn-shine:hover::before {
            left: 100%;
        }
        
        /* Gradient Text Animation */
        .gradient-text-animated {
            background: linear-gradient(90deg, var(--color-primary), var(--color-primary-light), var(--color-primary));
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 3s linear infinite;
        }
        
        /* ========== SWIPER CUSTOMIZATION ========== */
        
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
            background: var(--color-primary-light) !important;
            opacity: 0.5;
            transition: all 0.3s ease;
        }
        
        .swiper-pagination-bullet-active {
            opacity: 1 !important;
            background: var(--gradient-primary) !important;
            transform: scale(1.2);
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
        
        /* Equal height for service cards */
        .services-swiper .swiper-slide {
            height: auto !important;
            display: flex !important;
        }
        
        .services-swiper .swiper-slide > div {
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        
        /* Equal height for article cards */
        .articles-swiper .swiper-slide {
            height: auto !important;
            display: flex !important;
        }
        
        .articles-swiper .swiper-slide > article {
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        
        /* ========== SCROLLBAR ========== */
        
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
            background: var(--gradient-primary);
            border-radius: 10px;
            border: 2px solid #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, var(--color-primary-dark), var(--color-primary));
        }
        
        /* For Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: var(--color-primary-light) #f1f5f9;
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
    
    <!-- Scroll Reveal & Animation Script -->
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
        
        // Enhanced Reveal on Scroll
        function revealOnScroll() {
            const reveals = document.querySelectorAll('.reveal');
            reveals.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
            
            // Reveal on scroll elements
            const scrollReveals = document.querySelectorAll('.reveal-on-scroll, .reveal-scale');
            scrollReveals.forEach((element, index) => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 100;
                
                if (elementTop < windowHeight - elementVisible) {
                    // Add staggered delay based on index within visible viewport
                    setTimeout(() => {
                        element.classList.add('revealed');
                    }, (index % 4) * 100);
                }
            });
        }
        
        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll(); // Initial check
        
        // Counter Animation for Statistics
        function animateCounters() {
            const counters = document.querySelectorAll('.counter-number');
            const speed = 200;
            
            counters.forEach(counter => {
                if (counter.dataset.animated === 'true') return;
                
                const rect = counter.getBoundingClientRect();
                const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;
                
                if (isVisible) {
                    counter.dataset.animated = 'true';
                    const target = counter.innerText;
                    const numericPart = parseFloat(target.replace(/[^0-9.]/g, ''));
                    const suffix = target.replace(/[0-9.]/g, '');
                    
                    if (isNaN(numericPart)) return;
                    
                    const duration = 2000;
                    const startTime = performance.now();
                    
                    function updateCounter(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        
                        // Easing function for smooth animation
                        const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                        const currentValue = Math.floor(numericPart * easeOutQuart);
                        
                        counter.innerText = currentValue + suffix;
                        
                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.innerText = target;
                        }
                    }
                    
                    requestAnimationFrame(updateCounter);
                }
            });
        }
        
        window.addEventListener('scroll', animateCounters);
        
        // Initialize animations on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Add fade-in animation to hero elements
            const heroElements = document.querySelectorAll('.hero-animate');
            heroElements.forEach((el, index) => {
                el.style.opacity = '0';
                setTimeout(() => {
                    el.style.animation = `fadeInUp 0.8s ease-out forwards`;
                    el.style.animationDelay = `${index * 0.15}s`;
                }, 100);
            });
            
            // Initialize counter animation
            setTimeout(animateCounters, 500);
        });
        
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
