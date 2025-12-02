@props(['companySettings', 'socialLinks'])

<footer class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 text-white overflow-hidden">
    {{-- Top Border --}}
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 via-cyan-500 to-blue-600"></div>
    
    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            {{-- Company Info --}}
            <div class="space-y-4">
                <div class="flex items-center mb-4">
                    @if(isset($companySettings) && $companySettings->logo_path)
                        <img class="h-12" 
                             src="{{ Storage::url($companySettings->logo_path) }}" 
                             alt="{{ $companySettings->company_name ?? 'EDATA 360' }}">
                    @else
                        <div class="flex items-center">
                            <span class="text-3xl font-black text-white">EDATA</span>
                            <span class="text-3xl font-black bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent ml-1">360</span>
                        </div>
                    @endif
                </div>
                <p class="text-gray-300 leading-relaxed">
                    {{ $companySettings->about_short ?? 'شركة متخصصة في تحليل البيانات وإنشاء لوحات التحكم الاحترافية باستخدام Excel و Power BI.' }}
                </p>
                <div class="flex items-center space-x-4 space-x-reverse pt-4">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-xl"></i>
                    </div>
                    <div>
                        <p class="text-white font-bold text-2xl">+150</p>
                        <p class="text-gray-400 text-sm">عميل راضٍ</p>
                    </div>
                </div>
            </div>
            
            {{-- Quick Links --}}
            <div>
                <h3 class="text-xl font-bold text-white mb-6 relative inline-block">
                    روابط سريعة
                    <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-600 to-cyan-400"></span>
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-left ml-2 text-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            الرئيسية
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-left ml-2 text-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            من نحن
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-left ml-2 text-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            خدماتنا
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" class="text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-left ml-2 text-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            معرض الأعمال
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-left ml-2 text-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            تواصل معنا
                        </a>
                    </li>
                </ul>
            </div>
            
            {{-- Services --}}
            <div>
                <h3 class="text-xl font-bold text-white mb-6 relative inline-block">
                    خدماتنا
                    <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-600 to-cyan-400"></span>
                </h3>
                <ul class="space-y-3">
                    <li class="text-gray-300 flex items-center">
                        <i class="fas fa-file-excel text-cyan-400 ml-3"></i>
                        لوحات تحكم Excel
                    </li>
                    <li class="text-gray-300 flex items-center">
                        <i class="fas fa-chart-bar text-cyan-400 ml-3"></i>
                        لوحات تحكم Power BI
                    </li>
                    <li class="text-gray-300 flex items-center">
                        <i class="fas fa-database text-cyan-400 ml-3"></i>
                        تحليل البيانات
                    </li>
                    <li class="text-gray-300 flex items-center">
                        <i class="fas fa-tachometer-alt text-cyan-400 ml-3"></i>
                        تتبع مؤشرات الأداء KPI
                    </li>
                    <li class="text-gray-300 flex items-center">
                        <i class="fas fa-lightbulb text-cyan-400 ml-3"></i>
                        رؤى الأعمال
                    </li>
                </ul>
            </div>
            
            {{-- Contact Info --}}
            <div>
                <h3 class="text-xl font-bold text-white mb-6 relative inline-block">
                    تواصل معنا
                    <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-600 to-cyan-400"></span>
                </h3>
                <ul class="space-y-4">
                    @if(isset($companySettings))
                        @if($companySettings->main_email)
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-cyan-400 ml-3 mt-1"></i>
                            <a href="mailto:{{ $companySettings->main_email }}" class="text-gray-300 hover:text-cyan-400 transition-colors duration-300">
                                {{ $companySettings->main_email }}
                            </a>
                        </li>
                        @endif
                        @if($companySettings->phone_primary)
                        <li class="flex items-start">
                            <i class="fas fa-phone text-cyan-400 ml-3 mt-1"></i>
                            <a href="tel:{{ $companySettings->phone_primary }}" class="text-gray-300 hover:text-cyan-400 transition-colors duration-300">
                                {{ $companySettings->phone_primary }}
                            </a>
                        </li>
                        @endif
                        @if($companySettings->location_text)
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-cyan-400 ml-3 mt-1"></i>
                            <span class="text-gray-300">{{ $companySettings->location_text }}</span>
                        </li>
                        @endif
                    @else
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-cyan-400 ml-3 mt-1"></i>
                            <a href="mailto:info@edata360.com" class="text-gray-300 hover:text-cyan-400 transition-colors duration-300">
                                info@edata360.com
                            </a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-cyan-400 ml-3 mt-1"></i>
                            <span class="text-gray-300">+966 XX XXX XXXX</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-cyan-400 ml-3 mt-1"></i>
                            <span class="text-gray-300">المملكة العربية السعودية</span>
                        </li>
                    @endif
                </ul>
                
                {{-- Social Media --}}
                <div class="mt-6">
                    <h4 class="text-white font-semibold mb-3">تابعنا</h4>
                    <div class="flex space-x-3 space-x-reverse">
                        @if(isset($socialLinks) && count($socialLinks) > 0)
                            @foreach($socialLinks as $link)
                                <a href="{{ $link->url }}" target="_blank" 
                                   class="w-10 h-10 rounded-full bg-gray-700 hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-400 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                    @if(str_contains(strtolower($link->platform), 'twitter') || str_contains(strtolower($link->platform), 'x'))
                                        <i class="fab fa-x-twitter text-white"></i>
                                    @elseif(str_contains(strtolower($link->platform), 'facebook'))
                                        <i class="fab fa-facebook-f text-white"></i>
                                    @elseif(str_contains(strtolower($link->platform), 'instagram'))
                                        <i class="fab fa-instagram text-white"></i>
                                    @elseif(str_contains(strtolower($link->platform), 'linkedin'))
                                        <i class="fab fa-linkedin-in text-white"></i>
                                    @elseif(str_contains(strtolower($link->platform), 'youtube'))
                                        <i class="fab fa-youtube text-white"></i>
                                    @else
                                        <i class="fas fa-link text-white"></i>
                                    @endif
                                </a>
                            @endforeach
                        @else
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-400 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-x-twitter text-white"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-400 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-linkedin-in text-white"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-400 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                            <a href="https://wa.me/966XXXXXXXXX" target="_blank" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-400 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-whatsapp text-white"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Bottom Bar --}}
        <div class="mt-12 pt-8 border-t border-gray-700">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-center md:text-right mb-4 md:mb-0">
                    © {{ date('Y') }} <span class="text-cyan-400 font-semibold">EDATA 360</span>. جميع الحقوق محفوظة.
                </p>
                <div class="flex items-center space-x-6 space-x-reverse text-gray-400 text-sm">
                    <a href="#" class="hover:text-cyan-400 transition-colors duration-300">سياسة الخصوصية</a>
                    <span>|</span>
                    <a href="#" class="hover:text-cyan-400 transition-colors duration-300">الشروط والأحكام</a>
                </div>
            </div>
        </div>
    </div>
</footer>
