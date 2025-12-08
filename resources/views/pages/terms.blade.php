<x-layouts.app>
    {{-- Hero Section - الشروط والأحكام --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-[50vh] flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center py-20">
            {{-- Icon --}}
            <div class="inline-flex items-center justify-center w-24 h-24 rounded-3xl bg-gradient-to-r from-purple-500 to-pink-500 mb-8 transform hover:scale-110 transition-transform duration-300">
                <i class="fas fa-file-contract text-white text-5xl"></i>
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block bg-gradient-to-r from-purple-400 via-pink-400 to-orange-400 bg-clip-text text-transparent">
                    الشروط والأحكام
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light">
                الشروط والأحكام التي تحكم استخدام خدماتنا
            </p>

            <div class="flex items-center justify-center gap-3 mt-8 text-gray-400">
                <i class="fas fa-calendar-alt text-purple-400"></i>
                <span>آخر تحديث: {{ date('Y-m-d') }}</span>
            </div>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 relative overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-r from-orange-400 to-red-400 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto">
                {{-- Introduction --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-info-circle text-white text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-3xl font-black text-gray-900 mb-4">مقدمة</h2>
                            <p class="text-gray-700 leading-relaxed text-lg">
                                مرحباً بك في <span class="font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">EDATA 360</span>. باستخدامك لخدماتنا، فإنك توافق على الالتزام بهذه الشروط والأحكام. يرجى قراءتها بعناية قبل استخدام خدماتنا في تحليل البيانات وإنشاء لوحات التحكم.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Service Terms --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-handshake text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">شروط الخدمة</h2>
                            
                            <div class="space-y-6">
                                <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                        <i class="fas fa-check-double text-blue-600"></i>
                                        قبول الشروط
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed mb-3">
                                        باستخدامك لخدماتنا، فإنك توافق على:
                                    </p>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-chevron-left text-blue-600 mt-1"></i>
                                            <span>الالتزام بجميع الشروط والأحكام المذكورة</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-chevron-left text-blue-600 mt-1"></i>
                                            <span>تقديم معلومات دقيقة وصحيحة</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-chevron-left text-blue-600 mt-1"></i>
                                            <span>استخدام الخدمات بطريقة قانونية ومشروعة</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-chevron-left text-blue-600 mt-1"></i>
                                            <span>عدم إساءة استخدام خدماتنا أو محاولة اختراق أنظمتنا</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                        <i class="fas fa-briefcase text-green-600"></i>
                                        نطاق الخدمات
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed mb-3">
                                        نقدم مجموعة من الخدمات المتخصصة في:
                                    </p>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-chevron-left text-green-600 mt-1"></i>
                                            <span>تحليل البيانات وإنشاء التقارير الاحترافية</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-chevron-left text-green-600 mt-1"></i>
                                            <span>تصميم وتطوير لوحات تحكم Excel و Power BI</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-chevron-left text-green-600 mt-1"></i>
                                            <span>إنشاء مؤشرات الأداء الرئيسية (KPIs)</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-chevron-left text-green-600 mt-1"></i>
                                            <span>استشارات ذكاء الأعمال والتحليلات المتقدمة</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Project Terms --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-project-diagram text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">شروط المشاريع</h2>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6 border border-orange-100">
                                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center mb-4">
                                        <i class="fas fa-calendar-check text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-3">مواعيد التسليم</h3>
                                    <p class="text-gray-700 text-sm leading-relaxed">
                                        نلتزم بتسليم المشاريع في المواعيد المتفق عليها. قد تتأثر المواعيد بتوفر البيانات المطلوبة من العميل.
                                    </p>
                                </div>

                                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100">
                                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center mb-4">
                                        <i class="fas fa-edit text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-3">التعديلات</h3>
                                    <p class="text-gray-700 text-sm leading-relaxed">
                                        نوفر عدد محدد من التعديلات المجانية حسب الباقة المختارة. التعديلات الإضافية قد تتطلب رسوماً إضافية.
                                    </p>
                                </div>

                                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center mb-4">
                                        <i class="fas fa-file-alt text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-3">البيانات المطلوبة</h3>
                                    <p class="text-gray-700 text-sm leading-relaxed">
                                        يجب على العميل توفير البيانات اللازمة بصيغة مناسبة وفي الوقت المحدد لضمان سير العمل بسلاسة.
                                    </p>
                                </div>

                                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center mb-4">
                                        <i class="fas fa-headset text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-3">الدعم الفني</h3>
                                    <p class="text-gray-700 text-sm leading-relaxed">
                                        نوفر دعماً فنياً لمدة محددة بعد تسليم المشروع حسب الاتفاق المبرم مع العميل.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Payment Terms --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-yellow-500 to-orange-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-credit-card text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">شروط الدفع</h2>
                            
                            <div class="space-y-4">
                                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl border border-yellow-100">
                                    <i class="fas fa-money-bill-wave text-yellow-600 text-2xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">الأسعار والباقات</h3>
                                        <p class="text-gray-700">تختلف الأسعار حسب نوع الخدمة ومدى تعقيد المشروع. يتم الاتفاق على السعر قبل بدء العمل.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl border border-blue-100">
                                    <i class="fas fa-percentage text-blue-600 text-2xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">الدفعة المقدمة</h3>
                                        <p class="text-gray-700">يتطلب بدء العمل دفع نسبة مقدمة من قيمة المشروع (عادة 50%) والباقي عند التسليم.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-100">
                                    <i class="fas fa-undo text-green-600 text-2xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">سياسة الاسترداد</h3>
                                        <p class="text-gray-700">يمكن استرداد المبالغ المدفوعة في حالة عدم البدء في المشروع. بعد البدء، لا يمكن استرداد الدفعة المقدمة.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-100">
                                    <i class="fas fa-clock text-purple-600 text-2xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">التأخير في الدفع</h3>
                                        <p class="text-gray-700">في حالة التأخير في دفع المستحقات، قد يتم إيقاف العمل على المشروع حتى استكمال الدفع.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Intellectual Property --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-copyright text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">الملكية الفكرية</h2>
                            
                            <div class="space-y-4">
                                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-6 border border-indigo-100">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                        <i class="fas fa-user-check text-indigo-600"></i>
                                        حقوق العميل
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-indigo-600 mt-1"></i>
                                            <span>بعد الدفع الكامل، تنتقل ملكية المشروع النهائي إلى العميل</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-indigo-600 mt-1"></i>
                                            <span>يحق للعميل استخدام وتعديل المشروع حسب احتياجاته</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-indigo-600 mt-1"></i>
                                            <span>بيانات العميل تظل ملكاً خاصاً له ولا نحتفظ بها بعد انتهاء المشروع</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-gradient-to-r from-pink-50 to-red-50 rounded-2xl p-6 border border-pink-100">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                        <i class="fas fa-building text-pink-600"></i>
                                        حقوق EDATA 360
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-pink-600 mt-1"></i>
                                            <span>نحتفظ بحق عرض المشروع في معرض أعمالنا (بعد موافقة العميل)</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-pink-600 mt-1"></i>
                                            <span>الأدوات والتقنيات المستخدمة تبقى ملكاً فكرياً لنا</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-pink-600 mt-1"></i>
                                            <span>لا يحق للعميل إعادة بيع المشروع كخدمة مستقلة</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Liability --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-red-500 to-pink-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">المسؤولية والضمانات</h2>
                            
                            <div class="space-y-3">
                                <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-xl">
                                    <i class="fas fa-shield-alt text-red-600 text-xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-1">ضمان الجودة</h3>
                                        <p class="text-gray-700 text-sm">نضمن جودة العمل المقدم وفقاً للمواصفات المتفق عليها</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-xl">
                                    <i class="fas fa-database text-red-600 text-xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-1">دقة البيانات</h3>
                                        <p class="text-gray-700 text-sm">نعتمد على البيانات المقدمة من العميل ولا نتحمل مسؤولية عدم دقتها</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-xl">
                                    <i class="fas fa-ban text-red-600 text-xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-1">حدود المسؤولية</h3>
                                        <p class="text-gray-700 text-sm">مسؤوليتنا محدودة بقيمة المشروع المدفوعة ولا تشمل الأضرار غير المباشرة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Termination --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-gray-500 to-slate-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-times-circle text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">إنهاء الخدمة</h2>
                            
                            <div class="bg-gradient-to-r from-gray-50 to-slate-50 rounded-2xl p-6 border border-gray-200">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    يحق لأي من الطرفين إنهاء التعاقد في الحالات التالية:
                                </p>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-chevron-left text-gray-600 mt-1"></i>
                                        <span>عدم الالتزام بالشروط والأحكام المتفق عليها</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-chevron-left text-gray-600 mt-1"></i>
                                        <span>التأخير المستمر في تقديم البيانات أو الدفعات المطلوبة</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-chevron-left text-gray-600 mt-1"></i>
                                        <span>الاتفاق المتبادل بين الطرفين على إنهاء التعاقد</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-chevron-left text-gray-600 mt-1"></i>
                                        <span>في حالة الإنهاء، يتم تسوية المستحقات المالية بشكل عادل</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Section --}}
                <div class="bg-gradient-to-r from-purple-600 via-pink-500 to-orange-600 rounded-3xl p-10 shadow-2xl text-white">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm mb-6">
                            <i class="fas fa-question-circle text-white text-3xl"></i>
                        </div>
                        <h2 class="text-3xl font-black mb-4">هل لديك استفسارات؟</h2>
                        <p class="text-xl mb-8 text-purple-100">
                            إذا كان لديك أي أسئلة حول الشروط والأحكام، نحن هنا لمساعدتك
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('contact') }}" class="bg-white text-purple-600 font-bold py-4 px-8 rounded-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 inline-flex items-center justify-center gap-2">
                                <i class="fas fa-paper-plane"></i>
                                <span>تواصل معنا</span>
                            </a>
                            @if($companySettings && $companySettings->main_email)
                            <a href="mailto:{{ $companySettings->main_email }}" class="bg-white/20 backdrop-blur-sm border-2 border-white text-white font-bold py-4 px-8 rounded-xl hover:bg-white hover:text-purple-600 transition-all duration-300 inline-flex items-center justify-center gap-2">
                                <i class="fas fa-envelope"></i>
                                <span>{{ $companySettings->main_email }}</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
