<x-layouts.app>
    {{-- Hero Section - Same as other pages --}}
    <section class="relative py-20 overflow-hidden" style="background: #0A1628;">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                {{-- Breadcrumb --}}
                <div class="flex items-center gap-3 mb-6 text-gray-400 text-sm">
                    <a href="{{ route('home') }}" class="hover:text-white transition">الرئيسية</a>
                    <i class="fas fa-chevron-left text-xs"></i>
                    <span style="color: #14B8A6;">من نحن</span>
                </div>

                @if($heroSection)
                <h1 class="text-4xl md:text-5xl font-black text-white mb-4">
                    {{ $heroSection->title_line1 }}
                    <span style="color: #14B8A6;">{{ $heroSection->title_line2 }}</span>
                </h1>
                @if($heroSection->subtitle)
                <p class="text-gray-400 text-lg">{{ $heroSection->subtitle }}</p>
                @endif
                @else
                <h1 class="text-4xl md:text-5xl font-black text-white mb-4">
                    من <span style="color: #14B8A6;">نحن</span>
                </h1>
                <p class="text-gray-400 text-lg">تعرف على قصتنا ورؤيتنا</p>
                @endif

                {{-- Stats - Dynamic from $stats --}}
                @if($stats && $stats->count() > 0)
                <div class="flex flex-wrap gap-8 mt-8">
                    @foreach($stats as $stat)
                    <div>
                        <div class="text-3xl font-black" style="color: #14B8A6;">{{ $stat->number }}</div>
                        <div class="text-gray-500 text-sm">{{ $stat->label }}</div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Our Story Section --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-sm font-bold uppercase tracking-wider" style="color: #0D9488;">قصتنا</span>
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mt-2 mb-6">
                        رحلة نحو التميز التقني
                    </h2>
                    <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
                        <p>
                            انطلقت رحلتنا من شغف حقيقي بعالم التقنية والبرمجيات. بدأنا كفريق صغير يؤمن بأن كل فكرة تستحق أن تتحول إلى منتج رقمي متميز.
                        </p>
                        <p>
                            اليوم، أصبحنا فريقاً متكاملاً من المبدعين والمطورين والمصممين، نعمل يداً بيد لتقديم حلول تقنية مبتكرة تلبي احتياجات عملائنا وتتجاوز توقعاتهم.
                        </p>
                        <p>
                            نؤمن بأن النجاح الحقيقي يُقاس بنجاح عملائنا، ولذلك نحرص على بناء شراكات طويلة المدى قائمة على الثقة والشفافية والالتزام بالجودة.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <div class="aspect-video flex items-center justify-center" style="background: #0A1628;">
                            <div class="text-center text-white">
                                <i class="fas fa-code text-8xl mb-4" style="color: #14B8A6;"></i>
                                <h3 class="text-2xl font-bold">نبني المستقبل الرقمي</h3>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-24 h-24 rounded-2xl -z-10" style="background: #0D9488;"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-bold uppercase tracking-wider" style="color: #0D9488;">رسالتنا ورؤيتنا</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mt-2">ما يحركنا</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6" style="background: rgba(13, 148, 136, 0.1);">
                        <i class="fas fa-bullseye text-2xl" style="color: #0D9488;"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">رسالتنا</h3>
                    <p class="text-gray-600 leading-relaxed">
                        تمكين الشركات والأفراد من تحقيق أهدافهم الرقمية من خلال تقديم حلول برمجية مبتكرة وعالية الجودة، مع الالتزام بأعلى معايير الاحترافية والشفافية.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6" style="background: rgba(13, 148, 136, 0.1);">
                        <i class="fas fa-eye text-2xl" style="color: #0D9488;"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">رؤيتنا</h3>
                    <p class="text-gray-600 leading-relaxed">
                        أن نكون الشريك التقني الأول والأكثر ثقة في المنطقة العربية، ونساهم في بناء مستقبل رقمي أفضل من خلال الابتكار والتميز في كل ما نقدمه.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Core Values --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-bold uppercase tracking-wider" style="color: #0D9488;">قيمنا</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mt-2">ما يميزنا</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:shadow-lg transition-all">
                    <div class="w-16 h-16 mx-auto rounded-xl flex items-center justify-center mb-6" style="background: rgba(13, 148, 136, 0.1);">
                        <i class="fas fa-lightbulb text-2xl" style="color: #0D9488;"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">الابتكار</h3>
                    <p class="text-gray-600 text-sm">نسعى دائماً لإيجاد حلول إبداعية ومبتكرة</p>
                </div>

                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:shadow-lg transition-all">
                    <div class="w-16 h-16 mx-auto rounded-xl flex items-center justify-center mb-6" style="background: rgba(13, 148, 136, 0.1);">
                        <i class="fas fa-gem text-2xl" style="color: #0D9488;"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">الجودة</h3>
                    <p class="text-gray-600 text-sm">لا نقبل بأقل من الأفضل في كل مشروع</p>
                </div>

                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:shadow-lg transition-all">
                    <div class="w-16 h-16 mx-auto rounded-xl flex items-center justify-center mb-6" style="background: rgba(13, 148, 136, 0.1);">
                        <i class="fas fa-handshake text-2xl" style="color: #0D9488;"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">الشفافية</h3>
                    <p class="text-gray-600 text-sm">نبني علاقات قائمة على الثقة والوضوح</p>
                </div>

                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:shadow-lg transition-all">
                    <div class="w-16 h-16 mx-auto rounded-xl flex items-center justify-center mb-6" style="background: rgba(13, 148, 136, 0.1);">
                        <i class="fas fa-clock text-2xl" style="color: #0D9488;"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">الالتزام</h3>
                    <p class="text-gray-600 text-sm">نحترم المواعيد ونلتزم بما نعد به</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20" style="background: #0A1628;">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-black text-white mb-4">
                هل أنت مستعد للعمل معنا؟
            </h2>
            <p class="text-gray-400 mb-8 max-w-xl mx-auto">
                دعنا نساعدك في تحويل أفكارك إلى واقع رقمي مذهل
            </p>
            <a href="{{ route('request-design.create') }}" class="inline-flex items-center gap-2 text-white font-bold py-4 px-8 rounded-xl hover:opacity-90 transition-all" style="background: #0D9488;">
                <i class="fas fa-rocket"></i>
                <span>ابدأ مشروعك الآن</span>
            </a>
        </div>
    </section>
</x-layouts.app>
