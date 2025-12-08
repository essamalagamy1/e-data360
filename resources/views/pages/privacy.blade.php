<x-layouts.app>
    {{-- Hero Section - سياسة الخصوصية --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-[50vh] flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center py-20">
            {{-- Icon --}}
            <div class="inline-flex items-center justify-center w-24 h-24 rounded-3xl bg-gradient-to-r from-cyan-500 to-blue-500 mb-8 transform hover:scale-110 transition-transform duration-300">
                <i class="fas fa-shield-alt text-white text-5xl"></i>
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                    سياسة الخصوصية
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light">
                نحن ملتزمون بحماية خصوصيتك وبياناتك الشخصية
            </p>

            <div class="flex items-center justify-center gap-3 mt-8 text-gray-400">
                <i class="fas fa-calendar-alt text-cyan-400"></i>
                <span>آخر تحديث: {{ date('Y-m-d') }}</span>
            </div>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 relative overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto">
                {{-- Introduction --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-info-circle text-white text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-3xl font-black text-gray-900 mb-4">مقدمة</h2>
                            <p class="text-gray-700 leading-relaxed text-lg">
                                في <span class="font-bold bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">EDATA 360</span>، نحن نقدر ثقتك ونلتزم بحماية خصوصيتك. توضح سياسة الخصوصية هذه كيفية جمع واستخدام وحماية معلوماتك الشخصية عند استخدام خدماتنا في تحليل البيانات وإنشاء لوحات التحكم الاحترافية.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Data Collection --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-database text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">المعلومات التي نجمعها</h2>
                            
                            <div class="space-y-6">
                                <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                                    <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center gap-2">
                                        <i class="fas fa-user text-green-600"></i>
                                        المعلومات الشخصية
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                            <span>الاسم الكامل وبيانات الاتصال (البريد الإلكتروني، رقم الهاتف)</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                            <span>معلومات الشركة أو المؤسسة التي تمثلها</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                            <span>تفاصيل المشروع والمتطلبات الخاصة بك</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                                    <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center gap-2">
                                        <i class="fas fa-chart-line text-blue-600"></i>
                                        بيانات الاستخدام
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                                            <span>معلومات حول كيفية استخدامك لموقعنا الإلكتروني</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                                            <span>عنوان IP، نوع المتصفح، ونظام التشغيل</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                                            <span>الصفحات التي تزورها ومدة الزيارة</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100">
                                    <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center gap-2">
                                        <i class="fas fa-file-alt text-purple-600"></i>
                                        بيانات المشاريع
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-purple-600 mt-1"></i>
                                            <span>البيانات التي تشاركها معنا لتحليلها وإنشاء لوحات التحكم</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-purple-600 mt-1"></i>
                                            <span>الملفات والمستندات المرتبطة بمشروعك</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Data Usage --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-yellow-500 to-orange-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-cogs text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">كيف نستخدم معلوماتك</h2>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl p-6 border border-yellow-100">
                                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-yellow-500 to-orange-500 flex items-center justify-center mb-4">
                                        <i class="fas fa-tasks text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">تقديم الخدمات</h3>
                                    <p class="text-gray-700 text-sm">تنفيذ مشاريع تحليل البيانات ولوحات التحكم الخاصة بك</p>
                                </div>

                                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center mb-4">
                                        <i class="fas fa-comments text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">التواصل معك</h3>
                                    <p class="text-gray-700 text-sm">إرسال تحديثات المشروع والرد على استفساراتك</p>
                                </div>

                                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center mb-4">
                                        <i class="fas fa-chart-bar text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">تحسين الخدمات</h3>
                                    <p class="text-gray-700 text-sm">تطوير وتحسين جودة خدماتنا بناءً على احتياجاتك</p>
                                </div>

                                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100">
                                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center mb-4">
                                        <i class="fas fa-shield-alt text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">الأمان والحماية</h3>
                                    <p class="text-gray-700 text-sm">حماية حساباتك ومنع الاحتيال والاستخدام غير المصرح به</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Data Protection --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-red-500 to-pink-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-lock text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">حماية البيانات</h2>
                            
                            <div class="space-y-4">
                                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-red-50 to-pink-50 rounded-xl border border-red-100">
                                    <i class="fas fa-server text-red-600 text-2xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">التشفير الآمن</h3>
                                        <p class="text-gray-700">نستخدم تقنيات التشفير المتقدمة لحماية بياناتك أثناء النقل والتخزين</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl border border-blue-100">
                                    <i class="fas fa-user-shield text-blue-600 text-2xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">الوصول المحدود</h3>
                                        <p class="text-gray-700">يقتصر الوصول إلى بياناتك على الموظفين المصرح لهم فقط</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-100">
                                    <i class="fas fa-sync-alt text-green-600 text-2xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">النسخ الاحتياطي المنتظم</h3>
                                        <p class="text-gray-700">نقوم بعمل نسخ احتياطية منتظمة لضمان عدم فقدان بياناتك</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-100">
                                    <i class="fas fa-eye-slash text-purple-600 text-2xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">السرية التامة</h3>
                                        <p class="text-gray-700">نلتزم بعدم مشاركة بياناتك مع أي طرف ثالث دون موافقتك الصريحة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Your Rights --}}
                <div class="bg-white rounded-3xl p-10 shadow-xl mb-8 border border-gray-100">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-balance-scale text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-3xl font-black text-gray-900 mb-6">حقوقك</h2>
                            
                            <div class="space-y-3">
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl hover:bg-gradient-to-r hover:from-indigo-50 hover:to-purple-50 transition-all">
                                    <i class="fas fa-eye text-indigo-600 text-xl"></i>
                                    <span class="text-gray-800 font-medium">الحق في الوصول إلى بياناتك الشخصية</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl hover:bg-gradient-to-r hover:from-indigo-50 hover:to-purple-50 transition-all">
                                    <i class="fas fa-edit text-indigo-600 text-xl"></i>
                                    <span class="text-gray-800 font-medium">الحق في تصحيح أو تحديث معلوماتك</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl hover:bg-gradient-to-r hover:from-indigo-50 hover:to-purple-50 transition-all">
                                    <i class="fas fa-trash-alt text-indigo-600 text-xl"></i>
                                    <span class="text-gray-800 font-medium">الحق في طلب حذف بياناتك</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl hover:bg-gradient-to-r hover:from-indigo-50 hover:to-purple-50 transition-all">
                                    <i class="fas fa-ban text-indigo-600 text-xl"></i>
                                    <span class="text-gray-800 font-medium">الحق في الاعتراض على معالجة بياناتك</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl hover:bg-gradient-to-r hover:from-indigo-50 hover:to-purple-50 transition-all">
                                    <i class="fas fa-download text-indigo-600 text-xl"></i>
                                    <span class="text-gray-800 font-medium">الحق في الحصول على نسخة من بياناتك</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Section --}}
                <div class="bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 rounded-3xl p-10 shadow-2xl text-white">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm mb-6">
                            <i class="fas fa-envelope text-white text-3xl"></i>
                        </div>
                        <h2 class="text-3xl font-black mb-4">هل لديك أسئلة؟</h2>
                        <p class="text-xl mb-8 text-blue-100">
                            إذا كان لديك أي استفسارات حول سياسة الخصوصية، لا تتردد في التواصل معنا
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('contact') }}" class="bg-white text-blue-600 font-bold py-4 px-8 rounded-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 inline-flex items-center justify-center gap-2">
                                <i class="fas fa-paper-plane"></i>
                                <span>تواصل معنا</span>
                            </a>
                            @if($companySettings && $companySettings->main_email)
                            <a href="mailto:{{ $companySettings->main_email }}" class="bg-white/20 backdrop-blur-sm border-2 border-white text-white font-bold py-4 px-8 rounded-xl hover:bg-white hover:text-blue-600 transition-all duration-300 inline-flex items-center justify-center gap-2">
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
