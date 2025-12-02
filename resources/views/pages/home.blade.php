<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 min-h-screen flex items-center justify-center overflow-hidden">
        {{-- Animated Background --}}
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 4s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white">
                <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight animate-fade-in-up">
                    بياناتك، خبرتنا
                    <br>
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">
                        لوحات تحكم احترافية
                    </span>
                </h1>
                
                <p class="text-xl md:text-2xl mb-12 text-gray-200 max-w-3xl mx-auto leading-relaxed">
                    نحول بياناتك إلى رؤى قوية باستخدام <span class="font-bold text-cyan-400">Excel</span> و <span class="font-bold text-cyan-400">Power BI</span>
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                    <a href="{{ route('request-design.create') }}" 
                       class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold py-4 px-8 rounded-full hover:shadow-2xl hover:scale-105 transform transition duration-300 inline-flex items-center">
                        <i class="fas fa-rocket ml-2"></i>
                        اطلب لوحة تحكمك الآن
                    </a>
                    <a href="{{ route('portfolio') }}" 
                       class="bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-full hover:bg-white hover:text-blue-900 transition duration-300 inline-flex items-center">
                        <i class="fas fa-folder-open ml-2"></i>
                        شاهد أعمالنا
                    </a>
                </div>
                
                {{-- Stats --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16">
                    <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-6 hover:bg-opacity-20 transition duration-300 transform hover:scale-105">
                        <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">+150</div>
                        <p class="text-gray-200 mt-2">عميل راضٍ</p>
                    </div>
                    <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-6 hover:bg-opacity-20 transition duration-300 transform hover:scale-105">
                        <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">+200</div>
                        <p class="text-gray-200 mt-2">لوحة تحكم</p>
                    </div>
                    <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-6 hover:bg-opacity-20 transition duration-300 transform hover:scale-105">
                        <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">3+</div>
                        <p class="text-gray-200 mt-2">سنوات خبرة</p>
                    </div>
                    <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-6 hover:bg-opacity-20 transition duration-300 transform hover:scale-105">
                        <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">98%</div>
                        <p class="text-gray-200 mt-2">رضا العملاء</p>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-white text-3xl opacity-50"></i>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    خدماتنا <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">الاحترافية</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    نقدم حلول تحليل البيانات الأكثر تطوراً في السوق السعودي
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Service 1: Excel --}}
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-emerald-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                    <div class="text-6xl mb-6 text-green-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-file-excel"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-green-600 transition-colors">لوحات تحكم Excel</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        لوحات تحكم تفاعلية متقدمة باستخدام Excel مع معادلات ديناميكية، جداول محورية، ورسوم بيانية احترافية
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-black bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">320 ر.س</span>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-cyan-500 font-semibold transition-colors">
                            اعرف المزيد <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Service 2: Power BI --}}
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-yellow-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                    <div class="text-6xl mb-6 text-yellow-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-yellow-600 transition-colors">لوحات تحكم Power BI</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        تقارير تفاعلية متطورة مع تحديثات آلية، تصورات بيانية مذهلة، وإمكانية الوصول من أي مكان
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-black bg-gradient-to-r from-yellow-600 to-orange-500 bg-clip-text text-transparent">350 ر.س</span>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-cyan-500 font-semibold transition-colors">
                            اعرف المزيد <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Service 3: Data Analysis --}}
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                    <div class="text-6xl mb-6 text-blue-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors">تحليل البيانات</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        تحليل شامل للبيانات باستخدام أحدث الأدوات والتقنيات لاستخراج رؤى قيمة تدعم قراراتك
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">حسب المشروع</span>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-cyan-500 font-semibold transition-colors">
                            اعرف المزيد <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Service 4: KPI --}}
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                    <div class="text-6xl mb-6 text-purple-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-purple-600 transition-colors">تتبع مؤشرات الأداء</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        نظام متكامل لتتبع ومراقبة مؤشرات الأداء الرئيسية (KPIs) بشكل لحظي ودقيق
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">حسب المشروع</span>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-cyan-500 font-semibold transition-colors">
                            اعرف المزيد <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Service 5: Business Insights --}}
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-500 to-red-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                    <div class="text-6xl mb-6 text-orange-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-orange-600 transition-colors">رؤى الأعمال</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        تحويل البيانات المعقدة إلى رؤى واضحة وقابلة للتنفيذ تساعدك على اتخاذ قرارات استراتيجية
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black bg-gradient-to-r from-orange-600 to-red-500 bg-clip-text text-transparent">حسب المشروع</span>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-cyan-500 font-semibold transition-colors">
                            اعرف المزيد <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Service 6: Custom Solutions --}}
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-500 to-teal-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                    <div class="text-6xl mb-6 text-cyan-600 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-cyan-600 transition-colors">حلول مخصصة</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        نصمم حلول مخصصة تماماً لتلبية احتياجات عملك الفريدة مهما كانت معقدة
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black bg-gradient-to-r from-cyan-600 to-teal-500 bg-clip-text text-transparent">حسب المشروع</span>
                        <a href="{{ route('services') }}" class="text-blue-600 hover:text-cyan-500 font-semibold transition-colors">
                            اعرف المزيد <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>
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

    {{-- Why Choose Us --}}
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    لماذا تختار <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">EDATA 360</span>؟
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    نحن الخيار الأمثل للشركات التي تبحث عن التميز في تحليل البيانات
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-bolt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">سرعة التسليم</h3>
                    <p class="text-gray-600">نلتزم بتسليم مشاريعك في الوقت المحدد دون التأثير على الجودة</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-purple-600 to-pink-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-bullseye text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">دقة عالية</h3>
                    <p class="text-gray-600">نضمن دقة البيانات والتحليلات بنسبة 100% مع مراجعة شاملة</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-green-600 to-teal-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-paint-brush text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">تصاميم احترافية</h3>
                    <p class="text-gray-600">لوحات تحكم جذابة وسهلة الاستخدام مع تصورات بيانية مبتكرة</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-orange-600 to-red-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-map-marked-alt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">خبرة سعودية</h3>
                    <p class="text-gray-600">فهم عميق للسوق السعودي ومتطلبات الأعمال المحلية</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    آراء <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">عملائنا</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    اكتشف ما يقوله عملاؤنا عن تجربتهم معنا
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative">
                    <div class="absolute top-0 right-0 text-9xl text-cyan-100 font-serif leading-none">"</div>
                    <div class="flex items-center mb-4 relative z-10">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center text-white font-bold text-xl">م</div>
                        <div class="mr-4">
                            <h4 class="font-bold">محمد العتيبي</h4>
                            <p class="text-sm text-gray-500">مدير عام - شركة تجارية</p>
                        </div>
                    </div>
                    <div class="flex mb-3">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 leading-relaxed relative z-10">
                        خدمة ممتازة واحترافية عالية. لوحة التحكم التي صمموها لنا ساعدتنا في اتخاذ قرارات أفضل وزيادة المبيعات بنسبة 35%.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative">
                    <div class="absolute top-0 right-0 text-9xl text-purple-100 font-serif leading-none">"</div>
                    <div class="flex items-center mb-4 relative z-10">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-600 to-pink-400 flex items-center justify-center text-white font-bold text-xl">س</div>
                        <div class="mr-4">
                            <h4 class="font-bold">سارة القحطاني</h4>
                            <p class="text-sm text-gray-500">مديرة الموارد البشرية</p>
                        </div>
                    </div>
                    <div class="flex mb-3">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 leading-relaxed relative z-10">
                        فريق محترف جداً وسريع في التنفيذ. التقارير أصبحت أسهل وأوضح بكثير. أنصح بهم بشدة!
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative">
                    <div class="absolute top-0 right-0 text-9xl text-green-100 font-serif leading-none">"</div>
                    <div class="flex items-center mb-4 relative z-10">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-green-600 to-teal-400 flex items-center justify-center text-white font-bold text-xl">ع</div>
                        <div class="mr-4">
                            <h4 class="font-bold">عبدالله الشمري</h4>
                            <p class="text-sm text-gray-500">صاحب مؤسسة</p>
                        </div>
                    </div>
                    <div class="flex mb-3">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 leading-relaxed relative z-10">
                        تجربة رائعة من البداية للنهاية. الفريق متعاون جداً وفاهم احتياجاتنا بشكل ممتاز.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 -left-4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 -right-4 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-center text-white">
            <h2 class="text-4xl md:text-5xl font-black mb-6">
                هل أنت مستعد لتحويل بياناتك؟
            </h2>
            <p class="text-xl mb-10 text-gray-200 max-w-2xl mx-auto">
                ابدأ رحلتك نحو قرارات أذكى مع EDATA 360. فريقنا جاهز لمساعدتك اليوم!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                <a href="{{ route('request-design.create') }}" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold py-4 px-8 rounded-full hover:shadow-2xl hover:scale-105 transform transition duration-300 inline-flex items-center">
                    <i class="fas fa-rocket ml-2"></i>
                    اطلب تصميمك الآن
                </a>
                <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-full hover:bg-white hover:text-blue-900 transition duration-300 inline-flex items-center">
                    <i class="fas fa-phone ml-2"></i>
                    تواصل معنا
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-6 hover:bg-opacity-20 transition duration-300">
                    <i class="fas fa-envelope text-4xl text-cyan-400 mb-3"></i>
                    <h4 class="font-bold mb-2">البريد الإلكتروني</h4>
                    <p class="text-gray-200">info@edata360.com</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-6 hover:bg-opacity-20 transition duration-300">
                    <i class="fas fa-phone text-4xl text-cyan-400 mb-3"></i>
                    <h4 class="font-bold mb-2">الهاتف</h4>
                    <p class="text-gray-200">+966 XX XXX XXXX</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl p-6 hover:bg-opacity-20 transition duration-300">
                    <i class="fab fa-whatsapp text-4xl text-cyan-400 mb-3"></i>
                    <h4 class="font-bold mb-2">واتساب</h4>
                    <p class="text-gray-200">تواصل فوري</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
