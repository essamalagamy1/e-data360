<x-layouts.app>
    
    @php
        $rawWhatsapp = $companySettings->whatsapp_number ?? '+966501234567';
        $cleanWhatsapp = preg_replace('/[^0-9]/', '', $rawWhatsapp);
    @endphp

    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-12 pb-16 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cyan-500/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-5">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="fas fa-headset"></i>
                <span>فريق الدعم والاستشارات متاح لخدمتك</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                تواصل مع <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent">خبراء E-DATA 360</span>
            </h1>

            <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed motion-reveal">
                سواء كان لديك استفسار عن خدماتنا، طلب تسعير مخصص، أو ترغب في مناقشة مشروع تحليل بيانات، نحن هنا للإجابة الفورية.
            </p>
        </div>
    </section>

    {{-- Contact Bento Grid Section --}}
    <section class="py-16 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                
                {{-- Left Info Cards (5 cols) --}}
                <div class="lg:col-span-5 space-y-5" data-motion-stagger>
                    
                    {{-- WhatsApp Card --}}
                    <div class="stagger-item p-7 rounded-3xl bg-slate-950 border border-emerald-500/30 hover:border-emerald-500/60 shadow-xl transition-all">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-2xl">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white">المحادثة المباشرة (واتساب)</h3>
                                <p class="text-xs text-slate-400">الرد الأسرع خلال دقائق</p>
                            </div>
                        </div>
                        <a href="https://wa.me/{{ $cleanWhatsapp }}" target="_blank"
                           class="w-full py-3 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-black text-sm text-center shadow-lg shadow-emerald-600/20 transition-all flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp text-base"></i>
                            <span>تواصل عبر واتساب الآن</span>
                        </a>
                    </div>

                    {{-- Email Card --}}
                    @if($companySettings && $companySettings->main_email)
                    <div class="stagger-item p-7 rounded-3xl bg-slate-950 border border-slate-800 hover:border-cyan-500/40 shadow-xl transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-xl">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white">البريد الإلكتروني</h3>
                                <a href="mailto:{{ $companySettings->main_email }}" class="text-sm text-cyan-400 font-num hover:underline" dir="ltr">
                                    {{ $companySettings->main_email }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Location Card --}}
                    @if($companySettings && $companySettings->location_text)
                    <div class="stagger-item p-7 rounded-3xl bg-slate-950 border border-slate-800 hover:border-cyan-500/40 shadow-xl transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 flex items-center justify-center text-xl">
                                <i class="fas fa-location-dot"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white">المقر الرئيسي</h3>
                                <p class="text-sm text-slate-300">{{ $companySettings->location_text }}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Working Hours --}}
                    <div class="stagger-item p-7 rounded-3xl bg-slate-950 border border-slate-800 shadow-xl">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-400 flex items-center justify-center text-xl">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white">أوقات العمل</h3>
                                <p class="text-xs text-slate-400">الأحد - الخميس: 9:00 ص - 6:00 م</p>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Right Form (7 cols) --}}
                <div class="lg:col-span-7">
                    <div class="p-8 sm:p-10 rounded-3xl bg-slate-950 border border-slate-800 shadow-2xl">
                        <h2 class="text-2xl font-black text-white mb-2">أرسل لنا رسالتك</h2>
                        <p class="text-xs sm:text-sm text-slate-400 mb-8">سيتواصل معك أحد ممثلينا خلال ساعات العمل الرسمية</p>

                        @if(session('success'))
                            <div class="p-4 rounded-xl bg-emerald-950/80 border border-emerald-500/40 text-emerald-300 text-sm mb-6 flex items-center gap-3">
                                <i class="fas fa-check-circle text-emerald-400 text-lg"></i>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <label for="name" class="block text-xs font-bold text-slate-300 mb-2">الاسم الكامل <span class="text-rose-400">*</span></label>
                                <input type="text" name="name" id="name" required
                                       class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm"
                                       placeholder="أدخل اسمك الكريم">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="block text-xs font-bold text-slate-300 mb-2">البريد الإلكتروني <span class="text-rose-400">*</span></label>
                                    <input type="email" name="email" id="email" required
                                           class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm text-left" dir="ltr"
                                           placeholder="name@example.com">
                                </div>
                                <div>
                                    <label for="phone" class="block text-xs font-bold text-slate-300 mb-2">رقم الجوال</label>
                                    <input type="tel" name="phone" id="phone"
                                           class="w-full px-4 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm text-left" dir="ltr"
                                           placeholder="+966 5X XXX XXXX">
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-xs font-bold text-slate-300 mb-2">نص الرسالة أو الاستفسار <span class="text-rose-400">*</span></label>
                                <textarea name="message" id="message" rows="5" required
                                          class="w-full p-4 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors text-sm leading-relaxed"
                                          placeholder="اكتب تفاصيل استفسارك أو المطلوب هنا..."></textarea>
                            </div>

                            <div>
                                <button type="submit"
                                        class="w-full py-4 px-8 rounded-2xl bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 hover:from-amber-600 hover:to-orange-600 text-white font-black text-sm shadow-xl shadow-amber-500/25 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                                    <i class="fas fa-paper-plane text-xs"></i>
                                    <span>إرسال الرسالة الآن</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

</x-layouts.app>
