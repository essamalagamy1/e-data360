<x-layouts.app>
    {{-- Article Hero --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 py-16 md:py-24 overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-gray-400 mb-8">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">
                    <i class="fas fa-home"></i>
                </a>
                <i class="fas fa-chevron-left text-xs"></i>
                <a href="{{ route('articles') }}" class="hover:text-white transition-colors">المقالات</a>
                <i class="fas fa-chevron-left text-xs"></i>
                <span class="text-cyan-400">{{ Str::limit($article->title, 30) }}</span>
            </nav>

            <div class="max-w-4xl mx-auto text-center text-white">
                {{-- Meta --}}
                <div class="flex flex-wrap items-center justify-center gap-6 mb-6">
                    @if($article->author)
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-white font-bold">
                            {{ mb_substr($article->author, 0, 1) }}
                        </div>
                        <span class="text-gray-300">{{ $article->author }}</span>
                    </div>
                    @endif
                    <div class="flex items-center gap-2 text-gray-400">
                        <i class="fas fa-calendar"></i>
                        <span>{{ $article->published_at->format('d M, Y') }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-400">
                        <i class="fas fa-eye"></i>
                        <span>{{ number_format($article->views_count) }} مشاهدة</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-400">
                        <i class="fas fa-clock"></i>
                        <span>{{ ceil(str_word_count(strip_tags($article->content)) / 200) }} دقائق للقراءة</span>
                    </div>
                </div>

                {{-- Title --}}
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-black mb-6 leading-tight">
                    <span class="bg-gradient-to-r from-white via-blue-100 to-cyan-100 bg-clip-text text-transparent">
                        {{ $article->title }}
                    </span>
                </h1>

                {{-- Excerpt --}}
                @if($article->excerpt)
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    {{ $article->excerpt }}
                </p>
                @endif
            </div>
        </div>
    </section>

    {{-- Featured Image --}}
    @if($article->featured_image)
    <section class="relative -mt-12 z-20">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ Storage::url($article->featured_image) }}" 
                         alt="{{ $article->title }}" 
                         class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>
    @endif

    {{-- Article Content --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                {{-- Share Buttons --}}
                <div class="flex items-center justify-between mb-12 pb-8 border-b border-gray-200">
                    <span class="text-gray-600 font-bold">شارك المقال:</span>
                    <div class="flex items-center gap-3">
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('articles.show', $article)) }}&text={{ urlencode($article->title) }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="w-10 h-10 rounded-full bg-[#1DA1F2] flex items-center justify-center text-white hover:scale-110 transition-transform">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('articles.show', $article)) }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="w-10 h-10 rounded-full bg-[#1877F2] flex items-center justify-center text-white hover:scale-110 transition-transform">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('articles.show', $article)) }}&title={{ urlencode($article->title) }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="w-10 h-10 rounded-full bg-[#0A66C2] flex items-center justify-center text-white hover:scale-110 transition-transform">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . route('articles.show', $article)) }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="w-10 h-10 rounded-full bg-[#25D366] flex items-center justify-center text-white hover:scale-110 transition-transform">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <button onclick="navigator.clipboard.writeText('{{ route('articles.show', $article) }}'); alert('تم نسخ الرابط!')" 
                                class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-300 hover:scale-110 transition-all">
                            <i class="fas fa-link"></i>
                        </button>
                    </div>
                </div>

                {{-- Article Body --}}
                <article class="prose prose-lg max-w-none prose-headings:text-gray-900 prose-headings:font-black prose-p:text-gray-700 prose-p:leading-relaxed prose-a:text-blue-600 prose-a:no-underline hover:prose-a:underline prose-img:rounded-2xl prose-img:shadow-lg">
                    {!! $article->content !!}
                </article>

                {{-- Tags/Share Bottom --}}
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="text-center md:text-right">
                            <p class="text-gray-600">هل أعجبك هذا المقال؟</p>
                            <p class="text-gray-500 text-sm">شاركه مع أصدقائك!</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('articles.show', $article)) }}&text={{ urlencode($article->title) }}" 
                               target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-2 bg-[#1DA1F2] text-white font-bold py-2 px-4 rounded-full hover:scale-105 transition-transform">
                                <i class="fab fa-twitter"></i>
                                <span>تويتر</span>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('articles.show', $article)) }}" 
                               target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-2 bg-[#1877F2] text-white font-bold py-2 px-4 rounded-full hover:scale-105 transition-transform">
                                <i class="fab fa-facebook-f"></i>
                                <span>فيسبوك</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Articles --}}
    @if($relatedArticles && $relatedArticles->count() > 0)
    <section class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4">
                    مقالات <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">ذات صلة</span>
                </h2>
                <p class="text-xl text-gray-600">اكتشف المزيد من المقالات المفيدة</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @foreach($relatedArticles as $related)
                <article class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    {{-- Image --}}
                    <div class="relative h-48 overflow-hidden">
                        @if($related->featured_image)
                        <img src="{{ Storage::url($related->featured_image) }}" 
                             alt="{{ $related->title }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center">
                            <i class="fas fa-file-alt text-white text-5xl opacity-50"></i>
                        </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/30 to-transparent"></div>
                    </div>

                    {{-- Content --}}
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar text-blue-500"></i>
                                {{ $related->published_at->format('Y/m/d') }}
                            </span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors line-clamp-2">
                            {{ $related->title }}
                        </h3>

                        @if($related->excerpt)
                        <p class="text-gray-600 text-sm line-clamp-2">
                            {{ $related->excerpt }}
                        </p>
                        @endif

                        <a href="{{ route('articles.show', $related) }}" 
                           class="absolute inset-0 z-10" aria-label="اقرأ المقال: {{ $related->title }}"></a>
                    </div>
                </article>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('articles') }}" 
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold py-4 px-8 rounded-2xl hover:shadow-2xl hover:scale-105 transform transition-all duration-300">
                    <i class="fas fa-newspaper"></i>
                    <span>عرض جميع المقالات</span>
                </a>
            </div>
        </div>
    </section>
    @endif

    {{-- CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.03)_1px,transparent_1px)] bg-[size:60px_60px]"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-black text-white mb-6">
                    هل تحتاج مساعدة في مشروعك؟
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    فريقنا من الخبراء جاهز لمساعدتك في تحويل بياناتك إلى رؤى قيّمة
                </p>
                <a href="{{ route('request-design.create') }}" 
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 text-white font-bold py-4 px-10 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-rocket"></i>
                    <span>ابدأ مشروعك الآن</span>
                </a>
            </div>
        </div>
    </section>

    {{-- SEO Meta Tags --}}
    @push('meta')
    <meta property="og:title" content="{{ $article->meta_title ?? $article->title }}">
    <meta property="og:description" content="{{ $article->meta_description ?? $article->excerpt }}">
    @if($article->featured_image)
    <meta property="og:image" content="{{ Storage::url($article->featured_image) }}">
    @endif
    <meta property="og:type" content="article">
    <meta property="article:published_time" content="{{ $article->published_at->toIso8601String() }}">
    @if($article->author)
    <meta property="article:author" content="{{ $article->author }}">
    @endif
    @endpush
</x-layouts.app>
