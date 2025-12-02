<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-center text-white">
            <h1 class="text-5xl md:text-6xl font-black mb-6">
                خدماتنا <span class="bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">الاحترافية</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                حلول متكاملة لتحليل البيانات وإنشاء لوحات التحكم الاحترافية
            </p>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            @if(isset($services) && count($services) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($services as $service)
                        <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3">
                            <div class="text-6xl mb-6 text-blue-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-gray-900">{{ $service->title }}</h3>
                            <p class="text-gray-600 leading-relaxed">{{ $service->short_description }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Excel Dashboard --}}
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-emerald-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                        <div class="text-6xl mb-6 text-green-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fas fa-file-excel"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-green-600 transition-colors">لوحات تحكم Excel</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            نصمم لوحات تحكم تفاعلية متقدمة باستخدام Excel تتضمن:
                        </p>
                        <ul class="text-right text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-green-600 ml-2"></i> معادلات ديناميكية متقدمة</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-600 ml-2"></i> جداول محورية احترافية</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-600 ml-2"></i> رسوم بيانية تفاعلية</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-600 ml-2"></i> تصميم جذاب وسهل الاستخدام</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-600 ml-2"></i> تحديث تلقائي للبيانات</li>
                        </ul>
                        <div class="text-center pt-4 border-t border-gray-200">
                            <span class="text-3xl font-black bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">320 ر.س</span>
                        </div>
                    </div>
                    
                    {{-- Power BI Dashboard --}}
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-yellow-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                        <div class="text-6xl mb-6 text-yellow-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-yellow-600 transition-colors">لوحات تحكم Power BI</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            تقارير تفاعلية متطورة مع إمكانيات متقدمة:
                        </p>
                        <ul class="text-right text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-yellow-600 ml-2"></i> تحديثات آلية من مصادر متعددة</li>
                            <li class="flex items-center"><i class="fas fa-check text-yellow-600 ml-2"></i> تصورات بيانية مذهلة</li>
                            <li class="flex items-center"><i class="fas fa-check text-yellow-600 ml-2"></i> الوصول من أي مكان</li>
                            <li class="flex items-center"><i class="fas fa-check text-yellow-600 ml-2"></i> تقارير تفاعلية متقدمة</li>
                            <li class="flex items-center"><i class="fas fa-check text-yellow-600 ml-2"></i> دعم فني مستمر</li>
                        </ul>
                        <div class="text-center pt-4 border-t border-gray-200">
                            <span class="text-3xl font-black bg-gradient-to-r from-yellow-600 to-orange-500 bg-clip-text text-transparent">350 ر.س</span>
                        </div>
                    </div>
                    
                    {{-- Data Analysis --}}
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                        <div class="text-6xl mb-6 text-blue-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors">تحليل البيانات</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            تحليل شامل ومتعمق لبياناتك يشمل:
                        </p>
                        <ul class="text-right text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 ml-2"></i> تنظيف وتنقية البيانات</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 ml-2"></i> تحليل إحصائي متقدم</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 ml-2"></i> اكتشاف الأنماط والاتجاهات</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 ml-2"></i> توقعات مستقبلية</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 ml-2"></i> تقارير تفصيلية</li>
                        </ul>
                        <div class="text-center pt-4 border-t border-gray-200">
                            <span class="text-2xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">حسب المشروع</span>
                        </div>
                    </div>
                    
                    {{-- KPI Tracking --}}
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                        <div class="text-6xl mb-6 text-purple-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-purple-600 transition-colors">تتبع مؤشرات الأداء KPI</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            نظام متكامل لمراقبة الأداء يتضمن:
                        </p>
                        <ul class="text-right text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-purple-600 ml-2"></i> تحديد KPIs الأساسية</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-600 ml-2"></i> لوحات متابعة لحظية</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-600 ml-2"></i> تنبيهات تلقائية</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-600 ml-2"></i> تقارير دورية</li>
                            <li class="flex items-center"><i class="fas fa-check text-purple-600 ml-2"></i> مقارنات زمنية</li>
                        </ul>
                        <div class="text-center pt-4 border-t border-gray-200">
                            <span class="text-2xl font-black bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">حسب المشروع</span>
                        </div>
                    </div>
                    
                    {{-- Business Insights --}}
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-500 to-red-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                        <div class="text-6xl mb-6 text-orange-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-orange-600 transition-colors">رؤى الأعمال</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            تحويل البيانات إلى رؤى قابلة للتنفيذ:
                        </p>
                        <ul class="text-right text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-orange-600 ml-2"></i> تحليل شامل للأداء</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-600 ml-2"></i> تحديد الفرص والتحديات</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-600 ml-2"></i> توصيات استراتيجية</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-600 ml-2"></i> دراسات مقارنة</li>
                            <li class="flex items-center"><i class="fas fa-check text-orange-600 ml-2"></i> خطط عمل واضحة</li>
                        </ul>
                        <div class="text-center pt-4 border-t border-gray-200">
                            <span class="text-2xl font-black bg-gradient-to-r from-orange-600 to-red-500 bg-clip-text text-transparent">حسب المشروع</span>
                        </div>
                    </div>
                    
                    {{-- Custom Solutions --}}
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-500 to-teal-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                        <div class="text-6xl mb-6 text-cyan-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-cyan-600 transition-colors">حلول مخصصة</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            نصمم حلول فريدة تناسب احتياجاتك:
                        </p>
                        <ul class="text-right text-gray-600 space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-cyan-600 ml-2"></i> استشارات متخصصة</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-600 ml-2"></i> تصميم حسب الطلب</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-600 ml-2"></i> تكامل مع أنظمتك</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-600 ml-2"></i> تدريب الفريق</li>
                            <li class="flex items-center"><i class="fas fa-check text-cyan-600 ml-2"></i> دعم مستمر</li>
                        </ul>
                        <div class="text-center pt-4 border-t border-gray-200">
                            <span class="text-2xl font-black bg-gradient-to-r from-cyan-600 to-teal-500 bg-clip-text text-transparent">حسب المشروع</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- Comparison Table --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    مقارنة <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">الخدمات</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    اختر الحل الأمثل لاحتياجاتك
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto overflow-x-auto">
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white">
                                <th class="p-4 text-right font-bold">الميزة</th>
                                <th class="p-4 text-center font-bold">Excel Dashboard</th>
                                <th class="p-4 text-center font-bold">Power BI Dashboard</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50 transition-colors">
                                <td class="p-4 font-semibold">السعر</td>
                                <td class="p-4 text-center text-green-600 font-bold">320 ر.س</td>
                                <td class="p-4 text-center text-blue-600 font-bold">350 ر.س</td>
                            </tr>
                            <tr class="border-b bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="p-4 font-semibold">سهولة الاستخدام</td>
                                <td class="p-4 text-center">
                                    <div class="flex justify-center gap-1">
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                    </div>
                                </td>
                                <td class="p-4 text-center">
                                    <div class="flex justify-center gap-1">
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="far fa-star text-gray-300"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50 transition-colors">
                                <td class="p-4 font-semibold">التحديث التلقائي</td>
                                <td class="p-4 text-center"><i class="fas fa-check text-green-600"></i> محدود</td>
                                <td class="p-4 text-center"><i class="fas fa-check-double text-green-600"></i> كامل</td>
                            </tr>
                            <tr class="border-b bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="p-4 font-semibold">التصورات البيانية</td>
                                <td class="p-4 text-center"><i class="fas fa-check text-green-600"></i> جيد</td>
                                <td class="p-4 text-center"><i class="fas fa-check-double text-green-600"></i> ممتاز</td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50 transition-colors">
                                <td class="p-4 font-semibold">الوصول عبر الإنترنت</td>
                                <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                                <td class="p-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                            </tr>
                            <tr class="border-b bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="p-4 font-semibold">التكامل مع مصادر البيانات</td>
                                <td class="p-4 text-center">محدود</td>
                                <td class="p-4 text-center">واسع</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="p-4 font-semibold">الأنسب لـ</td>
                                <td class="p-4 text-center">الشركات الصغيرة والمتوسطة</td>
                                <td class="p-4 text-center">جميع أحجام الشركات</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    لماذا تختار <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">EDATA 360</span>؟
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center flex-shrink-0 ml-4">
                            <i class="fas fa-bolt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">سرعة في التسليم</h3>
                            <p class="text-gray-600">نلتزم بتسليم مشاريعك في الوقت المحدد دون التأثير على الجودة</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-600 to-pink-400 flex items-center justify-center flex-shrink-0 ml-4">
                            <i class="fas fa-bullseye text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">دقة عالية</h3>
                            <p class="text-gray-600">نضمن دقة البيانات والتحليلات بنسبة 100% مع مراجعة شاملة</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-green-600 to-teal-400 flex items-center justify-center flex-shrink-0 ml-4">
                            <i class="fas fa-paint-brush text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">تصاميم احترافية</h3>
                            <p class="text-gray-600">لوحات تحكم جذابة وسهلة الاستخدام مع تصورات بيانية مبتكرة</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-orange-600 to-red-400 flex items-center justify-center flex-shrink-0 ml-4">
                            <i class="fas fa-map-marked-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">خبرة سعودية</h3>
                            <p class="text-gray-600">فهم عميق للسوق السعودي ومتطلبات الأعمال المحلية</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-indigo-600 to-purple-400 flex items-center justify-center flex-shrink-0 ml-4">
                            <i class="fas fa-headset text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">دعم مستمر</h3>
                            <p class="text-gray-600">فريق دعم فني متاح لمساعدتك في أي وقت</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-pink-600 to-rose-400 flex items-center justify-center flex-shrink-0 ml-4">
                            <i class="fas fa-award text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">جودة مضمونة</h3>
                            <p class="text-gray-600">نضمن رضاك الكامل عن جودة العمل المقدم</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 -left-4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 -right-4 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-center text-white">
            <h2 class="text-4xl md:text-5xl font-black mb-6">
                جاهز للبدء؟
            </h2>
            <p class="text-xl mb-10 text-gray-200 max-w-2xl mx-auto">
                اطلب خدمتك الآن واحصل على استشارة مجانية
            </p>
            <a href="{{ route('request-design.create') }}" class="inline-block bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold py-4 px-8 rounded-full hover:shadow-2xl hover:scale-105 transform transition duration-300">
                <i class="fas fa-rocket ml-2"></i>
                اطلب خدمتك الآن
            </a>
        </div>
    </section>
</x-layouts.app>
