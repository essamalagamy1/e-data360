<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-10 sm:pt-14 pb-20 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cyan-500/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-6">
            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                {{ $heroSection->title_line1 ?? 'من نحن في E-DATA 360' }} <br>
                <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent">
                    {{ $heroSection->title_line2 ?? 'شـريـكـك الاسـتـراتـيـجـي لـلـبـيـانـات' }}
                </span>
            </h1>

            <p class="text-base sm:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed motion-reveal">
                {{ $heroSection->subtitle ?? 'نحن فريق متخصص في هندسة البيانات وذكاء الأعمال وتصميم لوحات التحكم التفاعلية، نعمل بشغف لمساعدة المنشآت على النمو السريع المبني على الحقائق.' }}
            </p>
        </div>
    </section>

    {{-- Company Story & Vision Bento --}}
    <section class="py-24 bg-slate-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-20">
                
                {{-- Story Text --}}
                <div class="lg:col-span-6 space-y-6 motion-reveal">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold">
                        <i class="fas fa-book-open"></i>
                        <span>قصة انطلاقنا</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight leading-tight">
                        نحو تحول رقمي ذكي <br>
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">يجعل البيانات قوة حقيقية في يدك</span>
                    </h2>

                    <div class="space-y-4 text-slate-300 text-sm sm:text-base leading-relaxed">
                        <p>
                            انطلقت <strong class="text-white font-bold">E-DATA360</strong> في المملكة العربية السعودية استجابةً لحاجة الشركات الماسة إلى تحويل أكوام البيانات المتراكمة وجداول Excel المعقدة إلى معلومات بصرية واضحة ولحظية.
                        </p>
                        <p>
                            نؤمن بأن كل قرار ناجح يقف خلفه تحليل دقيق ومبسط. لذلك قمنا بتطوير منهجيات مرنة تدمج بين أقوى أدوات تحليل البيانات العالمية (Microsoft Power BI, Advanced Excel, SQL, DAX) وأحدث معايير تصميم تجربة المستخدم (UI/UX) لتقديم لوحات تحكم تزيد من سرعة اتخاذ القرارات بنسبة تتجاوز 40%.
                        </p>
                    </div>

                    <div class="pt-4 flex items-center gap-6">
                        <div>
                            <div class="text-3xl font-black text-white font-num">+170</div>
                            <div class="text-xs text-slate-400">عميل في السعودية والخليج</div>
                        </div>
                        <div class="w-px h-10 bg-slate-800"></div>
                        <div>
                            <div class="text-3xl font-black text-cyan-400 font-num">100%</div>
                            <div class="text-xs text-slate-400">دقة ونزاهة في معالجة البيانات</div>
                        </div>
                    </div>
                </div>

                {{-- Vision & Mission Cards --}}
                <div class="lg:col-span-6 space-y-4" data-motion-stagger>
                    
                    <div class="stagger-item p-7 rounded-3xl bg-slate-950/90 border border-slate-800 hover:border-cyan-500/40 transition-all shadow-xl flex items-start gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-2xl flex-shrink-0">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-black text-white">رؤيتنا الاستراتيجية</h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                                أن نكون المرجع الرائد والأول في المملكة العربية السعودية والشرق الأوسط في تقديم حلول ذكاء الأعمال وتصميم لوحات التحكم التي تقود التحول الرقمي.
                            </p>
                        </div>
                    </div>

                    <div class="stagger-item p-7 rounded-3xl bg-slate-950/90 border border-slate-800 hover:border-cyan-500/40 transition-all shadow-xl flex items-start gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-amber-500/10 text-amber-400 flex items-center justify-center text-2xl flex-shrink-0">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-black text-white">رسالتنا وقيمنا</h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                                تمكين المنشآت من التحكم الكامل في مؤشراتها المالية والتشغيلية عبر لوحات تحكم فائقة السلاسة، مع الالتزام التام بالسرية والنزاهة والدقة المطلقة.
                            </p>
                        </div>
                    </div>

                    <div class="stagger-item p-7 rounded-3xl bg-slate-950/90 border border-slate-800 hover:border-cyan-500/40 transition-all shadow-xl flex items-start gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-2xl flex-shrink-0">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-black text-white">سرية وأمان البيانات</h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                                نلتزم بأعلى معايير الحماية والأمان وتوقيع اتفاقيات عدم الإفصاح (NDA) لضمان حماية أسرار وبيانات عملائنا بنسبة 100%.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

</x-layouts.app>
