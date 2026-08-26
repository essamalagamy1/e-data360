<x-layouts.app :seo="$project">
    
    {{-- Breadcrumb & Hero Header --}}
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white pt-8 sm:pt-12 pb-16 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:36px_36px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            {{-- Breadcrumb --}}
            <nav class="mb-8 flex items-center gap-2 text-xs sm:text-sm text-slate-400">
                <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-1.5">
                    <i class="fas fa-home"></i>
                    <span>الرئيسية</span>
                </a>
                <i class="fas fa-chevron-left text-[10px] opacity-60"></i>
                <a href="{{ route('portfolio') }}" class="hover:text-cyan-400 transition-colors">معرض اللوحات</a>
                <i class="fas fa-chevron-left text-[10px] opacity-60"></i>
                <span class="text-cyan-400 font-bold truncate max-w-xs">{{ $project->title }}</span>
            </nav>

            <div class="max-w-4xl mx-auto text-center space-y-6">
                {{-- Types Badges --}}
                @if($project->types && $project->types->count() > 0)
                <div class="flex flex-wrap gap-2 justify-center">
                    @foreach($project->types as $type)
                    <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-cyan-500/10 text-cyan-300 border border-cyan-500/30">
                        @if($type->icon)<i class="{{ $type->icon }} ml-1"></i>@endif
                        {{ $type->name }}
                    </span>
                    @endforeach
                </div>
                @endif

                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                    {{ $project->title }}
                </h1>

                @if($project->short_description)
                <p class="text-base sm:text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed">
                    {{ $project->short_description }}
                </p>
                @endif
            </div>

        </div>
    </section>

    {{-- Main Showcase & Body --}}
    <section class="py-16 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Main Featured Image (Zoomable) --}}
            @php
                $mainImg = $project->main_image ? Storage::url($project->main_image) : ($project->featured_image ? Storage::url($project->featured_image) : null);
            @endphp
            @if($mainImg)
            <div class="max-w-5xl mx-auto mb-16">
                <a href="{{ $mainImg }}"
                   data-fancybox="project-gallery"
                   data-caption="{{ $project->title }}"
                   class="block relative rounded-3xl overflow-hidden shadow-2xl border border-slate-800 group cursor-pointer">
                    <img src="{{ $mainImg }}"
                         alt="{{ $project->title }}"
                         class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-950/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="px-5 py-2.5 rounded-full bg-cyan-500 text-slate-950 font-black text-sm flex items-center gap-2 shadow-xl">
                            <i class="fas fa-search-plus"></i>
                            <span>انقر لتكبير اللوحة بدقة عالية</span>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            {{-- 2 Columns Grid: Details vs Sidebar --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                {{-- Main Content (8 cols) --}}
                <div class="lg:col-span-8 space-y-10">
                    
                    {{-- Description Card --}}
                    <div class="p-8 rounded-3xl bg-slate-950 border border-slate-800 space-y-6">
                        <h2 class="text-2xl font-black text-white flex items-center gap-3">
                            <span class="w-2 h-6 rounded-full bg-cyan-500"></span>
                            <span>نظرة عامة على المشروع ومخرجاته</span>
                        </h2>
                        <div class="text-slate-300 text-base sm:text-lg leading-relaxed prose prose-invert max-w-none">
                            {!! $project->description !!}
                        </div>
                    </div>

                    {{-- Image Gallery --}}
                    @if($project->projectImages && $project->projectImages->count() > 0)
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-white flex items-center gap-2">
                            <i class="fas fa-images text-cyan-400"></i>
                            <span>لقطات إضافية من لوحة التحكم</span>
                        </h3>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            @foreach($project->projectImages as $img)
                            <a href="{{ Storage::url($img->image_path) }}"
                               data-fancybox="project-gallery"
                               data-caption="{{ $img->caption ?? $project->title }}"
                               class="group relative rounded-2xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 aspect-video block bg-slate-950">
                                <img src="{{ Storage::url($img->image_path) }}"
                                     alt="{{ $img->caption }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <i class="fas fa-expand text-white text-lg"></i>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Video Demonstration --}}
                    @if($project->video_url)
                    <div class="p-6 rounded-3xl bg-slate-950 border border-slate-800 space-y-4">
                        <h3 class="text-xl font-bold text-white flex items-center gap-2">
                            <i class="fas fa-play text-amber-400"></i>
                            <span>فيديو استعراض التفاعلية</span>
                        </h3>
                        <div class="aspect-video rounded-2xl overflow-hidden bg-black">
                            <video controls class="w-full h-full">
                                <source src="{{ Storage::url($project->video_url) }}" type="video/mp4">
                                متصفحك لا يدعم تشغيل الفيديو.
                            </video>
                        </div>
                    </div>
                    @endif

                </div>

                {{-- Sidebar (4 cols) --}}
                <div class="lg:col-span-4 space-y-6">
                    
                    {{-- Live Project Link --}}
                    @if($project->url)
                    <div class="p-6 rounded-3xl bg-slate-950 border border-cyan-500/30 shadow-xl space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-lg">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-base">المعاينة المباشرة</h4>
                                <p class="text-xs text-slate-400">تصفح اللوحة بشكل تفاعلي</p>
                            </div>
                        </div>
                        <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer"
                           class="w-full py-3 px-4 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-black text-sm text-center shadow-lg transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-external-link-alt text-xs"></i>
                            <span>فتح لوحة التحكم المباشرة</span>
                        </a>
                    </div>
                    @endif

                    {{-- Quick Order CTA --}}
                    @php
                        $rawWhatsapp = $companySettings->whatsapp_number ?? '+966501234567';
                        $cleanWhatsapp = preg_replace('/[^0-9]/', '', $rawWhatsapp);
                    @endphp
                    <div class="p-6 rounded-3xl bg-gradient-to-br from-slate-950 to-slate-900 border border-slate-800 space-y-4">
                        <h4 class="font-bold text-white text-base flex items-center gap-2">
                            <i class="fas fa-sparkles text-amber-400"></i>
                            <span>ترغب في لوحة مماثلة لعملك؟</span>
                        </h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            نصمم لوحة تحكم مخصصة بالكامل لبيانات شركتك مع تسليم خلال 3 إلى 5 أيام وتدريب كامل لفريقك.
                        </p>
                        <a href="{{ route('request-design.create') }}"
                           class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 text-white font-black text-sm text-center shadow-lg shadow-amber-500/20 hover:scale-105 transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-rocket text-xs"></i>
                            <span>طلب تصميم لوحة الآن</span>
                        </a>
                        <a href="https://wa.me/{{ $cleanWhatsapp }}?text={{ urlencode('مرحباً، أود الاستفسار عن تصميم لوحة تحكم مشابهة لمشروع: ' . $project->title) }}"
                           target="_blank"
                           class="w-full py-3 px-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-slate-300 font-bold text-xs text-center border border-slate-800 transition-all flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp text-emerald-400 text-sm"></i>
                            <span>استفسار فوري عبر واتساب</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </section>

</x-layouts.app>
