<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-center text-white">
            <h1 class="text-5xl md:text-6xl font-black mb-6">
                تواصل <span class="bg-gradient-to-r from-cyan-400 to-blue-300 bg-clip-text text-transparent">معنا</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                نحن هنا لمساعدتك. تواصل معنا الآن وسنكون سعداء بالرد على استفساراتك
            </p>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Contact Form --}}
                <div>
                    <h2 class="text-3xl font-black text-gray-900 mb-6">
                        أرسل لنا <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">رسالة</span>
                    </h2>
                    
                    @if(session('success'))
                        <div class="bg-green-50 border-r-4 border-green-500 text-green-700 p-4 rounded-lg mb-6 flex items-center">
                            <i class="fas fa-check-circle text-2xl ml-3"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.store') }}" method="POST" class="bg-white rounded-3xl p-8 shadow-xl">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-bold mb-2 flex items-center">
                                <i class="fas fa-user text-blue-600 ml-2"></i>
                                الاسم
                            </label>
                            <input type="text" name="name" id="name" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-colors duration-300" 
                                   required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-bold mb-2 flex items-center">
                                <i class="fas fa-envelope text-blue-600 ml-2"></i>
                                البريد الإلكتروني
                            </label>
                            <input type="email" name="email" id="email" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-colors duration-300" 
                                   required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-bold mb-2 flex items-center">
                                <i class="fas fa-phone text-blue-600 ml-2"></i>
                                رقم الجوال (اختياري)
                            </label>
                            <input type="tel" name="phone" id="phone" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-colors duration-300">
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-bold mb-2 flex items-center">
                                <i class="fas fa-comment text-blue-600 ml-2"></i>
                                الرسالة
                            </label>
                            <textarea name="message" id="message" rows="5" 
                                      class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-colors duration-300" 
                                      required></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold py-4 px-8 rounded-full hover:shadow-2xl hover:scale-105 transform transition duration-300 flex items-center justify-center">
                            <i class="fas fa-paper-plane ml-2"></i>
                            إرسال الرسالة
                        </button>
                    </form>
                </div>
                
                {{-- Contact Info --}}
                <div class="space-y-6">
                    <h2 class="text-3xl font-black text-gray-900 mb-6">
                        معلومات <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">التواصل</span>
                    </h2>
                    
                    {{-- Contact Cards --}}
                    <div class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center flex-shrink-0 ml-4">
                                <i class="fas fa-envelope text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">البريد الإلكتروني</h3>
                                <a href="mailto:info@edata360.com" class="text-blue-600 hover:text-cyan-500 transition-colors">
                                    info@edata360.com
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-r from-green-600 to-teal-400 flex items-center justify-center flex-shrink-0 ml-4">
                                <i class="fab fa-whatsapp text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">واتساب</h3>
                                <a href="https://wa.me/966XXXXXXXXX" target="_blank" class="text-green-600 hover:text-teal-500 transition-colors">
                                    +966 XX XXX XXXX
                                </a>
                                <p class="text-gray-600 text-sm mt-1">تواصل فوري عبر واتساب</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-600 to-pink-400 flex items-center justify-center flex-shrink-0 ml-4">
                                <i class="fas fa-phone text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">الهاتف</h3>
                                <a href="tel:+966XXXXXXXXX" class="text-purple-600 hover:text-pink-500 transition-colors">
                                    +966 XX XXX XXXX
                                </a>
                                <p class="text-gray-600 text-sm mt-1">من السبت إلى الخميس: 9 صباحاً - 6 مساءً</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-r from-orange-600 to-red-400 flex items-center justify-center flex-shrink-0 ml-4">
                                <i class="fas fa-map-marker-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">الموقع</h3>
                                <p class="text-gray-600">
                                    المملكة العربية السعودية
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Social Media --}}
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">تابعنا على</h3>
                        <div class="flex space-x-3 space-x-reverse">
                            <a href="#" class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center hover:scale-110 transform transition duration-300">
                                <i class="fab fa-x-twitter text-white text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center hover:scale-110 transform transition duration-300">
                                <i class="fab fa-linkedin-in text-white text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center hover:scale-110 transform transition duration-300">
                                <i class="fab fa-instagram text-white text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 flex items-center justify-center hover:scale-110 transform transition duration-300">
                                <i class="fab fa-facebook-f text-white text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Section (Optional) --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="bg-gradient-to-br from-gray-100 to-blue-50 rounded-3xl h-96 flex items-center justify-center shadow-xl">
                <div class="text-center">
                    <i class="fas fa-map-marked-alt text-6xl text-blue-600 mb-4"></i>
                    <p class="text-gray-600 text-lg">يمكنك إضافة خريطة Google Maps هنا</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
