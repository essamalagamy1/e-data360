<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-10 sm:pt-14 pb-16 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cyan-500/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-5">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="fas fa-newspaper"></i>
                <span>المدونة والتحليلات المعرفية</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                مقالات ورؤى <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-amber-300 bg-clip-text text-transparent">في علم البيانات والتحليل</span>
            </h1>

            <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed motion-reveal">
                أحدث المقالات والنصائح الاحترافية لتطوير لوحات تحكم Excel و Power BI واستراتيجيات مؤشرات الأداء.
            </p>
        </div>
    </section>

    {{-- Articles Grid Section --}}
    <section class="py-16 bg-slate-900 min-h-[50vh]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if(isset($articles) && $articles->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-motion-stagger>
                    @foreach($articles as $art)
                    <article class="stagger-item rounded-3xl bg-slate-950 border border-slate-800 hover:border-cyan-500/40 transition-all overflow-hidden flex flex-col justify-between group shadow-xl">
                        <div>
                            <div class="relative h-52 w-full overflow-hidden bg-slate-900">
                                @php
                                    $artImg = $art->featured_image ? Storage::url($art->featured_image) : ($art->image ? Storage::url($art->image) : null);
                                @endphp
                                @if($artImg)
                                    <img src="{{ $artImg }}"
                                         alt="{{ $art->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full relative overflow-hidden bg-gradient-to-br from-slate-900 via-blue-950/70 to-slate-950 flex flex-col items-center justify-center p-6 text-center border-b border-slate-800">
                                        <div class="absolute inset-0 bg-[radial-gradient(rgba(6,182,212,0.15)_1px,transparent_1px)] bg-[size:16px_16px] pointer-events-none"></div>
                                        <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 flex items-center justify-center text-xl shadow-lg mb-2 relative z-10 group-hover:scale-110 transition-transform">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <span class="text-xs font-bold text-slate-300 relative z-10">تحليل وتطوير الأعمال</span>
                                    </div>
                                @endif
                            </div>

                            <div class="p-6 space-y-3">
                                <div class="text-xs text-cyan-400 font-bold flex items-center gap-2">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>{{ $art->published_at ? $art->published_at->format('Y-m-d') : 'مقال مميز' }}</span>
                                </div>
                                <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors line-clamp-2">
                                    {{ $art->title }}
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-400 line-clamp-3 leading-relaxed">
                                    {{ $art->excerpt ?? $art->short_description ?? Str::limit(strip_tags($art->content), 120) }}
                                </p>
                            </div>
                        </div>

                        <div class="px-6 pb-6 pt-2">
                            <a href="{{ route('articles.show', $art->slug) }}"
                               class="text-xs sm:text-sm font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5 transition-colors">
                                <span>قراءة المقال بالكامل</span>
                                <i class="fas fa-arrow-left text-xs"></i>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="mt-12 flex justify-center">
                    {{ $articles->links() }}
                </div>
            @else
                <div class="text-center py-20 text-slate-400 space-y-3">
                    <i class="fas fa-newspaper text-4xl text-slate-600"></i>
                    <p class="text-base font-bold">لا توجد مقالات منشورة حالياً</p>
                </div>
            @endif

        </div>
    </section>

</x-layouts.app>
