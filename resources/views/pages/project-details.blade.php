<x-layouts.app :seo="$project">
    {{-- Hero Section with Breadcrumb --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 pt-32 pb-20 overflow-hidden">
        {{-- Animated Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            {{-- Breadcrumb --}}
            <nav class="mb-8 flex items-center gap-2 text-sm text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-2">
                    <i class="fas fa-home"></i>
                    <span>الرئيسية</span>
                </a>
                <i class="fas fa-chevron-left text-xs"></i>
                <a href="{{ route('portfolio') }}" class="hover:text-cyan-400 transition-colors">المعرض</a>
                <i class="fas fa-chevron-left text-xs"></i>
                <span class="text-white font-semibold">{{ $project->title }}</span>
            </nav>

            {{-- Title & Types --}}
            <div class="max-w-5xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
                    {{ $project->title }}
                </h1>

                @if($project->short_description)
                <p class="text-xl md:text-2xl text-gray-300 leading-relaxed font-light mb-8 max-w-3xl mx-auto">
                    {{ $project->short_description }}
                </p>
                @endif

                {{-- Project Types Badges --}}
                @if($project->types && $project->types->count() > 0)
                <div class="flex flex-wrap gap-3 justify-center mb-8">
                    @foreach($project->types as $type)
                    <a href="{{ route('portfolio', ['type' => $type->slug]) }}" 
                       class="group inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-lg"
                       style="background: linear-gradient(135deg, {{ $type->color }} 0%, {{ $type->color }}dd 100%);">
                        @if($type->icon)
                        <i class="{{ $type->icon }} text-sm"></i>
                        @endif
                        <span>{{ $type->name }}</span>
                    </a>
                    @endforeach
                </div>
                @endif

                {{-- Quick Info --}}
                <div class="flex flex-wrap items-center justify-center gap-6 text-gray-300">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-calendar-alt text-cyan-400"></i>
                        <span>{{ $project->created_at->format('Y-m-d') }}</span>
                    </div>
                    <div class="w-1 h-1 rounded-full bg-gray-500"></div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-green-400"></i>
                        <span>مكتمل بنجاح</span>
                    </div>
                    @if($project->projectImages && $project->projectImages->count() > 0)
                    <div class="w-1 h-1 rounded-full bg-gray-500"></div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-images text-purple-400"></i>
                        <span>{{ $project->projectImages->count() }} صورة</span>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- Main Image --}}
    <section class="py-16 bg-gradient-to-br from-gray-50 via-blue-50 to-cyan-50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <a href="{{ Storage::url($project->main_image) }}" 
                   data-fancybox="project-gallery" 
                   data-caption="{{ $project->title }}"
                   class="block relative rounded-3xl overflow-hidden shadow-2xl group cursor-pointer transform hover:scale-[1.02] transition-transform duration-500">
                    <img src="{{ Storage::url($project->main_image) }}"
                         alt="{{ $project->title }}"
                         class="w-full h-auto object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <div class="bg-white/20 backdrop-blur-md rounded-full p-6 transform scale-75 group-hover:scale-100 transition-transform duration-500">
                            <i class="fas fa-search-plus text-white text-4xl"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Content Section --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-3 gap-12">
                    {{-- Main Content --}}
                    <div class="lg:col-span-2 space-y-12">
                        {{-- Description --}}
                        <div>
                            <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-6 flex items-center gap-3">
                                <div class="w-1.5 h-10 bg-gradient-to-b from-blue-600 to-cyan-500 rounded-full"></div>
                                <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">تفاصيل المشروع</span>
                            </h2>
                            <div class="prose prose-lg max-w-none">
                                <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-2xl p-8 border border-gray-200">
                                    {!! $project->description !!}
                                </div>
                            </div>
                        </div>

                        {{-- Image Gallery --}}
                        @if($project->projectImages && $project->projectImages->count() > 0)
                        <div>
                            <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-6 flex items-center gap-3">
                                <div class="w-1.5 h-10 bg-gradient-to-b from-purple-600 to-pink-500 rounded-full"></div>
                                <span class="bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">معرض الصور</span>
                            </h2>

                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                @foreach($project->projectImages as $image)
                                <a href="{{ Storage::url($image->image_path) }}" 
                                   data-fancybox="project-gallery" 
                                   data-caption="{{ $image->caption ?? $project->title }}"
                                   class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1 cursor-pointer aspect-square">
                                    <img src="{{ Storage::url($image->image_path) }}"
                                         alt="{{ $image->caption }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    
                                    {{-- Hover Overlay --}}
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                        <div class="text-white text-center transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                            <i class="fas fa-search-plus text-3xl mb-2"></i>
                                            @if($image->caption)
                                            <p class="text-sm font-semibold px-4">{{ $image->caption }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        {{-- Video Section --}}
                        @if($project->video_url)
                        <div>
                            <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-6 flex items-center gap-3">
                                <div class="w-1.5 h-10 bg-gradient-to-b from-orange-600 to-red-500 rounded-full"></div>
                                <span class="bg-gradient-to-r from-orange-600 to-red-500 bg-clip-text text-transparent">فيديو المشروع</span>
                            </h2>

                            <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                                <div class="aspect-video">
                                    <video controls class="w-full h-full">
                                        <source src="{{ Storage::url($project->video_url) }}" type="video/mp4">
                                        متصفحك لا يدعم تشغيل الفيديو.
                                    </video>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                    {{-- Sidebar --}}
                    <div class="lg:col-span-1">
                        <div class="sticky top-8 space-y-6">
                            {{-- Project Types Card --}}
                            @if($project->types && $project->types->count() > 0)
                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100">
                                <h3 class="text-xl font-black text-gray-900 mb-4 flex items-center gap-2">
                                    <i class="fas fa-layer-group text-purple-600"></i>
                                    <span>تصنيفات المشروع</span>
                                </h3>
                                <div class="space-y-3">
                                    @foreach($project->types as $type)
                                    <a href="{{ route('portfolio', ['type' => $type->slug]) }}" 
                                       class="group flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:shadow-md"
                                       style="background: linear-gradient(135deg, {{ $type->color }}10 0%, white 100%); border: 2px solid {{ $type->color }}20;">
                                        @if($type->icon)
                                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0 transition-transform duration-300 group-hover:scale-110"
                                             style="background: linear-gradient(135deg, {{ $type->color }} 0%, {{ $type->color }}dd 100%);">
                                            <i class="{{ $type->icon }} text-white"></i>
                                        </div>
                                        @endif
                                        <div class="flex-1 min-w-0">
                                            <p class="font-bold text-sm truncate" style="color: {{ $type->color }};">{{ $type->name }}</p>
                                            <p class="text-xs text-gray-600">عرض المزيد</p>
                                        </div>
                                        <i class="fas fa-arrow-left text-xs transition-transform duration-300 group-hover:-translate-x-1" style="color: {{ $type->color }};"></i>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            {{-- Purchase Availability --}}
                            @if($project->is_available_for_purchase && $companySettings && $companySettings->whatsapp_number)
                            <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-2xl p-6 border-2 border-emerald-200 shadow-lg">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-green-600 flex items-center justify-center">
                                        <i class="fas fa-shopping-cart text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-black text-gray-900">متاح للشراء</h3>
                                        <p class="text-sm text-gray-600">يمكنك شراء هذا المشروع الآن</p>
                                    </div>
                                </div>

                                @if($project->price)
                                <div class="bg-white rounded-xl p-4 mb-4 border border-emerald-200">
                                    <div class="flex items-baseline justify-between">
                                        <span class="text-gray-600 text-sm">السعر:</span>
                                        <div class="flex items-baseline gap-1">
                                            <span class="text-3xl font-black text-emerald-600">{{ number_format($project->price, 2) }}</span>
                                            <span class="text-gray-600 font-semibold">ر.س</span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $companySettings->whatsapp_number) }}?text={{ urlencode('مرحباً، أنا مهتم بشراء المشروع: ' . $project->title . "\n" . 'رابط المشروع: ' . request()->url()) }}"
                                   target="_blank"
                                   class="group flex items-center justify-center gap-3 w-full bg-gradient-to-r from-emerald-500 to-green-600 text-white font-bold py-4 px-6 rounded-xl hover:shadow-xl hover:shadow-emerald-500/30 transform hover:scale-105 transition-all duration-300">
                                    <i class="fab fa-whatsapp text-2xl group-hover:rotate-12 transition-transform"></i>
                                    <span>اشتري عبر واتساب</span>
                                </a>

                                <p class="text-xs text-gray-600 text-center mt-3">
                                    <i class="fas fa-shield-alt text-emerald-600 ml-1"></i>
                                    سيتم التواصل معك مباشرة عبر واتساب
                                </p>
                            </div>
                            @endif

                            {{-- Quick Actions --}}
                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                                <h3 class="text-xl font-black text-gray-900 mb-4 flex items-center gap-2">
                                    <i class="fas fa-rocket text-blue-600"></i>
                                    <span>هل أعجبك المشروع؟</span>
                                </h3>
                                <p class="text-gray-700 mb-6 text-sm leading-relaxed">
                                    يمكننا مساعدتك في إنشاء مشروع مشابه يلبي احتياجاتك
                                </p>
                                <div class="space-y-3">
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $companySettings->whatsapp_number) }}?text={{ urlencode('مرحباً، أنا مهتم بطلب تصميم مشابه لمشروع: ' . $project->title . "\n" . 'رابط المشروع: ' . request()->url()) }}"
                                       class="group flex items-center justify-center gap-2 w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg hover:shadow-blue-500/30 transform hover:scale-105 transition-all duration-300">
                                        <i class="fas fa-paper-plane group-hover:rotatse-12 transition-transform"></i>
                                        <span>اطلب تصميم مشابه</span>
                                    </a>
                                    <a href="{{ route('portfolio') }}"
                                       class="flex items-center justify-center gap-2 w-full bg-white text-gray-700 font-semibold py-3 px-6 rounded-xl border-2 border-gray-200 hover:border-blue-300 hover:text-blue-600 transition-all duration-300">
                                        <i class="fas fa-th-large"></i>
                                        <span>عودة للمعرض</span>
                                    </a>
                                </div>
                            </div>

                            {{-- Share Section --}}
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                                <h3 class="text-xl font-black text-gray-900 mb-4 flex items-center gap-2">
                                    <i class="fas fa-share-alt text-green-600"></i>
                                    <span>شارك المشروع</span>
                                </h3>
                                <div class="flex gap-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                                       target="_blank"
                                       class="flex-1 flex items-center justify-center gap-2 bg-blue-600 text-white py-2.5 rounded-lg hover:bg-blue-700 transition-colors">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($project->title) }}" 
                                       target="_blank"
                                       class="flex-1 flex items-center justify-center gap-2 bg-sky-500 text-white py-2.5 rounded-lg hover:bg-sky-600 transition-colors">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($project->title) }}" 
                                       target="_blank"
                                       class="flex-1 flex items-center justify-center gap-2 bg-blue-700 text-white py-2.5 rounded-lg hover:bg-blue-800 transition-colors">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <button onclick="navigator.clipboard.writeText('{{ request()->url() }}'); alert('تم نسخ الرابط!');"
                                            class="flex-1 flex items-center justify-center gap-2 bg-gray-600 text-white py-2.5 rounded-lg hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-link"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fancybox Initialization --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Fancybox.bind('[data-fancybox="project-gallery"]', {
                l10n: {
                    CLOSE: 'إغلاق',
                    NEXT: 'التالي',
                    PREV: 'السابق',
                    MODAL: 'يمكنك إغلاق هذا النموذج بالضغط على ESC',
                    ERROR: 'حدث خطأ أثناء تحميل الصورة',
                    IMAGE_ERROR: 'لم يتم العثور على الصورة',
                    TOGGLE_ZOOM: 'تبديل مستوى التكبير',
                    TOGGLE_THUMBS: 'تبديل الصور المصغرة',
                    TOGGLE_SLIDESHOW: 'تبديل عرض الشرائح',
                    TOGGLE_FULLSCREEN: 'تبديل ملء الشاشة',
                    DOWNLOAD: 'تحميل'
                },
                Carousel: {
                    infinite: true,
                },
                Toolbar: {
                    display: {
                        left: ['infobar'],
                        middle: [],
                        right: ['slideshow', 'thumbs', 'close'],
                    },
                },
                Thumbs: {
                    autoStart: false,
                },
            });
        });
    </script>
</x-layouts.app>
