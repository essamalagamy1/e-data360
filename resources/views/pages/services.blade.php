<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-12 pb-20 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cyan-500/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-6">
            @if($heroSection && $heroSection->badge_text)
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="{{ $heroSection->badge_icon ?? 'fas fa-layer-group' }}"></i>
                <span>{{ $heroSection->badge_text }}</span>
            </div>
            @endif

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                {{ $heroSection->title_line1 ?? 'خدمات تحليل البيانات المتقدمة' }} <br>
                <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent">
                    {{ $heroSection->title_line2 ?? 'ولـوحـات تـحـكـم Excel & Power BI' }}
                </span>
            </h1>

            <p class="text-base sm:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed motion-reveal">
                {{ $heroSection->subtitle ?? 'نقدم منظومة متكاملة من الحلول الذكية لتحويل بيانات شركتك إلى محرك أرباح ولوحات تحكم تنفيذية دقيقة وسهلة الاستخدام.' }}
            </p>
        </div>
    </section>

    {{-- Services Bento Grid --}}
    <section class="py-20 bg-slate-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-motion-stagger>
                @foreach($services as $service)
                <div class="stagger-item bento-card p-8 rounded-3xl bg-slate-950/90 border border-slate-800 hover:border-cyan-500/50 flex flex-col justify-between group shadow-xl">
                    <div>
                        {{-- Icon & Pricing Badge --}}
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-blue-600 to-cyan-500 text-white flex items-center justify-center text-3xl shadow-lg shadow-cyan-500/20 group-hover:scale-110 transition-transform">
                                <i class="{{ $service->icon ?? 'fas fa-chart-pie' }}"></i>
                            </div>

                            @if($service->price_starting)
                            <div class="px-3.5 py-1.5 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-black">
                                <span>{{ $service->price_label ?? 'يبدأ من' }}</span>
                                <span class="font-num mr-1 text-sm">{{ $service->price_starting }}</span>
                            </div>
                            @elseif($service->duration)
                            <div class="px-3.5 py-1.5 rounded-xl bg-slate-800 text-slate-300 text-xs font-bold border border-slate-700">
                                <i class="fas fa-clock text-cyan-400 ml-1"></i>
                                <span>{{ $service->duration }}</span>
                            </div>
                            @endif
                        </div>

                        {{-- Title & Body --}}
                        <h3 class="text-2xl font-black text-white mb-3 group-hover:text-cyan-400 transition-colors">
                            {{ $service->title }}
                        </h3>
                        <p class="text-sm text-slate-400 leading-relaxed mb-6">
                            {{ $service->description ?? $service->short_description }}
                        </p>

                        {{-- Features checkmarks --}}
                        @if($service->features && $service->features->count() > 0)
                        <ul class="space-y-3 pt-4 border-t border-slate-800/80 mb-8">
                            @foreach($service->features as $feat)
                            <li class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-300">
                                <i class="fas fa-circle-check text-cyan-400 text-xs flex-shrink-0"></i>
                                <span>{{ $feat->feature_text }}</span>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    {{-- CTA Button --}}
                    <div class="pt-4">
                        <a href="{{ route('request-design.create') }}"
                           class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 hover:from-amber-600 hover:to-orange-600 text-white font-black text-sm text-center shadow-lg shadow-amber-500/20 hover:shadow-amber-500/40 transition-all flex items-center justify-center gap-2">
                            <span>{{ $service->cta_text ?? 'اطلب تصميم اللوحة الآن' }}</span>
                            <i class="fas fa-arrow-left text-xs"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- 4-Step Methodology Workflow --}}
    <section class="py-24 bg-slate-950 relative border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3 motion-reveal">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold">
                    <i class="fas fa-diagram-project"></i>
                    <span>منهجية العمل المعتمدة</span>
                </div>
                <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
                    كيف نحول بياناتك <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">في 4 خطوات سهلة؟</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6" data-motion-stagger>
                
                <div class="stagger-item p-6 rounded-2xl bg-slate-900/80 border border-slate-800 relative">
                    <div class="text-3xl font-black text-cyan-400 font-num mb-3">01</div>
                    <h4 class="text-lg font-bold text-white mb-2">استلام واستكشاف البيانات</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">استلام ملفات Excel أو مصادر قواعد البيانات وتحديد مؤشرات الأداء الحيوية المطلوبة بدقة.</p>
                </div>

                <div class="stagger-item p-6 rounded-2xl bg-slate-900/80 border border-slate-800 relative">
                    <div class="text-3xl font-black text-cyan-400 font-num mb-3">02</div>
                    <h4 class="text-lg font-bold text-white mb-2">التنظيف والنمذجة الرياضية</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">معالجة البيانات وبناء نماذج العلاقات والمعادلات الديناميكية (Power Query & DAX).</p>
                </div>

                <div class="stagger-item p-6 rounded-2xl bg-slate-900/80 border border-slate-800 relative">
                    <div class="text-3xl font-black text-cyan-400 font-num mb-3">03</div>
                    <h4 class="text-lg font-bold text-white mb-2">التصميم التفاعلي (UI/UX)</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">تصميم لوحة التحكم بألوان عصرية وفلاتر ذكية ومخططات بيانية تفاعلية تخدم القرار.</p>
                </div>

                <div class="stagger-item p-6 rounded-2xl bg-slate-900/80 border border-slate-800 relative">
                    <div class="text-3xl font-black text-emerald-400 font-num mb-3">04</div>
                    <h4 class="text-lg font-bold text-white mb-2">التسليم والتدريب والضمان</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">تسليم اللوحة خلال 3-5 أيام مع شرح تدريبي وضمان كامل للتعديلات والدعم المستمر.</p>
                </div>

            </div>

        </div>
    </section>

</x-layouts.app>
