<x-layouts.app :seo="$project">
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
            {{-- Breadcrumb --}}
            <nav class="mb-8 flex items-center gap-2 text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors">الرئيسية</a>
                <i class="fas fa-chevron-left text-sm"></i>
                <a href="{{ route('portfolio') }}" class="hover:text-cyan-400 transition-colors">المعرض</a>
                <i class="fas fa-chevron-left text-sm"></i>
                <span class="text-white">{{ $project->title }}</span>
            </nav>

            <div class="max-w-4xl">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600/20 to-pink-600/20 backdrop-blur-sm border border-purple-500/30 rounded-full px-6 py-2 mb-6">
                    <i class="fas fa-star text-purple-400"></i>
                    <span class="text-sm font-medium text-purple-300">مشروع مميز</span>
                </div>

                <h1 class="text-5xl md:text-6xl font-black text-white mb-6 leading-tight">
                    {{ $project->title }}
                </h1>

                @if($project->short_description)
                    <p class="text-xl md:text-2xl text-gray-300 leading-relaxed font-light">
                        {{ $project->short_description }}
                    </p>
                @endif
            </div>
        </div>
    </section>

    {{-- Main Image Section --}}
    <section class="py-16 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <a href="{{ Storage::url($project->main_image) }}" 
                   data-fancybox="project-gallery" 
                   data-caption="{{ $project->title }}"
                   class="block relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white group cursor-pointer">
                    <img src="{{ Storage::url($project->main_image) }}"
                         alt="{{ $project->title }}"
                         class="w-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <div class="bg-white/20 backdrop-blur-sm rounded-full p-4">
                            <i class="fas fa-search-plus text-white text-3xl"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Project Details --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 mb-16">
                    {{-- Project Info Cards --}}
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-6 border border-blue-100 text-center">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">تاريخ التنفيذ</h3>
                        <p class="text-gray-600">{{ $project->created_at->format('Y-m-d') }}</p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-6 border border-purple-100 text-center">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-500 flex items-center justify-center">
                            <i class="fas fa-layer-group text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">نوع المشروع</h3>
                        <p class="text-gray-600">{{ $project->category ?? 'لوحة تحكم' }}</p>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-6 border border-green-100 text-center">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center">
                            <i class="fas fa-check-circle text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">الحالة</h3>
                        <p class="text-gray-600">مكتمل بنجاح</p>
                    </div>
                </div>

                {{-- Description --}}
                <div class="mb-16">
                    <h2 class="text-4xl font-black text-gray-900 mb-8 flex items-center gap-4">
                        <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">تفاصيل المشروع</span>
                        <div class="flex-1 h-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full"></div>
                    </h2>
                    <div class="prose prose-lg max-w-none">
                        <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-3xl p-8 border border-gray-200">
                            {!! $project->description !!}
                        </div>
                    </div>
                </div>

                {{-- Image Gallery --}}
                @if($project->projectImages->count() > 0)
                    <div class="mb-16">
                        <h2 class="text-4xl font-black text-gray-900 mb-8 flex items-center gap-4">
                            <span class="bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">معرض الصور</span>
                            <div class="flex-1 h-1 bg-gradient-to-r from-purple-600 to-pink-500 rounded-full"></div>
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($project->projectImages as $image)
                                <a href="{{ Storage::url($image->image_path) }}" 
                                   data-fancybox="project-gallery" 
                                   data-caption="{{ $image->caption ?? $project->title }}"
                                   class="group relative rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 block cursor-pointer">
                                    <img src="{{ Storage::url($image->image_path) }}"
                                         alt="{{ $image->caption }}"
                                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">

                                    @if($image->caption)
                                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-slate-900 to-transparent p-4">
                                            <p class="text-white font-semibold">{{ $image->caption }}</p>
                                        </div>
                                    @endif

                                    {{-- Hover Overlay --}}
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                        <div class="bg-white text-blue-600 font-bold px-6 py-3 rounded-lg transform translate-y-4 group-hover:translate-y-0 duration-500 flex items-center gap-2">
                                            <i class="fas fa-search-plus"></i>
                                            <span>عرض بالحجم الكامل</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Video Section --}}
                @if($project->video_url)
                    <div class="mb-16">
                        <h2 class="text-4xl font-black text-gray-900 mb-8 flex items-center gap-4">
                            <span class="bg-gradient-to-r from-orange-600 to-red-500 bg-clip-text text-transparent">فيديو المشروع</span>
                            <div class="flex-1 h-1 bg-gradient-to-r from-orange-600 to-red-500 rounded-full"></div>
                        </h2>

                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                            <div class="aspect-w-16 aspect-h-9">
                                <iframe src="{{ Storage::url($project->video_url) }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        class="w-full h-96 rounded-2xl"></iframe>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24 bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    أعجبك هذا المشروع؟
                </h2>
                <p class="text-xl text-gray-200 mb-10 max-w-2xl mx-auto">
                    دعنا نساعدك في إنشاء مشروع مشابه يلبي احتياجاتك ويحقق أهدافك
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('request-design.create') }}"
                       class="group bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 text-white font-black py-5 px-10 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300 inline-flex items-center justify-center gap-3">
                        <i class="fas fa-rocket group-hover:rotate-12 transition-transform"></i>
                        <span>اطلب تصميم مشابه</span>
                    </a>

                    <a href="{{ route('portfolio') }}"
                       class="bg-white/10 backdrop-blur-md border-2 border-white/30 text-white font-bold py-5 px-10 rounded-2xl hover:bg-white hover:text-slate-900 transition-all duration-300 inline-flex items-center justify-center gap-3">
                        <i class="fas fa-th-large"></i>
                        <span>عودة للمعرض</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Fancybox Initialization --}}
    <script>
        // Initialize Fancybox when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            Fancybox.bind('[data-fancybox="project-gallery"]', {
                // RTL support
                l10n: {
                    CLOSE: 'إغلاق',
                    NEXT: 'التالي',
                    PREV: 'السابق',
                    MODAL: 'يمكنك إغلاق هذا النموذج بالضغط على ESC',
                    ERROR: 'حدث خطأ أثناء تحميل الصورة',
                    IMAGE_ERROR: 'لم يتم العثور على الصورة',
                    ELEMENT_NOT_FOUND: 'لم يتم العثور على العنصر',
                    AJAX_NOT_FOUND: 'خطأ في تحميل المحتوى',
                    AJAX_FORBIDDEN: 'غير مسموح بتحميل المحتوى',
                    IFRAME_ERROR: 'خطأ في تحميل الصفحة',
                    TOGGLE_ZOOM: 'تبديل مستوى التكبير',
                    TOGGLE_THUMBS: 'تبديل الصور المصغرة',
                    TOGGLE_SLIDESHOW: 'تبديل عرض الشرائح',
                    TOGGLE_FULLSCREEN: 'تبديل ملء الشاشة',
                    DOWNLOAD: 'تحميل'
                },
                // Animation settings
                Carousel: {
                    infinite: true,
                },
                // Toolbar buttons
                Toolbar: {
                    display: {
                        left: ['infobar'],
                        middle: [],
                        right: ['slideshow', 'thumbs', 'close'],
                    },
                },
                // Thumbnail settings
                Thumbs: {
                    autoStart: false,
                },
            });
        });
    </script>
</x-layouts.app>
