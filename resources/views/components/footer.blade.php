@props(['companySettings', 'socialLinks'])

<footer class="text-white" style="background: #0A1628;">
    {{-- Top Border --}}
    <div class="h-1" style="background: #0D9488;"></div>

    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            {{-- Company Info - Dynamic from $companySettings --}}
            <div>
                <div class="flex items-center mb-6">
                    @if(isset($companySettings) && $companySettings->logo_2_path)
                        <img class="h-12" src="{{ Storage::url($companySettings->logo_2_path) }}" alt="{{ $companySettings->company_name ?? 'E-DATA 360' }}">
                    @elseif(isset($companySettings) && $companySettings->logo_path)
                        <img class="h-12" src="{{ Storage::url($companySettings->logo_path) }}" alt="{{ $companySettings->company_name ?? 'E-DATA 360' }}">
                    @else
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: #0D9488;">
                                <i class="fas fa-code text-white text-lg"></i>
                            </div>
                            <span class="text-2xl font-black text-white">E-DATA<span style="color: #14B8A6;">360</span></span>
                        </div>
                    @endif
                </div>
                {{-- Dynamic about text from database --}}
                <p class="text-gray-400 leading-relaxed mb-6">
                    {{ $companySettings->about_short ?? 'شريكك الموثوق في تطوير الحلول البرمجية والمنتجات الرقمية.' }}
                </p>
                
                {{-- Stats --}}
                <div class="flex gap-6">
                    <div>
                        <div class="text-2xl font-black" style="color: #14B8A6;">170+</div>
                        <div class="text-gray-500 text-sm">عميل</div>
                    </div>
                    <div>
                        <div class="text-2xl font-black" style="color: #14B8A6;">5.0</div>
                        <div class="text-gray-500 text-sm">تقييم</div>
                    </div>
                </div>
            </div>
            
            {{-- Quick Links --}}
            <div>
                <h3 class="text-lg font-bold text-white mb-6">روابط سريعة</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">الرئيسية</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">من نحن</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors">خدماتنا</a></li>
                    <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-white transition-colors">أعمالنا</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">تواصل معنا</a></li>
                    <li><a href="{{ route('articles') }}" class="text-gray-400 hover:text-white transition-colors">المدونة</a></li>
                    <li><a href="{{ route('careers') }}" class="text-gray-400 hover:text-white transition-colors">الوظائف</a></li>
                </ul>
            </div>
            
            {{-- Services - Dynamic from $footerServices --}}
            <div>
                <h3 class="text-lg font-bold text-white mb-6">خدماتنا</h3>
                <ul class="space-y-3">
                    @if(isset($footerServices) && $footerServices->count() > 0)
                        @foreach($footerServices as $service)
                        <li class="text-gray-400">{{ $service->title }}</li>
                        @endforeach
                    @else
                        <li class="text-gray-400">تطوير الويب</li>
                        <li class="text-gray-400">تطبيقات الجوال</li>
                        <li class="text-gray-400">تصميم UI/UX</li>
                        <li class="text-gray-400">الاستضافة والسيرفرات</li>
                    @endif
                </ul>
            </div>
            
            {{-- Contact Info - Dynamic from $companySettings --}}
            <div>
                <h3 class="text-lg font-bold text-white mb-6">تواصل معنا</h3>
                <ul class="space-y-4">
                    @if(isset($companySettings) && $companySettings->main_email)
                    <li>
                        <a href="mailto:{{ $companySettings->main_email }}" class="flex items-center gap-3 text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-envelope" style="color: #0D9488;"></i>
                            <span>{{ $companySettings->main_email }}</span>
                        </a>
                    </li>
                    @endif
                    @if(isset($companySettings) && $companySettings->whatsapp_number)
                    <li>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $companySettings->whatsapp_number) }}" class="flex items-center gap-3 text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-whatsapp text-green-500"></i>
                            <span dir="ltr">{{ $companySettings->whatsapp_number }}</span>
                        </a>
                    </li>
                    @endif
                </ul>
                
                {{-- Social Links - Dynamic from $socialLinks --}}
                @if(isset($socialLinks) && count($socialLinks) > 0)
                <div class="mt-6">
                    <h4 class="text-sm font-semibold text-white mb-3">تابعنا</h4>
                    <div class="flex gap-3">
                        @foreach($socialLinks as $link)
                        <a href="{{ $link->url }}" target="_blank" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center transition-all">
                            @if(str_contains(strtolower($link->platform), 'twitter') || str_contains(strtolower($link->platform), 'x'))
                                <i class="fab fa-x-twitter text-white text-sm"></i>
                            @elseif(str_contains(strtolower($link->platform), 'facebook'))
                                <i class="fab fa-facebook-f text-white text-sm"></i>
                            @elseif(str_contains(strtolower($link->platform), 'instagram'))
                                <i class="fab fa-instagram text-white text-sm"></i>
                            @elseif(str_contains(strtolower($link->platform), 'linkedin'))
                                <i class="fab fa-linkedin-in text-white text-sm"></i>
                            @else
                                <i class="fas fa-link text-white text-sm"></i>
                            @endif
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>

        {{-- CTA --}}
        <div class="rounded-2xl p-8 mb-12 border border-white/10" style="background: rgba(13, 148, 136, 0.1);">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-2">جاهز لبدء مشروعك؟</h3>
                    <p class="text-gray-400">احصل على استشارة مجانية</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('request-design.create') }}" class="text-white font-bold py-3 px-6 rounded-lg hover:opacity-90 transition-all" style="background: #0D9488;">
                        ابدأ الآن
                    </a>
                    <a href="{{ route('contact') }}" class="text-white font-bold py-3 px-6 rounded-lg border border-white/30 hover:bg-white/10 transition-all">
                        تحدث معنا
                    </a>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="pt-8 border-t border-white/10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">
                    © {{ date('Y') }} <span style="color: #14B8A6;">{{ $companySettings->company_name ?? 'E-DATA 360' }}</span> - جميع الحقوق محفوظة
                </p>
                <div class="flex items-center gap-4 text-gray-500 text-sm">
                    <a href="{{ route('privacy') }}" class="hover:text-white transition-colors">سياسة الخصوصية</a>
                    <span>|</span>
                    <a href="{{ route('terms') }}" class="hover:text-white transition-colors">الشروط والأحكام</a>
                </div>
            </div>
        </div>
    </div>
</footer>
