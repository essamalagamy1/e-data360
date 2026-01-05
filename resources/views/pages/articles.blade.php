<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 py-24 overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600/20 to-cyan-600/20 backdrop-blur-sm border border-blue-500/30 rounded-full px-6 py-2 mb-6">
                    <i class="fas fa-newspaper text-cyan-400"></i>
                    <span class="text-sm font-medium text-cyan-300">أحدث المقالات والأخبار</span>
                </div>

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                    <span class="block mb-2 bg-gradient-to-r from-white via-blue-100 to-cyan-100 bg-clip-text text-transparent">
                        مدونتنا
                    </span>
                    <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                        مقالات ورؤى قيّمة
                    </span>
                </h1>

                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    اكتشف آخر المقالات والنصائح والرؤى في عالم البيانات والتحليلات
                </p>
            </div>
        </div>
    </section>

    {{-- Featured Articles --}}
    @if($featuredArticles && $featuredArticles->count() > 0)
    <section class="py-16 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-40">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-12">
                <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white text-sm font-bold px-4 py-2 rounded-full">
                    <i class="fas fa-star ml-1"></i>
                    مقالات مميزة
                </span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($featuredArticles as $article)
                <article class="group relative bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4">
                    {{-- Featured Badge --}}
                    <div class="absolute top-4 right-4 z-10">
                        <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                            <i class="fas fa-crown ml-1"></i>
                            مميز
                        </span>
                    </div>

                    {{-- Image --}}
                    <div class="relative h-56 overflow-hidden">
                        @if($article->featured_image)
                        <img src="{{ Storage::url($article->featured_image) }}" 
                             alt="{{ $article->title }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center">
                            <i class="fas fa-file-alt text-white text-6xl opacity-50"></i>
                        </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent"></div>
                    </div>

                    {{-- Content --}}
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                            @if($article->author)
                            <span class="flex items-center gap-1">
                                <i class="fas fa-user text-blue-500"></i>
                                {{ $article->author }}
                            </span>
                            @endif
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar text-blue-500"></i>
                                {{ $article->published_at->format('Y/m/d') }}
                            </span>
                        </div>

                        <h3 class="text-xl font-black text-gray-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                            {{ $article->title }}
                        </h3>

                        @if($article->excerpt)
                        <p class="text-gray-600 mb-4 line-clamp-3">
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
        </div>
    </section>
    @endif

    {{-- All Articles --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    جميع <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">المقالات</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    تصفح مجموعتنا الكاملة من المقالات والرؤى
                </p>
            </div>

            @if($articles && $articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($articles as $article)
                <article class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                    {{-- Image --}}
                    <div class="relative h-48 overflow-hidden">
                        @if($article->featured_image)
                        <img src="{{ Storage::url($article->featured_image) }}" 
                             alt="{{ $article->title }}" 
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
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-3">
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar text-blue-500"></i>
                                {{ $article->published_at->format('Y/m/d') }}
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="fas fa-eye text-blue-500"></i>
                                {{ number_format($article->views_count) }}
                            </span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors line-clamp-2">
                            {{ $article->title }}
                        </h3>

                        @if($article->excerpt)
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ $article->excerpt }}
                        </p>
                        @endif

                        @if($article->author)
                        <div class="flex items-center gap-2 pt-4 border-t border-gray-100">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-white font-bold text-sm">
                                {{ mb_substr($article->author, 0, 1) }}
                            </div>
                            <span class="text-sm text-gray-600">{{ $article->author }}</span>
                        </div>
                        @endif

                        <a href="{{ route('articles.show', $article) }}" 
                           class="absolute inset-0 z-10" aria-label="اقرأ المقال: {{ $article->title }}"></a>
                    </div>
                </article>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="flex justify-center">
                {{ $articles->links() }}
            </div>
            @else
            <div class="text-center py-16">
                <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-newspaper text-gray-400 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-600 mb-2">لا توجد مقالات حالياً</h3>
                <p class="text-gray-500">سيتم نشر المقالات قريباً، تابعنا!</p>
            </div>
            @endif
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.03)_1px,transparent_1px)] bg-[size:60px_60px]"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-black text-white mb-6">
                    هل لديك مشروع تحتاج فيه للمساعدة؟
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    تواصل معنا الآن ودعنا نساعدك في تحويل بياناتك إلى رؤى قيّمة
                </p>
                <a href="{{ route('request-design.create') }}" 
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 text-white font-bold py-4 px-10 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-rocket"></i>
                    <span>ابدأ مشروعك الآن</span>
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
