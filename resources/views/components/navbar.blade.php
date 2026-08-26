@props(['companySettings' => null])

@php
    $companySettings = $companySettings ?? \App\Models\CompanySetting::first();
    $rawWhatsapp = $companySettings->whatsapp_number ?? '+966501234567';
    $cleanWhatsapp = preg_replace('/[^0-9]/', '', $rawWhatsapp);
@endphp

{{-- Top Edge-to-Edge Luxury Navbar --}}
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-slate-950/90 backdrop-blur-2xl border-b border-slate-800/80 shadow-xl shadow-slate-950/40" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            {{-- Brand Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="group flex items-center gap-3 transition-transform duration-300 hover:scale-[1.02]">
                    @if(isset($companySettings) && $companySettings->logo_path)
                        <div class="p-1.5 sm:p-2 rounded-xl bg-white/5 border border-white/10 backdrop-blur-md shadow-sm">
                            <img class="h-8 sm:h-10 w-auto object-contain transition-all duration-300 group-hover:brightness-125"
                                 src="{{ Storage::url($companySettings->logo_path) }}"
                                 alt="{{ $companySettings->company_name ?? 'E-DATA 360' }}">
                        </div>
                    @else
                        {{-- High-Tech Logo Mark --}}
                        <div class="relative flex items-center justify-center w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-gradient-to-tr from-cyan-600 via-blue-600 to-indigo-600 shadow-lg shadow-cyan-500/25 group-hover:shadow-cyan-500/50 transition-shadow">
                            <i class="fas fa-chart-pie text-white text-base sm:text-lg group-hover:rotate-45 transition-transform duration-500"></i>
                            <span class="absolute -top-1 -right-1 w-2.5 h-2.5 rounded-full bg-emerald-400 border-2 border-slate-950 animate-pulse"></span>
                        </div>
                        <div class="flex flex-col text-right">
                            <div class="flex items-center gap-1 leading-none">
                                <span class="text-xl sm:text-2xl font-black tracking-tight text-white group-hover:text-cyan-400 transition-colors">E-DATA</span>
                                <span class="text-xl sm:text-2xl font-black bg-gradient-to-r from-cyan-400 via-sky-300 to-blue-400 bg-clip-text text-transparent">360</span>
                            </div>
                            <span class="text-[9px] font-semibold text-slate-400 tracking-wider">تحليلات البيانات والذكاء الاصطناعي</span>
                        </div>
                    @endif
                </a>
            </div>
            
            {{-- Desktop Navigation Links --}}
            <nav class="hidden lg:flex items-center gap-1.5" aria-label="القائمة الرئيسية">
                <a href="{{ route('home') }}"
                   class="relative px-4 py-2 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-1.5 {{ request()->routeIs('home') ? 'text-cyan-300 bg-cyan-500/15 border border-cyan-500/30 shadow-md shadow-cyan-500/10' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    <i class="fas fa-home text-xs opacity-70"></i>
                    <span>الرئيسية</span>
                </a>

                <a href="{{ route('services') }}"
                   class="relative px-4 py-2 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-1.5 {{ request()->routeIs('services*') ? 'text-cyan-300 bg-cyan-500/15 border border-cyan-500/30 shadow-md shadow-cyan-500/10' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    <i class="fas fa-layer-group text-xs opacity-70"></i>
                    <span>خدماتنا</span>
                </a>

                <a href="{{ route('portfolio') }}"
                   class="relative px-4 py-2 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-1.5 {{ request()->routeIs('portfolio*') || request()->routeIs('projects*') ? 'text-cyan-300 bg-cyan-500/15 border border-cyan-500/30 shadow-md shadow-cyan-500/10' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    <i class="fas fa-chart-line text-xs opacity-70"></i>
                    <span>معرض اللوحات</span>
                </a>

                <a href="{{ route('about') }}"
                   class="relative px-4 py-2 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-1.5 {{ request()->routeIs('about') ? 'text-cyan-300 bg-cyan-500/15 border border-cyan-500/30 shadow-md shadow-cyan-500/10' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    <i class="fas fa-users-viewfinder text-xs opacity-70"></i>
                    <span>من نحن</span>
                </a>

                <a href="{{ route('testimonials.index') }}"
                   class="relative px-4 py-2 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-1.5 {{ request()->routeIs('testimonials*') ? 'text-amber-300 bg-amber-500/15 border border-amber-500/30 shadow-md shadow-amber-500/10' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    <i class="fas fa-star text-xs text-amber-400"></i>
                    <span>آراء العملاء</span>
                </a>

                <a href="{{ route('articles') }}"
                   class="relative px-4 py-2 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-1.5 {{ request()->routeIs('articles*') ? 'text-cyan-300 bg-cyan-500/15 border border-cyan-500/30 shadow-md shadow-cyan-500/10' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    <i class="fas fa-newspaper text-xs opacity-70"></i>
                    <span>المدونة</span>
                </a>

                <a href="{{ route('contact') }}"
                   class="relative px-4 py-2 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-1.5 {{ request()->routeIs('contact') ? 'text-cyan-300 bg-cyan-500/15 border border-cyan-500/30 shadow-md shadow-cyan-500/10' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    <i class="fas fa-paper-plane text-xs opacity-70"></i>
                    <span>تواصل معنا</span>
                </a>
            </nav>
            
            {{-- Right CTA Area --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ route('request-design.create') }}"
                   class="relative group inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-bold text-sm text-white overflow-hidden shadow-lg shadow-amber-500/25 hover:shadow-amber-500/40 hover:scale-105 active:scale-95 transition-all duration-300">
                    <span class="absolute inset-0 bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 group-hover:from-amber-600 group-hover:to-orange-500 transition-all duration-300"></span>
                    <i class="fas fa-rocket text-xs relative z-10"></i>
                    <span class="relative z-10 font-black">اطلب لوحتك الآن</span>
                </a>
            </div>
            
            {{-- Mobile Menu Button --}}
            <div class="flex items-center lg:hidden gap-2">
                <a href="{{ route('request-design.create') }}"
                   class="px-3 py-1.5 rounded-full bg-amber-500 text-white font-bold text-xs shadow-md shadow-amber-500/20">
                    طلب تصميم
                </a>
                <button id="mobile-menu-button"
                        type="button"
                        aria-label="فتح القائمة"
                        class="p-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/10 transition-colors focus:outline-none">
                    <i class="fas fa-bars text-lg" id="menu-icon"></i>
                </button>
            </div>

        </div>
    </div>
    
    {{-- Mobile Navigation Dropdown Drawer --}}
    <div id="mobile-menu"
         class="hidden lg:hidden max-w-7xl mx-auto px-4 sm:px-6 pb-5 pt-2 space-y-2 border-t border-slate-800/80 bg-slate-950/95 backdrop-blur-2xl">
        <a href="{{ route('home') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-sm {{ request()->routeIs('home') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/30' : 'text-slate-300 hover:bg-white/5' }}">
            <i class="fas fa-home text-xs text-cyan-400"></i>
            <span>الرئيسية</span>
        </a>
        <a href="{{ route('services') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-sm {{ request()->routeIs('services*') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/30' : 'text-slate-300 hover:bg-white/5' }}">
            <i class="fas fa-layer-group text-xs text-cyan-400"></i>
            <span>خدماتنا</span>
        </a>
        <a href="{{ route('portfolio') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-sm {{ request()->routeIs('portfolio*') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/30' : 'text-slate-300 hover:bg-white/5' }}">
            <i class="fas fa-chart-line text-xs text-cyan-400"></i>
            <span>معرض اللوحات</span>
        </a>
        <a href="{{ route('about') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-sm {{ request()->routeIs('about') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/30' : 'text-slate-300 hover:bg-white/5' }}">
            <i class="fas fa-users-viewfinder text-xs text-cyan-400"></i>
            <span>من نحن</span>
        </a>
        <a href="{{ route('testimonials.index') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-sm {{ request()->routeIs('testimonials*') ? 'bg-amber-500/20 text-amber-300 border border-amber-500/30' : 'text-slate-300 hover:bg-white/5' }}">
            <i class="fas fa-star text-xs text-amber-400"></i>
            <span>آراء العملاء</span>
        </a>
        <a href="{{ route('articles') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-sm {{ request()->routeIs('articles*') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/30' : 'text-slate-300 hover:bg-white/5' }}">
            <i class="fas fa-newspaper text-xs text-cyan-400"></i>
            <span>المدونة</span>
        </a>
        <a href="{{ route('contact') }}"
           class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-sm {{ request()->routeIs('contact') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/30' : 'text-slate-300 hover:bg-white/5' }}">
            <i class="fas fa-paper-plane text-xs text-cyan-400"></i>
            <span>تواصل معنا</span>
        </a>
    </div>
</header>
