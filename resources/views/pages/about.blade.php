<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-center text-white">
            <h1 class="text-5xl md:text-6xl font-black mb-6">
                من <span class="bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">نحن</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                شريكك الموثوق في رحلة تحويل البيانات إلى قرارات استراتيجية
            </p>
        </div>
    </section>

    {{-- Company Story --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                        قصة <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">EDATA 360</span>
                    </h2>
                </div>
                
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-8 md:p-12 shadow-xl">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        <span class="text-4xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">EDATA 360</span> هي شركة سعودية متخصصة في تحليل البيانات وإنشاء لوحات التحكم الاحترافية. 
                        تأسست الشركة بهدف مساعدة الشركات والمؤسسات على اتخاذ قرارات أفضل من خلال تحويل بياناتها إلى رؤى واضحة وقابلة للتنفيذ.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        نؤمن بأن البيانات هي النفط الجديد، ولكن قيمتها الحقيقية تكمن في كيفية تحليلها واستخدامها. لذلك، نقدم حلولاً متكاملة 
                        تجمع بين الخبرة التقنية والفهم العميق لاحتياجات الأعمال في السوق السعودي.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        مع فريق من الخبراء المتخصصين في Excel و Power BI وتحليل البيانات، نفخر بتقديم خدمات عالية الجودة ساعدت أكثر من 
                        <span class="font-bold text-blue-600">150 عميل</span> على تحسين أدائهم وزيادة كفاءتهم التشغيلية.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Achievements --}}
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    إنجازاتنا <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">بالأرقام</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    أرقام تعكس التزامنا بالتميز ورضا عملائنا
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 text-center">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center">
                        <i class="fas fa-users text-white text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent mb-2">+150</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">عميل راضٍ</h3>
                    <p class="text-gray-600">من مختلف القطاعات</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 text-center">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-purple-600 to-pink-400 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent mb-2">+200</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">لوحة تحكم</h3>
                    <p class="text-gray-600">تم تصميمها وتسليمها</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 text-center">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-green-600 to-teal-400 flex items-center justify-center">
                        <i class="fas fa-calendar-alt text-white text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black bg-gradient-to-r from-green-600 to-teal-500 bg-clip-text text-transparent mb-2">3+</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">سنوات خبرة</h3>
                    <p class="text-gray-600">في السوق السعودي</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 text-center">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-orange-600 to-red-400 flex items-center justify-center">
                        <i class="fas fa-smile text-white text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black bg-gradient-to-r from-orange-600 to-red-500 bg-clip-text text-transparent mb-2">98%</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">رضا العملاء</h3>
                    <p class="text-gray-600">معدل الرضا العام</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="w-16 h-16 mb-6 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center">
                        <i class="fas fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-black text-gray-900 mb-4">رؤيتنا</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        أن نكون الشريك الأول والأكثر موثوقية في مجال تحليل البيانات ولوحات التحكم في المملكة العربية السعودية، 
                        ونساهم في تمكين الشركات من اتخاذ قرارات مبنية على البيانات لتحقيق النمو المستدام.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="w-16 h-16 mb-6 rounded-full bg-gradient-to-r from-purple-600 to-pink-400 flex items-center justify-center">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-black text-gray-900 mb-4">رسالتنا</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        نلتزم بتقديم حلول تحليل بيانات عالية الجودة ولوحات تحكم احترافية تساعد عملاءنا على فهم بياناتهم بشكل أفضل، 
                        واتخاذ قرارات استراتيجية مدروسة، وتحقيق أهدافهم بكفاءة وفعالية.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Values --}}
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    قيمنا <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">الأساسية</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    المبادئ التي نؤمن بها ونعمل وفقاً لها
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-award text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">الجودة</h3>
                    <p class="text-gray-600 leading-relaxed">
                        نضع الجودة في صميم كل ما نقوم به، ونسعى دائماً لتقديم أفضل الحلول لعملائنا
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-r from-purple-600 to-pink-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">الأمانة</h3>
                    <p class="text-gray-600 leading-relaxed">
                        نتعامل مع بيانات عملائنا بأقصى درجات السرية والمسؤولية
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-r from-green-600 to-teal-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">الابتكار</h3>
                    <p class="text-gray-600 leading-relaxed">
                        نواكب أحدث التقنيات والأساليب في مجال تحليل البيانات
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-r from-orange-600 to-red-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-user-friends text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">التركيز على العميل</h3>
                    <p class="text-gray-600 leading-relaxed">
                        رضا عملائنا هو أولويتنا القصوى ونسعى لتجاوز توقعاتهم
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-r from-indigo-600 to-purple-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">الالتزام بالمواعيد</h3>
                    <p class="text-gray-600 leading-relaxed">
                        نحترم وقت عملائنا ونلتزم بتسليم المشاريع في المواعيد المحددة
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-r from-pink-600 to-rose-400 flex items-center justify-center transform hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">التطوير المستمر</h3>
                    <p class="text-gray-600 leading-relaxed">
                        نستثمر في تطوير مهارات فريقنا ومواكبة كل جديد في المجال
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 -left-4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 -right-4 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-center text-white">
            <h2 class="text-4xl md:text-5xl font-black mb-6">
                هل أنت مستعد للعمل معنا؟
            </h2>
            <p class="text-xl mb-10 text-gray-200 max-w-2xl mx-auto">
                دعنا نساعدك في تحويل بياناتك إلى قرارات استراتيجية
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('request-design.create') }}" class="inline-block bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold py-4 px-8 rounded-full hover:shadow-2xl hover:scale-105 transform transition duration-300">
                    <i class="fas fa-rocket ml-2"></i>
                    ابدأ مشروعك الآن
                </a>
                <a href="{{ route('contact') }}" class="inline-block bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-full hover:bg-white hover:text-blue-900 transition duration-300">
                    <i class="fas fa-phone ml-2"></i>
                    تواصل معنا
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
