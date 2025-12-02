<x-layouts.app>
    {{-- Hero Section - تصميم عصري مع تأثيرات متقدمة --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-screen flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/2 w-96 h-96 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white max-w-6xl mx-auto">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600/20 to-cyan-600/20 backdrop-blur-sm border border-blue-500/30 rounded-full px-6 py-2 mb-8 animate-fade-in-down">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                    </span>
                    <span class="text-sm font-medium text-cyan-300">رائدون في تحليل البيانات والذكاء الاصطناعي</span>
                </div>

                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight">
                    <span class="block mb-4 bg-gradient-to-r from-white via-blue-100 to-cyan-100 bg-clip-text text-transparent animate-fade-in-up">
                        حوّل بياناتك إلى
                    </span>
                    <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent animate-fade-in-up" style="animation-delay: 0.2s;">
                        قرارات استراتيجية
                    </span>
                </h1>

                <p class="text-xl md:text-2xl lg:text-3xl mb-12 text-gray-300 max-w-4xl mx-auto leading-relaxed font-light">
                    نساعدك على اتخاذ قرارات مبنية على البيانات من خلال
                    <span class="font-bold text-transparent bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text">لوحات تحكم تفاعلية</span> و
                    <span class="font-bold text-transparent bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text">تقارير احترافية</span>
                    باستخدام أحدث تقنيات Excel و Power BI
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-20">
                    <a href="{{ route('request-design.create') }}"
                       class="group relative bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 text-white font-bold py-5 px-10 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 hover:scale-105 transform transition-all duration-300 inline-flex items-center overflow-hidden">
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 via-blue-600 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <i class="fas fa-rocket ml-3 text-xl relative z-10"></i>
                        <span class="relative z-10">ابدأ مشروعك الآن</span>
                    </a>
                    <a href="{{ route('portfolio') }}"
                       class="group bg-white/10 backdrop-blur-md border-2 border-white/30 text-white font-bold py-5 px-10 rounded-2xl hover:bg-white hover:text-slate-900 transition-all duration-300 inline-flex items-center">
                        <i class="fas fa-chart-line ml-3 text-xl"></i>
                        استكشف معرض الأعمال
                    </a>
                </div>

                {{-- Enhanced Stats --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-20">
                    <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-cyan-400/50 transition-all duration-300 transform hover:scale-105 hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <i class="fas fa-users text-4xl text-cyan-400 mb-4 relative z-10"></i>
                        <div class="text-5xl md:text-6xl font-black bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent relative z-10">+250</div>
                        <p class="text-gray-300 mt-3 text-lg font-medium relative z-10">عميل سعيد</p>
                        <div class="flex justify-center mt-2 relative z-10">
                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                            <i class="fas fa-star text-yellow-400 text-xs mr-1"></i>
                            <i class="fas fa-star text-yellow-400 text-xs mr-1"></i>
                            <i class="fas fa-star text-yellow-400 text-xs mr-1"></i>
                            <i class="fas fa-star text-yellow-400 text-xs mr-1"></i>
                        </div>
                    </div>
                    <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-purple-400/50 transition-all duration-300 transform hover:scale-105 hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <i class="fas fa-chart-pie text-4xl text-purple-400 mb-4 relative z-10"></i>
                        <div class="text-5xl md:text-6xl font-black bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent relative z-10">+350</div>
                        <p class="text-gray-300 mt-3 text-lg font-medium relative z-10">لوحة تحكم</p>
                        <p class="text-cyan-400 text-sm mt-1 relative z-10">تفاعلية ومتقدمة</p>
                    </div>
                    <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-blue-400/50 transition-all duration-300 transform hover:scale-105 hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <i class="fas fa-trophy text-4xl text-blue-400 mb-4 relative z-10"></i>
                        <div class="text-5xl md:text-6xl font-black bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent relative z-10">5+</div>
                        <p class="text-gray-300 mt-3 text-lg font-medium relative z-10">سنوات خبرة</p>
                        <p class="text-blue-400 text-sm mt-1 relative z-10">في تحليل البيانات</p>
                    </div>
                    <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-green-400/50 transition-all duration-300 transform hover:scale-105 hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <i class="fas fa-smile text-4xl text-green-400 mb-4 relative z-10"></i>
                        <div class="text-5xl md:text-6xl font-black bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent relative z-10">99%</div>
                        <p class="text-gray-300 mt-3 text-lg font-medium relative z-10">رضا العملاء</p>
                        <p class="text-green-400 text-sm mt-1 relative z-10">تقييم 5 نجوم</p>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-white text-3xl opacity-50"></i>
        </div>
    </section>

    {{-- Services Section - تصميم عصري متطور --}}
    <section class="py-32 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 relative overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-40">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-block mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-sm font-bold px-4 py-2 rounded-full">خدماتنا المتميزة</span>
                </div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black text-gray-900 mb-6">
                    حلول
                    <span class="relative inline-block">
                        <span class="bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 bg-clip-text text-transparent">احترافية</span>
                        <svg class="absolute -bottom-2 left-0 w-full" height="12" viewBox="0 0 200 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10C50 5 150 5 198 10" stroke="url(#gradient)" stroke-width="3" stroke-linecap="round"/>
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#2563eb;stop-opacity:1"/>
                                    <stop offset="50%" style="stop-color:#06b6d4;stop-opacity:1"/>
                                    <stop offset="100%" style="stop-color:#9333ea;stop-opacity:1"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <br class="hidden md:block">
                    لكل احتياجاتك
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed mt-6">
                    نقدم مجموعة شاملة من الخدمات المتطورة لتحويل بياناتك إلى أصول استراتيجية قيّمة
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                {{-- Service 1: Excel Dashboards --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    {{-- Animated Background Gradient --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-emerald-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 to-emerald-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                    {{-- Icon --}}
                    <div class="relative mb-6 inline-block">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-500 to-emerald-500 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            <i class="fas fa-file-excel text-white text-4xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center transform group-hover:scale-125 transition-transform">
                            <i class="fas fa-star text-white text-xs"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-gray-900 group-hover:text-green-600 transition-colors">
                        لوحات تحكم Excel
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        لوحات تحكم تفاعلية فائقة التطور باستخدام Excel مع معادلات ذكية، جداول محورية ديناميكية، ورسوم بيانية احترافية تفاعلية
                    </p>

                    {{-- Features List --}}
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-500 ml-2"></i>
                            تصميم احترافي وجذاب
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-500 ml-2"></i>
                            معادلات متقدمة وديناميكية
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-500 ml-2"></i>
                            سهولة في التحديث والاستخدام
                        </li>
                    </ul>

                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">يبدأ من</p>
                            <span class="text-3xl font-black bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">320 ر.س</span>
                        </div>
                        <a href="{{ route('services') }}"
                           class="group/btn bg-gradient-to-r from-green-500 to-emerald-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center">
                            <span>اطلب الآن</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                {{-- Service 2: Power BI Dashboards --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-orange-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-yellow-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

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
                        تقارير تفاعلية متطورة للغاية مع تحديثات آلية فورية، تصورات بيانية مذهلة، وإمكانية الوصول من أي مكان في العالم
                    </p>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-yellow-500 ml-2"></i>
                            تحديثات تلقائية للبيانات
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-yellow-500 ml-2"></i>
                            تفاعلية متقدمة جداً
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-yellow-500 ml-2"></i>
                            وصول من أي جهاز
                        </li>
                    </ul>

                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">يبدأ من</p>
                            <span class="text-3xl font-black bg-gradient-to-r from-yellow-600 to-orange-500 bg-clip-text text-transparent">350 ر.س</span>
                        </div>
                        <a href="{{ route('services') }}"
                           class="group/btn bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center">
                            <span>اطلب الآن</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Service 3: Data Analysis --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-cyan-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

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
                        تحليل شامل ومتعمق للبيانات باستخدام أحدث الأدوات والتقنيات لاستخراج رؤى قيمة ومؤثرة تدعم قراراتك الاستراتيجية
                    </p>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-blue-500 ml-2"></i>
                            تحليل إحصائي متقدم
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-blue-500 ml-2"></i>
                            استخراج رؤى قابلة للتنفيذ
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-blue-500 ml-2"></i>
                            تقارير تفصيلية شاملة
                        </li>
                    </ul>

                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">السعر</p>
                            <span class="text-xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">حسب المشروع</span>
                        </div>
                        <a href="{{ route('services') }}"
                           class="group/btn bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center">
                            <span>استشارة</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                {{-- Service 4: KPI Tracking --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

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
                        نظام متكامل وذكي لتتبع ومراقبة مؤشرات الأداء الرئيسية (KPIs) بشكل لحظي ودقيق مع تنبيهات آلية
                    </p>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-500 ml-2"></i>
                            مراقبة لحظية للأداء
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-500 ml-2"></i>
                            تنبيهات ذكية تلقائية
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-500 ml-2"></i>
                            تقارير دورية مفصلة
                        </li>
                    </ul>

                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">السعر</p>
                            <span class="text-xl font-black bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">حسب المشروع</span>
                        </div>
                        <a href="{{ route('services') }}"
                           class="group/btn bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center">
                            <span>استشارة</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                {{-- Service 5: Business Intelligence --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-red-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-orange-500 to-red-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

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
                        تحويل البيانات المعقدة إلى رؤى واضحة وقابلة للتنفيذ تساعدك على اتخاذ قرارات استراتيجية مبنية على الحقائق
                    </p>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-orange-500 ml-2"></i>
                            رؤى استراتيجية عميقة
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-orange-500 ml-2"></i>
                            تحليل تنبؤي متقدم
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-orange-500 ml-2"></i>
                            توصيات قابلة للتطبيق
                        </li>
                    </ul>

                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">السعر</p>
                            <span class="text-xl font-black bg-gradient-to-r from-orange-600 to-red-500 bg-clip-text text-transparent">حسب المشروع</span>
                        </div>
                        <a href="{{ route('services') }}"
                           class="group/btn bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center">
                            <span>استشارة</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Service 6: Custom Solutions --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500 to-teal-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-cyan-500 to-teal-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

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
                        نصمم ونطور حلول مخصصة بنسبة 100% لتلبية احتياجات عملك الفريدة مهما كانت معقدة أو متطلبة
                    </p>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-cyan-500 ml-2"></i>
                            تصميم حسب احتياجك
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-cyan-500 ml-2"></i>
                            مرونة كاملة في التنفيذ
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-cyan-500 ml-2"></i>
                            دعم فني مستمر
                        </li>
                    </ul>

                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">السعر</p>
                            <span class="text-xl font-black bg-gradient-to-r from-cyan-600 to-teal-500 bg-clip-text text-transparent">حسب المشروع</span>
                        </div>
                        <a href="{{ route('services') }}"
                           class="group/btn bg-gradient-to-r from-cyan-500 to-teal-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center">
                            <span>استشارة</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- View All Services Button --}}
            <div class="text-center mt-12">
                <a href="{{ route('services') }}"
                   class="group inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-bold py-5 px-12 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 via-cyan-500 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="relative z-10 text-lg">استكشف جميع الخدمات</span>
                    <i class="fas fa-arrow-left relative z-10 transform group-hover:-translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- Featured Projects --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    مشاريع <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">مميزة</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    استعرض بعض من أفضل أعمالنا التي ساعدت عملائنا على تحقيق نتائج استثنائية
                </p>
            </div>
            
            @if(isset($featuredProjects) && count($featuredProjects) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($featuredProjects as $project)
                        <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                            <img src="{{ asset($project->main_image) }}" alt="{{ $project->title }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center p-6">
                                <div class="text-center text-white transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                                    <h3 class="text-2xl font-bold mb-2">{{ $project->title }}</h3>
                                    <p class="mb-4">{{ $project->short_description }}</p>
                                    <a href="{{ route('projects.show', $project) }}" class="inline-block bg-white text-blue-900 font-bold py-2 px-6 rounded-full hover:bg-cyan-400 hover:text-white transition-colors">
                                        عرض التفاصيل
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center">
                            <i class="fas fa-chart-pie text-white text-6xl opacity-50"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">لوحة تحكم المبيعات</h3>
                            <p class="text-gray-600 mb-4">تحليل شامل لأداء المبيعات مع مؤشرات الأداء الرئيسية</p>
                            <a href="{{ route('portfolio') }}" class="text-blue-600 hover:text-cyan-500 font-semibold">
                                عرض المزيد <i class="fas fa-arrow-left mr-2"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-400 flex items-center justify-center">
                            <i class="fas fa-users text-white text-6xl opacity-50"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">لوحة الموارد البشرية</h3>
                            <p class="text-gray-600 mb-4">متابعة شاملة لبيانات الموظفين والأداء الوظيفي</p>
                            <a href="{{ route('portfolio') }}" class="text-blue-600 hover:text-cyan-500 font-semibold">
                                عرض المزيد <i class="fas fa-arrow-left mr-2"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-green-500 to-teal-400 flex items-center justify-center">
                            <i class="fas fa-dollar-sign text-white text-6xl opacity-50"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">لوحة التحليل المالي</h3>
                            <p class="text-gray-600 mb-4">تقارير مالية تفصيلية مع تحليل الربحية والتكاليف</p>
                            <a href="{{ route('portfolio') }}" class="text-blue-600 hover:text-cyan-500 font-semibold">
                                عرض المزيد <i class="fas fa-arrow-left mr-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            
            <div class="text-center mt-12">
                <a href="{{ route('portfolio') }}" class="inline-block bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold py-4 px-8 rounded-full hover:shadow-2xl hover:scale-105 transform transition duration-300">
                    <i class="fas fa-folder-open ml-2"></i>
                    عرض جميع الأعمال
                </a>
            </div>
        </div>
    </section>

    {{-- Why Choose Us - تصميم متطور وحديث --}}
    <section class="relative py-32 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 overflow-hidden">
        {{-- Animated Background Pattern --}}
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[linear-gradient(45deg,rgba(255,255,255,.1)_1px,transparent_1px),linear-gradient(-45deg,rgba(255,255,255,.1)_1px,transparent_1px)] bg-[size:60px_60px]"></div>
        </div>

        {{-- Floating Elements --}}
        <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-block mb-4">
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-400 text-slate-900 text-sm font-bold px-5 py-2 rounded-full">
                        ✨ لماذا نحن الأفضل
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6">
                    لماذا تختار
                    <span class="relative inline-block">
                        <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">EDATA 360</span>
                        <svg class="absolute -bottom-3 left-0 w-full" height="12" viewBox="0 0 300 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10C100 5 200 5 298 10" stroke="url(#gradient2)" stroke-width="4" stroke-linecap="round"/>
                            <defs>
                                <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#06b6d4;stop-opacity:1"/>
                                    <stop offset="50%" style="stop-color:#3b82f6;stop-opacity:1"/>
                                    <stop offset="100%" style="stop-color:#a855f7;stop-opacity:1"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    نحن الخيار الأمثل للشركات الطموحة التي تسعى للتميز والريادة في عالم البيانات
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Feature 1 --}}
                <div class="group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-cyan-400/50 transition-all duration-500 transform hover:-translate-y-4 hover:scale-105 text-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative z-10 mb-6">
                        <div class="w-24 h-24 mx-auto rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-bolt text-white text-4xl"></i>
                        </div>
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-16 bg-cyan-400 rounded-full blur-2xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-white relative z-10">سرعة فائقة</h3>
                    <p class="text-gray-300 leading-relaxed relative z-10 mb-4">
                        نلتزم بتسليم مشاريعك في الوقت المحدد بدقة 100% دون أي تأخير أو تنازل عن الجودة
                    </p>
                    <div class="flex items-center justify-center gap-2 text-cyan-400 font-bold relative z-10">
                        <i class="fas fa-clock"></i>
                        <span>تسليم في الموعد</span>
                    </div>
                </div>

                {{-- Feature 2 --}}
                <div class="group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-purple-400/50 transition-all duration-500 transform hover:-translate-y-4 hover:scale-105 text-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative z-10 mb-6">
                        <div class="w-24 h-24 mx-auto rounded-2xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-bullseye text-white text-4xl"></i>
                        </div>
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-16 bg-purple-400 rounded-full blur-2xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-white relative z-10">دقة مطلقة</h3>
                    <p class="text-gray-300 leading-relaxed relative z-10 mb-4">
                        نضمن دقة البيانات والتحليلات بنسبة 100% مع مراجعة شاملة ومتعددة المراحل من فريق الخبراء
                    </p>
                    <div class="flex items-center justify-center gap-2 text-purple-400 font-bold relative z-10">
                        <i class="fas fa-check-circle"></i>
                        <span>دقة 100%</span>
                    </div>
                </div>

                {{-- Feature 3 --}}
                <div class="group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-green-400/50 transition-all duration-500 transform hover:-translate-y-4 hover:scale-105 text-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-emerald-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative z-10 mb-6">
                        <div class="w-24 h-24 mx-auto rounded-2xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-paint-brush text-white text-4xl"></i>
                        </div>
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-16 bg-green-400 rounded-full blur-2xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-white relative z-10">تصاميم مبتكرة</h3>
                    <p class="text-gray-300 leading-relaxed relative z-10 mb-4">
                        لوحات تحكم جذابة وعصرية وسهلة الاستخدام مع تصورات بيانية إبداعية تجعل البيانات تنطق
                    </p>
                    <div class="flex items-center justify-center gap-2 text-green-400 font-bold relative z-10">
                        <i class="fas fa-palette"></i>
                        <span>تصاميم احترافية</span>
                    </div>
                </div>

                {{-- Feature 4 --}}
                <div class="group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-orange-400/50 transition-all duration-500 transform hover:-translate-y-4 hover:scale-105 text-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-red-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative z-10 mb-6">
                        <div class="w-24 h-24 mx-auto rounded-2xl bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-map-marked-alt text-white text-4xl"></i>
                        </div>
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-16 bg-orange-400 rounded-full blur-2xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-white relative z-10">خبرة سعودية</h3>
                    <p class="text-gray-300 leading-relaxed relative z-10 mb-4">
                        فهم عميق للسوق السعودي ومتطلبات الأعمال المحلية مع التزام تام بالمعايير والأنظمة
                    </p>
                    <div class="flex items-center justify-center gap-2 text-orange-400 font-bold relative z-10">
                        <i class="fas fa-flag"></i>
                        <span>صنع في السعودية</span>
                    </div>
                </div>
            </div>

            {{-- Additional Benefits --}}
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent mb-2">24/7</div>
                    <p class="text-gray-300 font-medium">دعم فني متواصل</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent mb-2">100%</div>
                    <p class="text-gray-300 font-medium">ضمان الجودة</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent mb-2">5+</div>
                    <p class="text-gray-300 font-medium">سنوات خبرة</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-orange-400 to-red-400 bg-clip-text text-transparent mb-2">∞</div>
                    <p class="text-gray-300 font-medium">مراجعات مجانية</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials - تصميم عصري متطور --}}
    <section class="py-32 bg-white relative overflow-hidden">
        {{-- Background Decoration --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-30">
            <div class="absolute top-10 left-10 w-64 h-64 bg-gradient-to-r from-blue-200 to-cyan-200 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-block mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-sm font-bold px-5 py-2 rounded-full">
                        ⭐ شهادات عملائنا
                    </span>
                </div>
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black text-gray-900 mb-6">
                    ماذا يقول
                    <span class="relative inline-block">
                        <span class="bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 bg-clip-text text-transparent">عملاؤنا</span>
                    </span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    قصص نجاح حقيقية من عملاء راضين حققوا نتائج استثنائية معنا
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                {{-- Testimonial 1 --}}
                <div class="group relative bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-blue-100 overflow-hidden">
                    {{-- Quote Mark Background --}}
                    <div class="absolute -top-6 -right-6 text-[120px] text-blue-100 font-serif leading-none opacity-50">"</div>

                    {{-- Rating Stars --}}
                    <div class="flex gap-1 mb-4 relative z-10">
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                    </div>

                    {{-- Review Text --}}
                    <p class="text-gray-700 text-lg leading-relaxed mb-6 relative z-10">
                        خدمة ممتازة واحترافية لا مثيل لها. لوحة التحكم التي صمموها لنا ساعدتنا في اتخاذ قرارات أفضل وزيادة المبيعات بنسبة
                        <span class="font-bold text-blue-600">35%</span> في 3 أشهر فقط!
                    </p>

                    {{-- Reviewer Info --}}
                    <div class="flex items-center gap-4 relative z-10">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-white font-black text-2xl shadow-lg ring-4 ring-blue-100">
                            م
                        </div>
                        <div>
                            <h4 class="font-black text-gray-900 text-lg">محمد العتيبي</h4>
                            <p class="text-sm text-gray-600 font-medium">مدير عام - شركة تجارية رائدة</p>
                            <div class="flex items-center gap-1 mt-1">
                                <i class="fas fa-check-circle text-blue-500 text-xs"></i>
                                <span class="text-xs text-blue-600 font-semibold">عميل موثق</span>
                            </div>
                        </div>
                    </div>

                    {{-- Badge --}}
                    <div class="absolute top-6 left-6 bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        عميل VIP
                    </div>
                </div>

                {{-- Testimonial 2 --}}
                <div class="group relative bg-gradient-to-br from-white to-purple-50 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-purple-100 overflow-hidden">
                    <div class="absolute -top-6 -right-6 text-[120px] text-purple-100 font-serif leading-none opacity-50">"</div>

                    <div class="flex gap-1 mb-4 relative z-10">
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                    </div>

                    <p class="text-gray-700 text-lg leading-relaxed mb-6 relative z-10">
                        فريق محترف جداً وسريع في التنفيذ. التقارير أصبحت
                        <span class="font-bold text-purple-600">أسهل وأوضح بكثير</span>.
                        وفرنا ساعات عمل كثيرة! أنصح بهم بشدة لكل من يبحث عن الاحترافية.
                    </p>

                    <div class="flex items-center gap-4 relative z-10">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-600 to-pink-500 flex items-center justify-center text-white font-black text-2xl shadow-lg ring-4 ring-purple-100">
                            س
                        </div>
                        <div>
                            <h4 class="font-black text-gray-900 text-lg">سارة القحطاني</h4>
                            <p class="text-sm text-gray-600 font-medium">مديرة الموارد البشرية</p>
                            <div class="flex items-center gap-1 mt-1">
                                <i class="fas fa-check-circle text-purple-500 text-xs"></i>
                                <span class="text-xs text-purple-600 font-semibold">عميل موثق</span>
                            </div>
                        </div>
                    </div>

                    <div class="absolute top-6 left-6 bg-gradient-to-r from-purple-600 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        شريك نجاح
                    </div>
                </div>

                {{-- Testimonial 3 --}}
                <div class="group relative bg-gradient-to-br from-white to-green-50 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-green-100 overflow-hidden">
                    <div class="absolute -top-6 -right-6 text-[120px] text-green-100 font-serif leading-none opacity-50">"</div>

                    <div class="flex gap-1 mb-4 relative z-10">
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                    </div>

                    <p class="text-gray-700 text-lg leading-relaxed mb-6 relative z-10">
                        تجربة رائعة من البداية للنهاية. الفريق متعاون جداً وفاهم احتياجاتنا بشكل
                        <span class="font-bold text-green-600">ممتاز</span>.
                        النتائج فاقت توقعاتنا!
                    </p>

                    <div class="flex items-center gap-4 relative z-10">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center text-white font-black text-2xl shadow-lg ring-4 ring-green-100">
                            ع
                        </div>
                        <div>
                            <h4 class="font-black text-gray-900 text-lg">عبدالله الشمري</h4>
                            <p class="text-sm text-gray-600 font-medium">صاحب مؤسسة ناشئة</p>
                            <div class="flex items-center gap-1 mt-1">
                                <i class="fas fa-check-circle text-green-500 text-xs"></i>
                                <span class="text-xs text-green-600 font-semibold">عميل موثق</span>
                            </div>
                        </div>
                    </div>

                    <div class="absolute top-6 left-6 bg-gradient-to-r from-green-600 to-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        عميل سعيد
                    </div>
                </div>
            </div>

            {{-- Trust Indicators --}}
            <div class="max-w-4xl mx-auto mt-16">
                <div class="bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 rounded-3xl p-8 border border-blue-100">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                        <div>
                            <div class="text-4xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent mb-2">99%</div>
                            <p class="text-gray-700 font-semibold">رضا العملاء</p>
                        </div>
                        <div>
                            <div class="text-4xl font-black bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent mb-2">250+</div>
                            <p class="text-gray-700 font-semibold">عميل سعيد</p>
                        </div>
                        <div>
                            <div class="text-4xl font-black bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent mb-2">5.0</div>
                            <p class="text-gray-700 font-semibold">تقييم العملاء</p>
                        </div>
                        <div>
                            <div class="text-4xl font-black bg-gradient-to-r from-orange-600 to-red-500 bg-clip-text text-transparent mb-2">90%</div>
                            <p class="text-gray-700 font-semibold">عملاء متكررون</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Final CTA - دعوة لاتخاذ إجراء بتصميم عصري --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 py-32 overflow-hidden">
        {{-- Animated Grid Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.03)_1px,transparent_1px)] bg-[size:60px_60px]"></div>

        {{-- Floating Gradient Orbs --}}
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/2 w-96 h-96 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto text-center">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-cyan-600/20 to-blue-600/20 backdrop-blur-sm border border-cyan-500/30 rounded-full px-6 py-3 mb-8">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan-500"></span>
                    </span>
                    <span class="text-base font-bold text-cyan-300">🚀 جاهز للبدء؟ الفرصة الآن!</span>
                </div>

                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 text-white leading-tight">
                    <span class="block mb-4">هل أنت مستعد لتحويل</span>
                    <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                        بياناتك إلى نجاحات؟
                    </span>
                </h2>

                <p class="text-xl md:text-2xl lg:text-3xl mb-12 text-gray-300 max-w-4xl mx-auto leading-relaxed font-light">
                    انضم إلى <span class="font-bold text-cyan-400">250+ شركة</span> سعودية ناجحة واتخذ قرارات أذكى مبنية على البيانات.
                    <span class="block mt-4 text-lg md:text-xl text-gray-400">فريقنا جاهز لمساعدتك اليوم!</span>
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="{{ route('request-design.create') }}"
                       class="group relative bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 text-white font-black py-6 px-12 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300 inline-flex items-center overflow-hidden text-lg">
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 via-blue-600 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <i class="fas fa-rocket ml-3 text-2xl relative z-10"></i>
                        <span class="relative z-10">ابدأ مشروعك الآن - مجاناً</span>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="group bg-white/10 backdrop-blur-md border-2 border-white/30 text-white font-black py-6 px-12 rounded-2xl hover:bg-white hover:text-slate-900 transition-all duration-300 inline-flex items-center text-lg">
                        <i class="fas fa-phone ml-3 text-2xl"></i>
                        <span>تحدث مع خبير</span>
                    </a>
                </div>

                {{-- Contact Cards --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <div class="group relative bg-white/10 backdrop-blur-xl rounded-2xl p-6 border border-white/20 hover:border-cyan-400/50 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <i class="fas fa-envelope text-5xl text-cyan-400 mb-4 transform group-hover:scale-110 transition-transform relative z-10"></i>
                        <h4 class="font-black text-white mb-2 text-lg relative z-10">راسلنا عبر البريد</h4>
                        <p class="text-gray-300 mb-3 relative z-10">نرد خلال ساعة</p>
                        <a href="mailto:info@edata360.com" class="text-cyan-400 font-bold hover:text-cyan-300 transition-colors relative z-10 flex items-center justify-center gap-2">
                            <span>info@edata360.com</span>
                            <i class="fas fa-arrow-left text-sm transform group-hover:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>

                    <div class="group relative bg-white/10 backdrop-blur-xl rounded-2xl p-6 border border-white/20 hover:border-green-400/50 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-emerald-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <i class="fab fa-whatsapp text-5xl text-green-400 mb-4 transform group-hover:scale-110 transition-transform relative z-10"></i>
                        <h4 class="font-black text-white mb-2 text-lg relative z-10">واتساب مباشر</h4>
                        <p class="text-gray-300 mb-3 relative z-10">متاحون 24/7</p>
                        <a href="https://wa.me/966XXXXXXXXX" class="text-green-400 font-bold hover:text-green-300 transition-colors relative z-10 flex items-center justify-center gap-2">
                            <span>تواصل فوري</span>
                            <i class="fas fa-arrow-left text-sm transform group-hover:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>

                    <div class="group relative bg-white/10 backdrop-blur-xl rounded-2xl p-6 border border-white/20 hover:border-purple-400/50 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <i class="fas fa-phone text-5xl text-purple-400 mb-4 transform group-hover:scale-110 transition-transform relative z-10"></i>
                        <h4 class="font-black text-white mb-2 text-lg relative z-10">اتصل بنا الآن</h4>
                        <p class="text-gray-300 mb-3 relative z-10">استشارة مجانية</p>
                        <a href="tel:+966XXXXXXXXX" class="text-purple-400 font-bold hover:text-purple-300 transition-colors relative z-10 flex items-center justify-center gap-2">
                            <span>+966 XX XXX XXXX</span>
                            <i class="fas fa-arrow-left text-sm transform group-hover:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                {{-- Special Offer Banner --}}
                <div class="mt-16 bg-gradient-to-r from-yellow-500/20 via-orange-500/20 to-red-500/20 backdrop-blur-sm border-2 border-yellow-500/30 rounded-2xl p-8 max-w-3xl mx-auto">
                    <div class="flex items-center justify-center gap-3 mb-4">
                        <i class="fas fa-gift text-4xl text-yellow-400"></i>
                        <h3 class="text-3xl font-black text-white">عرض خاص لفترة محدودة!</h3>
                        <i class="fas fa-gift text-4xl text-yellow-400"></i>
                    </div>
                    <p class="text-xl text-gray-200 mb-4">
                        احصل على <span class="font-black text-yellow-400 text-2xl">خصم 20%</span> على أول مشروع + استشارة مجانية
                    </p>
                    <div class="flex items-center justify-center gap-2 text-yellow-300">
                        <i class="fas fa-clock"></i>
                        <span class="font-bold">العرض ينتهي قريباً - لا تفوت الفرصة!</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll Pattern --}}
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500 to-transparent"></div>
    </section>
</x-layouts.app>
