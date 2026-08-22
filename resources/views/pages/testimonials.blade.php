<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 pt-32 pb-24 overflow-hidden">
        {{-- Background Pattern & Glows --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white max-w-4xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600/20 to-cyan-600/20 backdrop-blur-sm border border-blue-500/30 rounded-full px-6 py-2 mb-6">
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <span class="text-sm font-bold text-cyan-300">ثقة ورضا العملاء</span>
                </div>

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                    <span class="block bg-gradient-to-r from-white via-blue-100 to-cyan-100 bg-clip-text text-transparent">
                        آراء وشهادات عملائنا
                    </span>
                </h1>

                <p class="text-lg md:text-2xl text-slate-300 leading-relaxed font-normal">
                    قصص نجاح حقيقية وانطباعات عملائنا حول خدمات تحليل البيانات ولوحات التحكم المتطورة
                </p>
            </div>

            {{-- Stats Overview Card --}}
            <div class="max-w-4xl mx-auto bg-white/10 backdrop-blur-xl rounded-3xl p-6 md:p-8 border border-white/15 shadow-2xl text-white">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-center">
                    {{-- Average Score --}}
                    <div class="text-center sm:text-right border-b sm:border-b-0 sm:border-l border-white/10 pb-4 sm:pb-0 sm:pl-6">
                        <div class="flex items-center justify-center sm:justify-start gap-2 mb-1">
                            <span class="text-5xl font-black text-white">{{ $stats['average'] }}</span>
                            <div class="flex flex-col text-amber-400 text-sm">
                                <div class="flex gap-0.5">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="text-xs text-slate-300 mt-1 font-medium">من 5.0 نجوم</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-300 font-semibold">متوسط تقييم الخدمة</p>
                    </div>

                    {{-- Total Count --}}
                    <div class="text-center sm:text-right border-b sm:border-b-0 lg:border-l border-white/10 pb-4 sm:pb-0 sm:pl-6">
                        <div class="text-4xl font-black bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent mb-1">
                            {{ $stats['total'] }}+
                        </div>
                        <p class="text-xs text-slate-300 font-semibold">إجمالي التقييمات المنشورة</p>
                    </div>

                    {{-- 5 Star Percentage --}}
                    <div class="text-center sm:text-right border-b sm:border-b-0 sm:border-l border-white/10 pb-4 sm:pb-0 sm:pl-6">
                        <div class="text-4xl font-black text-emerald-400 mb-1">
                            {{ $stats['total'] > 0 ? round(($stats['fiveStar'] / $stats['total']) * 100) : 100 }}%
                        </div>
                        <p class="text-xs text-slate-300 font-semibold">تقييمات 5 نجوم ممتاز</p>
                    </div>

                    {{-- Verified Clients --}}
                    <div class="text-center sm:text-right">
                        <div class="text-4xl font-black text-purple-300 mb-1">
                            {{ $stats['verified'] }}
                        </div>
                        <p class="text-xs text-slate-300 font-semibold">عميل موثق ومعتمد</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-16 md:py-24 bg-slate-50 relative min-h-screen">
        <div class="container mx-auto px-4 md:px-8">

            {{-- Filter & Actions Bar --}}
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-12 bg-white p-4 md:p-6 rounded-3xl shadow-sm border border-slate-200/80">
                {{-- Rating Filter Tabs --}}
                <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0">
                    <a href="{{ route('testimonials.index') }}"
                       class="px-5 py-2.5 rounded-2xl font-bold text-sm whitespace-nowrap transition-all duration-300 {{ empty($selectedRating) ? 'bg-blue-600 text-white shadow-md shadow-blue-500/20' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                        الكل ({{ $stats['total'] }})
                    </a>
                    @for($star = 5; $star >= 1; $star--)
                        @php
                            $starKey = match($star) { 5 => 'fiveStar', 4 => 'fourStar', 3 => 'threeStar', 2 => 'twoStar', 1 => 'oneStar' };
                            $count = $stats[$starKey];
                        @endphp
                        @if($count > 0 || !empty($selectedRating))
                        <a href="{{ route('testimonials.index', ['rating' => $star]) }}"
                           class="px-4 py-2.5 rounded-2xl font-bold text-sm whitespace-nowrap transition-all duration-300 flex items-center gap-1.5 {{ (string)$selectedRating === (string)$star ? 'bg-amber-500 text-white shadow-md shadow-amber-500/20' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                            <span>{{ $star }}</span>
                            <i class="fas fa-star text-xs"></i>
                            <span class="text-xs opacity-75">({{ $count }})</span>
                        </a>
                        @endif
                    @endfor
                </div>

                {{-- Add Testimonial CTA Button --}}
                <a href="{{ route('testimonial.create') }}"
                   class="w-full md:w-auto inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold py-3 px-6 rounded-2xl shadow-lg hover:shadow-xl hover:shadow-cyan-500/25 transform hover:-translate-y-0.5 transition-all duration-300 text-sm whitespace-nowrap">
                    <i class="fas fa-plus-circle"></i>
                    <span>أضف تقييمك الآن</span>
                </a>
            </div>

            {{-- Testimonials Grid --}}
            @if($testimonials->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    @foreach($testimonials as $testimonial)
                        <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 border border-slate-200/80 flex flex-col justify-between relative overflow-hidden">
                            {{-- Top Accent Line --}}
                            <div class="absolute top-0 inset-x-0 h-1.5 bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            
                            {{-- Quote Watermark --}}
                            <div class="absolute -top-4 -right-2 text-8xl font-serif text-slate-100 group-hover:text-blue-50 transition-colors pointer-events-none select-none">“</div>

                            <div>
                                {{-- Header: Stars & Badge --}}
                                <div class="flex items-center justify-between gap-3 mb-6 relative z-10">
                                    <div class="flex items-center gap-1 bg-amber-50 border border-amber-200/60 px-3 py-1 rounded-full">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-amber-400' : 'text-slate-200' }} text-sm"></i>
                                        @endfor
                                        <span class="text-xs font-black text-amber-700 mr-1">{{ number_format($testimonial->rating, 1) }}</span>
                                    </div>

                                    @if($testimonial->badge_text)
                                        <span class="text-white text-xs font-bold px-3 py-1 rounded-full shadow-sm"
                                              style="background: linear-gradient(135deg, {{ $testimonial->badge_color_from ?? '#2563eb' }}, {{ $testimonial->badge_color_to ?? '#06b6d4' }});">
                                            {{ $testimonial->badge_text }}
                                        </span>
                                    @endif
                                </div>

                                {{-- Testimonial Body --}}
                                <p class="text-slate-700 leading-relaxed text-base mb-8 relative z-10 font-normal">
                                    "{{ $testimonial->testimonial }}"
                                </p>
                            </div>

                            {{-- Footer Info --}}
                            <div class="pt-6 border-t border-slate-100 flex items-center justify-between relative z-10 mt-auto">
                                <div class="flex items-center gap-3.5">
                                    @if($testimonial->client_avatar)
                                        <img src="{{ Storage::url($testimonial->client_avatar) }}" alt="{{ $testimonial->client_name }}" class="w-12 h-12 rounded-2xl object-cover ring-2 ring-blue-100">
                                    @else
                                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-white font-black text-lg shadow-md ring-2 ring-blue-100">
                                            {{ mb_substr($testimonial->client_name, 0, 1) }}
                                        </div>
                                    @endif
                                    <div>
                                        <h4 class="font-black text-slate-900 text-base group-hover:text-blue-600 transition-colors">{{ $testimonial->client_name }}</h4>
                                        <p class="text-xs text-slate-500 font-semibold">{{ $testimonial->client_position }}</p>
                                        @if($testimonial->client_company)
                                            <p class="text-xs text-slate-400">{{ $testimonial->client_company }}</p>
                                        @endif
                                    </div>
                                </div>

                                @if($testimonial->is_verified)
                                    <div class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-200/60" title="عميل موثق">
                                        <i class="fas fa-check-circle text-emerald-500"></i>
                                        <span>موثق</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination Links --}}
                <div class="flex justify-center">
                    {{ $testimonials->links() }}
                </div>
            @else
                {{-- Empty State --}}
                <div class="text-center py-20 bg-white rounded-3xl shadow-sm border border-slate-200 max-w-2xl mx-auto p-8">
                    <div class="w-20 h-20 bg-amber-50 text-amber-500 rounded-full flex items-center justify-center text-3xl mx-auto mb-6">
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-3">لا توجد تقييمات بهذا التصفية حالياً</h3>
                    <p class="text-slate-500 mb-6">يمكنك استعراض كافة التقييمات الأخرى أو إضافة تقييمك الخاص حول خدماتنا</p>
                    <a href="{{ route('testimonials.index') }}" class="inline-flex items-center gap-2 bg-slate-900 text-white font-bold py-3 px-6 rounded-2xl hover:bg-blue-600 transition-colors">
                        <i class="fas fa-undo"></i>
                        <span>عرض كافة التقييمات</span>
                    </a>
                </div>
            @endif
        </div>
    </section>

    {{-- Bottom CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-900 via-blue-950 to-indigo-950 text-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10 text-center max-w-4xl">
            <div class="w-16 h-16 bg-blue-500/20 border border-blue-400/30 rounded-2xl flex items-center justify-center text-cyan-300 text-2xl mx-auto mb-6 backdrop-blur-md">
                <i class="fas fa-comment-dots"></i>
            </div>
            <h2 class="text-3xl md:text-5xl font-black mb-4">هل تعاملت مع E-DATA 360؟</h2>
            <p class="text-slate-300 text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                يسعدنا جداً مشاركتك تجربتك وانطباعك معنا. رأيك محل اهتمامنا ويساعدنا في التطوير المستمر.
            </p>
            <a href="{{ route('testimonial.create') }}"
               class="inline-flex items-center gap-3 bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-white font-black py-4 px-10 rounded-2xl shadow-xl hover:shadow-2xl hover:shadow-cyan-500/30 transform hover:scale-105 transition-all duration-300 text-lg">
                <i class="fas fa-star text-amber-300"></i>
                <span>أضف تقييمك وتجربتك الان</span>
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
    </section>
</x-layouts.app>
