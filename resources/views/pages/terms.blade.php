<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-10 sm:pt-14 pb-16 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cyan-500/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="fas fa-file-contract"></i>
                <span>الاتفاقيات وشروط الخدمة</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                الشروط والأحكام <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent">وضمانات الجودة</span>
            </h1>

            <p class="text-sm sm:text-base text-slate-400 font-num">
                آخر تحديث: {{ date('Y-m-d') }}
            </p>
        </div>
    </section>

    {{-- Content Section --}}
    <section class="py-16 bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <div class="p-8 sm:p-10 rounded-3xl bg-slate-950 border border-slate-800 space-y-4 shadow-xl">
                <h2 class="text-xl font-black text-white flex items-center gap-3">
                    <span class="w-2 h-6 rounded-full bg-cyan-500"></span>
                    <span>1. نطاق تقديم الخدمة والتسليم</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                    نلتزم بتسليم لوحات التحكم والتقارير وفق المعايير المتفق عليها مسبقاً في عرض السعر، وفي المدة الزمنية المحددة (المتوسط 3-5 أيام عمل)، مع توفير ملفات المصدر الكاملة والتدريب الأساسي على الاستخدام.
                </p>
            </div>

            <div class="p-8 sm:p-10 rounded-3xl bg-slate-950 border border-slate-800 space-y-4 shadow-xl">
                <h2 class="text-xl font-black text-white flex items-center gap-3">
                    <span class="w-2 h-6 rounded-full bg-cyan-500"></span>
                    <span>2. سياسة المراجعة والتعديلات</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                    يحق للعميل طلب التعديلات والمراجعات للتأكد من مطابقة لوحة التحكم لمتطلباته ومؤشرات الأداء المتفق عليها قبل الاعتماد النهائي، مع ضمان فني للدعم والتحديثات اللاحقة.
                </p>
            </div>

            <div class="p-8 sm:p-10 rounded-3xl bg-slate-950 border border-slate-800 space-y-4 shadow-xl">
                <h2 class="text-xl font-black text-white flex items-center gap-3">
                    <span class="w-2 h-6 rounded-full bg-cyan-500"></span>
                    <span>3. حقوق الملكية الفكرية</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                    تنتقل كافة حقوق الملكية الكاملة لملفات لوحات التحكم المصممة وقواعد البيانات المخصصة للعميل فور سداد مستحقات المشروع، وتظل بيانات العميل ملكاً خالصاً له دون أي شروط.
                </p>
            </div>

            <div class="p-8 sm:p-10 rounded-3xl bg-slate-950 border border-slate-800 space-y-4 shadow-xl">
                <h2 class="text-xl font-black text-white flex items-center gap-3">
                    <span class="w-2 h-6 rounded-full bg-cyan-500"></span>
                    <span>4. الدفع والتسعير</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                    تكون الأسعار واضحة ومحددة في عرض السعر دون أي رسوم مخفية، وتتم المدفوعات عبر القنوات البنكية والتحويل المباشر المعتمد في المملكة العربية السعودية.
                </p>
            </div>

        </div>
    </section>

</x-layouts.app>
