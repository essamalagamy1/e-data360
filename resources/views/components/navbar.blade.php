@props(['companySettings', 'socialLinks'])

<nav class="bg-white shadow-lg sticky top-0 z-50 transition-all duration-300" id="navbar">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 space-x-reverse group">
                    @if(isset($companySettings) && $companySettings->logo_path)
                        <img class="h-12 transition-transform duration-300 group-hover:scale-110" 
                             src="{{ Storage::url($companySettings->logo_path) }}" 
                             alt="{{ $companySettings->company_name ?? 'EDATA 360' }}">
                    @else
                        <div class="flex items-center">
                            <span class="text-3xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">EDATA</span>
                            <span class="text-3xl font-black text-gray-800 ml-1">360</span>
                        </div>
                    @endif
                </a>
            </div>
            
            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex lg:items-center lg:space-x-8 lg:space-x-reverse">
                <a href="{{ route('home') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 relative group px-3 py-2">
                    <i class="fas fa-home ml-2"></i>
                    الرئيسية
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-cyan-400 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('about') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 relative group px-3 py-2">
                    <i class="fas fa-info-circle ml-2"></i>
                    من نحن
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-cyan-400 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('services') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 relative group px-3 py-2">
                    <i class="fas fa-briefcase ml-2"></i>
                    خدماتنا
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-cyan-400 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('portfolio') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 relative group px-3 py-2">
                    <i class="fas fa-folder-open ml-2"></i>
                    المعرض
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-cyan-400 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('contact') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 relative group px-3 py-2">
                    <i class="fas fa-envelope ml-2"></i>
                    تواصل معنا
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-cyan-400 group-hover:w-full transition-all duration-300"></span>
                </a>
                
                {{-- CTA Button --}}
                <a href="{{ route('request-design.create') }}" 
                   class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold py-3 px-6 rounded-full hover:shadow-xl hover:scale-105 transform transition duration-300 inline-flex items-center">
                    <i class="fas fa-rocket ml-2"></i>
                    اطلب تصميمك
                </a>
            </div>
            
            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-button" class="lg:hidden text-gray-700 hover:text-blue-600 focus:outline-none transition-colors duration-300">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4">
            <div class="flex flex-col space-y-3">
                <a href="{{ route('home') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 px-4 py-3 rounded-lg hover:bg-blue-50 flex items-center">
                    <i class="fas fa-home ml-2"></i>
                    الرئيسية
                </a>
                <a href="{{ route('about') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 px-4 py-3 rounded-lg hover:bg-blue-50 flex items-center">
                    <i class="fas fa-info-circle ml-2"></i>
                    من نحن
                </a>
                <a href="{{ route('services') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 px-4 py-3 rounded-lg hover:bg-blue-50 flex items-center">
                    <i class="fas fa-briefcase ml-2"></i>
                    خدماتنا
                </a>
                <a href="{{ route('portfolio') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 px-4 py-3 rounded-lg hover:bg-blue-50 flex items-center">
                    <i class="fas fa-folder-open ml-2"></i>
                    المعرض
                </a>
                <a href="{{ route('contact') }}" 
                   class="text-gray-700 hover:text-blue-600 font-semibold transition-all duration-300 px-4 py-3 rounded-lg hover:bg-blue-50 flex items-center">
                    <i class="fas fa-envelope ml-2"></i>
                    تواصل معنا
                </a>
                <a href="{{ route('request-design.create') }}" 
                   class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold py-3 px-6 rounded-full text-center hover:shadow-xl transition duration-300 flex items-center justify-center">
                    <i class="fas fa-rocket ml-2"></i>
                    اطلب تصميمك
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
