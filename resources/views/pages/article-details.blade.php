<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-8 sm:pt-12 pb-16 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            {{-- Breadcrumb --}}
            <nav class="mb-8 flex items-center gap-2 text-xs sm:text-sm text-slate-400">
                <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-1.5">
                    <i class="fas fa-home"></i>
                    <span>الرئيسية</span>
                </a>
                <i class="fas fa-chevron-left text-[10px] opacity-60"></i>
                <a href="{{ route('articles') }}" class="hover:text-cyan-400 transition-colors">المدونة</a>
                <i class="fas fa-chevron-left text-[10px] opacity-60"></i>
                <span class="text-cyan-400 font-bold truncate max-w-xs">{{ $article->title }}</span>
            </nav>

            <div class="text-center space-y-6">
                {{-- Meta --}}
                <div class="flex flex-wrap items-center justify-center gap-4 text-xs sm:text-sm text-slate-400">
                    @if($article->author)
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded-full bg-gradient-to-tr from-cyan-600 to-blue-600 text-white font-bold flex items-center justify-center text-xs">
                            {{ mb_substr($article->author, 0, 1) }}
                        </div>
                        <span class="text-slate-300 font-bold">{{ $article->author }}</span>
                    </div>
                    <span>•</span>
                    @endif
                    <div class="flex items-center gap-1.5 font-num">
                        <i class="fas fa-calendar text-cyan-400"></i>
                        <span>{{ $article->published_at ? $article->published_at->format('d M, Y') : 'مقال مميز' }}</span>
                    </div>
                </div>

                <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                    {{ $article->title }}
                </h1>

                @if($article->excerpt)
                <p class="text-base sm:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    {{ $article->excerpt }}
                </p>
                @endif
            </div>

        </div>
    </section>

    {{-- Main Article Body --}}
    <section class="py-16 bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Featured Image --}}
            @php
                $artImg = $article->featured_image ? Storage::url($article->featured_image) : ($article->image ? Storage::url($article->image) : null);
            @endphp
            @if($artImg)
            <div class="mb-12 rounded-3xl overflow-hidden shadow-2xl border border-slate-800">
                <img src="{{ $artImg }}" alt="{{ $article->title }}" class="w-full h-auto object-cover max-h-[480px]">
            </div>
            @endif

            {{-- Content --}}
            <div class="p-8 sm:p-12 rounded-3xl bg-slate-950 border border-slate-800 shadow-2xl space-y-8">
                <div class="prose prose-invert prose-lg max-w-none text-slate-300 leading-relaxed space-y-6">
                    {!! $article->content !!}
                </div>

                {{-- Social Share --}}
                <div class="pt-8 border-t border-slate-800 flex flex-wrap items-center justify-between gap-4">
                    <span class="text-sm font-bold text-slate-400">مشاركة هذا المقال:</span>
                    <div class="flex items-center gap-2">
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}" target="_blank"
                           class="w-9 h-9 rounded-xl bg-slate-900 hover:bg-cyan-500 hover:text-slate-950 text-slate-300 flex items-center justify-center transition-all border border-slate-800">
                            <i class="fab fa-x-twitter text-sm"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($article->title) }}" target="_blank"
                           class="w-9 h-9 rounded-xl bg-slate-900 hover:bg-blue-600 text-slate-300 flex items-center justify-center transition-all border border-slate-800">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . url()->current()) }}" target="_blank"
                           class="w-9 h-9 rounded-xl bg-slate-900 hover:bg-emerald-600 text-slate-300 flex items-center justify-center transition-all border border-slate-800">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Related Articles --}}
            @if(isset($relatedArticles) && $relatedArticles->count() > 0)
            <div class="mt-16 space-y-6">
                <h3 class="text-2xl font-black text-white">مقالات ذات صلة</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($relatedArticles as $rel)
                    <a href="{{ route('articles.show', $rel->slug) }}"
                       class="p-5 rounded-2xl bg-slate-950 border border-slate-800 hover:border-cyan-500/40 transition-all block group">
                        <h4 class="text-sm font-bold text-white group-hover:text-cyan-400 transition-colors line-clamp-2 mb-2">
                            {{ $rel->title }}
                        </h4>
                        <span class="text-xs text-cyan-400 flex items-center gap-1 font-bold">
                            <span>اقرأ المزيد</span>
                            <i class="fas fa-arrow-left text-[10px]"></i>
                        </span>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </section>

</x-layouts.app>
