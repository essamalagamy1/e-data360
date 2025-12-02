<x-layouts.app>
    {{-- Hero Section - معرض الأعمال --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-[70vh] flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-center">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600/20 to-pink-600/20 backdrop-blur-sm border border-purple-500/30 rounded-full px-6 py-2 mb-8">
                <i class="fas fa-th-large text-purple-400"></i>
                <span class="text-sm font-medium text-purple-300">استكشف إبداعاتنا</span>
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block mb-4">معرض</span>
                <span class="block bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                    أعمالنا المميزة
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light mb-12">
                استعرض مجموعة من أفضل لوحات التحكم والتقارير التفاعلية التي صممناها لعملائنا
            </p>

            {{-- Stats --}}
            <div class="grid grid-cols-3 gap-6 max-w-2xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-black bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">350+</div>
                    <p class="text-gray-300 text-sm mt-1">مشروع منجز</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-black bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">250+</div>
                    <p class="text-gray-300 text-sm mt-1">عميل سعيد</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-black bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">99%</div>
                    <p class="text-gray-300 text-sm mt-1">رضا العملاء</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio Grid --}}
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            @if(isset($projects) && count($projects) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                        <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 bg-white">
                            <a href="{{ route('projects.show', $project) }}">
                                <div class="relative overflow-hidden">
                                    <img src="{{ Storage::url($project->main_image) }}" 
                                         alt="{{ $project->title }}" 
                                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                        <div class="text-white text-center transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                                            <i class="fas fa-eye text-4xl mb-2"></i>
                                            <p class="font-bold">عرض التفاصيل</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-blue-600 transition-colors">
                                        {{ $project->title }}
                                    </h3>
                                    <p class="text-gray-600 mb-4">{{ $project->short_description }}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-500">
                                            <i class="fas fa-calendar-alt ml-1"></i>
                                            {{ $project->created_at->format('Y-m-d') }}
                                        </span>
                                        <span class="text-blue-600 font-semibold group-hover:text-cyan-500 transition-colors">
                                            اقرأ المزيد <i class="fas fa-arrow-left mr-1"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                
                {{-- Pagination --}}
                <div class="mt-12">
                    {{ $projects->links() }}
                </div>
            @else
                {{-- Sample Projects if no data --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="h-64 bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center relative overflow-hidden">
                            <i class="fas fa-chart-pie text-white text-6xl opacity-50 group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-blue-600 transition-colors">لوحة تحكم المبيعات</h3>
                            <p class="text-gray-600 mb-4">تحليل شامل لأداء المبيعات مع مؤشرات الأداء الرئيسية وتقارير تفصيلية</p>
                            <span class="text-blue-600 font-semibold group-hover:text-cyan-500 transition-colors">
                                عرض المزيد <i class="fas fa-arrow-left mr-1"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="h-64 bg-gradient-to-br from-purple-500 to-pink-400 flex items-center justify-center relative overflow-hidden">
                            <i class="fas fa-users text-white text-6xl opacity-50 group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-900 via-purple-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-purple-600 transition-colors">لوحة الموارد البشرية</h3>
                            <p class="text-gray-600 mb-4">متابعة شاملة لبيانات الموظفين والأداء الوظيفي والحضور والانصراف</p>
                            <span class="text-purple-600 font-semibold group-hover:text-pink-500 transition-colors">
                                عرض المزيد <i class="fas fa-arrow-left mr-1"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="h-64 bg-gradient-to-br from-green-500 to-teal-400 flex items-center justify-center relative overflow-hidden">
                            <i class="fas fa-dollar-sign text-white text-6xl opacity-50 group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute inset-0 bg-gradient-to-t from-green-900 via-green-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-green-600 transition-colors">لوحة التحليل المالي</h3>
                            <p class="text-gray-600 mb-4">تقارير مالية تفصيلية مع تحليل الربحية والتكاليف والتدفقات النقدية</p>
                            <span class="text-green-600 font-semibold group-hover:text-teal-500 transition-colors">
                                عرض المزيد <i class="fas fa-arrow-left mr-1"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="h-64 bg-gradient-to-br from-orange-500 to-red-400 flex items-center justify-center relative overflow-hidden">
                            <i class="fas fa-project-diagram text-white text-6xl opacity-50 group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute inset-0 bg-gradient-to-t from-orange-900 via-orange-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-orange-600 transition-colors">لوحة إدارة المشاريع</h3>
                            <p class="text-gray-600 mb-4">متابعة المشاريع والمهام والجداول الزمنية والموارد</p>
                            <span class="text-orange-600 font-semibold group-hover:text-red-500 transition-colors">
                                عرض المزيد <i class="fas fa-arrow-left mr-1"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="h-64 bg-gradient-to-br from-indigo-500 to-purple-400 flex items-center justify-center relative overflow-hidden">
                            <i class="fas fa-shopping-cart text-white text-6xl opacity-50 group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute inset-0 bg-gradient-to-t from-indigo-900 via-indigo-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition-colors">لوحة المخزون</h3>
                            <p class="text-gray-600 mb-4">إدارة المخزون والمشتريات والموردين بشكل فعال</p>
                            <span class="text-indigo-600 font-semibold group-hover:text-purple-500 transition-colors">
                                عرض المزيد <i class="fas fa-arrow-left mr-1"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="h-64 bg-gradient-to-br from-pink-500 to-rose-400 flex items-center justify-center relative overflow-hidden">
                            <i class="fas fa-chart-area text-white text-6xl opacity-50 group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute inset-0 bg-gradient-to-t from-pink-900 via-pink-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-pink-600 transition-colors">لوحة التسويق</h3>
                            <p class="text-gray-600 mb-4">تحليل الحملات التسويقية ومعدلات التحويل والعائد على الاستثمار</p>
                            <span class="text-pink-600 font-semibold group-hover:text-rose-500 transition-colors">
                                عرض المزيد <i class="fas fa-arrow-left mr-1"></i>
                            </span>
                        </div>
                    </div>
                </div>
            @endif
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
                هل أنت مستعد لمشروعك القادم؟
            </h2>
            <p class="text-xl mb-10 text-gray-200 max-w-2xl mx-auto">
                دعنا نساعدك في إنشاء لوحة تحكم احترافية تناسب احتياجاتك
            </p>
            <a href="{{ route('request-design.create') }}" class="inline-block bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold py-4 px-8 rounded-full hover:shadow-2xl hover:scale-105 transform transition duration-300">
                <i class="fas fa-rocket ml-2"></i>
                اطلب تصميمك الآن
            </a>
        </div>
    </section>
</x-layouts.app>
