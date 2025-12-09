<x-layouts.app>
    {{-- Hero Section - الخدمات --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-[70vh] flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            {{-- Badge --}}
            @if($heroSection && $heroSection->badge_text)
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600/20 to-cyan-600/20 backdrop-blur-sm border border-blue-500/30 rounded-full px-6 py-2 mb-8">
                @if($heroSection->badge_icon)
                <i class="{{ $heroSection->badge_icon }} text-cyan-400"></i>
                @endif
                <span class="text-sm font-medium text-cyan-300">{{ $heroSection->badge_text }}</span>
            </div>
            @endif

            @if($heroSection)
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block mb-4">{{ $heroSection->title_line1 }}</span>
                <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                    {{ $heroSection->title_line2 }}
                </span>
            </h1>

            @if($heroSection->subtitle)
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light">
                {{ $heroSection->subtitle }}
            </p>
                @endif
            @endif

            {{-- Quick Stats --}}
            @if($stats && $stats->count() > 0)
            <div class="grid grid-cols-3 gap-6 max-w-2xl mx-auto mt-16">
                @foreach($stats->take(3) as $stat)
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-black bg-gradient-to-r from-{{ $stat->color_from }} to-{{ $stat->color_to }} bg-clip-text text-transparent">{{ $stat->number }}</div>
                    <p class="text-gray-300 text-sm mt-1">{{ $stat->label }}</p>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    {{-- Main Services Section --}}
    <section class="py-32 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 relative overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-40">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-10">
                <div class="inline-block mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-sm font-bold px-4 py-2 rounded-full">خدماتنا المميزة</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                    اختر الخدمة
                    <span class="bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 bg-clip-text text-transparent">المناسبة لك</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    نوفر حلولاً متكاملة تلبي جميع احتياجاتك في تحليل البيانات وإنشاء لوحات التحكم
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($services as $service)
                {{-- Service Card --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                  <div class="absolute inset-0 bg-gradient-to-br from-{{ $service->color_from }} to-{{ $service->color_to }} opacity-0 group-hover:opacity-10 transition-opacity duration-500 pointer-events-none"></div>
<div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-{{ $service->color_from }} to-{{ $service->color_to }} transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left pointer-events-none"></div>

                    <div class="relative mb-6 inline-block">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-{{ $service->color_from }} to-{{ $service->color_to }} flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="{{ $service->icon }} text-white text-4xl"></i>
                        </div>
                        @if($service->badge_icon)
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-{{ $service->badge_color }} rounded-full flex items-center justify-center transform group-hover:scale-125 transition-transform">
                            <i class="{{ $service->badge_icon }} text-white text-xs"></i>
                        </div>
                        @endif
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-gray-900 group-hover:text-{{ $service->color_from }} transition-colors">
                        {{ $service->title }}
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {!! $service->description !!}
                    </p>

                    {{-- Features --}}
                    @if($service->features && $service->features->count() > 0)
                    <div class="space-y-3 mb-6">
                        @foreach($service->features as $feature)
                        <div class="flex items-start gap-3">
                            <i class="{{ $feature->icon ?? 'fas fa-check-circle' }} text-{{ $service->color_from }} mt-1"></i>
                            <span class="text-sm text-gray-700">{{ $feature->feature_text }}</span>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <div class="pt-6 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            {{-- <div>
                                <p class="text-sm text-gray-500 mb-1">{{ $service->price_label }}</p>
                                @if($service->price_starting)
                                <span class="text-3xl font-black bg-gradient-to-r from-{{ $service->color_from }} to-{{ $service->color_to }} bg-clip-text text-transparent">{{ $service->price_starting }}</span>
                                @else
                                <span class="text-xl font-black bg-gradient-to-r from-{{ $service->color_from }} to-{{ $service->color_to }} bg-clip-text text-transparent">{{ $service->price_label }}</span>
                                @endif
                            </div> --}}
                            @if($service->duration)
                            <div class="text-right">
                                <p class="text-sm text-gray-500">مدة التنفيذ</p>
                                <p class="font-bold text-gray-900">{{ $service->duration }}</p>
                            </div>
                            @endif
                        </div>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $companySettings->whatsapp_number) }}" class="block text-center group/btn bg-gradient-to-r from-{{ $service->color_from }} to-{{ $service->color_to }} text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            <span>{{ $service->cta_text }}</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    {{-- Process Section --}}
    <section class="py-32 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[linear-gradient(45deg,rgba(255,255,255,.1)_1px,transparent_1px),linear-gradient(-45deg,rgba(255,255,255,.1)_1px,transparent_1px)] bg-[size:60px_60px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-10">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    كيف
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">نعمل؟</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    عملية بسيطة وواضحة لضمان نجاح مشروعك
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <div class="relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 text-center">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white font-black text-xl">1</div>
                    <i class="fas fa-comments text-5xl text-cyan-400 mb-4 mt-4"></i>
                    <h3 class="text-xl font-black text-white mb-3">الاستشارة</h3>
                    <p class="text-gray-300 text-sm">نستمع لاحتياجاتك ونفهم أهدافك بدقة</p>
                </div>

                <div class="relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 text-center">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white font-black text-xl">2</div>
                    <i class="fas fa-pencil-ruler text-5xl text-purple-400 mb-4 mt-4"></i>
                    <h3 class="text-xl font-black text-white mb-3">التصميم</h3>
                    <p class="text-gray-300 text-sm">نصمم الحل المثالي وفقاً لمتطلباتك</p>
                </div>

                <div class="relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 text-center">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center text-white font-black text-xl">3</div>
                    <i class="fas fa-code text-5xl text-green-400 mb-4 mt-4"></i>
                    <h3 class="text-xl font-black text-white mb-3">التنفيذ</h3>
                    <p class="text-gray-300 text-sm">نطور الحل بأعلى معايير الجودة</p>
                </div>

                <div class="relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 text-center">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center text-white font-black text-xl">4</div>
                    <i class="fas fa-rocket text-5xl text-orange-400 mb-4 mt-4"></i>
                    <h3 class="text-xl font-black text-white mb-3">التسليم</h3>
                    <p class="text-gray-300 text-sm">نسلمك المشروع مع دعم كامل</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 rounded-3xl p-12 text-center text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-[linear-gradient(45deg,rgba(255,255,255,.1)_1px,transparent_1px),linear-gradient(-45deg,rgba(255,255,255,.1)_1px,transparent_1px)] bg-[size:40px_40px]"></div>

                <div class="relative z-10">
                    <h2 class="text-4xl md:text-5xl font-black mb-6">
                        جاهز للبدء؟
                    </h2>
                    <p class="text-xl mb-10 text-blue-100">
                        احصل على استشارة مجانية واكتشف كيف يمكننا مساعدتك
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center">
                        <a href="{{ route('request-design.create') }}" class="bg-white text-blue-600 font-black py-5 px-10 rounded-2xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 inline-flex items-center justify-center gap-3">
                            <i class="fas fa-paper-plane"></i>
                            <span>اطلب خدمتك الآن</span>
                        </a>
                        <a href="{{ route('contact') }}" class="bg-white/20 backdrop-blur-sm border-2 border-white text-white font-bold py-5 px-10 rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-300 inline-flex items-center justify-center gap-3">
                            <i class="fas fa-headset"></i>
                            <span>تحدث معنا الآن </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

