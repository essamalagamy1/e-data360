<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-[60vh] flex items-center justify-center overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-cyan-600/20 to-blue-600/20 backdrop-blur-sm border border-cyan-500/30 rounded-full px-6 py-2 mb-8">
                <i class="fas fa-rocket text-cyan-400"></i>
                <span class="text-sm font-medium text-cyan-300">ابدأ مشروعك اليوم</span>
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block mb-4">اطلب</span>
                <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                    تصميمك الآن
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light mb-8">
                املأ النموذج أدناه وسنتواصل معك خلال 24 ساعة مع عرض سعر مخصص
            </p>

            {{-- Special Offer Badge --}}
            <div class="inline-flex items-center gap-3 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 backdrop-blur-sm border-2 border-yellow-500/30 rounded-2xl px-8 py-4">
                <i class="fas fa-gift text-yellow-400 text-2xl"></i>
                <div class="text-right">
                    <p class="text-yellow-300 font-bold text-lg">عرض خاص!</p>
                    <p class="text-white text-sm">خصم 20% على أول مشروع + استشارة مجانية</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Form Section --}}
    <section class="py-32 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                @if(session('success'))
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-r-4 border-green-500 text-green-700 p-8 rounded-3xl mb-12 flex items-start gap-6 shadow-2xl">
                        <div class="w-16 h-16 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-2xl mb-2">تم إرسال طلبك بنجاح! 🎉</h4>
                            <p class="text-lg">{{ session('success') }}</p>
                            <p class="mt-2 text-sm">سنتواصل معك قريباً جداً</p>
                        </div>
                    </div>
                @endif

                <form action="{{ route('request-design.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl p-10 shadow-2xl border border-gray-100">
                    @csrf

                    {{-- Form Header --}}
                    <div class="mb-10 text-center">
                        <h2 class="text-4xl font-black text-gray-900 mb-4">
                            معلومات
                            <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">المشروع</span>
                        </h2>
                        <p class="text-gray-600 text-lg">املأ جميع الحقول بدقة لنقدم لك أفضل عرض</p>
                    </div>

                    <div class="space-y-8">
                        {{-- Personal Info Section --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="full_name" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                    <i class="fas fa-user text-blue-600"></i>
                                    الاسم الكامل
                                    <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="full_name" id="full_name"
                                       class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                       placeholder="أدخل اسمك الكامل"
                                       required>
                            </div>

                            <div>
                                <label for="email" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                    البريد الإلكتروني
                                    <span class="text-red-500">*</span>
                                </label>
                                <input type="email" name="email" id="email"
                                       class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                       placeholder="example@email.com"
                                       required>
                            </div>

                            <div>
                                <label for="phone" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                    <i class="fas fa-phone text-blue-600"></i>
                                    رقم الجوال
                                    <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" name="phone" id="phone"
                                       class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                       placeholder="+966 XX XXX XXXX"
                                       required>
                            </div>

                            <div>
                                <label for="company_name" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                    <i class="fas fa-building text-blue-600"></i>
                                    اسم الشركة
                                    <span class="text-gray-400 text-sm font-normal">(اختياري)</span>
                                </label>
                                <input type="text" name="company_name" id="company_name"
                                       class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                       placeholder="اسم شركتك">
                            </div>
                        </div>

                        {{-- Project Type Section --}}
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-8 border border-blue-100">
                            <h3 class="text-2xl font-black text-gray-900 mb-6 flex items-center gap-3">
                                <i class="fas fa-layer-group text-blue-600"></i>
                                تفاصيل المشروع
                            </h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="project_type" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                        <i class="fas fa-tags text-blue-600"></i>
                                        نوع المشروع
                                        <span class="text-red-500">*</span>
                                    </label>
                                    <select name="project_type" id="project_type"
                                            class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg bg-white"
                                            required>
                                        <option value="">اختر نوع المشروع</option>
                                        <option value="Excel">📊 لوحة تحكم Excel</option>
                                        <option value="Power BI">📈 لوحة تحكم Power BI</option>
                                        <option value="PowerPoint">📽️ عرض تقديمي PowerPoint</option>
                                        <option value="Full analysis">🔍 تحليل بيانات شامل</option>
                                        <option value="Other">⚙️ أخرى</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="budget_range" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                        <i class="fas fa-dollar-sign text-blue-600"></i>
                                        الميزانية المتوقعة
                                    </label>
                                    <input type="text" name="budget_range" id="budget_range"
                                           class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                           placeholder="مثال: 500 - 1000 ر.س">
                                </div>

                                <div>
                                    <label for="deadline" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                        <i class="fas fa-calendar-alt text-blue-600"></i>
                                        الموعد النهائي المطلوب
                                    </label>
                                    <input type="text" name="deadline" id="deadline"
                                           class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg"
                                           placeholder="مثال: خلال أسبوع">
                                </div>
                            </div>
                        </div>

                        {{-- Details Section --}}
                        <div>
                            <label for="details" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                <i class="fas fa-comment-dots text-blue-600"></i>
                                تفاصيل المشروع
                                <span class="text-red-500">*</span>
                            </label>
                            <textarea name="details" id="details" rows="8"
                                      class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 text-lg resize-none"
                                      placeholder="اكتب وصفاً تفصيلياً عن المشروع:&#10;- ما هي البيانات التي تريد تحليلها؟&#10;- ما هي الأهداف المطلوبة؟&#10;- هل لديك تصور معين للتصميم؟&#10;- أي متطلبات إضافية؟"
                                      required></textarea>
                            <p class="text-sm text-gray-500 mt-2">كلما كانت التفاصيل أكثر، كان العرض أدق!</p>
                        </div>

                        {{-- Attachment Section --}}
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100">
                            <label for="attachment" class="flex text-gray-700 font-bold mb-3 items-center gap-2 text-lg">
                                <i class="fas fa-paperclip text-purple-600"></i>
                                مرفقات
                                <span class="text-gray-400 text-sm font-normal">(اختياري - Excel, PDF, Images)</span>
                            </label>
                            <div class="relative">
                                <input type="file" name="attachment" id="attachment"
                                       class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:ring-4 focus:ring-purple-100 focus:outline-none transition-all duration-300 text-lg bg-white cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gradient-to-r file:from-purple-600 file:to-pink-500 file:text-white hover:file:bg-purple-700 file:cursor-pointer">
                            </div>
                            <p class="text-sm text-gray-600 mt-3 flex items-center gap-2">
                                <i class="fas fa-info-circle text-purple-500"></i>
                                يمكنك إرفاق ملفات Excel، مستندات، أو صور توضيحية
                            </p>
                        </div>

                        {{-- Submit Button --}}
                        <div class="pt-6">
                            <button type="submit"
                                    class="w-full group bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-black py-6 px-8 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3 text-xl">
                                <i class="fas fa-paper-plane group-hover:rotate-12 transition-transform text-2xl"></i>
                                <span>إرسال الطلب الآن</span>
                            </button>
                            <p class="text-center text-gray-600 mt-4 text-sm">
                                بالضغط على "إرسال" فإنك توافق على
                                <a href="#" class="text-blue-600 hover:underline">شروط الخدمة</a>
                                و
                                <a href="#" class="text-blue-600 hover:underline">سياسة الخصوصية</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-black text-gray-900 mb-4">
                        لماذا تطلب
                        <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">معنا؟</span>
                    </h2>
                    <p class="text-lg text-gray-600">مزايا حصرية عند طلب خدماتنا</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100 text-center">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center">
                            <i class="fas fa-clock text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">رد سريع</h3>
                        <p class="text-gray-600 text-sm">نرد خلال 24 ساعة</p>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100 text-center">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center">
                            <i class="fas fa-gift text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">عرض مجاني</h3>
                        <p class="text-gray-600 text-sm">عرض سعر بدون التزام</p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100 text-center">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-500 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">ضمان الجودة</h3>
                        <p class="text-gray-600 text-sm">مراجعات مجانية</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6 border border-orange-100 text-center">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-orange-600 to-red-500 flex items-center justify-center">
                            <i class="fas fa-headset text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">دعم مستمر</h3>
                        <p class="text-gray-600 text-sm">متاحون دائماً</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
