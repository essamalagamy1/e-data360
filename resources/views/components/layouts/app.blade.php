<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>{{ $seo->meta_title ?? 'EDATA 360 - تحليل البيانات الاحترافي | لوحات تحكم Excel و Power BI' }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? 'شركة EDATA 360 متخصصة في تحليل البيانات وإنشاء لوحات التحكم الاحترافية باستخدام Excel و Power BI. أكثر من 150 عميل و 200 لوحة تحكم تم تسليمها.' }}">
    <meta name="keywords" content="تحليل البيانات, لوحات تحكم, Excel, Power BI, KPI, تقارير, السعودية, EDATA 360">
    <meta name="author" content="EDATA 360">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $seo->meta_title ?? 'EDATA 360 - تحليل البيانات الاحترافي' }}">
    <meta property="og:description" content="{{ $seo->meta_description ?? 'شركة متخصصة في تحليل البيانات ولوحات التحكم الاحترافية' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Scripts -->
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        /* Additional inline styles for immediate rendering */
        body {
            font-family: 'Cairo', 'Inter', sans-serif;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <x-navbar />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <x-footer />
    </div>
    
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
    </script>
</body>
</html>
