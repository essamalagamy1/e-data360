@props(['companySettings' => null, 'socialLinks' => null])

@php
    $companySettings = $companySettings ?? \App\Models\CompanySetting::first();
    $socialLinks = $socialLinks ?? \App\Models\SocialLink::where('is_active', true)->get();
    $footerServices = \App\Models\Service::where('is_active', true)->orderBy('order')->take(5)->get();
    $rawWhatsapp = $companySettings->whatsapp_number ?? '+966501234567';
    $cleanWhatsapp = preg_replace('/[^0-9]/', '', $rawWhatsapp);
@endphp

<footer class="relative bg-slate-950 text-white overflow-hidden border-t border-slate-800/80">
    {{-- Ambient Glow Orbs --}}
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-cyan-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    
    {{-- Subtle Grid Background --}}
    <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:32px_32px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12 relative z-10">
        
        {{-- Top Value CTA Bar --}}
        <div class="mb-14 p-8 rounded-3xl bg-gradient-to-r from-slate-900 via-slate-900/90 to-blue-950/70 border border-slate-800 shadow-2xl flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-2 text-center md:text-right">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-bold">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                    جاهزون لتحويل بياناتك إلى أرباح وقرارات دقيقة
                </div>
                <h3 class="text-2xl sm:text-3xl font-black text-white">هل ترغب في لوحة تحكم تفاعلية مخصصة لعملك؟</h3>
                <p class="text-sm text-slate-400 max-w-2xl">فريقنا من خبراء Power BI و Excel والتحليلات المتقدمة جاهز لتسليم مشروعك في 3-5 أيام عمل.</p>
            </div>
            <div class="flex-shrink-0 flex flex-wrap items-center gap-3">
                <a href="{{ route('request-design.create') }}"
                   class="px-6 py-3 rounded-full bg-gradient-to-r from-amber-500 to-orange-500 text-white font-black text-sm shadow-lg shadow-amber-500/25 hover:shadow-amber-500/40 hover:scale-105 transition-all">
                    طلب لوحة تحكم 🚀
                </a>
                <a href="https://wa.me/{{ $cleanWhatsapp }}"
                   target="_blank"
                   class="px-6 py-3 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 font-bold text-sm hover:scale-105 transition-all flex items-center gap-2">
                    <i class="fab fa-whatsapp text-emerald-400 text-base"></i>
                    <span>محادثة فورية</span>
                </a>
            </div>
        </div>

        {{-- Main Footer Columns --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-14 border-b border-slate-800/80">
            
            {{-- Col 1: Brand & About (4 cols) --}}
            <div class="lg:col-span-4 space-y-6">
                <div class="flex items-center gap-3">
                    @if(isset($companySettings) && $companySettings->logo_path)
                        <img class="h-10 w-auto object-contain"
                             src="{{ Storage::url($companySettings->logo_path) }}"
                             alt="{{ $companySettings->company_name ?? 'E-DATA 360' }}">
                    @else
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-600 to-blue-600 text-white font-bold">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-2xl font-black text-white">E-DATA</span>
                            <span class="text-2xl font-black text-cyan-400">360</span>
                        </div>
                    @endif
                </div>

                <p class="text-sm text-slate-400 leading-relaxed max-w-sm">
                    {{ $companySettings->about_short ?? 'شريكك الموثوق في تحويل البيانات المعقدة إلى لوحات تحكم ذكية وقابلة للتنفيذ. حلول Excel متقدمة وتقارير Power BI تفاعلية لإدارة أعمالك بأعلى كفاءة.' }}
                </p>

                {{-- Trust Stats Badges --}}
                <div class="grid grid-cols-2 gap-3 pt-2 max-w-xs">
                    <div class="p-3 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-sm font-black">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div>
                            <div class="text-base font-black text-white font-num">+150</div>
                            <div class="text-[11px] text-slate-400">مشروع منجز</div>
                        </div>
                    </div>
                    <div class="p-3 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-amber-500/10 text-amber-400 flex items-center justify-center text-sm font-black">
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <div class="text-base font-black text-white font-num">4.9 / 5</div>
                            <div class="text-[11px] text-slate-400">تقييم العملاء</div>
                        </div>
                    </div>
                </div>

                {{-- وثيقة العمل الحر المعتمدة --}}
                <div class="p-3 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 transition-all flex items-center justify-between gap-3 max-w-xs">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white p-1 flex items-center justify-center flex-shrink-0 shadow-sm">
                            <img src="{{ asset('download.png') }}" alt="وثيقة العمل الحر" class="h-full w-auto object-contain">
                        </div>
                        <div>
                            <span class="block text-[11px] text-slate-400 font-medium">وثيقة العمل الحر المعتمدة</span>
                            <span class="block text-xs font-bold text-slate-200 font-num" dir="ltr">FL-9832*****</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 text-emerald-400 text-[10px] font-bold bg-emerald-500/10 px-2 py-1 rounded-full border border-emerald-500/20 flex-shrink-0">
                        <i class="fas fa-certificate text-xs"></i>
                        <span>موثق</span>
                    </div>
                </div>
            </div>

            {{-- Col 2: Quick Links (2 cols) --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="text-sm font-black text-white uppercase tracking-wider">روابط سريعة</h4>
                <ul class="space-y-2.5 text-sm text-slate-400">
                    <li><a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-2"><i class="fas fa-angle-left text-xs opacity-50"></i><span>الرئيسية</span></a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-2"><i class="fas fa-angle-left text-xs opacity-50"></i><span>خدماتنا</span></a></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-2"><i class="fas fa-angle-left text-xs opacity-50"></i><span>معرض الأعمال</span></a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-2"><i class="fas fa-angle-left text-xs opacity-50"></i><span>من نحن</span></a></li>
                    <li><a href="{{ route('testimonials.index') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-2"><i class="fas fa-angle-left text-xs opacity-50"></i><span>آراء العملاء</span></a></li>
                    <li><a href="{{ route('articles') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-2"><i class="fas fa-angle-left text-xs opacity-50"></i><span>المدونة</span></a></li>
                </ul>
            </div>

            {{-- Col 3: Services (3 cols) --}}
            <div class="lg:col-span-3 space-y-4">
                <h4 class="text-sm font-black text-white uppercase tracking-wider">خدمات التحليل</h4>
                <ul class="space-y-2.5 text-sm text-slate-400">
                    @forelse($footerServices as $serv)
                        <li>
                            <a href="{{ route('services') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-2">
                                <i class="fas fa-chart-simple text-xs text-cyan-500/70"></i>
                                <span>{{ $serv->title }}</span>
                            </a>
                        </li>
                    @empty
                        <li><a href="{{ route('services') }}" class="hover:text-cyan-400 transition-colors">لوحات تحكم Excel الاحترافية</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-cyan-400 transition-colors">لوحات تحكم Power BI التفاعلية</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-cyan-400 transition-colors">تحليل البيانات المتقدم</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-cyan-400 transition-colors">تتبع مؤشرات الأداء KPIs</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-cyan-400 transition-colors">ذكاء الأعمال BI والحلول المخصصة</a></li>
                    @endforelse
                </ul>
            </div>

            {{-- Col 4: Contact & Social (3 cols) --}}
            <div class="lg:col-span-3 space-y-4">
                <h4 class="text-sm font-black text-white uppercase tracking-wider">معلومات التواصل</h4>
                
                <div class="space-y-3 text-sm text-slate-400">
                    @if($companySettings && $companySettings->location_text)
                    <div class="flex items-start gap-2.5">
                        <i class="fas fa-location-dot text-cyan-400 mt-1 flex-shrink-0"></i>
                        <span>{{ $companySettings->location_text }}</span>
                    </div>
                    @endif

                    @if($companySettings && $companySettings->main_email)
                    <div class="flex items-center gap-2.5">
                        <i class="fas fa-envelope text-cyan-400 flex-shrink-0"></i>
                        <a href="mailto:{{ $companySettings->main_email }}" class="hover:text-cyan-300 font-num" dir="ltr">{{ $companySettings->main_email }}</a>
                    </div>
                    @endif

                    @if($companySettings && $companySettings->whatsapp_number)
                    <div class="flex items-center gap-2.5">
                        <i class="fab fa-whatsapp text-emerald-400 flex-shrink-0"></i>
                        <a href="https://wa.me/{{ $cleanWhatsapp }}" target="_blank" class="hover:text-emerald-300 font-num" dir="ltr">{{ $companySettings->whatsapp_number }}</a>
                    </div>
                    @endif
                </div>

                {{-- Social Icons --}}
                <div class="pt-2">
                    <span class="block text-xs font-semibold text-slate-500 mb-2.5">تابعنا على المنصات:</span>
                    <div class="flex items-center gap-2">
                        @if(isset($socialLinks) && count($socialLinks) > 0)
                            @foreach($socialLinks as $link)
                                @php
                                    $p = strtolower($link->platform ?? '');
                                    $iconClass = match(true) {
                                        str_contains($p, 'twitter') || str_contains($p, 'x') => 'fa-brands fa-x-twitter',
                                        str_contains($p, 'linkedin') => 'fa-brands fa-linkedin-in',
                                        str_contains($p, 'instagram') => 'fa-brands fa-instagram',
                                        str_contains($p, 'facebook') => 'fa-brands fa-facebook-f',
                                        str_contains($p, 'youtube') => 'fa-brands fa-youtube',
                                        str_contains($p, 'whatsapp') => 'fa-brands fa-whatsapp',
                                        str_contains($p, 'behance') => 'fa-brands fa-behance',
                                        str_contains($p, 'github') => 'fa-brands fa-github',
                                        str_contains($p, 'tiktok') => 'fa-brands fa-tiktok',
                                        default => $link->icon ?? 'fa-solid fa-share-nodes',
                                    };
                                @endphp
                                <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer"
                                   title="{{ $link->platform }}"
                                   aria-label="{{ $link->platform }}"
                                   class="w-9 h-9 rounded-xl bg-slate-900 hover:bg-cyan-500 hover:text-slate-950 text-slate-300 border border-slate-800 flex items-center justify-center text-sm transition-all duration-300 hover:scale-110 shadow-sm">
                                    <i class="{{ $iconClass }}"></i>
                                </a>
                            @endforeach
                        @else
                            <a href="#" aria-label="X Twitter" class="w-9 h-9 rounded-xl bg-slate-900 hover:bg-cyan-500 hover:text-slate-950 text-slate-300 border border-slate-800 flex items-center justify-center text-sm transition-all"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#" aria-label="LinkedIn" class="w-9 h-9 rounded-xl bg-slate-900 hover:bg-cyan-500 hover:text-slate-950 text-slate-300 border border-slate-800 flex items-center justify-center text-sm transition-all"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-xl bg-slate-900 hover:bg-cyan-500 hover:text-slate-950 text-slate-300 border border-slate-800 flex items-center justify-center text-sm transition-all"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" aria-label="YouTube" class="w-9 h-9 rounded-xl bg-slate-900 hover:bg-cyan-500 hover:text-slate-950 text-slate-300 border border-slate-800 flex items-center justify-center text-sm transition-all"><i class="fa-brands fa-youtube"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Copyright Bar --}}
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <div>
                © {{ date('Y') }} <span class="text-slate-300 font-bold">E-DATA360</span>. جميع الحقوق محفوظة.
            </div>
            <div class="flex items-center gap-6">
                <a href="{{ route('privacy') }}" class="hover:text-slate-300 transition-colors">سياسة الخصوصية</a>
                <span class="text-slate-700">•</span>
                <a href="{{ route('terms') }}" class="hover:text-slate-300 transition-colors">الشروط والأحكام</a>
                <span class="text-slate-700">•</span>
                <a href="{{ route('careers.create') }}" class="hover:text-slate-300 transition-colors">الوظائف</a>
            </div>
        </div>
    </div>
</footer>
