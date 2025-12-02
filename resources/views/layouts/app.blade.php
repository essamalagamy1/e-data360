<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $seo->meta_title ?? config('app.name', 'Laravel') }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? '' }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <x-navbar />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <x-footer />
    </div>
</body>
</html>
