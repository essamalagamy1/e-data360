<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-10 sm:pt-14 pb-20 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cyan-500/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-6">
            {{-- @if($heroSection && $heroSection->badge_text)
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="{{ $heroSection->badge_icon ?? 'fas fa-chart-line' }}"></i>
                <span>{{ $heroSection->badge_text }}</span>
            </div>
            @endif --}}

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                {{ $heroSection->title_line1 ?? 'معرض نماذج ولوحات التحكم' }} <br>
                <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent">
                    {{ $heroSection->title_line2 ?? 'قـصـص نـجـاح وأنـظـمـة تـفـاعـلـيـة' }}
                </span>
            </h1>

            <p class="text-base sm:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed motion-reveal">
                {{ $heroSection->subtitle ?? 'استكشف عينات حية من لوحات تحكم Excel و Power BI التي طورناها لعملائنا في مختلف المجالات التجارية والمالية واللوجستية.' }}
            </p>
        </div>
    </section>

    {{-- Category Filters --}}
    @if(isset($projectTypes) && $projectTypes->count() > 0)
    <section class="py-6 bg-slate-950 border-b border-slate-800 sticky top-20 z-30 backdrop-blur-xl bg-slate-950/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-2.5">
                <a href="{{ route('portfolio') }}"
                   class="px-5 py-2 rounded-full text-xs sm:text-sm font-bold transition-all {{ !$selectedType ? 'bg-cyan-500 text-slate-950 shadow-md shadow-cyan-500/30' : 'bg-slate-900 text-slate-300 hover:bg-slate-800 hover:text-white border border-slate-800' }}">
                    <i class="fas fa-th-large ml-1"></i>
                    <span>جميع اللوحات</span>
                </a>
                
                @foreach($projectTypes as $type)
                <a href="{{ route('portfolio', ['type' => $type->slug]) }}"
                   class="px-5 py-2 rounded-full text-xs sm:text-sm font-bold transition-all {{ $selectedType === $type->slug ? 'bg-cyan-500 text-slate-950 shadow-md shadow-cyan-500/30' : 'bg-slate-900 text-slate-300 hover:bg-slate-800 hover:text-white border border-slate-800' }}">
                    @if($type->icon)
                    <i class="{{ $type->icon }} ml-1"></i>
                    @endif
                    <span>{{ $type->name }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Portfolio Bento Grid --}}
    <section class="py-20 bg-slate-900 min-h-[50vh]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(isset($projects) && count($projects) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-motion-stagger>
                    @foreach($projects as $project)
                    <div class="stagger-item rounded-3xl bg-slate-950 border border-slate-800 hover:border-cyan-500/40 transition-all overflow-hidden flex flex-col justify-between group shadow-xl">
                        
                        {{-- Image & Zoom --}}
                        <div class="relative h-60 w-full overflow-hidden bg-slate-900">
                            @php
                                $pImg = $project->main_image ?? $project->featured_image;
                                $imgUrl = $pImg ? Storage::url($pImg) : null;
                            @endphp
                            @if($imgUrl)
                                <img src="{{ $imgUrl }}"
                                     alt="{{ $project->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-slate-900 text-slate-700">
                                    <i class="fas fa-chart-pie text-5xl"></i>
                                </div>
                            @endif

                            @if($project->types && $project->types->first())
                            <span class="absolute top-4 right-4 px-3 py-1 rounded-full bg-slate-950/90 text-cyan-300 text-xs font-bold border border-cyan-500/30 backdrop-blur-md">
                                {{ $project->types->first()->name }}
                            </span>
                            @endif
                        </div>

                        {{-- Card Content --}}
                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-400 line-clamp-2 leading-relaxed">
                                {{ $project->short_description ?? $project->description }}
                            </p>

                            <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between">
                                <a href="{{ route('projects.show', $project->slug ?? $project) }}"
                                   class="text-xs sm:text-sm font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5 transition-colors">
                                    <span>استعراض التفاصيل الكاملة</span>
                                    <i class="fas fa-arrow-left text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20 text-slate-400 space-y-3">
                    <i class="fas fa-chart-pie text-5xl text-slate-600"></i>
                    <p class="text-base font-bold">لا توجد مشاريع مضافة في هذا التصنيف حالياً</p>
                </div>
            @endif
        </div>
    </section>

</x-layouts.app>
