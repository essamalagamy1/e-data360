<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 min-h-[50vh] flex items-center justify-center overflow-hidden">
        {{-- Background Effects --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.05)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>
        
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
             <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                <span class="block mb-4">انضم إلى</span>
                <span class="block bg-gradient-to-r from-green-400 via-cyan-400 to-blue-400 bg-clip-text text-transparent">
                    فريق المبدعين
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light">
                نبحث دوماً عن مواهب استثنائية لتشاركنا النجاح
            </p>
        </div>
    </section>

    {{-- Form Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50">
        <div class="container mx-auto px-6">
             <div class="max-w-4xl mx-auto bg-white rounded-3xl p-8 shadow-2xl border border-gray-100">
                <h2 class="text-3xl font-black text-gray-900 mb-8 text-center">قدّم طلبك الآن</h2>
                
                @if(session('success'))
                     <div class="bg-green-50 border-r-4 border-green-500 text-green-700 p-4 rounded-xl mb-6 flex items-center gap-3">
                        <i class="fas fa-check-circle text-2xl"></i>
                        <p class="font-bold">{{ session('success') }}</p>
                     </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-50 border-r-4 border-red-500 text-red-700 p-4 rounded-xl mb-6">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                             <label class="block text-gray-700 font-bold mb-2 flex items-center gap-2">
                                <i class="fas fa-user text-blue-600"></i> الاسم الكامل
                             </label>
                             <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition outline-none" required placeholder="الاسم ثلاثي">
                        </div>
                        <!-- Email -->
                        <div>
                             <label class="block text-gray-700 font-bold mb-2 flex items-center gap-2">
                                <i class="fas fa-envelope text-blue-600"></i> البريد الإلكتروني
                             </label>
                             <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition outline-none" required placeholder="example@gmail.com">
                        </div>
                         <!-- Phone -->
                        <div>
                             <label class="block text-gray-700 font-bold mb-2 flex items-center gap-2">
                                <i class="fas fa-phone text-blue-600"></i> رقم الهاتف
                             </label>
                             <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition outline-none" required placeholder="05xxxxxxxx">
                        </div>
                        <!-- Experience -->
                        <div>
                             <label class="block text-gray-700 font-bold mb-2 flex items-center gap-2">
                                <i class="fas fa-briefcase text-blue-600"></i> سنوات الخبرة
                             </label>
                             <input type="number" name="years_of_experience" value="{{ old('years_of_experience') }}" min="0" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition outline-none" required>
                        </div>
                    </div>

                    <!-- Specialization -->
                    <div>
                         <label class="block text-gray-700 font-bold mb-2 flex items-center gap-2">
                            <i class="fas fa-code text-blue-600"></i> التخصص الوظيفي
                         </label>
                         <input type="text" name="specialization" value="{{ old('specialization') }}" placeholder="مثال: مطور واجهات أمامية" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition outline-none" required>
                    </div>

                    <!-- CV Upload -->
                    <div>
                         <label class="block text-gray-700 font-bold mb-2">السيرة الذاتية (PDF, DOC, DOCX)</label>
                         <div class="relative border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-blue-500 transition-colors bg-gray-50 group cursor-pointer" onclick="document.querySelector('input[name=cv]').click()">
                            <input type="file" name="cv" class="hidden" required accept=".pdf,.doc,.docx" onchange="document.getElementById('file-name').textContent = this.files[0].name">
                            <div class="text-gray-500 group-hover:text-blue-600 transition-colors">
                                <i class="fas fa-cloud-upload-alt text-4xl mb-2"></i>
                                <p class="font-medium">اضغط لرفع الملف أو اسحبه هنا</p>
                                <p class="text-sm mt-1">الحد الأقصى: 5 ميجابايت</p>
                                <p id="file-name" class="mt-2 text-green-600 font-semibold"></p>
                            </div>
                         </div>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold py-4 rounded-xl hover:shadow-lg transform hover:-translate-y-1 transition duration-300 flex justify-center items-center gap-2">
                        <i class="fas fa-paper-plane"></i>
                        إرسال الطلب
                    </button>
                </form>
             </div>
        </div>
    </section>
</x-layouts.app>
