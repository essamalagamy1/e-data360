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
            @if($heroSection && $heroSection->badge_text)
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600/20 to-pink-600/20 backdrop-blur-sm border border-purple-500/30 rounded-full px-6 py-2 mb-8">
                @if($heroSection->badge_icon)
                <i class="{{ $heroSection->badge_icon }} text-purple-400"></i>
                @endif
                <span class="text-sm font-medium text-purple-300">{{ $heroSection->badge_text }}</span>
            </div>
            @endif

            @if($heroSection)
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block mb-4">{{ $heroSection->title_line1 }}</span>
                <span class="block bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                    {{ $heroSection->title_line2 }}
                </span>
            </h1>

            @if($heroSection->subtitle)
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light mb-12">
                {{ $heroSection->subtitle }}
            </p>
            @endif
            @endif

            {{-- Stats --}}
            @if($stats && $stats->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-{{ min($stats->count(), 4) }} gap-6 max-w-4xl mx-auto">
                @foreach($stats as $stat)
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20 hover:border-{{ $stat->color_from }}/50 transition-all">
                    <div class="text-3xl font-black bg-gradient-to-r from-{{ $stat->color_from }} to-{{ $stat->color_to }} bg-clip-text text-transparent">{{ $stat->number }}</div>
                    <p class="text-gray-300 text-sm mt-1">{{ $stat->label }}</p>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    {{-- Filter Section --}}
    @if(isset($projectTypes) && $projectTypes->count() > 0)
    <section class="py-8 bg-white border-b border-gray-200">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap items-center justify-center gap-3">
                {{-- All Projects Button --}}
                <a href="{{ route('portfolio') }}" 
                   class="group px-6 py-3 rounded-full font-semibold transition-all duration-300 {{ !$selectedType ? 'bg-gradient-to-r from-blue-600 to-cyan-600 text-white shadow-lg shadow-blue-500/30' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    <i class="fas fa-th-large {{ !$selectedType ? 'ml-2' : 'ml-1 opacity-50' }}"></i>
                    جميع المشاريع
                </a>
                
                {{-- Type Filter Buttons --}}
                @foreach($projectTypes as $type)
                <a href="{{ route('portfolio', ['type' => $type->slug]) }}" 
                   class="group px-6 py-3 rounded-full font-semibold transition-all duration-300 {{ $selectedType === $type->slug ? 'text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                   style="{{ $selectedType === $type->slug ? 'background: ' . $type->color . '; box-shadow: 0 10px 25px -5px ' . $type->color . '40;' : '' }}">
                    @if($type->icon)
                    <i class="{{ $type->icon }} {{ $selectedType === $type->slug ? 'ml-2' : 'ml-1 opacity-50' }}"></i>
                    @endif
                    {{ $type->name }}
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

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
                                    
                                    {{-- Project Types Badges --}}
                                    @if($project->types && $project->types->count() > 0)
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach($project->types as $type)
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold text-white"
                                              style="background-color: {{ $type->color }};">
                                            @if($type->icon)
                                            <i class="{{ $type->icon }} ml-1 text-xs"></i>
                                            @endif
                                            {{ $type->name }}
                                        </span>
                                        @endforeach
                                    </div>
                                    @endif
                                    
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
                <div class="flex flex-col items-center justify-center h-64">
                    <p class="text-gray-600">لا يوجد مشاريع حاليا</p>
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
