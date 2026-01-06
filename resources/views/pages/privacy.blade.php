<x-layouts.app>
    {{-- Hero --}}
    <section class="relative py-16 overflow-hidden" style="background: #0A1628;">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-black text-white mb-4">
                    سياسة <span style="color: #14B8A6;">الخصوصية</span>
                </h1>
                <p class="text-gray-400">آخر تحديث: {{ date('Y/m/d') }}</p>
            </div>
        </div>
    </section>

    {{-- Content --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto prose prose-lg">
                <div class="bg-gray-50 rounded-2xl p-8 mb-8 border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                        <i class="fas fa-shield-alt" style="color: #0D9488;"></i>
                        مقدمة
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        نحن في E-DATA 360 نحترم خصوصيتك ونلتزم بحماية بياناتك الشخصية. توضح هذه السياسة كيفية جمعنا واستخدامنا وحمايتنا للمعلومات التي تقدمها لنا.
                    </p>
                </div>

                <div class="space-y-8">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">1. المعلومات التي نجمعها</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">نجمع المعلومات التالية عند استخدامك لخدماتنا:</p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2 mr-4">
                            <li>الاسم والبريد الإلكتروني ورقم الهاتف</li>
                            <li>معلومات المشروع والمتطلبات</li>
                            <li>بيانات الاستخدام والتصفح</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">2. كيف نستخدم المعلومات</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">نستخدم المعلومات المجمعة للأغراض التالية:</p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2 mr-4">
                            <li>تقديم الخدمات المطلوبة</li>
                            <li>التواصل معك بشأن مشروعك</li>
                            <li>تحسين جودة خدماتنا</li>
                            <li>إرسال تحديثات مهمة (بموافقتك)</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">3. حماية البيانات</h3>
                        <p class="text-gray-600 leading-relaxed">
                            نستخدم إجراءات أمنية متقدمة لحماية بياناتك من الوصول غير المصرح به أو التعديل أو الإفصاح أو الإتلاف.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">4. مشاركة البيانات</h3>
                        <p class="text-gray-600 leading-relaxed">
                            لا نبيع أو نشارك بياناتك الشخصية مع أطراف ثالثة إلا عند الضرورة لتقديم الخدمة أو بموجب القانون.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">5. حقوقك</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">لديك الحق في:</p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2 mr-4">
                            <li>الوصول إلى بياناتك الشخصية</li>
                            <li>تصحيح أي معلومات غير دقيقة</li>
                            <li>طلب حذف بياناتك</li>
                            <li>إلغاء الاشتراك من النشرات البريدية</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">6. التواصل معنا</h3>
                        <p class="text-gray-600 leading-relaxed">
                            للاستفسارات المتعلقة بهذه السياسة، يرجى التواصل معنا عبر صفحة 
                            <a href="{{ route('contact') }}" style="color: #0D9488;">اتصل بنا</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
