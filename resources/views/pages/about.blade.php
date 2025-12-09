<x-layouts.app>
    {{-- Hero Section - من نحن --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-[70vh] flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
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
        </div>
    </section>

    {{-- Our Story Section --}}
    <section class="py-32 bg-white relative overflow-hidden">
        {{-- Background Decoration --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-30">
            <div class="absolute top-20 left-20 w-64 h-64 bg-gradient-to-r from-blue-200 to-cyan-200 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-64 h-64 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-sm font-bold px-4 py-2 rounded-full">قصتنا</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                            رحلتنا نحو
                            <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">التميز</span>
                        </h2>
                        <div class="space-y-4 text-gray-700 text-lg leading-relaxed">
                            <p>
                                بدأنا رحلتنا في عام <span class="font-bold text-blue-600">2019</span> بهدف واضح: مساعدة الشركات السعودية على فهم بياناتها واتخاذ قرارات أفضل.
                            </p>
                            <p>
                                نؤمن بأن البيانات هي الذهب الجديد، ولكن القيمة الحقيقية تكمن في كيفية تحليلها وعرضها بطريقة واضحة وقابلة للتنفيذ.
                            </p>
                            <p>
                                اليوم، نفخر بخدمة <span class="font-bold text-purple-600">+250 عميل</span> في مختلف القطاعات، ونواصل الابتكار لتقديم أفضل الحلول.
                            </p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="bg-gradient-to-br from-blue-600 via-cyan-500 to-purple-600 rounded-3xl p-8 text-white">
                            <div class="space-y-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                        <i class="fas fa-bullseye text-3xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-black">رؤيتنا</h3>
                                        <p class="text-blue-100">أن نكون الخيار الأول لتحليل البيانات في المنطقة</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                        <i class="fas fa-rocket text-3xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-black">رسالتنا</h3>
                                        <p class="text-blue-100">تمكين الشركات من اتخاذ قرارات مبنية على البيانات</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                        <i class="fas fa-heart text-3xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-black">قيمنا</h3>
                                        <p class="text-blue-100">الاحترافية، الابتكار، والجودة العالية</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-24 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[linear-gradient(45deg,rgba(255,255,255,.1)_1px,transparent_1px),linear-gradient(-45deg,rgba(255,255,255,.1)_1px,transparent_1px)] bg-[size:60px_60px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-4">
                    إنجازاتنا
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">بالأرقام</span>
                </h2>
                <p class="text-xl text-gray-300">أرقام حقيقية تعكس جودة خدماتنا</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-6xl mx-auto">
                @foreach($stats as $stat)
                <div class="group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-{{ $stat->color_from }}/50 transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <i class="{{ $stat->icon }} text-5xl text-{{ $stat->color_from }} mb-4"></i>
                    <div class="text-5xl font-black bg-gradient-to-r from-{{ $stat->color_from }} to-{{ $stat->color_to }} bg-clip-text text-transparent">{{ $stat->number }}</div>
                    <p class="text-gray-300 mt-2 font-medium">{{ $stat->label }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Core Values Section --}}
    <section class="py-32 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <div class="inline-block mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-sm font-bold px-4 py-2 rounded-full">قيمنا الأساسية</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-6">
                    ما يميزنا عن
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">الآخرين</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    القيم التي نعمل بها يومياً لضمان تقديم أفضل خدمة لعملائنا
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @forelse($features as $feature)
                <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-{{ $feature->color_from }} to-{{ $feature->color_to }} flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="{{ $feature->icon }} text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">{{ $feature->title }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $feature->description }}
                    </p>
                </div>
                @empty
                {{-- Fallback if no features are found --}}
                <div class="col-span-full text-center py-12">
                    <i class="fas fa-info-circle text-6xl text-gray-300 mb-4"></i>
                    <p class="text-xl text-gray-500">لا توجد قيم أساسية متاحة حالياً</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Team Section (Optional - can be populated with real team members later) --}}
    <section class="py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    فريق من
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">الخبراء</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    نجمع أفضل المواهب في مجال تحليل البيانات وتصميم لوحات التحكم
                </p>
            </div>

            <div class="max-w-4xl mx-auto bg-gradient-to-r from-blue-50 via-cyan-50 to-purple-50 rounded-3xl p-12 border border-blue-100 text-center">
                <i class="fas fa-users text-6xl text-blue-600 mb-6"></i>
                <h3 class="text-3xl font-black text-gray-900 mb-4">فريق متخصص ومتفاني</h3>
                <p class="text-xl text-gray-700 mb-6">
                    يضم فريقنا خبراء في:
                </p>
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-xl p-6">
                        <i class="fas fa-chart-bar text-3xl text-blue-600 mb-3"></i>
                        <h4 class="font-bold text-gray-900">تحليل البيانات</h4>
                    </div>
                    <div class="bg-white rounded-xl p-6">
                        <i class="fas fa-paint-brush text-3xl text-purple-600 mb-3"></i>
                        <h4 class="font-bold text-gray-900">تصميم داشبوردات</h4>
                    </div>
                    <div class="bg-white rounded-xl p-6">
                        <i class="fas fa-code text-3xl text-cyan-600 mb-3"></i>
                        <h4 class="font-bold text-gray-900">تطوير التقنيات</h4>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-bold py-4 px-8 rounded-xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-envelope"></i>
                    <span>تواصل معنا</span>
                </a>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center text-white">
            <h2 class="text-4xl md:text-5xl font-black mb-6">
                جاهز للعمل معنا؟
            </h2>
            <p class="text-xl mb-10 text-gray-200 max-w-2xl mx-auto">
                دعنا نحول بياناتك إلى قرارات استراتيجية ناجحة
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('request-design.create') }}" class="group bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 text-white font-black py-5 px-10 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300 inline-flex items-center gap-3">
                    <i class="fas fa-rocket group-hover:rotate-12 transition-transform"></i>
                    <span>ابدأ مشروعك الآن</span>
                </a>
                <a href="{{ route('contact') }}" class="bg-white/10 backdrop-blur-md border-2 border-white/30 text-white font-bold py-5 px-10 rounded-2xl hover:bg-white hover:text-slate-900 transition-all duration-300 inline-flex items-center gap-3">
                    <i class="fas fa-phone"></i>
                    <span>تواصل معنا</span>
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>

