@props(['companySettings', 'socialLinks'])

<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-white/80 backdrop-blur-xl border-b border-gray-200/50 shadow-lg" id="navbar">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 space-x-reverse group">
                    @if(isset($companySettings) && $companySettings->logo_path)
		                <img class="h-10 transition-all duration-300 group-hover:scale-110"
                             src="{{ Storage::url($companySettings->logo_path) }}"
                             alt="{{ $companySettings->company_name ?? 'E-DATA 360' }}">
                    @else
		                <div class="flex items-center gap-2">
			                <div class="relative">
				                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-lg blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
				                <div class="relative bg-gradient-to-r from-blue-600 to-cyan-500 p-2 rounded-lg">
					                <i class="fas fa-chart-line text-white text-2xl"></i>
				                </div>
			                </div>
			                <div class="flex items-center">
				                <span class="text-3xl font-black bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 bg-clip-text text-transparent">E-DATA</span>
				                <span class="text-3xl font-black text-slate-800 ml-1">360</span>
			                </div>
                        </div>
                    @endif
                </a>
            </div>
            
            {{-- Desktop Navigation --}}
	        <div class="hidden lg:flex lg:items-center lg:gap-2">
                <a href="{{ route('home') }}"
                   class="group relative {{ request()->routeIs('home') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-2 rounded-xl hover:bg-blue-50">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-home group-hover:scale-110 transition-transform"></i>
                        <span>الرئيسية</span>
                    </span>
	                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 {{ request()->routeIs('home') ? 'w-4/5' : 'w-0' }} h-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                <a href="{{ route('about') }}"
                   class="group relative {{ request()->routeIs('about') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-2 rounded-xl hover:bg-blue-50">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-users group-hover:scale-110 transition-transform"></i>
                        <span>من نحن</span>
                    </span>
	                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 {{ request()->routeIs('about') ? 'w-4/5' : 'w-0' }} h-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                <a href="{{ route('services') }}"
                   class="group relative {{ request()->routeIs('services') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-2 rounded-xl hover:bg-blue-50">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-briefcase group-hover:scale-110 transition-transform"></i>
                        <span>خدماتنا</span>
                    </span>
	                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 {{ request()->routeIs('services') ? 'w-4/5' : 'w-0' }} h-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                <a href="{{ route('portfolio') }}"
                   class="group relative {{ request()->routeIs('portfolio') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-2 rounded-xl hover:bg-blue-50">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-th-large group-hover:scale-110 transition-transform"></i>
                        <span>المعرض</span>
                    </span>
	                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 {{ request()->routeIs('portfolio') ? 'w-4/5' : 'w-0' }} h-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                <a href="{{ route('contact') }}"
                   class="group relative {{ request()->routeIs('contact') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-2 rounded-xl hover:bg-blue-50">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-envelope group-hover:scale-110 transition-transform"></i>
                        <span>تواصل معنا</span>
                    </span>
	                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 {{ request()->routeIs('contact') ? 'w-4/5' : 'w-0' }} h-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                
                {{-- CTA Button --}}
                <a href="{{ route('request-design.create') }}"
                   class="group relative mr-4 bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-black py-3 px-8 rounded-xl hover:shadow-2xl hover:shadow-cyan-500/50 hover:scale-105 transform transition-all duration-300 inline-flex items-center gap-2 overflow-hidden">
	                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 via-cyan-500 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
	                <i class="fas fa-rocket relative z-10 group-hover:rotate-12 transition-transform"></i>
	                <span class="relative z-10">ابدأ الآن</span>
                </a>
            </div>
            
            {{-- Mobile Menu Button --}}
	        <button id="mobile-menu-button" class="lg:hidden text-gray-700 hover:text-blue-600 focus:outline-none transition-all duration-300 p-2 rounded-lg hover:bg-blue-50">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        {{-- Mobile Navigation --}}
	    <div id="mobile-menu" class="hidden lg:hidden mt-6 pb-4">
		    <div class="flex flex-col gap-2 bg-white/95 backdrop-blur-lg rounded-2xl p-4 shadow-xl border border-gray-100">
                <a href="{{ route('home') }}"
                   class="group {{ request()->routeIs('home') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-cyan-50 flex items-center gap-3">
	                <i class="fas fa-home text-lg group-hover:scale-110 transition-transform"></i>
	                <span>الرئيسية</span>
                </a>
                <a href="{{ route('about') }}"
                   class="group {{ request()->routeIs('about') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-cyan-50 flex items-center gap-3">
	                <i class="fas fa-users text-lg group-hover:scale-110 transition-transform"></i>
	                <span>من نحن</span>
                </a>
                <a href="{{ route('services') }}"
                   class="group {{ request()->routeIs('services') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-cyan-50 flex items-center gap-3">
	                <i class="fas fa-briefcase text-lg group-hover:scale-110 transition-transform"></i>
	                <span>خدماتنا</span>
                </a>
                <a href="{{ route('portfolio') }}"
                   class="group {{ request()->routeIs('portfolio') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-cyan-50 flex items-center gap-3">
	                <i class="fas fa-th-large text-lg group-hover:scale-110 transition-transform"></i>
	                <span>المعرض</span>
                </a>
                <a href="{{ route('contact') }}"
                   class="group {{ request()->routeIs('contact') ? 'text-blue-600 bg-gradient-to-r from-blue-50 to-cyan-50' : 'text-gray-700 hover:text-blue-600' }} font-bold transition-all duration-300 px-4 py-3 rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-cyan-50 flex items-center gap-3">
	                <i class="fas fa-envelope text-lg group-hover:scale-110 transition-transform"></i>
	                <span>تواصل معنا</span>
                </a>

			    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent my-2"></div>

			    <a href="{{ route('request-design.create') }}"
			       class="group bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-black py-4 px-6 rounded-xl text-center hover:shadow-xl hover:shadow-cyan-500/50 transition-all duration-300 flex items-center justify-center gap-2 overflow-hidden relative">
				    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 via-cyan-500 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
				    <i class="fas fa-rocket relative z-10 group-hover:rotate-12 transition-transform"></i>
				    <span class="relative z-10">ابدأ مشروعك الآن</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-2xl');
        } else {
            navbar.classList.remove('shadow-2xl');
        }
    });
</script>
