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
        
        <div class="container mx-auto px-3 relative z-10 md:pt-0 pb-2">
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

        <div class="container mx-auto px-3 relative z-10">
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

    {{-- Featured Projects (02 - مختارات من أعمالنا - Hero Showcase Cards) --}}
    <section class="relative py-28 md:py-36 bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white overflow-hidden border-y border-slate-800/60">
        {{-- Ambient Lighting & Futuristic Mesh Background --}}
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-blue-900/25 via-transparent to-transparent opacity-70 pointer-events-none"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_65%_50%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none"></div>

        {{-- Glowing Orbs --}}
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            {{-- Section Header --}}
            <div class="flex flex-col items-center text-center max-w-4xl mx-auto mb-16 md:mb-20">
                {{-- Number & Badge Tag --}}
                <div class="inline-flex items-center gap-3 bg-slate-800/80 backdrop-blur-xl border border-cyan-500/30 px-5 py-2.5 rounded-full shadow-lg shadow-cyan-950/40 mb-6">
                    <span class="flex items-center justify-center w-7 h-7 rounded-full bg-gradient-to-tr from-blue-600 to-cyan-400 text-white font-black text-xs shadow-md shadow-cyan-500/30">
                        02
                    </span>
                    <span class="h-4 w-px bg-cyan-500/30"></span>
                    <span class="text-xs md:text-sm font-bold tracking-wide text-cyan-300">
                        مختارات من أعمالنا
                    </span>
                </div>

                {{-- Main Title --}}
                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-white tracking-tight mb-6 leading-tight">
                    ما صنعناه <span class="relative inline-block bg-gradient-to-r from-cyan-400 via-blue-400 to-indigo-400 bg-clip-text text-transparent">
                        مؤخرًا.
                        <svg class="absolute -bottom-2 left-0 w-full" height="12" viewBox="0 0 200 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10C50 5 150 5 198 10" stroke="url(#gradient-proj-02-hero)" stroke-width="4" stroke-linecap="round"/>
                            <defs>
                                <linearGradient id="gradient-proj-02-hero" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#06b6d4;stop-opacity:1"/>
                                    <stop offset="50%" style="stop-color:#3b82f6;stop-opacity:1"/>
                                    <stop offset="100%" style="stop-color:#6366f1;stop-opacity:1"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h2>

                {{-- Description --}}
                <p class="text-lg md:text-2xl text-slate-300 max-w-3xl leading-relaxed font-light">
                    حلول برمجية وتصميمية متكاملة شُيّدت بعناية فائقة تلبي تطلعات عملائنا وترتقي برؤاهم.
                </p>
            </div>

            @if(isset($featuredProjects) && count($featuredProjects) > 0)
                {{-- Projects Hero Showcase Swiper Container --}}
                <div class="relative max-w-7xl mx-auto">
                    <!-- Swiper Navigation Controls Header -->
                    <div class="flex items-center justify-between mb-8 px-2">
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-cyan-400 animate-pulse"></span>
                            <span class="text-xs md:text-sm font-semibold text-slate-300">أبرز الأعمال المنجزة ({{ count($featuredProjects) }})</span>
                        </div>
                        <div class="flex items-center gap-3 z-20">
                            <button type="button" class="projects-swiper-button-prev w-12 h-12 rounded-2xl bg-slate-800/90 border border-slate-700/80 text-slate-300 hover:text-white hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-500 hover:border-transparent transition-all duration-300 flex items-center justify-center shadow-lg cursor-pointer group" aria-label="المشروع السابق">
                                <i class="fas fa-arrow-right text-base group-hover:scale-110 transition-transform"></i>
                            </button>
                            <button type="button" class="projects-swiper-button-next w-12 h-12 rounded-2xl bg-slate-800/90 border border-slate-700/80 text-slate-300 hover:text-white hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-500 hover:border-transparent transition-all duration-300 flex items-center justify-center shadow-lg cursor-pointer group" aria-label="المشروع التالي">
                                <i class="fas fa-arrow-left text-base group-hover:scale-110 transition-transform"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Swiper Container -->
                    <div class="swiper projects-swiper !py-4 !px-1">
                        <div class="swiper-wrapper pb-12">
                            @foreach($featuredProjects as $project)
                            <div class="swiper-slide h-auto">
                                {{-- Luxurious Hero Showcase Card --}}
                                <div class="group relative bg-gradient-to-b from-slate-900/95 to-slate-950/95 backdrop-blur-2xl border border-slate-800/90 hover:border-cyan-500/50 rounded-3xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:shadow-cyan-500/15 flex flex-col justify-between h-full transform hover:-translate-y-2">
                                    
                                    {{-- Image Viewport Area --}}
                                    <div class="relative w-full h-72 sm:h-80 overflow-hidden bg-slate-950">
                                        <img src="{{ Storage::url($project->main_image) }}"
                                             alt="{{ $project->title }}"
                                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-90 group-hover:opacity-100">
                                        
                                        {{-- Image Dark Vignette Overlay --}}
                                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent opacity-90 group-hover:opacity-75 transition-opacity"></div>

                                        {{-- Top Badges Row --}}
                                        <div class="absolute top-4 right-4 left-4 flex items-center justify-between gap-2 z-10">
                                            {{-- Project Types --}}
                                            @if($project->types && $project->types->count() > 0)
                                            <div class="flex flex-wrap gap-2">
                                                @foreach($project->types as $type)
                                                <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold text-white backdrop-blur-md shadow-lg border border-white/10"
                                                      style="background-color: {{ $type->color }}cc;">
                                                    @if($type->icon)
                                                    <i class="{{ $type->icon }} ml-1.5 text-xs"></i>
                                                    @endif
                                                    {{ $type->name }}
                                                </span>
                                                @endforeach
                                            </div>
                                            @endif

                                            {{-- Available for purchase badge --}}
                                            @if($project->is_available_for_purchase)
                                            <span class="inline-flex items-center gap-1 px-3 py-1.5 rounded-full text-xs font-bold bg-emerald-500/90 text-white backdrop-blur-md shadow-lg border border-emerald-400/30 mr-auto">
                                                <i class="fas fa-shopping-bag text-xs"></i>
                                                <span>متاح للشراء</span>
                                            </span>
                                            @endif
                                        </div>

                                        {{-- Hover Action Quick Button --}}
                                        <div class="absolute inset-0 flex items-center justify-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20 bg-slate-950/50 backdrop-blur-[3px]">
                                            <a href="{{ route('projects.show', $project) }}"
                                               class="inline-flex items-center gap-2 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold py-3.5 px-6 rounded-2xl shadow-xl shadow-cyan-500/30 transform hover:scale-105 transition-transform text-sm">
                                                <i class="fas fa-eye text-sm"></i>
                                                <span>عرض التفاصيل</span>
                                            </a>
                                            @if($project->url)
                                            <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer"
                                               class="inline-flex items-center gap-2 bg-white/20 hover:bg-white text-white hover:text-slate-900 font-bold py-3.5 px-5 rounded-2xl backdrop-blur-md border border-white/30 transform hover:scale-105 transition-all text-sm">
                                                <i class="fas fa-external-link-alt text-sm"></i>
                                                <span>الموقع</span>
                                            </a>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Card Content Body --}}
                                    <div class="p-6 sm:p-8 flex flex-col flex-grow justify-between relative z-10">
                                        <div>
                                            <h3 class="text-2xl sm:text-3xl font-black text-white group-hover:text-cyan-400 transition-colors mb-3 line-clamp-1">
                                                {{ $project->title }}
                                            </h3>
                                            @if($project->short_description)
                                            <p class="text-slate-300 text-base leading-relaxed line-clamp-2 mb-6">
                                                {{ $project->short_description }}
                                            </p>
                                            @endif
                                        </div>

                                        {{-- Actions Footer Bar --}}
                                        <div class="pt-6 border-t border-slate-800/80 flex flex-wrap items-center justify-between gap-4 mt-auto">
                                            <a href="{{ route('projects.show', $project) }}"
                                               class="group/btn inline-flex items-center gap-2 bg-slate-800 hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-500 text-white font-bold py-3 px-6 rounded-xl border border-slate-700/80 hover:border-transparent transition-all duration-300 text-sm">
                                                <span>استكشف المشروع</span>
                                                <i class="fas fa-arrow-left text-xs transform group-hover/btn:-translate-x-1.5 transition-transform"></i>
                                            </a>

                                            {{-- Direct Project Website Button if URL exists --}}
                                            @if($project->url)
                                            <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer"
                                               class="inline-flex items-center gap-2 text-cyan-400 hover:text-cyan-300 font-bold text-sm bg-cyan-950/40 hover:bg-cyan-950/70 border border-cyan-500/30 px-4 py-3 rounded-xl transition-all duration-300">
                                                <i class="fas fa-external-link-alt text-xs"></i>
                                                <span>زيارة الموقع</span>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        {{-- Swiper Pagination --}}
                        <div class="swiper-pagination !-bottom-2"></div>
                    </div>
                </div>
            @else
                <div class="text-center py-12 bg-slate-900/50 rounded-3xl border border-slate-800">
                    <i class="fas fa-folder-open text-5xl text-slate-600 mb-4"></i>
                    <p class="text-slate-400 text-lg">لا يوجد مشاريع حالياً</p>
                </div>
            @endif

            {{-- View All Works Button --}}
            <div class="text-center mt-14">
                <a href="{{ route('portfolio') }}"
                   class="group relative inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-black py-5 px-12 rounded-2xl shadow-xl shadow-cyan-500/20 hover:shadow-2xl hover:shadow-cyan-500/40 transform hover:scale-105 transition-all duration-300 overflow-hidden">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 via-cyan-500 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <i class="fas fa-folder-open text-xl relative z-10"></i>
                    <span class="relative z-10 text-lg">عرض جميع الأعمال</span>
                    <i class="fas fa-arrow-left relative z-10 transform group-hover:-translate-x-2 transition-transform"></i>
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

        <div class="container mx-auto px-3 relative z-10">
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

    {{-- Latest Articles Section --}}
    @if(isset($latestArticles) && $latestArticles->count() > 0)
    <section class="py-24 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 relative overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-40">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-3 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-sm font-bold px-5 py-2 rounded-full">
                        <i class="fas fa-newspaper ml-1"></i>
                        أحدث المقالات
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-6">
                    مدونتنا
                    <span class="relative inline-block">
                        <span class="bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 bg-clip-text text-transparent">ورؤى قيّمة</span>
                    </span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    اكتشف آخر المقالات والنصائح في عالم البيانات والتحليلات
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                @foreach($latestArticles as $article)
                <article class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4">
                    {{-- Image --}}
                    <div class="relative h-52 overflow-hidden">
                        @if($article->featured_image)
                        <img src="{{ Storage::url($article->featured_image) }}" 
                             alt="{{ $article->title }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center">
                            <i class="fas fa-file-alt text-white text-5xl opacity-50"></i>
                        </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent"></div>
                        
                        {{-- Date Badge --}}
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-xl px-3 py-2 text-center shadow-lg">
                            <span class="block text-2xl font-black text-blue-600">{{ $article->published_at->format('d') }}</span>
                            <span class="block text-xs text-gray-600">{{ $article->published_at->format('M') }}</span>
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                            @if($article->author)
                            <span class="flex items-center gap-1">
                                <i class="fas fa-user text-blue-500"></i>
                                {{ $article->author }}
                            </span>
                            @endif
                            <span class="flex items-center gap-1">
                                <i class="fas fa-eye text-blue-500"></i>
                                {{ number_format($article->views_count) }}
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                            {{ $article->title }}
                        </h3>

                        @if($article->excerpt)
                        <p class="text-gray-600 mb-4 line-clamp-2">
                            {{ $article->excerpt }}
                        </p>
                        @endif

                        <a href="{{ route('articles.show', $article) }}" 
                           class="inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700 transition-colors">
                            <span>اقرأ المزيد</span>
                            <i class="fas fa-arrow-left transform group-hover:-translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('articles') }}" 
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold py-4 px-10 rounded-2xl hover:shadow-2xl hover:scale-105 transform transition-all duration-300">
                    <i class="fas fa-newspaper"></i>
                    <span>عرض جميع المقالات</span>
                </a>
            </div>
        </div>
    </section>
    @endif

    {{-- Testimonials - تصميم عصري متطور --}}
    <section class="py-32 bg-white relative overflow-hidden">
        {{-- Background Decoration --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-30">
            <div class="absolute top-10 left-10 w-64 h-64 bg-gradient-to-r from-blue-200 to-cyan-200 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-3 relative z-10">
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
            <div class="relative max-w-7xl mx-auto px-4 md:px-12">
                <!-- Swiper Container -->
                <div class="swiper testimonials-swiper !py-4">
                    <div class="swiper-wrapper pb-12">
                        @foreach($testimonials as $testimonial)
                        <div class="swiper-slide h-auto">
                            {{-- Testimonial Card --}}
                            <div class="group relative bg-white/95 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-500 border border-slate-100/80 overflow-hidden flex flex-col justify-between h-full">
                                {{-- Top Gradient Glow Line --}}
                                <div class="absolute top-0 inset-x-0 h-1.5 bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 opacity-80 group-hover:opacity-100 transition-opacity"></div>
                                
                                {{-- Quote Mark Background Watermark --}}
                                <div class="absolute -top-4 -right-2 text-9xl font-serif text-blue-500/10 group-hover:text-blue-500/20 transition-colors pointer-events-none select-none">“</div>

                                <div>
                                    {{-- Header: Rating & Badge --}}
                                    <div class="flex items-center justify-between gap-3 mb-6 relative z-10">
                                        <div class="flex items-center gap-1 bg-amber-50/80 border border-amber-200/60 px-3 py-1.5 rounded-full">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-amber-400' : 'text-slate-200' }} text-sm"></i>
                                            @endfor
                                            <span class="text-xs font-black text-amber-700 mr-1.5">{{ number_format($testimonial->rating, 1) }}</span>
                                        </div>

                                        @if($testimonial->badge_text)
                                        <span class="text-white text-xs font-black px-3.5 py-1.5 rounded-full shadow-sm"
                                              style="background: linear-gradient(135deg, {{ $testimonial->badge_color_from ?? '#2563eb' }}, {{ $testimonial->badge_color_to ?? '#06b6d4' }});">
                                            {{ $testimonial->badge_text }}
                                        </span>
                                        @endif
                                    </div>

                                    {{-- Review Text --}}
                                    <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 relative z-10 font-normal">
                                        "{{ Str::limit($testimonial->testimonial, 95, '...') }}"
                                    </p>
                                </div>

                                {{-- Reviewer Info --}}
                                <div class="pt-6 border-t border-slate-100 flex items-center justify-between relative z-10 mt-auto">
                                    <div class="flex items-center gap-4">
                                        @if($testimonial->client_avatar)
                                            <img src="{{ Storage::url($testimonial->client_avatar) }}" alt="{{ $testimonial->client_name }}" class="w-14 h-14 rounded-2xl object-cover shadow-md ring-4 ring-blue-50 group-hover:scale-105 transition-transform">
                                        @else
                                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-white font-black text-xl shadow-md ring-4 ring-blue-50 group-hover:scale-105 transition-transform">
                                                {{ mb_substr($testimonial->client_name, 0, 1) }}
                                            </div>
                                        @endif
                                        <div>
                                            <h4 class="font-black text-slate-900 text-base md:text-lg group-hover:text-blue-600 transition-colors">{{ $testimonial->client_name }}</h4>
                                            <p class="text-xs md:text-sm text-slate-500 font-semibold">{{ $testimonial->client_position }}</p>
                                            @if($testimonial->client_company)
                                                <p class="text-xs text-slate-400 mt-0.5">{{ $testimonial->client_company }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    @if($testimonial->is_verified)
                                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-200/60 shadow-sm" title="عميل موثق">
                                        <i class="fas fa-check-circle text-emerald-500"></i>
                                        <span class="hidden sm:inline">موثق</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    {{-- Pagination --}}
                    <div class="swiper-pagination !-bottom-2"></div>
                </div>
                
                {{-- Navigation Buttons --}}
                <button type="button" aria-label="التقييم التالي" class="testimonials-swiper-button-next hidden sm:flex absolute -left-4 top-1/2 -translate-y-1/2 w-14 h-14 rounded-full bg-white text-slate-800 shadow-xl hover:shadow-2xl border border-slate-100 items-center justify-center transition-all duration-300 hover:scale-110 hover:bg-blue-600 hover:text-white z-20">
                    <i class="fas fa-chevron-left text-lg"></i>
                </button>
                <button type="button" aria-label="التقييم السابق" class="testimonials-swiper-button-prev hidden sm:flex absolute -right-4 top-1/2 -translate-y-1/2 w-14 h-14 rounded-full bg-white text-slate-800 shadow-xl hover:shadow-2xl border border-slate-100 items-center justify-center transition-all duration-300 hover:scale-110 hover:bg-blue-600 hover:text-white z-20">
                    <i class="fas fa-chevron-right text-lg"></i>
                </button>
            </div>

            {{-- Action Buttons (Add Review & View All) --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-12">
                <a href="{{ route('testimonials.index') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-white text-slate-800 font-bold py-4 px-8 rounded-2xl shadow-lg hover:shadow-xl border border-slate-200 hover:border-blue-300 hover:text-blue-600 transform hover:-translate-y-0.5 transition-all duration-300 text-base">
                    <i class="fas fa-comments text-blue-500 text-lg"></i>
                    <span>عرض جميع التعليقات ({{ \App\Models\Testimonial::where('is_active', true)->count() }})</span>
                    <i class="fas fa-arrow-left text-xs opacity-60"></i>
                </a>
                <a href="{{ route('testimonial.create') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-black py-4 px-10 rounded-2xl shadow-xl hover:shadow-2xl hover:shadow-cyan-500/30 transform hover:-translate-y-0.5 transition-all duration-300 text-base relative overflow-hidden group">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 via-cyan-500 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <i class="fas fa-star relative z-10 text-amber-300 text-lg"></i>
                    <span class="relative z-10">شاركنا تجربتك - أضف تقييمك</span>
                </a>
            </div>
            <p class="text-center text-slate-500 mt-4 text-sm font-medium">
                <i class="fas fa-shield-alt text-emerald-500 ml-1"></i>
                رأيك يساعدنا على التحسين ويساعد الآخرين في اتخاذ القرار
            </p>

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

        <div class="container mx-auto px-3 relative z-10">
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
