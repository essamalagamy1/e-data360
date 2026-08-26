<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-12 pb-16 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-amber-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-5">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-amber-500/30 text-amber-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="fas fa-star text-amber-400"></i>
                <span>رأيك محل تقديرنا وفخرنا</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                أضف تقييمك وتجربتك مع <span class="bg-gradient-to-r from-amber-400 via-yellow-300 to-orange-400 bg-clip-text text-transparent">E-DATA 360</span>
            </h1>

            <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed motion-reveal">
                يسعدنا مشاركة انطباعك حول دقة لوحات التحكم وسرعة التنفيذ لمساعدة رواد الأعمال الآخرين.
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
                        <h4 class="text-xl font-bold text-white mb-1">شكراً لتقييمك الكريم! 🎉</h4>
                        <p class="text-sm text-emerald-200">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <div class="p-8 sm:p-12 rounded-3xl bg-slate-950 border border-slate-800 shadow-2xl">
                <form action="{{ route('testimonial.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="client_name" class="block text-xs font-bold text-slate-300 mb-2">
                            الاسم الكريم <span class="text-rose-400">*</span>
                        </label>
                        <input type="text" id="client_name" name="client_name" value="{{ old('client_name') }}" required
                               class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-amber-500 focus:outline-none transition-colors text-sm"
                               placeholder="أدخل اسمك الكريم">
                        @error('client_name')
                            <p class="text-rose-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="client_position" class="block text-xs font-bold text-slate-300 mb-2">
                                المسمى الوظيفي
                            </label>
                            <input type="text" id="client_position" name="client_position" value="{{ old('client_position') }}"
                                   class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-amber-500 focus:outline-none transition-colors text-sm"
                                   placeholder="مثال: المدير التنفيذي / مدير العمليات">
                        </div>

                        <div>
                            <label for="company_name" class="block text-xs font-bold text-slate-300 mb-2">
                                اسم الشركة أو النشاط
                            </label>
                            <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}"
                                   class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-amber-500 focus:outline-none transition-colors text-sm"
                                   placeholder="اسم شركتك">
                        </div>
                    </div>

                    {{-- Rating Stars Selector --}}
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-2">
                            درجة التقييم <span class="text-rose-400">*</span>
                        </label>
                        <div class="flex items-center gap-4 bg-slate-900 p-4 rounded-xl border border-slate-800">
                            @for($i = 5; $i >= 1; $i--)
                            <label class="flex items-center gap-1.5 cursor-pointer text-sm text-slate-300 hover:text-amber-400 transition-colors">
                                <input type="radio" name="rating" value="{{ $i }}" {{ old('rating', 5) == $i ? 'checked' : '' }} class="text-amber-500 focus:ring-amber-500 bg-slate-800 border-slate-700">
                                <span>{{ $i }}</span>
                                <i class="fas fa-star text-amber-400 text-xs"></i>
                            </label>
                            @endfor
                        </div>
                    </div>

                    <div>
                        <label for="content" class="block text-xs font-bold text-slate-300 mb-2">
                            رأيك وتجربتك بالتفصيل <span class="text-rose-400">*</span>
                        </label>
                        <textarea id="content" name="content" rows="5" required
                                  class="w-full p-4 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-amber-500 focus:outline-none transition-colors text-sm leading-relaxed"
                                  placeholder="كيف ساعدتك لوحات التحكم؟ ما رأيك في سرعة ودقة العمل وتواصل الفريق؟">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="text-rose-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                                class="w-full py-4 px-8 rounded-2xl bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 hover:from-amber-600 hover:to-orange-600 text-white font-black text-sm shadow-xl shadow-amber-500/25 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-check-circle text-xs"></i>
                            <span>نشر التقييم ومشاركته</span>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

</x-layouts.app>
