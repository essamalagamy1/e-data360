<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 pt-32 pb-20 overflow-hidden">
        {{-- Grid Pattern Background --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        {{-- Animated Gradient Orbs --}}
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600/20 to-cyan-600/20 backdrop-blur-sm border border-blue-500/30 rounded-full px-6 py-2 mb-8">
                    <i class="fas fa-star text-yellow-400"></i>
                    <span class="text-sm font-medium text-cyan-300">شاركنا رأيك</span>
                </div>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                    <span class="block mb-4 bg-gradient-to-r from-white via-blue-100 to-cyan-100 bg-clip-text text-transparent">
                        أضف تقييمك
                    </span>
                    <span class="block bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                        عن خدماتنا
                    </span>
                </h1>

                <p class="text-xl md:text-2xl text-gray-300 leading-relaxed">
                    رأيك يهمنا! شاركنا تجربتك مع EDATA 360 وساعد الآخرين في اتخاذ القرار الصحيح
                </p>
            </div>
        </div>
    </section>

    {{-- Form Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 relative overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-40">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto">
                {{-- Success Message --}}
                @if(session('success'))
                <div class="mb-8 bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-500 rounded-2xl p-6 animate-fade-in">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-check text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-green-900 mb-1">تم الإرسال بنجاح!</h3>
                            <p class="text-green-700">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Form Card --}}
                <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 border border-gray-100">
                    <form action="{{ route('testimonial.store') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- Name Field --}}
                        <div>
                            <label for="client_name" class="block text-gray-900 font-bold mb-2 text-lg">
                                <i class="fas fa-user text-blue-600 ml-2"></i>
                                الاسم الكامل <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="client_name" 
                                   name="client_name" 
                                   value="{{ old('client_name') }}"
                                   class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none text-lg"
                                   placeholder="أدخل اسمك الكامل"
                                   required>
                            @error('client_name')
                            <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Position Field --}}
                        <div>
                            <label for="client_position" class="block text-gray-900 font-bold mb-2 text-lg">
                                <i class="fas fa-briefcase text-blue-600 ml-2"></i>
                                المنصب الوظيفي <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="client_position" 
                                   name="client_position" 
                                   value="{{ old('client_position') }}"
                                   class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none text-lg"
                                   placeholder="مثال: مدير تقنية المعلومات"
                                   >
                            @error('client_position')
                            <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Company Field --}}
                        <div>
                            <label for="client_company" class="block text-gray-900 font-bold mb-2 text-lg">
                                <i class="fas fa-building text-blue-600 ml-2"></i>
                                اسم الشركة <span class="text-gray-400 text-sm">(اختياري)</span>
                            </label>
                            <input type="text" 
                                   id="client_company" 
                                   name="client_company" 
                                   value="{{ old('client_company') }}"
                                   class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none text-lg"
                                   placeholder="أدخل اسم شركتك">
                            @error('client_company')
                            <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Rating Field --}}
                        <div>
                            <label class="block text-gray-900 font-bold mb-3 text-lg">
                                <i class="fas fa-star text-yellow-400 ml-2"></i>
                                التقييم <span class="text-red-500">*</span>
                            </label>
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                                @for($i = 5; $i >= 1; $i--)
                                <label class="cursor-pointer group">
                                    <input type="radio" name="rating" value="{{ $i }}" class="hidden peer" {{ old('rating') == $i ? 'checked' : '' }} required>
                                    <div class="flex items-center justify-center gap-1 px-3 py-3 border-2 border-gray-200 rounded-xl peer-checked:border-yellow-400 peer-checked:bg-yellow-50 transition-all hover:border-yellow-300">
                                        @for($j = 1; $j <= $i; $j++)
                                        <i class="fas fa-star text-yellow-400 text-base sm:text-lg"></i>
                                        @endfor
                                    </div>
                                </label>
                                @endfor
                            </div>
                            @error('rating')
                            <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Testimonial Field --}}
                        <div>
                            <label for="testimonial" class="block text-gray-900 font-bold mb-2 text-lg">
                                <i class="fas fa-comment-dots text-blue-600 ml-2"></i>
                                تقييمك <span class="text-red-500">*</span>
                            </label>
                            <textarea id="testimonial" 
                                      name="testimonial" 
                                      rows="6"
                                      class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none text-lg resize-none"
                                      placeholder="شاركنا تجربتك مع خدماتنا... ما الذي أعجبك؟ كيف ساعدناك؟"
                                      required>{{ old('testimonial') }}</textarea>
                            <p class="text-gray-500 text-sm mt-2">الحد الأدنى 10 أحرف</p>
                            @error('testimonial')
                            <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle ml-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <div class="pt-4">
                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 text-white font-black py-5 px-8 rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300 text-xl">
                                <i class="fas fa-paper-plane ml-2"></i>
                                إرسال التقييم
                            </button>
                        </div>

                        <p class="text-center text-gray-500 text-sm">
                            <i class="fas fa-info-circle ml-1"></i>
                            سيتم مراجعة تقييمك قبل نشره على الموقع
                        </p>
                    </form>
                </div>

                {{-- Back Button --}}
                <div class="text-center mt-8">
                    <a href="{{ route('home') }}" 
                       class="inline-flex items-center gap-2 text-blue-600 hover:text-cyan-500 font-bold transition-colors">
                        <i class="fas fa-arrow-right"></i>
                        العودة للصفحة الرئيسية
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
