<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-12 pb-16 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cyan-500/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-5">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="fas fa-bolt"></i>
                <span>عرض سعر فوري واستشارة مجانية</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                اطلب تصميم <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent">لوحة التحكم الخاصة بك</span>
            </h1>

            <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed motion-reveal">
                املأ النموذج أدناه وسيتواصل معك مستشار البيانات المختص خلال أقل من 24 ساعة مع خطة عمل وعرض سعر مخصص.
            </p>
        </div>
    </section>

    {{-- Form Section --}}
    <section class="py-16 bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="p-6 rounded-3xl bg-emerald-950/80 border border-emerald-500/40 text-emerald-300 mb-10 flex items-start gap-4 shadow-xl">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 flex items-center justify-center flex-shrink-0 text-xl text-emerald-400">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-1">تم استلام طلبك بنجاح! 🎉</h4>
                        <p class="text-sm text-emerald-200">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <div class="p-8 sm:p-12 rounded-3xl bg-slate-950 border border-slate-800 shadow-2xl">
                <form action="{{ route('request-design.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf

                    {{-- Step 1: Personal & Business Info --}}
                    <div>
                        <h3 class="text-xl font-black text-white mb-6 flex items-center gap-3 pb-3 border-b border-slate-800">
                            <span class="w-7 h-7 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xs font-num font-bold">1</span>
                            <span>البيانات الأساسية ومعلومات التواصل</span>
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="full_name" class="block text-xs font-bold text-slate-300 mb-2">
                                    الاسم الكامل <span class="text-rose-400">*</span>
                                </label>
                                <input type="text" name="full_name" id="full_name" required
                                       class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm"
                                       placeholder="أدخل اسمك الكريم">
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-300 mb-2">
                                    البريد الإلكتروني <span class="text-rose-400">*</span>
                                </label>
                                <input type="email" name="email" id="email" required
                                       class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm text-left" dir="ltr"
                                       placeholder="name@company.com">
                            </div>

                            <div>
                                <label for="phone" class="block text-xs font-bold text-slate-300 mb-2">
                                    رقم الجوال / واتساب <span class="text-rose-400">*</span>
                                </label>
                                <input type="tel" name="phone" id="phone" required
                                       class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm text-left" dir="ltr"
                                       placeholder="+966 5X XXX XXXX">
                            </div>

                            <div>
                                <label for="company_name" class="block text-xs font-bold text-slate-300 mb-2">
                                    اسم المنشأة / النشاط <span class="text-slate-500 font-normal">(اختياري)</span>
                                </label>
                                <input type="text" name="company_name" id="company_name"
                                       class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm"
                                       placeholder="اسم الشركة أو المؤسسة">
                            </div>
                        </div>
                    </div>

                    {{-- Step 2: Project Specifications --}}
                    <div>
                        <h3 class="text-xl font-black text-white mb-6 flex items-center gap-3 pb-3 border-b border-slate-800">
                            <span class="w-7 h-7 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xs font-num font-bold">2</span>
                            <span>تفاصيل اللوحة والمنصة المطلوبة</span>
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label for="project_type" class="block text-xs font-bold text-slate-300 mb-2">
                                    نوع اللوحة / المنصة <span class="text-rose-400">*</span>
                                </label>
                                <select name="project_type" id="project_type" required
                                        class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white focus:border-cyan-500 focus:outline-none transition-colors text-sm">
                                    <option value="">اختر المنصة</option>
                                    <option value="Excel">لوحة تحكم Excel متقدمة</option>
                                    <option value="Power BI">لوحة تحكم Power BI سحابية</option>
                                    <option value="Full analysis">تحليل بيانات واستشارات شاملة</option>
                                    <option value="Other">أخرى / مخصص</option>
                                </select>
                            </div>

                            <div>
                                <label for="budget_range" class="block text-xs font-bold text-slate-300 mb-2">
                                    الميزانية المقترحة <span class="text-slate-500 font-normal">(اختياري)</span>
                                </label>
                                <input type="text" name="budget_range" id="budget_range"
                                       class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm"
                                       placeholder="مثال: 500 - 1500 ر.س">
                            </div>

                            <div>
                                <label for="deadline" class="block text-xs font-bold text-slate-300 mb-2">
                                    الموعد النهائي المفضل <span class="text-slate-500 font-normal">(اختياري)</span>
                                </label>
                                <input type="text" name="deadline" id="deadline"
                                       class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm"
                                       placeholder="مثال: خلال 3-5 أيام">
                            </div>
                        </div>
                    </div>

                    {{-- Step 3: Project Requirements & Uploads --}}
                    <div>
                        <h3 class="text-xl font-black text-white mb-6 flex items-center gap-3 pb-3 border-b border-slate-800">
                            <span class="w-7 h-7 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xs font-num font-bold">3</span>
                            <span>وصف الاحتياجات والمرفقات</span>
                        </h3>

                        <div class="space-y-6">
                            <div>
                                <label for="details" class="block text-xs font-bold text-slate-300 mb-2">
                                    شرح المتطلبات ومؤشرات الأداء المطلوبة <span class="text-rose-400">*</span>
                                </label>
                                <textarea name="details" id="details" rows="5" required
                                          class="w-full p-4 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm leading-relaxed"
                                          placeholder="اكتب نبذة عن مصدر البيانات الحالي (ملفات Excel, CSV, فواتير)، وما هي أهم المؤشرات أو المخططات التي ترغب في رؤيتها..."></textarea>
                            </div>

                            <div>
                                <label for="attachment" class="block text-xs font-bold text-slate-300 mb-2">
                                    إرفاق عينة من البيانات أو ملف توضيحي <span class="text-slate-500 font-normal">(Excel, CSV, PDF, صور)</span>
                                </label>
                                <input type="file" name="attachment" id="attachment"
                                       class="w-full p-3 rounded-xl bg-slate-900 border border-slate-800 text-slate-400 text-xs file:ml-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-cyan-500/20 file:text-cyan-300 hover:file:bg-cyan-500/30 cursor-pointer">
                            </div>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="pt-4">
                        <button type="submit"
                                class="w-full py-4 px-8 rounded-2xl bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 hover:from-amber-600 hover:to-orange-600 text-white font-black text-base shadow-xl shadow-amber-500/25 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-3">
                            <i class="fas fa-paper-plane text-sm"></i>
                            <span>إرسال طلب التصميم وتأكيد الاستشارة</span>
                        </button>
                        <p class="text-center text-xs text-slate-500 mt-4">
                            🔒 بياناتك مشفرة ومحمية باتفاقية سرية تامة 100%. لن يتم مشاركة أي ملفات مع أي طرف خارجي.
                        </p>
                    </div>

                </form>
            </div>

        </div>
    </section>

</x-layouts.app>
