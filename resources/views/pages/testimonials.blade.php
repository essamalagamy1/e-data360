<x-layouts.app>
    
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-12 pb-16 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-amber-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-5">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-amber-500/30 text-amber-400 text-xs sm:text-sm font-bold shadow-lg motion-reveal">
                <i class="fas fa-star text-amber-400"></i>
                <span>ثقة أكثر من 150 عميل في السعودية والخليج</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight motion-reveal">
                آراء وشهادات <span class="bg-gradient-to-r from-amber-400 via-yellow-300 to-orange-400 bg-clip-text text-transparent">شركاء النجاح</span>
            </h1>

            <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed motion-reveal">
                انطباعات وتجارب حقيقية لعملائنا بعد استخدام لوحات تحكم Excel و Power BI والحلول المخصصة.
            </p>
        </div>
    </section>

    {{-- Filter & Actions Bar --}}
    <section class="py-6 bg-slate-950 border-b border-slate-800 sticky top-20 z-30 backdrop-blur-xl bg-slate-950/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            
            {{-- Rating Filter Tabs --}}
            <div class="flex items-center gap-2 overflow-x-auto w-full sm:w-auto">
                <a href="{{ route('testimonials.index') }}"
                   class="px-5 py-2 rounded-full text-xs sm:text-sm font-bold transition-all {{ empty($selectedRating) ? 'bg-amber-500 text-slate-950 shadow-md shadow-amber-500/30' : 'bg-slate-900 text-slate-300 hover:bg-slate-800 hover:text-white border border-slate-800' }}">
                    الكل ({{ $stats['total'] ?? $testimonials->total() }})
                </a>
                @for($star = 5; $star >= 1; $star--)
                    @php
                        $starKey = match($star) { 5 => 'fiveStar', 4 => 'fourStar', 3 => 'threeStar', 2 => 'twoStar', 1 => 'oneStar' };
                        $count = $stats[$starKey] ?? 0;
                    @endphp
                    @if($count > 0 || !empty($selectedRating))
                    <a href="{{ route('testimonials.index', ['rating' => $star]) }}"
                       class="px-4 py-2 rounded-full text-xs sm:text-sm font-bold transition-all flex items-center gap-1 {{ (string)$selectedRating === (string)$star ? 'bg-amber-500 text-slate-950 shadow-md shadow-amber-500/30' : 'bg-slate-900 text-slate-300 hover:bg-slate-800 hover:text-white border border-slate-800' }}">
                        <span>{{ $star }}</span>
                        <i class="fas fa-star text-amber-400 text-xs"></i>
                        <span class="opacity-70 text-xs font-num">({{ $count }})</span>
                    </a>
                    @endif
                @endfor
            </div>

            {{-- Add Testimonial CTA --}}
            <a href="{{ route('testimonial.create') }}"
               class="px-5 py-2.5 rounded-full bg-slate-900 hover:bg-slate-800 text-cyan-400 hover:text-cyan-300 border border-cyan-500/40 text-xs sm:text-sm font-bold transition-all flex items-center gap-2">
                <i class="fas fa-plus text-xs"></i>
                <span>أضف تقييمك وتجربتك</span>
            </a>
        </div>
    </section>

    {{-- Testimonials Bento Wall --}}
    <section class="py-16 bg-slate-900 min-h-[50vh]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if(isset($testimonials) && $testimonials->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-motion-stagger>
                    @foreach($testimonials as $testi)
                    <div class="stagger-item p-7 rounded-3xl bg-slate-950 border border-slate-800 hover:border-amber-500/30 transition-all flex flex-col justify-between shadow-xl">
                        <div class="space-y-4">
                            {{-- Stars --}}
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-1 text-amber-400 text-sm">
                                    @for($i=1; $i <= ($testi->rating ?? 5); $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                                <span class="text-xs text-slate-500 font-num">مُوثّق</span>
                            </div>

                            <p class="text-sm sm:text-base text-slate-300 leading-relaxed italic">
                                "{{ $testi->content }}"
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-800/80 flex items-center gap-3 mt-6">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-cyan-600 to-blue-600 text-white font-bold flex items-center justify-center text-sm shadow-md">
                                {{ mb_substr($testi->client_name ?? 'ع', 0, 1) }}
                            </div>
                            <div>
                                <div class="text-sm font-bold text-white">{{ $testi->client_name }}</div>
                                <div class="text-xs text-slate-400">{{ $testi->client_position ?? $testi->company_name }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="mt-12 flex justify-center">
                    {{ $testimonials->links() }}
                </div>
            @else
                <div class="text-center py-20 text-slate-400 space-y-3">
                    <i class="fas fa-star text-4xl text-slate-600"></i>
                    <p class="text-base font-bold">لا توجد تقييمات مطابقة في هذا الفلتر</p>
                </div>
            @endif

        </div>
    </section>

</x-layouts.app>
