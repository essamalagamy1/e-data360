<x-layouts.app>
    {{-- Hero --}}
    <section class="relative py-16 overflow-hidden" style="background: #0A1628;">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-black text-white mb-4">
                    الشروط <span style="color: #14B8A6;">والأحكام</span>
                </h1>
                <p class="text-gray-400">آخر تحديث: {{ date('Y/m/d') }}</p>
            </div>
        </div>
    </section>

    {{-- Content --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto">
                @php
                    $termsData = $companySettings?->terms_conditions ? json_decode($companySettings->terms_conditions, true) : null;
                @endphp

                @if($termsData)
                    <div class="bg-gray-50 rounded-2xl p-8 mb-8 border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                            <i class="fas fa-file-contract" style="color: #0D9488;"></i>
                            مقدمة
                        </h2>
                        <p class="text-gray-600 leading-relaxed">
                            {{ $termsData['intro'] ?? '' }}
                        </p>
                    </div>

                    <div class="space-y-8">
                        @foreach($termsData['sections'] ?? [] as $index => $section)
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $index + 1 }}. {{ $section['title'] }}</h3>
                                @if(isset($section['content']))
                                    <p class="text-gray-600 leading-relaxed {{ isset($section['list']) ? 'mb-4' : '' }}">
                                        {{ $section['content'] }}
                                    </p>
                                @endif
                                @if(isset($section['list']))
                                    <ul class="list-disc list-inside text-gray-600 space-y-2 mr-4">
                                        @foreach($section['list'] as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    {{-- Fallback content if no data in database --}}
                    <div class="bg-gray-50 rounded-2xl p-8 mb-8 border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                            <i class="fas fa-file-contract" style="color: #0D9488;"></i>
                            مقدمة
                        </h2>
                        <p class="text-gray-600 leading-relaxed">
                            باستخدامك لخدمات E-DATA 360، فإنك توافق على الالتزام بهذه الشروط والأحكام. يرجى قراءتها بعناية.
                        </p>
                    </div>

                    <div class="space-y-8">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">1. الخدمات</h3>
                            <p class="text-gray-600 leading-relaxed">
                                نقدم خدمات تطوير مواقع الويب، تطبيقات الجوال، تصميم واجهات المستخدم، والحلول البرمجية المتكاملة وفقاً للمواصفات المتفق عليها مع العميل.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">2. الدفع</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">شروط الدفع:</p>
                            <ul class="list-disc list-inside text-gray-600 space-y-2 mr-4">
                                <li>يتم دفع 30% مقدماً قبل بدء العمل</li>
                                <li>يتم دفع 50% اثناء العمل ومتابعة العميل في تقدم وقبل عملية تسليم المشروع</li>
                                <li>يتم دفع 20% عند تسليم المشروع بشهر كامل من تاريخ التسليم لضمان ثقة العميل</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">3. التسليم</h3>
                            <p class="text-gray-600 leading-relaxed">
                                نلتزم بمواعيد التسليم المتفق عليها. قد تتأخر المواعيد في حال تأخر العميل في تقديم المتطلبات أو الموافقات.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">4. حقوق الملكية</h3>
                            <p class="text-gray-600 leading-relaxed">
                                تنتقل حقوق الملكية الفكرية للعميل بالكامل بعد السداد الكامل للمستحقات.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">5. التعديلات</h3>
                            <p class="text-gray-600 leading-relaxed">
                                نقدم عدداً معيناً من جولات التعديلات ضمن العقد. التعديلات الإضافية قد تتطلب رسوماً إضافية.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">6. السرية</h3>
                            <p class="text-gray-600 leading-relaxed">
                                نلتزم بالحفاظ على سرية جميع المعلومات والبيانات التي يشاركها العميل معنا.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">7. الإلغاء</h3>
                            <p class="text-gray-600 leading-relaxed">
                                في حال إلغاء المشروع، يحق لنا الاحتفاظ بالمبالغ المدفوعة مقابل العمل المنجز حتى تاريخ الإلغاء.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">8. التواصل</h3>
                            <p class="text-gray-600 leading-relaxed">
                                للاستفسارات أو الشكاوى، يرجى التواصل معنا عبر صفحة 
                                <a href="{{ route('contact') }}" style="color: #0D9488;">اتصل بنا</a>.
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
</x-layouts.app>
