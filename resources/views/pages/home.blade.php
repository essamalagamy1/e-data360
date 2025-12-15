<x-layouts.app>
    {{-- Hero Section - تصميم عصري مع تأثيرات متقدمة --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950  to-indigo-950 flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/2 w-96 h-96 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 md:pt-0 pb-2">
            <div class="text-center text-white max-w-6xl mx-auto">
                {{-- Badge --}}
                @if($heroSection && $heroSection->badge_text)
                <div class="flex justify-center mb-4 pt-12 md:pt-14">
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600/20 to-cyan-600/20 backdrop-blur-sm border border-blue-500/30 rounded-full px-4 py-2 md:px-6 animate-fade-in-down">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                        </span>
                        @if($heroSection->badge_icon)
                        <i class="{{ $heroSection->badge_icon }} text-cyan-400 text-xs md:text-sm"></i>
                        @endif
                        <span class="text-xs md:text-sm font-medium text-cyan-300">{{ $heroSection->badge_text }}</span>
                    </div>
                </div>
                @endif

                @if($heroSection)
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight">
                    <span class="block mb-4 bg-gradient-to-r from-white via-blue-100 to-cyan-100 bg-clip-text text-transparent animate-fade-in-up">
                        {{ $heroSection->title_line1 }}
                    </span>
                    <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent animate-fade-in-up" style="animation-delay: 0.2s;">
                        {{ $heroSection->title_line2 }}
                    </span>
                </h1>
                @endif

                @if($heroSection && $heroSection->subtitle)
                <p class="text-xl md:text-2xl lg:text-3xl mb-5 text-gray-300 max-w-4xl mx-auto leading-relaxed font-light">
                    {{ $heroSection->subtitle }}
                </p>
                @endif

                @if($heroSection)
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-5">
                    @if($heroSection->cta_primary_text)
                    <a href="{{ $heroSection->cta_primary_link ?? route('request-design.create') }}"
                       class="group relative bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 text-white font-bold py-5 px-10 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 hover:scale-105 transform transition-all duration-300 inline-flex items-center overflow-hidden">
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 via-blue-600 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <i class="fas fa-rocket ml-3 text-xl relative z-10"></i>
                        <span class="relative z-10">{{ $heroSection->cta_primary_text }}</span>
                    </a>
                    @endif
                    @if($heroSection->cta_secondary_text)
                    <a href="{{ $heroSection->cta_secondary_link ?? route('portfolio') }}"
                       class="group bg-white/10 backdrop-blur-md border-2 border-white/30 text-white font-bold py-5 px-10 rounded-2xl hover:bg-white hover:text-slate-900 transition-all duration-300 inline-flex items-center">
                        <i class="fas fa-chart-line ml-3 text-xl"></i>
                        <span>{{ $heroSection->cta_secondary_text }}</span>
                    </a>
                    @endif
                </div>
                @endif

                {{-- Enhanced Stats --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                    @foreach($stats as $stat)
                    <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-xl rounded-2xl md:rounded-3xl p-4 md:p-6 lg:p-8 border border-white/20 hover:border-{{ $stat->color_from }}/50 transition-all duration-300 transform hover:scale-105 hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-{{ $stat->color_from }}/20 to-{{ $stat->color_to }}/20 rounded-2xl md:rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <i class="{{ $stat->icon }} text-2xl md:text-3xl lg:text-4xl text-{{ $stat->color_from }} mb-2 md:mb-3 lg:mb-4 relative z-10"></i>
                        <div class="text-2xl md:text-5xl lg:text-6xl font-black bg-gradient-to-r from-{{ $stat->color_from }} to-{{ $stat->color_to }} bg-clip-text text-transparent relative z-10">{{ $stat->number }}</div>
                        <p class="text-gray-300 mt-2 md:mt-3 text-sm md:text-base lg:text-lg font-medium relative z-10">{{ $stat->label }}</p>
                        @if($stat->description)
                        <p class="text-{{ $stat->color_from }} text-xs md:text-sm mt-1 relative z-10">{{ $stat->description }}</p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        {{-- <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-white text-3xl opacity-50"></i>
        </div> --}}
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
                @foreach($services as $service)
                {{-- Service Card --}}
                <div class="group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100 overflow-hidden">
                    {{-- Animated Background Gradient --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-{{ $service->color_from }} to-{{ $service->color_to }} opacity-0 group-hover:opacity-10 transition-opacity duration-500 pointer-events-none"></div>
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-{{ $service->color_from }} to-{{ $service->color_to }} transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left pointer-events-none"></div>

                    {{-- Icon --}}
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

                    {{-- Features List --}}
                    @if($service->features->count() > 0)
                    <ul class="space-y-3 mb-6">
                        @foreach($service->features->take(3) as $feature)
                        <li class="flex items-center text-sm text-gray-700">
                            <i class="{{ $feature->icon ?? 'fas fa-check-circle' }} text-{{ $service->color_from }} ml-2"></i>
                            {{ $feature->feature_text }}
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        {{-- <div>
                            <p class="text-sm text-gray-500 mb-1">{{ $service->price_label }}</p>
                            @if($service->price_starting)
                            <span class="text-3xl font-black bg-gradient-to-r from-{{ $service->color_from }} to-{{ $service->color_to }} bg-clip-text text-transparent">{{ $service->price_starting }}</span>
                            @else
                            <span class="text-xl font-black bg-gradient-to-r from-{{ $service->color_from }} to-{{ $service->color_to }} bg-clip-text text-transparent">{{ $service->price_label }}</span>
                            @endif
                        </div> --}}
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $companySettings->whatsapp_number) }}"
                           class="group/btn bg-gradient-to-r from-{{ $service->color_from }} to-{{ $service->color_to }} text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center">
                            <span>{{ $service->cta_text }}</span>
                            <i class="fas fa-arrow-left mr-2 transform group-hover/btn:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
                @endforeach
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
                {{-- Projects Carousel --}}
                <div class="relative max-w-7xl mx-auto px-12">
                    <!-- Swiper Container -->
                    <div class="swiper projects-swiper">
                        <div class="swiper-wrapper pb-12">
                            @foreach($featuredProjects as $project)
                            <div class="swiper-slide">
                                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 h-full">
                                    <img src="{{ Storage::url($project->main_image) }}" alt="{{ $project->title }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                                    
                                    {{-- Project Types Badges - Top Right --}}
                                    @if($project->types && $project->types->count() > 0)
                                    <div class="absolute top-4 right-4 flex flex-wrap gap-2 z-10">
                                        @foreach($project->types as $type)
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold text-white backdrop-blur-sm shadow-lg"
                                              style="background-color: {{ $type->color }};">
                                            @if($type->icon)
                                            <i class="{{ $type->icon }} ml-1 text-xs"></i>
                                            @endif
                                            {{ $type->name }}
                                        </span>
                                        @endforeach
                                    </div>
                                    @endif
                                    
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
                            </div>
                            @endforeach
                        </div>
                        
                        {{-- Pagination --}}
                        <div class="swiper-pagination"></div>
                    </div>
                    
                    {{-- Navigation Buttons - Outside Swiper --}}
                    <button type="button" class="projects-swiper-button-next" 
                            style="position: absolute !important; top: 50% !important; left: 0 !important; transform: translateY(-50%) !important; width: 56px !important; height: 56px !important; border-radius: 50% !important; background: linear-gradient(to right, #2563eb, #06b6d4) !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important; z-index: 100 !important; border: none !important; outline: none !important; transition: transform 0.3s !important; opacity: 1 !important; visibility: visible !important;"
                            onmouseover="this.style.transform='translateY(-50%) scale(1.1)'"
                            onmouseout="this.style.transform='translateY(-50%) scale(1)'">
                        <i class="fas fa-chevron-left text-white text-xl"></i>
                    </button>
                    <button type="button" class="projects-swiper-button-prev"
                            style="position: absolute !important; top: 50% !important; right: 0 !important; transform: translateY(-50%) !important; width: 56px !important; height: 56px !important; border-radius: 50% !important; background: linear-gradient(to right, #2563eb, #06b6d4) !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important; z-index: 100 !important; border: none !important; outline: none !important; transition: transform 0.3s !important; opacity: 1 !important; visibility: visible !important;"
                            onmouseover="this.style.transform='translateY(-50%) scale(1.1)'"
                            onmouseout="this.style.transform='translateY(-50%) scale(1)'">
                        <i class="fas fa-chevron-right text-white text-xl"></i>
                    </button>
                </div>
            @else
                <div class="text-center">
                        <p>لا يوجد مشاريع حاليا</p>
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
                        <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">{{$companySettings->name}}</span>
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
                   نحن الخيار الأمثل لكل من يسعى للتميز والريادة في عالم البيانات
                </p>
            </div>
            
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($features as $feature)
                {{-- Feature Card --}}
                <div class="group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 hover:border-{{ $feature->color_from }}/50 transition-all duration-500 transform hover:-translate-y-4 hover:scale-105 text-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-{{ $feature->color_from }}/20 to-{{ $feature->color_to }}/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative z-10 mb-6">
                        <div class="w-24 h-24 mx-auto rounded-2xl bg-gradient-to-br from-{{ $feature->color_from }} to-{{ $feature->color_to }} flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-2xl">
                            <i class="{{ $feature->icon }} text-white text-4xl"></i>
                        </div>
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-16 bg-{{ $feature->color_from }} rounded-full blur-2xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <h3 class="text-2xl font-black mb-4 text-white relative z-10">{{ $feature->title }}</h3>
                    <p class="text-gray-300 leading-relaxed relative z-10 mb-4">
                        {{ $feature->description }}
                    </p>
                    @if($feature->badge_text)
                    <div class="flex items-center justify-center gap-2 text-{{ $feature->color_from }} font-bold relative z-10">
                        <i class="fas fa-check-circle"></i>
                        <span>{{ $feature->badge_text }}</span>
                    </div>
                    @endif
                </div>
                @endforeach
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
                    <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent mb-2">3+</div>
                    <p class="text-gray-300 font-medium">سنوات خبرة</p>
                </div>
               <div class="text-center">
    <div class="text-4xl md:text-5xl font-black bg-gradient-to-r from-orange-400 to-red-400 bg-clip-text text-transparent mb-2">∞</div>
    <p class="text-gray-300 font-medium">إمكانات لا تنتهي</p>
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

            {{-- Testimonials Carousel --}}
            <div class="relative max-w-7xl mx-auto px-12">
                <!-- Swiper Container -->
                <div class="swiper testimonials-swiper">
                    <div class="swiper-wrapper pb-12">
                        @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            {{-- Testimonial Card --}}
                            <div class="group relative bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-blue-100 overflow-hidden h-full">
                                {{-- Quote Mark Background --}}
                                <div class="absolute -top-6 -right-6 text-[120px] text-blue-100 font-serif leading-none opacity-50 pointer-events-none">"</div>

                                {{-- Rating Stars --}}
                                <div class="flex gap-1 mb-4 relative z-10">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }} text-xl"></i>
                                    @endfor
                                </div>

                                {{-- Review Text --}}
                                <p class="text-gray-700 text-lg leading-relaxed mb-6 relative z-10">
                                    {{ $testimonial->testimonial }}
                                </p>

                                {{-- Reviewer Info --}}
                                <div class="flex items-center gap-4 relative z-10">
                                    {{-- @if($testimonial->client_avatar)
                                    <img src="{{ Storage::url($testimonial->client_avatar) }}" alt="{{ $testimonial->client_name }}" class="w-16 h-16 rounded-full object-cover shadow-lg ring-4 ring-blue-100">
                                    @else
                                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-white font-black text-2xl shadow-lg ring-4 ring-blue-100">
                                        {{ substr($testimonial->client_name, 0, 1) }}
                                    </div>
                                    @endif --}}
                                    <div>
                                        <h4 class="font-black text-gray-900 text-lg">{{ $testimonial->client_name }}</h4>
                                        <p class="text-sm text-gray-600 font-medium">{{ $testimonial->client_position }}</p>
                                        @if($testimonial->client_company)
                                        <p class="text-xs text-gray-500">{{ $testimonial->client_company }}</p>
                                        @endif
                                        @if($testimonial->is_verified)
                                        <div class="flex items-center gap-1 mt-1">
                                            <i class="fas fa-check-circle text-blue-500 text-xs"></i>
                                            <span class="text-xs text-blue-600 font-semibold">عميل موثق</span>
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Badge --}}
                                @if($testimonial->badge_text)
                                <div class="absolute top-6 left-6 text-white text-xs font-bold px-3 py-1 rounded-full pointer-events-none"
                                     style="background: linear-gradient(to right, {{ $testimonial->badge_color_from ?? '#2563eb' }}, {{ $testimonial->badge_color_to ?? '#06b6d4' }});">
                                    {{ $testimonial->badge_text }}
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    {{-- Pagination --}}
                    <div class="swiper-pagination"></div>
                </div>
                
                {{-- Navigation Buttons - Outside Swiper --}}
                <button type="button" class="testimonials-swiper-button-next" 
                        style="position: absolute !important; top: 50% !important; left: 0 !important; transform: translateY(-50%) !important; width: 56px !important; height: 56px !important; border-radius: 50% !important; background: linear-gradient(to right, #2563eb, #06b6d4) !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important; z-index: 100 !important; border: none !important; outline: none !important; transition: transform 0.3s !important; opacity: 1 !important; visibility: visible !important;"
                        onmouseover="this.style.transform='translateY(-50%) scale(1.1)'"
                        onmouseout="this.style.transform='translateY(-50%) scale(1)'">
                    <i class="fas fa-chevron-left text-white text-xl"></i>
                </button>
                <button type="button" class="testimonials-swiper-button-prev"
                        style="position: absolute !important; top: 50% !important; right: 0 !important; transform: translateY(-50%) !important; width: 56px !important; height: 56px !important; border-radius: 50% !important; background: linear-gradient(to right, #2563eb, #06b6d4) !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important; z-index: 100 !important; border: none !important; outline: none !important; transition: transform 0.3s !important; opacity: 1 !important; visibility: visible !important;"
                        onmouseover="this.style.transform='translateY(-50%) scale(1.1)'"
                        onmouseout="this.style.transform='translateY(-50%) scale(1)'">
                    <i class="fas fa-chevron-right text-white text-xl"></i>
                </button>
            </div>

            {{-- Add Review Button --}}
            <div class="text-center mt-12">
                <a href="{{ route('testimonial.create') }}"
                   class="group inline-flex items-center gap-3 bg-gradient-to-r from-yellow-500 via-orange-500 to-red-500 text-white font-black py-5 px-12 rounded-2xl hover:shadow-2xl hover:shadow-orange-500/50 transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-red-500 via-orange-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <i class="fas fa-star relative z-10 text-2xl"></i>
                    <span class="relative z-10 text-lg">شاركنا تجربتك - أضف تقييمك</span>
                    <i class="fas fa-arrow-left relative z-10 transform group-hover:-translate-x-2 transition-transform"></i>
                </a>
                <p class="text-gray-600 mt-4 text-sm">
                    <i class="fas fa-info-circle ml-1"></i>
                    رأيك يساعدنا على التحسين ويساعد الآخرين في اتخاذ القرار
                </p>
            </div>

            {{-- Trust Indicators --}}
            <div class="max-w-4xl mx-auto mt-16">
                <div class="bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 rounded-3xl p-8 border border-blue-100">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                        <div>
                            <div class="text-4xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent mb-2">95%</div>
                            <p class="text-gray-700 font-semibold">رضا العملاء</p>
                        </div>
                        <div>
                            <div class="text-4xl font-black bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent mb-2">170+</div>
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
                    @if($companySettings && $companySettings->main_email)
                    <div class="group relative bg-white/10 backdrop-blur-xl rounded-2xl p-6 border border-white/20 hover:border-cyan-400/50 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <i class="fas fa-envelope text-5xl text-cyan-400 mb-4 transform group-hover:scale-110 transition-transform relative z-10"></i>
                        <h4 class="font-black text-white mb-2 text-lg relative z-10">راسلنا عبر البريد</h4>
                        <p class="text-gray-300 mb-3 relative z-10">نرد خلال ساعة</p>
                        <a href="mailto:{{ $companySettings->main_email }}" class="text-cyan-400 font-bold hover:text-cyan-300 transition-colors relative z-10 flex items-center justify-center gap-2">
                            <span>{{ $companySettings->main_email }}</span>
                            <i class="fas fa-arrow-left text-sm transform group-hover:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                    @endif

                    @if($companySettings && $companySettings->whatsapp_number)
                    <div class="group relative bg-white/10 backdrop-blur-xl rounded-2xl p-6 border border-white/20 hover:border-green-400/50 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-emerald-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <i class="fab fa-whatsapp text-5xl text-green-400 mb-4 transform group-hover:scale-110 transition-transform relative z-10"></i>
                        <h4 class="font-black text-white mb-2 text-lg relative z-10">واتساب مباشر</h4>
                        <p class="text-gray-300 mb-3 relative z-10">متاحون 24/7</p>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $companySettings->whatsapp_number) }}" class="text-green-400 font-bold hover:text-green-300 transition-colors relative z-10 flex items-center justify-center gap-2">
                            <span>تواصل فوري</span>
                            <i class="fas fa-arrow-left text-sm transform group-hover:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                    @endif

                    @if($companySettings && $companySettings->phone_primary)
                    <div class="group relative bg-white/10 backdrop-blur-xl rounded-2xl p-6 border border-white/20 hover:border-purple-400/50 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <i class="fas fa-phone text-5xl text-purple-400 mb-4 transform group-hover:scale-110 transition-transform relative z-10"></i>
                        <h4 class="font-black text-white mb-2 text-lg relative z-10">اتصل بنا الآن</h4>
                        <p class="text-gray-300 mb-3 relative z-10">استشارة مجانية</p>
                        <a href="tel:{{ $companySettings->phone_primary }}" class="text-purple-400 font-bold hover:text-purple-300 transition-colors relative z-10 flex items-center justify-center gap-2">
                            <span dir="ltr">{{ $companySettings->phone_primary }}</span>
                            <i class="fas fa-arrow-left text-sm transform group-hover:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                    @endif
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
