<x-layouts.app>
    {{-- Hero Section - تواصل معنا --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-[60vh] flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            {{-- Badge --}}
            @if($heroSection && $heroSection->badge_text)
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-green-600/20 to-emerald-600/20 backdrop-blur-sm border border-green-500/30 rounded-full px-6 py-2 mb-8">
                @if($heroSection->badge_icon)
                <i class="{{ $heroSection->badge_icon }} text-green-400"></i>
                @endif
                <span class="text-sm font-medium text-green-300">{{ $heroSection->badge_text }}</span>
            </div>
            @endif

            @if($heroSection)
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block mb-4">{{ $heroSection->title_line1 }}</span>
                <span class="block bg-gradient-to-r from-green-400 via-cyan-400 to-blue-400 bg-clip-text text-transparent">
                    {{ $heroSection->title_line2 }}
                </span>
            </h1>

            @if($heroSection->subtitle)
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light">
                {{ $heroSection->subtitle }}
            </p>
            @endif
            @endif
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-32 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-7xl mx-auto">
                {{-- Contact Form --}}
                <div>
                    <div class="mb-8">
                        <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                            أرسل لنا
                            <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">رسالة</span>
                        </h2>
                        <p class="text-lg text-gray-600">سنرد عليك في أقرب وقت ممكن</p>
                    </div>

                    @if(session('success'))
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-r-4 border-green-500 text-green-700 p-6 rounded-2xl mb-6 flex items-start gap-4 shadow-lg">
                            <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">تم الإرسال بنجاح!</h4>
                                <p>{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="bg-white rounded-3xl p-8 shadow-2xl border border-gray-100">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-bold mb-3 flex items-center gap-2 text-lg">
                                    <i class="fas fa-user text-blue-600"></i>
                                    الاسم الكامل
                                </label>
                                <input type="text" name="name" id="name"
                                       class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                       placeholder="أدخل اسمك الكامل"
                                       required>
                            </div>

                            <div>
                                <label for="email" class="block text-gray-700 font-bold mb-3 flex items-center gap-2 text-lg">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                    البريد الإلكتروني
                                </label>
                                <input type="email" name="email" id="email"
                                       class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                       placeholder="example@email.com"
                                       required>
                            </div>

                            <div>
                                <label for="phone" class="block text-gray-700 font-bold mb-3 flex items-center gap-2 text-lg">
                                    <i class="fas fa-phone text-blue-600"></i>
                                    رقم الجوال <span class="text-sm font-normal text-gray-500">(اختياري)</span>
                                </label>
                                <input type="tel" name="phone" id="phone"
                                       class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                       placeholder="+966 XX XXX XXXX">
                            </div>

                            <div>
                                <label for="message" class="block text-gray-700 font-bold mb-3 flex items-center gap-2 text-lg">
                                    <i class="fas fa-comment-dots text-blue-600"></i>
                                    الرسالة
                                </label>
                                <textarea name="message" id="message" rows="6"
                                          class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg resize-none"
                                          placeholder="اكتب رسالتك هنا..."
                                          required></textarea>
                            </div>

                            <button type="submit"
                                    class="w-full group bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-black py-5 px-8 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3 text-lg">
                                <i class="fas fa-paper-plane group-hover:rotate-12 transition-transform"></i>
                                <span>إرسال الرسالة</span>
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Contact Info --}}
                <div class="space-y-6">
                    <div class="mb-8">
                        <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                            معلومات
                            <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">التواصل</span>
                        </h2>
                        <p class="text-lg text-gray-600">تواصل معنا عبر إحدى الطرق التالية</p>
                    </div>

                    {{-- Contact Cards --}}
                    @if($companySettings && $companySettings->main_email)
                    <div class="group bg-white rounded-3xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                        <div class="flex items-start gap-5">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                <i class="fas fa-envelope text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-gray-900 mb-2">البريد الإلكتروني</h3>
                                <a href="mailto:{{ $companySettings->main_email }}" class="text-blue-600 hover:text-cyan-500 transition-colors text-lg font-semibold">
                                    {{ $companySettings->main_email }}
                                </a>
                                <p class="text-gray-600 text-sm mt-2">نرد خلال 24 ساعة</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($companySettings && $companySettings->whatsapp_number)
                    <div class="group bg-white rounded-3xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                        <div class="flex items-start gap-5">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                <i class="fab fa-whatsapp text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-gray-900 mb-2">واتساب</h3>
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $companySettings->whatsapp_number) }}" target="_blank" class="text-green-600 hover:text-emerald-500 transition-colors text-lg font-semibold" dir="ltr">
                                    {{ $companySettings->whatsapp_number }}
                                </a>
                                <p class="text-gray-600 text-sm mt-2">تواصل فوري ومباشر</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- @if($companySettings && $companySettings->phone_primary)
                    <div class="group bg-white rounded-3xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                        <div class="flex items-start gap-5">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                <i class="fas fa-phone text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-gray-900 mb-2">الهاتف</h3>
                                <a href="tel:{{ $companySettings->phone_primary }}" class="text-purple-600 hover:text-pink-500 transition-colors text-lg font-semibold" dir="ltr">
                                    {{ $companySettings->phone_primary }}
                                </a>
                                <p class="text-gray-600 text-sm mt-2">السبت - الخميس: 9ص - 6م</p>
                            </div>
                        </div>
                    </div>
                    @endif --}}

                    @if($companySettings && $companySettings->location_text)
                    <div class="group bg-white rounded-3xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                        <div class="flex items-start gap-5">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-600 to-red-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-gray-900 mb-2">الموقع</h3>
                                <p class="text-gray-700 text-lg font-semibold">
                                    {{ $companySettings->location_text }}
                                </p>
                                <p class="text-gray-600 text-sm mt-2">نخدم جميع مناطق المملكة</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Social Media --}}
                    @if($socialLinks && $socialLinks->count() > 0)
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-8 shadow-xl border border-blue-100">
                        <h3 class="text-2xl font-black text-gray-900 mb-4 flex items-center gap-3">
                            <i class="fas fa-share-alt text-blue-600"></i>
                            تابعنا على
                        </h3>
                        <div class="flex gap-4">
                            @foreach($socialLinks as $social)
                            <a href="{{ $social->url }}" target="_blank" class="w-14 h-14 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-500 flex items-center justify-center hover:scale-110 hover:rotate-6 transform transition-all duration-300 shadow-lg">
                                <i class="fab fa-{{ strtolower($social->platform) }} text-white text-xl"></i>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Quick Response Time --}}
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-3xl p-8 border border-green-200">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center">
                                <i class="fas fa-clock text-white text-xl"></i>
                            </div>
                            <h4 class="text-xl font-black text-gray-900">وقت الاستجابة</h4>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            نلتزم بالرد على جميع الاستفسارات خلال <span class="font-bold text-green-600">24 ساعة</span> أو أقل
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

