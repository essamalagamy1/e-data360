@props(['companySettings', 'socialLinks'])

<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-white/95 backdrop-blur-xl border-b border-gray-100 shadow-sm" id="navbar">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            {{-- Logo - Dynamic from database --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center group">
                    @if(isset($companySettings) && $companySettings->logo_path)
                        {{-- Dynamic logo from database --}}
                        <img class="h-10 transition-all duration-300 group-hover:scale-105"
                             src="{{ Storage::url($companySettings->logo_path) }}"
                             alt="{{ $companySettings->company_name ?? 'E-DATA 360' }}">
                    @else
                        {{-- Fallback logo --}}
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: #0D9488;">
                                <i class="fas fa-code text-white text-lg"></i>
                            </div>
                            <span class="text-2xl font-black text-gray-900">E-DATA<span style="color: #0D9488;">360</span></span>
                        </div>
                    @endif
                </a>
            </div>
            
            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex lg:items-center lg:gap-1">
                <a href="{{ route('home') }}"
                   class="relative font-semibold transition-all duration-300 px-4 py-2 rounded-lg {{ request()->routeIs('home') ? 'text-white' : 'text-gray-700 hover:bg-gray-100' }}"
                   style="{{ request()->routeIs('home') ? 'background: #0D9488;' : '' }}">
                    الرئيسية
                </a>
                <a href="{{ route('about') }}"
                   class="relative font-semibold transition-all duration-300 px-4 py-2 rounded-lg {{ request()->routeIs('about') ? 'text-white' : 'text-gray-700 hover:bg-gray-100' }}"
                   style="{{ request()->routeIs('about') ? 'background: #0D9488;' : '' }}">
                    من نحن
                </a>
                <a href="{{ route('services') }}"
                   class="relative font-semibold transition-all duration-300 px-4 py-2 rounded-lg {{ request()->routeIs('services') ? 'text-white' : 'text-gray-700 hover:bg-gray-100' }}"
                   style="{{ request()->routeIs('services') ? 'background: #0D9488;' : '' }}">
                    خدماتنا
                </a>
                <a href="{{ route('portfolio') }}"
                   class="relative font-semibold transition-all duration-300 px-4 py-2 rounded-lg {{ request()->routeIs('portfolio') ? 'text-white' : 'text-gray-700 hover:bg-gray-100' }}"
                   style="{{ request()->routeIs('portfolio') ? 'background: #0D9488;' : '' }}">
                    أعمالنا
                </a>
                <a href="{{ route('articles') }}"
                   class="relative font-semibold transition-all duration-300 px-4 py-2 rounded-lg {{ request()->routeIs('articles*') ? 'text-white' : 'text-gray-700 hover:bg-gray-100' }}"
                   style="{{ request()->routeIs('articles*') ? 'background: #0D9488;' : '' }}">
                    المدونة
                </a>
                <a href="{{ route('contact') }}"
                   class="relative font-semibold transition-all duration-300 px-4 py-2 rounded-lg {{ request()->routeIs('contact') ? 'text-white' : 'text-gray-700 hover:bg-gray-100' }}"
                   style="{{ request()->routeIs('contact') ? 'background: #0D9488;' : '' }}">
                    تواصل معنا
                </a>
                
                {{-- CTA Button --}}
                <a href="{{ route('request-design.create') }}"
                   class="mr-4 text-white font-bold py-2.5 px-6 rounded-lg hover:opacity-90 transition-all flex items-center gap-2"
                   style="background: #0D9488;">
                    <i class="fas fa-rocket text-sm"></i>
                    <span>ابدأ مشروعك</span>
                </a>
            </div>
            
            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-button" class="lg:hidden text-gray-700 hover:text-gray-900 p-2 rounded-lg hover:bg-gray-100 transition-all">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
        
        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4">
            <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4">
                <a href="{{ route('home') }}"
                   class="font-semibold py-3 px-4 rounded-lg {{ request()->routeIs('home') ? 'text-white' : 'text-gray-700' }}"
                   style="{{ request()->routeIs('home') ? 'background: #0D9488;' : '' }}">
                    الرئيسية
                </a>
                <a href="{{ route('about') }}"
                   class="font-semibold py-3 px-4 rounded-lg {{ request()->routeIs('about') ? 'text-white' : 'text-gray-700' }}"
                   style="{{ request()->routeIs('about') ? 'background: #0D9488;' : '' }}">
                    من نحن
                </a>
                <a href="{{ route('services') }}"
                   class="font-semibold py-3 px-4 rounded-lg {{ request()->routeIs('services') ? 'text-white' : 'text-gray-700' }}"
                   style="{{ request()->routeIs('services') ? 'background: #0D9488;' : '' }}">
                    خدماتنا
                </a>
                <a href="{{ route('portfolio') }}"
                   class="font-semibold py-3 px-4 rounded-lg {{ request()->routeIs('portfolio') ? 'text-white' : 'text-gray-700' }}"
                   style="{{ request()->routeIs('portfolio') ? 'background: #0D9488;' : '' }}">
                    أعمالنا
                </a>
                <a href="{{ route('articles') }}"
                   class="font-semibold py-3 px-4 rounded-lg {{ request()->routeIs('articles*') ? 'text-white' : 'text-gray-700' }}"
                   style="{{ request()->routeIs('articles*') ? 'background: #0D9488;' : '' }}">
                    المدونة
                </a>
                <a href="{{ route('contact') }}"
                   class="font-semibold py-3 px-4 rounded-lg {{ request()->routeIs('contact') ? 'text-white' : 'text-gray-700' }}"
                   style="{{ request()->routeIs('contact') ? 'background: #0D9488;' : '' }}">
                    تواصل معنا
                </a>
                <div class="h-px bg-gray-200 my-2"></div>
                <a href="{{ route('request-design.create') }}"
                   class="text-white font-bold py-3 px-4 rounded-lg text-center"
                   style="background: #0D9488;">
                    ابدأ مشروعك الآن
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
    
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-md');
        } else {
            navbar.classList.remove('shadow-md');
        }
    });
</script>
