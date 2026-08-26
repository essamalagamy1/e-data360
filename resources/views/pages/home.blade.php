<x-layouts.app>
    
    {{-- =========================================================================
         1. HERO SECTION - فخامة داكنة وتفاعل حي مع محاكاة لوحة البيانات
         ========================================================================= --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-8 pb-20 overflow-hidden">
        {{-- Ambient Mesh Glow --}}
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[400px] bg-gradient-to-r from-blue-600/20 via-cyan-500/20 to-indigo-600/15 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -top-24 right-10 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>
        
        {{-- Background Grid Pattern --}}
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto space-y-6">
                
                {{-- Live Badge --}}
                <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-slate-900/90 border border-cyan-500/30 backdrop-blur-md shadow-lg shadow-cyan-500/10 motion-reveal">
                    <span class="beacon-dot w-2.5 h-2.5 rounded-full bg-cyan-400"></span>
                    <span class="text-xs sm:text-sm font-bold text-cyan-300">
                        {{ $heroSection->badge_text ?? 'الحل الأسرع والأكثر دقة في تحليل البيانات ولوحات التحكم' }}
                    </span>
                    @if($heroSection && $heroSection->badge_icon)
                        <i class="{{ $heroSection->badge_icon }} text-cyan-400 text-xs"></i>
                    @else
                        <i class="fas fa-sparkles text-cyan-400 text-xs"></i>
                    @endif
                </div>

                {{-- Hero Headline --}}
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black tracking-tight leading-[1.15] text-slate-100 motion-reveal">
                    <span class="block">
                        {{ $heroSection->title_line1 ?? 'حوّل بياناتك المعقدة' }}
                    </span>
                    <span class="block bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent mt-2">
                        {{ $heroSection->title_line2 ?? 'إلى لوحات تحكم تفاعلية وقرارات ذكية' }}
                    </span>
                </h1>

                {{-- Subtitle --}}
                <p class="text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed font-normal motion-reveal">
                    {{ $heroSection->subtitle ?? 'نصمم لك لوحات تحكم احترافية عبر Excel و Power BI تمنحك رؤية شاملة 360 درجة لأداء أعمالك، مؤشرات الأداء، وتضاعف كفاءة قراراتك الاستراتيجية.' }}
                </p>

                {{-- Hero CTAs --}}
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2 motion-reveal">
                    <a href="{{ $heroSection->cta_primary_link ?? route('request-design.create') }}"
                       class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 text-white font-black text-base shadow-xl shadow-amber-500/25 hover:shadow-amber-500/45 hover:scale-105 active:scale-95 transition-all flex items-center justify-center gap-3">
                        <i class="fas fa-rocket text-sm"></i>
                        <span>{{ $heroSection->cta_primary_text ?? 'اطلب لوحة تحكم الآن' }}</span>
                    </a>

                    <a href="{{ $heroSection->cta_secondary_link ?? route('portfolio') }}"
                       class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-slate-900/80 hover:bg-slate-800 text-slate-200 border border-slate-700/80 font-bold text-base hover:border-cyan-500/40 hover:scale-105 active:scale-95 transition-all flex items-center justify-center gap-3 backdrop-blur-md">
                        <i class="fas fa-chart-line text-cyan-400 text-sm"></i>
                        <span>{{ $heroSection->cta_secondary_text ?? 'استكشف معرض النماذج' }}</span>
                    </a>
                </div>
            </div>

            {{-- Interactive Simulated Dashboard Mockup Window --}}
            <div class="mt-14 max-w-5xl mx-auto motion-reveal">
                <div class="relative rounded-3xl p-1 bg-gradient-to-b from-cyan-500/30 via-slate-800/40 to-slate-900/60 shadow-2xl shadow-cyan-950/60 backdrop-blur-2xl">
                    <div class="rounded-[22px] bg-slate-950/90 border border-white/10 p-4 sm:p-6 overflow-hidden">
                        
                        {{-- Mock Window Top Bar --}}
                        <div class="flex flex-wrap items-center justify-between gap-4 pb-5 border-b border-slate-800">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-rose-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-500/80"></span>
                                <span class="mr-2 text-xs font-bold text-slate-300">لوحة مؤشرات الأداء والتحليلات المباشرة</span>
                            </div>

                            {{-- Interactive Filter Tabs --}}
                            <div class="flex items-center gap-1 bg-slate-900 p-1 rounded-xl border border-slate-800 text-xs">
                                <button data-dashboard-tab="sales" class="px-3 py-1 rounded-lg font-bold transition-all bg-cyan-500/20 text-cyan-300 border border-cyan-500/40">
                                    المبيعات والنمو
                                </button>
                                <button data-dashboard-tab="kpi" class="px-3 py-1 rounded-lg font-bold transition-all text-slate-400 hover:text-white border border-transparent">
                                    مؤشرات الأداء KPI
                                </button>
                                <button data-dashboard-tab="efficiency" class="px-3 py-1 rounded-lg font-bold transition-all text-slate-400 hover:text-white border border-transparent">
                                    كفاءة التكاليف
                                </button>
                            </div>
                        </div>

                        {{-- Mock Dashboard Body --}}
                        <div class="pt-6 grid grid-cols-1 lg:grid-cols-12 gap-6">
                            
                            {{-- Metrics Column (4 cols) --}}
                            <div class="lg:col-span-4 space-y-4">
                                <div class="p-4 rounded-2xl bg-slate-900/80 border border-slate-800">
                                    <div class="flex items-center justify-between text-xs text-slate-400 mb-1">
                                        <span>إجمالي الإيرادات المحققة</span>
                                        <span class="text-emerald-400 font-bold flex items-center gap-1 font-num"><i class="fas fa-arrow-up text-[10px]"></i> +28.4%</span>
                                    </div>
                                    <div class="text-2xl sm:text-3xl font-black text-white font-num">1,842,500 <span class="text-xs font-normal text-slate-400">ر.س</span></div>
                                </div>

                                <div class="p-4 rounded-2xl bg-slate-900/80 border border-slate-800">
                                    <div class="flex items-center justify-between text-xs text-slate-400 mb-1">
                                        <span>معدل تسريع اتخاذ القرار</span>
                                        <span class="text-cyan-400 font-bold flex items-center gap-1 font-num"><i class="fas fa-bolt text-[10px]"></i> فوري</span>
                                    </div>
                                    <div id="demo-metric-val" class="text-2xl sm:text-3xl font-black text-cyan-400 font-num">+38.5%</div>
                                </div>

                                <div class="p-4 rounded-2xl bg-gradient-to-br from-cyan-950/40 to-slate-900 border border-cyan-500/20 flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-lg flex-shrink-0">
                                        <i class="fas fa-file-excel"></i>
                                    </div>
                                    <div class="text-xs">
                                        <div class="font-bold text-white">تحديث لحظي متزامن</div>
                                        <div class="text-slate-400">تكامل تام مع Excel و Power BI</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Animated SVG Chart Column (8 cols) --}}
                            <div class="lg:col-span-8 p-5 rounded-2xl bg-slate-900/80 border border-slate-800 flex flex-col justify-between min-h-[220px]">
                                <div class="flex items-center justify-between text-xs text-slate-400 mb-4">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                                        <span class="font-bold text-white">معدل التدفق والتحليلات التاريخية</span>
                                    </div>
                                    <span class="font-num text-slate-500">2024 - 2026</span>
                                </div>

                                {{-- Bar Chart Simulation --}}
                                <div class="h-36 flex items-end justify-between gap-3 sm:gap-4 px-2">
                                    @php
                                        $initialHeights = ['45%', '65%', '85%', '95%', '70%', '100%'];
                                        $labels = ['الربع 1', 'الربع 2', 'الربع 3', 'الربع 4', 'الربع 5', 'الربع 6'];
                                    @endphp
                                    @foreach($initialHeights as $idx => $h)
                                    <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end group">
                                        <div class="demo-chart-bar w-full rounded-t-lg bg-gradient-to-t from-blue-600 via-cyan-500 to-cyan-300 opacity-90 group-hover:opacity-100 transition-all duration-300 shadow-md shadow-cyan-500/20"
                                             style="height: {{ $h }};"></div>
                                        <span class="text-[11px] font-semibold text-slate-400">{{ $labels[$idx] }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Stats Grid with Motion Counters --}}
            <div class="mt-14 grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6" data-motion-stagger>
                @if($stats && $stats->count() > 0)
                    @foreach($stats as $stat)
                    <div class="stagger-item p-5 sm:p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-md hover:border-cyan-500/40 transition-all text-center group">
                        <div class="w-10 h-10 mx-auto rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-lg mb-3 group-hover:scale-110 transition-transform">
                            <i class="{{ $stat->icon ?? 'fas fa-chart-pie' }}"></i>
                        </div>
                        <div class="text-3xl sm:text-4xl font-black text-white font-num tracking-tight" data-counter="{{ $stat->number }}">
                            {{ $stat->number }}
                        </div>
                        <div class="text-sm font-bold text-slate-300 mt-1">{{ $stat->label }}</div>
                        @if($stat->description)
                        <div class="text-xs text-slate-400 mt-0.5">{{ $stat->description }}</div>
                        @endif
                    </div>
                    @endforeach
                @else
                    {{-- Default Stats if none seeded --}}
                    <div class="stagger-item p-5 sm:p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-md text-center">
                        <div class="text-3xl sm:text-4xl font-black text-white font-num" data-counter="+150">+150</div>
                        <div class="text-sm font-bold text-slate-300 mt-1">عميل يثق بنا</div>
                    </div>
                    <div class="stagger-item p-5 sm:p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-md text-center">
                        <div class="text-3xl sm:text-4xl font-black text-white font-num" data-counter="200+">200+</div>
                        <div class="text-sm font-bold text-slate-300 mt-1">لوحة تحكم منجزة</div>
                    </div>
                    <div class="stagger-item p-5 sm:p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-md text-center">
                        <div class="text-3xl sm:text-4xl font-black text-white font-num" data-counter="99%">99%</div>
                        <div class="text-sm font-bold text-slate-300 mt-1">دقة وتطابق البيانات</div>
                    </div>
                    <div class="stagger-item p-5 sm:p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-md text-center">
                        <div class="text-3xl sm:text-4xl font-black text-white font-num" data-counter="3-5">3-5</div>
                        <div class="text-sm font-bold text-slate-300 mt-1">أيام متوسط التسليم</div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- =========================================================================
         2. SERVICES BENTO GRID SECTION - خدمات تحليل البيانات وتصميم اللوحات
         ========================================================================= --}}
    <section class="py-24 bg-slate-900 relative overflow-hidden" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            {{-- Section Header --}}
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3 motion-reveal">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold">
                    <i class="fas fa-layer-group"></i>
                    <span>خدماتنا المتخصصة</span>
                </div>
                <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
                    حلول ذكية متكاملة <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">لكافة متطلبات البيانات</span>
                </h2>
                <p class="text-base sm:text-lg text-slate-400">
                    نحول الجداول الصامتة والمعقدة إلى لوحات تحكم تفاعلية نابضة بالحياة تخدم أهدافك التشغيلية والاستراتيجية.
                </p>
            </div>

            {{-- Services Bento Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-motion-stagger>
                @foreach($services as $service)
                <div class="stagger-item bento-card p-8 rounded-3xl bg-slate-950/80 border border-slate-800 hover:border-cyan-500/50 flex flex-col justify-between group">
                    <div>
                        {{-- Top Badge & Icon --}}
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-blue-600 to-cyan-500 text-white flex items-center justify-center text-2xl shadow-lg shadow-cyan-500/20 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                <i class="{{ $service->icon ?? 'fas fa-chart-pie' }}"></i>
                            </div>

                            @if($service->price_starting)
                            <div class="px-3 py-1 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-black">
                                <span>{{ $service->price_label ?? 'يبدأ من' }}</span>
                                <span class="font-num">{{ $service->price_starting }}</span>
                            </div>
                            @elseif($service->duration)
                            <div class="px-3 py-1 rounded-xl bg-slate-800 text-slate-300 text-xs font-bold">
                                <i class="fas fa-clock text-cyan-400 ml-1"></i>
                                <span>{{ $service->duration }}</span>
                            </div>
                            @endif
                        </div>

                        {{-- Title & Description --}}
                        <h3 class="text-xl sm:text-2xl font-black text-white mb-3 group-hover:text-cyan-400 transition-colors">
                            {{ $service->title }}
                        </h3>
                        <p class="text-sm text-slate-400 leading-relaxed mb-6">
                            {{ $service->description ?? $service->short_description }}
                        </p>

                        {{-- Features List --}}
                        @if($service->features && $service->features->count() > 0)
                        <ul class="space-y-2.5 pt-4 border-t border-slate-800/80 mb-6">
                            @foreach($service->features->take(4) as $feat)
                            <li class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-300">
                                <i class="fas fa-circle-check text-cyan-400 text-xs"></i>
                                <span>{{ $feat->feature_text }}</span>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    {{-- Card CTA --}}
                    <div class="pt-4">
                        <a href="{{ route('request-design.create') }}"
                           class="w-full py-3 px-4 rounded-xl bg-slate-900 group-hover:bg-gradient-to-r group-hover:from-cyan-600 group-hover:to-blue-600 text-slate-300 group-hover:text-white font-bold text-sm text-center border border-slate-800 group-hover:border-transparent transition-all duration-300 flex items-center justify-center gap-2 shadow-md">
                            <span>{{ $service->cta_text ?? 'اطلب هذه الخدمة' }}</span>
                            <i class="fas fa-arrow-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================================================================
         3. WHY CHOOSE US - مزايا وقيمة E-DATA360 الاستراتيجية
         ========================================================================= --}}
    <section class="py-24 bg-slate-950 relative overflow-hidden border-y border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                {{-- Left Text Area (5 cols) --}}
                <div class="lg:col-span-5 space-y-6 motion-reveal">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold">
                        <i class="fas fa-award"></i>
                        <span>لماذا يختارنا القادة والشركات؟</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                        نقدم لوحات تحكم <span class="bg-gradient-to-r from-cyan-400 to-amber-300 bg-clip-text text-transparent">تغير طريقة إدارتك للعمل بالكامل</span>
                    </h2>

                    <p class="text-base text-slate-400 leading-relaxed">
                        نحن لا نكتفي بتنسيق الجداول، بل نبني لك محرك ذكاء أعمال حقيقي يجمع بين جمالية التصميم وقوة التحليل الإحصائي لتوفير ساعات العمل واتخاذ قرارات رابحة.
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('about') }}"
                           class="inline-flex items-center gap-2 text-cyan-400 font-bold text-sm hover:text-cyan-300 transition-colors">
                            <span>تعرف أكثر على منهجيتنا وفريقنا</span>
                            <i class="fas fa-arrow-left text-xs"></i>
                        </a>
                    </div>
                </div>

                {{-- Right Bento Grid Features (7 cols) --}}
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-5" data-motion-stagger>
                    
                    <div class="stagger-item p-6 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 transition-all">
                        <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-xl mb-4">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4 class="text-lg font-bold text-white mb-2">سرعة تسليم قياسية</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">تسليم لوحات تحكم جاهزة ومطابقة للمواصفات خلال 3 إلى 5 أيام عمل دون المساس بالجودة.</p>
                    </div>

                    <div class="stagger-item p-6 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 transition-all">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-xl mb-4">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4 class="text-lg font-bold text-white mb-2">دقة بيانات 100%</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">تطبيق أدق معادلات DAX و Excel المتقدمة لضمان صحة الأرقام والنتائج المحاسبية والتشغيلية.</p>
                    </div>

                    <div class="stagger-item p-6 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 transition-all">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-400 flex items-center justify-center text-xl mb-4">
                            <i class="fas fa-sliders"></i>
                        </div>
                        <h4 class="text-lg font-bold text-white mb-2">تفاعلية وتحكم كامل</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">فلاتر ديناميكية، شرائح بيانات، ومخططات بيانية تتحدث فورياً بمجرد النقر عليها.</p>
                    </div>

                    <div class="stagger-item p-6 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 transition-all">
                        <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center text-xl mb-4">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="text-lg font-bold text-white mb-2">تدريب ودعم مستمر</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">جلسات تدريب وشرح مفصل لكيفية استخدام وتحديث لوحة التحكم مع دعم فني وضمان التعديل.</p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- =========================================================================
         4. FEATURED PROJECTS - معرض لوحات التحكم المنجزة
         ========================================================================= --}}
    @if(isset($featuredProjects) && $featuredProjects->count() > 0)
    <section class="py-24 bg-slate-900 relative overflow-hidden" id="portfolio">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16 motion-reveal">
                <div class="space-y-3">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold">
                        <i class="fas fa-laptop-code"></i>
                        <span>أحدث إنجازاتنا</span>
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
                        معرض <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">نماذج ولوحات التحكم</span>
                    </h2>
                </div>
                <div>
                    <a href="{{ route('portfolio') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-slate-800 hover:bg-slate-700 text-white font-bold text-sm border border-slate-700 transition-all">
                        <span>عرض جميع الأعمال</span>
                        <i class="fas fa-arrow-left text-xs"></i>
                    </a>
                </div>
            </div>

            {{-- Projects Swiper Carousel --}}
            <div class="swiper projects-swiper !overflow-visible pb-12">
                <div class="swiper-wrapper">
                    @foreach($featuredProjects as $project)
                    <div class="swiper-slide">
                        <div class="rounded-3xl bg-slate-950 border border-slate-800 hover:border-cyan-500/40 transition-all overflow-hidden flex flex-col justify-between group shadow-xl">
                            
                            {{-- Image Preview Area --}}
                            <div class="relative h-60 w-full overflow-hidden bg-slate-900">
                                @if($project->featured_image)
                                    <img src="{{ Storage::url($project->featured_image) }}"
                                         alt="{{ $project->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-900 to-slate-950 text-slate-600">
                                        <i class="fas fa-chart-pie text-5xl"></i>
                                    </div>
                                @endif
                                
                                {{-- Floating Category Tag --}}
                                @if($project->types && $project->types->first())
                                <span class="absolute top-4 right-4 px-3 py-1 rounded-full bg-slate-900/90 backdrop-blur-md text-cyan-300 text-xs font-bold border border-cyan-500/30">
                                    {{ $project->types->first()->name }}
                                </span>
                                @endif
                            </div>

                            {{-- Project Meta --}}
                            <div class="p-6 space-y-4">
                                <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                                    {{ $project->title }}
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-400 line-clamp-2 leading-relaxed">
                                    {{ $project->short_description ?? $project->description }}
                                </p>

                                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between">
                                    <a href="{{ route('projects.show', $project->slug) }}"
                                       class="text-xs sm:text-sm font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5 transition-colors">
                                        <span>تفاصيل المشروع والنتائج</span>
                                        <i class="fas fa-arrow-left text-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Swiper Pagination & Controls --}}
                <div class="flex items-center justify-center gap-4 mt-8">
                    <button class="projects-swiper-button-prev w-10 h-10 rounded-full bg-slate-800 text-white flex items-center justify-center border border-slate-700 hover:bg-cyan-500 hover:text-slate-950 transition-all">
                        <i class="fas fa-chevron-right text-xs"></i>
                    </button>
                    <div class="swiper-pagination !static !w-auto"></div>
                    <button class="projects-swiper-button-next w-10 h-10 rounded-full bg-slate-800 text-white flex items-center justify-center border border-slate-700 hover:bg-cyan-500 hover:text-slate-950 transition-all">
                        <i class="fas fa-chevron-left text-xs"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>
    @endif

    {{-- =========================================================================
         5. TESTIMONIALS - آراء العملاء وتقييمات الثقة
         ========================================================================= --}}
    @if(isset($testimonials) && $testimonials->count() > 0)
    <section class="py-24 bg-slate-950 relative overflow-hidden border-t border-slate-800" id="testimonials">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3 motion-reveal">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold">
                    <i class="fas fa-star"></i>
                    <span>شركاء النجاح</span>
                </div>
                <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
                    ماذا يقول <span class="bg-gradient-to-r from-amber-400 to-orange-400 bg-clip-text text-transparent">عملاؤنا عن تجربتهم؟</span>
                </h2>
                <p class="text-base text-slate-400">
                    أكثر من 150 عميل في مختلف القطاعات التجارية والصناعية وثقوا بنا في تحويل بياناتهم.
                </p>
            </div>

            <div class="swiper testimonials-swiper !overflow-visible pb-12">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testi)
                    <div class="swiper-slide">
                        <div class="p-8 rounded-3xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/30 transition-all flex flex-col justify-between shadow-xl">
                            <div class="space-y-4">
                                {{-- Stars --}}
                                <div class="flex items-center gap-1 text-amber-400 text-sm">
                                    @for($i=1; $i <= ($testi->rating ?? 5); $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>

                                {{-- Quote --}}
                                <p class="text-sm sm:text-base text-slate-300 leading-relaxed italic">
                                    "{{ $testi->content }}"
                                </p>
                            </div>

                            {{-- Client Info --}}
                            <div class="pt-6 border-t border-slate-800/80 flex items-center gap-3 mt-6">
                                <div class="w-11 h-11 rounded-full bg-gradient-to-tr from-cyan-600 to-blue-600 text-white font-bold flex items-center justify-center text-sm shadow-md">
                                    {{ mb_substr($testi->client_name ?? 'ع', 0, 1) }}
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-white">{{ $testi->client_name }}</div>
                                    <div class="text-xs text-slate-400">{{ $testi->client_position ?? $testi->company_name }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Controls --}}
                <div class="flex items-center justify-center gap-4 mt-8">
                    <button class="testimonials-swiper-button-prev w-10 h-10 rounded-full bg-slate-800 text-white flex items-center justify-center border border-slate-700 hover:bg-amber-500 hover:text-slate-950 transition-all">
                        <i class="fas fa-chevron-right text-xs"></i>
                    </button>
                    <div class="swiper-pagination !static !w-auto"></div>
                    <button class="testimonials-swiper-button-next w-10 h-10 rounded-full bg-slate-800 text-white flex items-center justify-center border border-slate-700 hover:bg-amber-500 hover:text-slate-950 transition-all">
                        <i class="fas fa-chevron-left text-xs"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>
    @endif

    {{-- =========================================================================
         6. LATEST ARTICLES - مقالات ورؤى في تحليل البيانات
         ========================================================================= --}}
    @if(isset($latestArticles) && $latestArticles->count() > 0)
    <section class="py-24 bg-slate-900 relative overflow-hidden" id="articles">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16 motion-reveal">
                <div class="space-y-3">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold">
                        <i class="fas fa-newspaper"></i>
                        <span>المدونة والتحليلات</span>
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
                        أحدث <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">المقالات والأدلة الإرشادية</span>
                    </h2>
                </div>
                <div>
                    <a href="{{ route('articles') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-slate-800 hover:bg-slate-700 text-white font-bold text-sm border border-slate-700 transition-all">
                        <span>عرض جميع المقالات</span>
                        <i class="fas fa-arrow-left text-xs"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-motion-stagger>
                @foreach($latestArticles as $art)
                <article class="stagger-item rounded-3xl bg-slate-950 border border-slate-800 hover:border-cyan-500/40 transition-all overflow-hidden flex flex-col justify-between group shadow-xl">
                    <div>
                        <div class="relative h-48 w-full overflow-hidden bg-slate-900">
                            @if($art->image)
                                <img src="{{ Storage::url($art->image) }}" alt="{{ $art->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-slate-900 text-slate-700">
                                    <i class="fas fa-newspaper text-4xl"></i>
                                </div>
                            @endif
                        </div>

                        <div class="p-6 space-y-3">
                            <div class="text-xs text-cyan-400 font-bold flex items-center gap-2">
                                <i class="fas fa-calendar-alt"></i>
                                <span>{{ $art->published_at ? $art->published_at->format('Y-m-d') : 'مقال مميز' }}</span>
                            </div>
                            <h3 class="text-lg font-bold text-white group-hover:text-cyan-400 transition-colors line-clamp-2">
                                {{ $art->title }}
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-400 line-clamp-2 leading-relaxed">
                                {{ $art->short_description ?? Str::limit(strip_tags($art->content), 100) }}
                            </p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-2">
                        <a href="{{ route('articles.show', $art->slug) }}"
                           class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5 transition-colors">
                            <span>اقرأ المقال بالكامل</span>
                            <i class="fas fa-arrow-left text-xs"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>

        </div>
    </section>
    @endif

    {{-- =========================================================================
         7. HIGH-CONVERSION CTA BANNER - بانر التحويل الفوري
         ========================================================================= --}}
    @php
        $rawWhatsapp = $companySettings->whatsapp_number ?? '+966501234567';
        $cleanWhatsapp = preg_replace('/[^0-9]/', '', $rawWhatsapp);
    @endphp
    <section class="py-20 bg-slate-950 relative overflow-hidden border-t border-slate-800">
        {{-- Glow --}}
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(6,182,212,0.15),transparent_70%)] pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-6 motion-reveal">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold">
                <i class="fas fa-rocket"></i>
                <span>ابدأ رحلة تحول بياناتك اليوم</span>
            </div>

            <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                جاهز لتجربة لوحة تحكم ذكية <br class="hidden sm:block"> تضاعف أرباحك وتوفر وقت فريقك؟
            </h2>

            <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                تواصل معنا الآن للحصول على استشارة سريعة مجانية وعرض سعر مخصص لمشروعك مع تسليم قياسي في 3-5 أيام.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                <a href="{{ route('request-design.create') }}"
                   class="w-full sm:w-auto px-10 py-4 rounded-2xl bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 text-white font-black text-base shadow-xl shadow-amber-500/30 hover:shadow-amber-500/50 hover:scale-105 active:scale-95 transition-all flex items-center justify-center gap-3">
                    <i class="fas fa-bolt"></i>
                    <span>طلب لوحة تحكم مخصصة</span>
                </a>

                <a href="https://wa.me/{{ $cleanWhatsapp }}"
                   target="_blank"
                   class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-base shadow-xl shadow-emerald-600/30 hover:scale-105 active:scale-95 transition-all flex items-center justify-center gap-2.5">
                    <i class="fab fa-whatsapp text-lg"></i>
                    <span>محادثة فورية مع مستشار البيانات</span>
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
