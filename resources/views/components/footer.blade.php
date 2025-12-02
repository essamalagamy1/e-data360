@props(['companySettings', 'socialLinks'])

<footer class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 text-white overflow-hidden">
    {{-- Decorative Top Border with Animation --}}
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500 animate-pulse"></div>

    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0 bg-[linear-gradient(45deg,rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(-45deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>

    {{-- Floating Gradient Orbs --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-64 h-64 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-64 h-64 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 py-20 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            {{-- Company Info --}}
            <div class="space-y-6">
                <div class="flex items-center mb-6">
                    @if(isset($companySettings) && $companySettings->logo_path)
                        <img class="h-14 hover:scale-110 transition-transform duration-300"
                             src="{{ Storage::url($companySettings->logo_path) }}"
                             alt="{{ $companySettings->company_name ?? 'EDATA 360' }}">
                    @else
                        <div class="flex items-center gap-2">
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg blur-lg opacity-75"></div>
                                <div class="relative bg-gradient-to-r from-cyan-500 to-blue-500 p-2 rounded-lg">
                                    <i class="fas fa-chart-line text-white text-2xl"></i>
                                </div>
                            </div>
                            <div>
                                <span class="text-3xl font-black text-white block">EDATA</span>
                                <span class="text-xl font-black bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">360</span>
                            </div>
                        </div>
                    @endif
                </div>
                <p class="text-gray-300 leading-relaxed text-lg">
                    {{ $companySettings->about_short ?? 'شريكك الموثوق في تحليل البيانات وإنشاء لوحات التحكم الاحترافية. نحول بياناتك إلى قرارات ذكية.' }}
                </p>

                {{-- Stats --}}
                <div class="grid grid-cols-2 gap-4 pt-4">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10 hover:border-cyan-400/30 transition-all">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
                                <i class="fas fa-users text-white text-xl"></i>
                            </div>
                            <div>
                                <p class="text-white font-black text-2xl">250+</p>
                                <p class="text-gray-400 text-xs">عميل</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10 hover:border-purple-400/30 transition-all">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                                <i class="fas fa-star text-white text-xl"></i>
                            </div>
                            <div>
                                <p class="text-white font-black text-2xl">5.0</p>
                                <p class="text-gray-400 text-xs">تقييم</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Quick Links --}}
            <div>
                <h3 class="text-2xl font-black text-white mb-8 relative inline-block">
                    روابط سريعة
                    <div class="absolute -bottom-2 left-0 w-16 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full"></div>
                </h3>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('home') }}" class="group text-gray-300 hover:text-cyan-400 transition-all duration-300 flex items-center gap-3 text-lg">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors">
                                <i class="fas fa-home text-sm"></i>
                            </div>
                            <span>الرئيسية</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="group text-gray-300 hover:text-cyan-400 transition-all duration-300 flex items-center gap-3 text-lg">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors">
                                <i class="fas fa-users text-sm"></i>
                            </div>
                            <span>من نحن</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="group text-gray-300 hover:text-cyan-400 transition-all duration-300 flex items-center gap-3 text-lg">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors">
                                <i class="fas fa-briefcase text-sm"></i>
                            </div>
                            <span>خدماتنا</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" class="group text-gray-300 hover:text-cyan-400 transition-all duration-300 flex items-center gap-3 text-lg">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors">
                                <i class="fas fa-th-large text-sm"></i>
                            </div>
                            <span>معرض الأعمال</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="group text-gray-300 hover:text-cyan-400 transition-all duration-300 flex items-center gap-3 text-lg">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </div>
                            <span>تواصل معنا</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            {{-- Services --}}
            <div>
                <h3 class="text-2xl font-black text-white mb-8 relative inline-block">
                    خدماتنا
                    <div class="absolute -bottom-2 left-0 w-16 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full"></div>
                </h3>
                <ul class="space-y-4">
                    <li class="group text-gray-300 flex items-center gap-3 text-lg hover:text-cyan-400 transition-colors cursor-pointer">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-file-excel text-white"></i>
                        </div>
                        <span>لوحات Excel</span>
                    </li>
                    <li class="group text-gray-300 flex items-center gap-3 text-lg hover:text-cyan-400 transition-colors cursor-pointer">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-yellow-500 to-orange-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-chart-bar text-white"></i>
                        </div>
                        <span>لوحات Power BI</span>
                    </li>
                    <li class="group text-gray-300 flex items-center gap-3 text-lg hover:text-cyan-400 transition-colors cursor-pointer">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-database text-white"></i>
                        </div>
                        <span>تحليل البيانات</span>
                    </li>
                    <li class="group text-gray-300 flex items-center gap-3 text-lg hover:text-cyan-400 transition-colors cursor-pointer">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-tachometer-alt text-white"></i>
                        </div>
                        <span>مؤشرات KPI</span>
                    </li>
                    <li class="group text-gray-300 flex items-center gap-3 text-lg hover:text-cyan-400 transition-colors cursor-pointer">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-lightbulb text-white"></i>
                        </div>
                        <span>ذكاء الأعمال</span>
                    </li>
                </ul>
            </div>
            
            {{-- Contact Info --}}
            <div>
                <h3 class="text-2xl font-black text-white mb-8 relative inline-block">
                    تواصل معنا
                    <div class="absolute -bottom-2 left-0 w-16 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full"></div>
                </h3>
                <ul class="space-y-5">
                    @if(isset($companySettings))
                        @if($companySettings->main_email)
                        <li class="group">
                            <a href="mailto:{{ $companySettings->main_email }}" class="flex items-start gap-4 text-gray-300 hover:text-cyan-400 transition-all duration-300">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-envelope text-white text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">البريد الإلكتروني</p>
                                    <p class="font-bold text-lg">{{ $companySettings->main_email }}</p>
                                </div>
                            </a>
                        </li>
                        @endif
                        @if($companySettings->phone_primary)
                        <li class="group">
                            <a href="tel:{{ $companySettings->phone_primary }}" class="flex items-start gap-4 text-gray-300 hover:text-cyan-400 transition-all duration-300">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-phone text-white text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">الهاتف</p>
                                    <p class="font-bold text-lg">{{ $companySettings->phone_primary }}</p>
                                </div>
                            </a>
                        </li>
                        @endif
                        @if($companySettings->whatsapp_number)
                        <li class="group">
                            <a href="https://wa.me/{{ $companySettings->whatsapp_number }}" class="flex items-start gap-4 text-gray-300 hover:text-green-400 transition-all duration-300">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-green-500 to-teal-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fab fa-whatsapp text-white text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">واتساب</p>
                                    <p class="font-bold text-lg">تواصل مباشر</p>
                                </div>
                            </a>
                        </li>
                        @endif
                    @else
                        <li class="group">
                            <a href="mailto:info@edata360.com" class="flex items-start gap-4 text-gray-300 hover:text-cyan-400 transition-all duration-300">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-envelope text-white text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">البريد الإلكتروني</p>
                                    <p class="font-bold text-lg">info@edata360.com</p>
                                </div>
                            </a>
                        </li>
                        <li class="group">
                            <div class="flex items-start gap-4 text-gray-300">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-white text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">الهاتف</p>
                                    <p class="font-bold text-lg">+966 XX XXX XXXX</p>
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
                
                {{-- Social Media --}}
                <div class="mt-8">
                    <h4 class="text-white font-black text-lg mb-4 flex items-center gap-2">
                        <i class="fas fa-share-alt text-cyan-400"></i>
                        تابعنا على
                    </h4>
                    <div class="flex gap-3">
                        @if(isset($socialLinks) && count($socialLinks) > 0)
                            @foreach($socialLinks as $link)
                                <a href="{{ $link->url }}" target="_blank" 
                                   class="group relative w-12 h-12 rounded-xl bg-white/10 hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-500 flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-translate-y-1 border border-white/20 hover:border-cyan-400/50">
                                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl opacity-0 group-hover:opacity-100 blur transition-opacity"></div>
                                    @if(str_contains(strtolower($link->platform), 'twitter') || str_contains(strtolower($link->platform), 'x'))
                                        <i class="fab fa-x-twitter text-white text-lg relative z-10"></i>
                                    @elseif(str_contains(strtolower($link->platform), 'facebook'))
                                        <i class="fab fa-facebook-f text-white text-lg relative z-10"></i>
                                    @elseif(str_contains(strtolower($link->platform), 'instagram'))
                                        <i class="fab fa-instagram text-white text-lg relative z-10"></i>
                                    @elseif(str_contains(strtolower($link->platform), 'linkedin'))
                                        <i class="fab fa-linkedin-in text-white text-lg relative z-10"></i>
                                    @elseif(str_contains(strtolower($link->platform), 'youtube'))
                                        <i class="fab fa-youtube text-white text-lg relative z-10"></i>
                                    @else
                                        <i class="fas fa-link text-white text-lg relative z-10"></i>
                                    @endif
                                </a>
                            @endforeach
                        @else
                            <a href="#" class="group relative w-12 h-12 rounded-xl bg-white/10 hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-500 flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-translate-y-1 border border-white/20 hover:border-cyan-400/50">
                                <i class="fab fa-x-twitter text-white text-lg"></i>
                            </a>
                            <a href="#" class="group relative w-12 h-12 rounded-xl bg-white/10 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-500 flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-translate-y-1 border border-white/20 hover:border-purple-400/50">
                                <i class="fab fa-linkedin-in text-white text-lg"></i>
                            </a>
                            <a href="#" class="group relative w-12 h-12 rounded-xl bg-white/10 hover:bg-gradient-to-r hover:from-pink-600 hover:to-purple-500 flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-translate-y-1 border border-white/20 hover:border-pink-400/50">
                                <i class="fab fa-instagram text-white text-lg"></i>
                            </a>
                            <a href="https://wa.me/966XXXXXXXXX" target="_blank" class="group relative w-12 h-12 rounded-xl bg-white/10 hover:bg-gradient-to-r hover:from-green-600 hover:to-emerald-500 flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:-translate-y-1 border border-white/20 hover:border-green-400/50">
                                <i class="fab fa-whatsapp text-white text-lg"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div class="mt-16 mb-8">
            <div class="h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
        </div>

        {{-- CTA Section --}}
        <div class="bg-gradient-to-r from-blue-600/10 via-cyan-500/10 to-purple-600/10 backdrop-blur-sm rounded-3xl p-8 border border-white/10 mb-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-3xl font-black text-white mb-2 flex items-center gap-3">
                        <i class="fas fa-rocket text-cyan-400"></i>
                        جاهز للبدء؟
                    </h3>
                    <p class="text-gray-300 text-lg">احصل على استشارة مجانية واكتشف كيف يمكننا مساعدتك</p>
                </div>
                <div class="flex gap-4">
                    <a href="{{ route('request-design.create') }}"
                       class="group bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 text-white font-black py-4 px-8 rounded-xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300 inline-flex items-center gap-2 whitespace-nowrap">
                        <i class="fas fa-paper-plane group-hover:rotate-12 transition-transform"></i>
                        <span>ابدأ الآن</span>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white font-bold py-4 px-8 rounded-xl hover:bg-white hover:text-slate-900 transition-all duration-300 inline-flex items-center gap-2 whitespace-nowrap">
                        <i class="fas fa-headset"></i>
                        <span>تحدث معنا</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="pt-8 border-t border-white/10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                    <p class="text-gray-400 text-center md:text-right">
                        © {{ date('Y') }}
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent font-black text-lg">EDATA 360</span>
                        - جميع الحقوق محفوظة
                    </p>
                </div>

                <div class="flex items-center gap-6 text-gray-400 text-sm">
                    <a href="#" class="hover:text-cyan-400 transition-colors duration-300 flex items-center gap-2">
                        <i class="fas fa-shield-alt text-cyan-400"></i>
                        سياسة الخصوصية
                    </a>
                    <div class="w-px h-4 bg-white/20"></div>
                    <a href="#" class="hover:text-cyan-400 transition-colors duration-300 flex items-center gap-2">
                        <i class="fas fa-file-contract text-cyan-400"></i>
                        الشروط والأحكام
                    </a>
                    <div class="w-px h-4 bg-white/20"></div>
                    <div class="flex items-center gap-2 text-gray-500">
                        <i class="fas fa-code text-cyan-400"></i>
                        <span>صنع بـ</span>
                        <i class="fas fa-heart text-red-500 animate-pulse"></i>
                        <span>في السعودية</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Decorative Bottom Border --}}
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500"></div>
</footer>
