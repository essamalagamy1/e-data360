<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-10 sm:pt-14 pb-16 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cyan-500/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-5">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="fas fa-users-gear"></i>
                <span>انضم إلى فريق الخبراء</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                انضم إلى فريق <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent">E-DATA 360</span>
            </h1>

            <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed motion-reveal">
                نبحث باستمرار عن مهندسي بيانات ومحللي Power BI ومصممي لوحات تحكم محترفين لمشاركتنا صناعة النجاح.
            </p>
        </div>
    </section>

    {{-- Form Section --}}
    <section class="py-16 bg-slate-900">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
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
                <h2 class="text-2xl font-black text-white mb-8">تقديم طلب الانضمام</h2>

                <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-2">الاسم الكامل <span class="text-rose-400">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" required
                                   class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm"
                                   placeholder="الاسم ثلاثي">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-2">البريد الإلكتروني <span class="text-rose-400">*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm text-left" dir="ltr"
                                   placeholder="name@example.com">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-2">رقم الجوال <span class="text-rose-400">*</span></label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" required
                                   class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm text-left" dir="ltr"
                                   placeholder="+966 5X XXX XXXX">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-2">سنوات الخبرة <span class="text-rose-400">*</span></label>
                            <input type="number" name="years_of_experience" value="{{ old('years_of_experience') }}" min="0" required
                                   class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm"
                                   placeholder="عدد السنوات">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-2">التخصص ومجال الخبرة <span class="text-rose-400">*</span></label>
                        <input type="text" name="specialization" value="{{ old('specialization') }}" required
                               class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm"
                               placeholder="مثال: خبير تحليل بيانات Power BI / مصمم لوحات Excel / مهندس بيانات">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-2">السيرة الذاتية (PDF, DOCX) <span class="text-rose-400">*</span></label>
                        <input type="file" name="cv" required accept=".pdf,.doc,.docx"
                               class="w-full p-3 rounded-xl bg-slate-900 border border-slate-800 text-slate-400 text-xs file:ml-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-cyan-500/20 file:text-cyan-300 hover:file:bg-cyan-500/30 cursor-pointer">
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                                class="w-full py-4 px-8 rounded-2xl bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 text-white font-black text-sm shadow-xl shadow-cyan-600/25 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane text-xs"></i>
                            <span>إرسال طلب التوظيف</span>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

</x-layouts.app>
