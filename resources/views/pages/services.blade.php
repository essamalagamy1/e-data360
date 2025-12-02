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
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600/20 to-cyan-600/20 backdrop-blur-sm border border-blue-500/30 rounded-full px-6 py-2 mb-8">
                <i class="fas fa-briefcase text-cyan-400"></i>
                <span class="text-sm font-medium text-cyan-300">حلول متكاملة وشاملة</span>
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block mb-4">خدماتنا</span>
                <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                    الاحترافية
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light">
                نقدم مجموعة شاملة من الخدمات المتطورة لتحويل بياناتك إلى أصول استراتيجية قيّمة
            </p>

            {{-- Quick Stats --}}
            <div class="grid grid-cols-3 gap-6 max-w-2xl mx-auto mt-16">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-black bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">6+</div>
                    <p class="text-gray-300 text-sm mt-1">خدمات متخصصة</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-black bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">350+</div>
                    <p class="text-gray-300 text-sm mt-1">مشروع منجز</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-black bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">99%</div>
                    <p class="text-gray-300 text-sm mt-1">رضا العملاء</p>
                </div>
            </div>
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
            <div class="text-center mb-20">
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
                {{-- Service 1: Excel Dashboards --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-emerald-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 to-emerald-500"></div>

                    <div class="relative mb-6 inline-block">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-500 to-emerald-500 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-file-excel text-white text-4xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center transform group-hover:scale-125 transition-transform">
                            <i class="fas fa-star text-white text-xs"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-gray-900 group-hover:text-green-600 transition-colors">
                        لوحات تحكم Excel الاحترافية
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        تصميم لوحات تحكم تفاعلية متقدمة باستخدام Excel مع معادلات ديناميكية، جداول محورية، ورسوم بيانية احترافية
                    </p>

                    {{-- Features --}}
                    <div class="space-y-3 mb-6">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تصميم احترافي وجذاب</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-sm text-gray-700">معادلات متقدمة وديناميكية</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-sm text-gray-700">جداول محورية تفاعلية</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-sm text-gray-700">رسوم بيانية احترافية</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span class="text-sm text-gray-700">سهولة في التحديث والاستخدام</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">يبدأ من</p>
                                <span class="text-3xl font-black bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">320 ر.س</span>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-500">مدة التنفيذ</p>
                                <p class="font-bold text-gray-900">3-5 أيام</p>
                            </div>
                        </div>
                        <a href="{{ route('request-design.create') }}" class="block text-center group/btn bg-gradient-to-r from-green-500 to-emerald-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            <span>اطلب الآن</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                {{-- Service 2: Power BI --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-orange-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-yellow-500 to-orange-500"></div>

                    <div class="relative mb-6 inline-block">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-yellow-500 to-orange-500 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-chart-line text-white text-4xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center transform group-hover:scale-125 transition-transform">
                            <i class="fas fa-fire text-white text-xs"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-gray-900 group-hover:text-yellow-600 transition-colors">
                        لوحات تحكم Power BI
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        إنشاء تقارير تفاعلية متطورة مع تحديثات آلية فورية، تصورات بيانية مذهلة، وإمكانية الوصول من أي مكان
                    </p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-yellow-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تحديثات تلقائية للبيانات</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-yellow-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تفاعلية متقدمة جداً</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-yellow-500 mt-1"></i>
                            <span class="text-sm text-gray-700">وصول من أي جهاز</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-yellow-500 mt-1"></i>
                            <span class="text-sm text-gray-700">ربط بمصادر بيانات متعددة</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-yellow-500 mt-1"></i>
                            <span class="text-sm text-gray-700">مشاركة سهلة مع الفريق</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">يبدأ من</p>
                                <span class="text-3xl font-black bg-gradient-to-r from-yellow-600 to-orange-500 bg-clip-text text-transparent">350 ر.س</span>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-500">مدة التنفيذ</p>
                                <p class="font-bold text-gray-900">5-7 أيام</p>
                            </div>
                        </div>
                        <a href="{{ route('request-design.create') }}" class="block text-center bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            <span>اطلب الآن</span>
                            <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>

                {{-- Service 3: Data Analysis --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-cyan-500"></div>

                    <div class="relative mb-6 inline-block">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-database text-white text-4xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center transform group-hover:scale-125 transition-transform">
                            <i class="fas fa-bolt text-white text-xs"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-gray-900 group-hover:text-blue-600 transition-colors">
                        تحليل البيانات المتقدم
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        تحليل شامل ومتعمق للبيانات لاستخراج رؤى قيمة ومؤثرة تدعم قراراتك الاستراتيجية
                    </p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تحليل إحصائي متقدم</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span class="text-sm text-gray-700">استخراج رؤى قابلة للتنفيذ</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تقارير تفصيلية شاملة</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span class="text-sm text-gray-700">توصيات عملية</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span class="text-sm text-gray-700">دراسة الاتجاهات والأنماط</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">السعر</p>
                                <span class="text-xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">حسب المشروع</span>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-500">مدة التنفيذ</p>
                                <p class="font-bold text-gray-900">حسب الحجم</p>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="block text-center bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            <span>احصل على عرض سعر</span>
                            <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>

                {{-- Service 4: KPI Tracking --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-purple-500 to-pink-500"></div>

                    <div class="relative mb-6 inline-block">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-tachometer-alt text-white text-4xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center transform group-hover:scale-125 transition-transform">
                            <i class="fas fa-chart-bar text-white text-xs"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-gray-900 group-hover:text-purple-600 transition-colors">
                        تتبع مؤشرات الأداء KPIs
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        نظام متكامل وذكي لتتبع ومراقبة مؤشرات الأداء الرئيسية بشكل لحظي ودقيق
                    </p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span class="text-sm text-gray-700">مراقبة لحظية للأداء</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تنبيهات ذكية تلقائية</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تقارير دورية مفصلة</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span class="text-sm text-gray-700">مقارنة بالأهداف</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تحليل الأداء التاريخي</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">السعر</p>
                                <span class="text-xl font-black bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">حسب المشروع</span>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-500">مدة التنفيذ</p>
                                <p class="font-bold text-gray-900">حسب الحجم</p>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="block text-center bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            <span>احصل على عرض سعر</span>
                            <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>

                {{-- Service 5: Business Intelligence --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-red-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-orange-500 to-red-500"></div>

                    <div class="relative mb-6 inline-block">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-orange-500 to-red-500 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-lightbulb text-white text-4xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center transform group-hover:scale-125 transition-transform">
                            <i class="fas fa-brain text-white text-xs"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-gray-900 group-hover:text-orange-600 transition-colors">
                        ذكاء الأعمال BI
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        تحويل البيانات المعقدة إلى رؤى واضحة وقابلة للتنفيذ لاتخاذ قرارات استراتيجية مبنية على الحقائق
                    </p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span class="text-sm text-gray-700">رؤى استراتيجية عميقة</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تحليل تنبؤي متقدم</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span class="text-sm text-gray-700">توصيات قابلة للتطبيق</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تقارير تنفيذية</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span class="text-sm text-gray-700">دعم اتخاذ القرار</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">السعر</p>
                                <span class="text-xl font-black bg-gradient-to-r from-orange-600 to-red-500 bg-clip-text text-transparent">حسب المشروع</span>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-500">مدة التنفيذ</p>
                                <p class="font-bold text-gray-900">حسب الحجم</p>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="block text-center bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            <span>احصل على عرض سعر</span>
                            <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>

                {{-- Service 6: Custom Solutions --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500 to-teal-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-cyan-500 to-teal-500"></div>

                    <div class="relative mb-6 inline-block">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-cyan-500 to-teal-500 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-cogs text-white text-4xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center transform group-hover:scale-125 transition-transform">
                            <i class="fas fa-magic text-white text-xs"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-gray-900 group-hover:text-cyan-600 transition-colors">
                        حلول مخصصة بالكامل
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        نصمم ونطور حلول مخصصة 100% لتلبية احتياجات عملك الفريدة مهما كانت معقدة أو متطلبة
                    </p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-cyan-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تصميم حسب احتياجك</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-cyan-500 mt-1"></i>
                            <span class="text-sm text-gray-700">مرونة كاملة في التنفيذ</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-cyan-500 mt-1"></i>
                            <span class="text-sm text-gray-700">دعم فني مستمر</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-cyan-500 mt-1"></i>
                            <span class="text-sm text-gray-700">تدريب شامل</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-cyan-500 mt-1"></i>
                            <span class="text-sm text-gray-700">صيانة مجانية</span>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">السعر</p>
                                <span class="text-xl font-black bg-gradient-to-r from-cyan-600 to-teal-500 bg-clip-text text-transparent">حسب المشروع</span>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-500">مدة التنفيذ</p>
                                <p class="font-bold text-gray-900">حسب الحجم</p>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="block text-center bg-gradient-to-r from-cyan-500 to-teal-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            <span>احصل على عرض سعر</span>
                            <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Comparison Table Section --}}
    <section class="py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    مقارنة بين
                    <span class="bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">Excel</span>
                    و
                    <span class="bg-gradient-to-r from-yellow-600 to-orange-500 bg-clip-text text-transparent">Power BI</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    اختر الأداة المناسبة لاحتياجاتك
                </p>
            </div>

            <div class="max-w-5xl mx-auto overflow-x-auto">
                <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-3xl p-8 border border-gray-200">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b-2 border-gray-300">
                                <th class="text-right py-4 px-6 font-black text-gray-900 text-lg">الميزة</th>
                                <th class="text-center py-4 px-6">
                                    <div class="flex items-center justify-center gap-2">
                                        <i class="fas fa-file-excel text-green-600 text-2xl"></i>
                                        <span class="font-black text-gray-900 text-lg">Excel</span>
                                    </div>
                                </th>
                                <th class="text-center py-4 px-6">
                                    <div class="flex items-center justify-center gap-2">
                                        <i class="fas fa-chart-bar text-yellow-600 text-2xl"></i>
                                        <span class="font-black text-gray-900 text-lg">Power BI</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="py-4 px-6 font-semibold text-gray-700">السهولة في الاستخدام</td>
                                <td class="py-4 px-6 text-center">
                                    <span class="inline-flex items-center gap-1">
                                        <i class="fas fa-star text-green-500"></i>
                                        <i class="fas fa-star text-green-500"></i>
                                        <i class="fas fa-star text-green-500"></i>
                                        <i class="fas fa-star text-green-500"></i>
                                        <i class="fas fa-star text-green-500"></i>
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <span class="inline-flex items-center gap-1">
                                        <i class="fas fa-star text-yellow-500"></i>
                                        <i class="fas fa-star text-yellow-500"></i>
                                        <i class="fas fa-star text-yellow-500"></i>
                                        <i class="fas fa-star text-gray-300"></i>
                                        <i class="fas fa-star text-gray-300"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-white/50">
                                <td class="py-4 px-6 font-semibold text-gray-700">التفاعلية</td>
                                <td class="py-4 px-6 text-center">
                                    <span class="inline-flex items-center gap-1">
                                        <i class="fas fa-star text-green-500"></i>
                                        <i class="fas fa-star text-green-500"></i>
                                        <i class="fas fa-star text-green-500"></i>
                                        <i class="fas fa-star text-gray-300"></i>
                                        <i class="fas fa-star text-gray-300"></i>
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <span class="inline-flex items-center gap-1">
                                        <i class="fas fa-star text-yellow-500"></i>
                                        <i class="fas fa-star text-yellow-500"></i>
                                        <i class="fas fa-star text-yellow-500"></i>
                                        <i class="fas fa-star text-yellow-500"></i>
                                        <i class="fas fa-star text-yellow-500"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="py-4 px-6 font-semibold text-gray-700">التحديث التلقائي</td>
                                <td class="py-4 px-6 text-center"><i class="fas fa-times text-red-500 text-xl"></i></td>
                                <td class="py-4 px-6 text-center"><i class="fas fa-check text-green-500 text-xl"></i></td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-white/50">
                                <td class="py-4 px-6 font-semibold text-gray-700">المشاركة مع الفريق</td>
                                <td class="py-4 px-6 text-center text-gray-600">محدودة</td>
                                <td class="py-4 px-6 text-center text-green-600 font-bold">ممتازة</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="py-4 px-6 font-semibold text-gray-700">التكلفة</td>
                                <td class="py-4 px-6 text-center text-green-600 font-bold">منخفضة</td>
                                <td class="py-4 px-6 text-center text-gray-600">متوسطة</td>
                            </tr>
                            <tr class="bg-white/50">
                                <td class="py-4 px-6 font-semibold text-gray-700">مناسب لـ</td>
                                <td class="py-4 px-6 text-center text-sm text-gray-600">المشاريع الصغيرة والمتوسطة</td>
                                <td class="py-4 px-6 text-center text-sm text-gray-600">المشاريع المتوسطة والكبيرة</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    {{-- Process Section --}}
    <section class="py-32 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[linear-gradient(45deg,rgba(255,255,255,.1)_1px,transparent_1px),linear-gradient(-45deg,rgba(255,255,255,.1)_1px,transparent_1px)] bg-[size:60px_60px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
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
                            <span>تحدث مع خبير</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

