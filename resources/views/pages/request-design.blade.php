<x-layouts.app>
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold text-center mb-12">اطلب تصميمك</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('request-design.store') }}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="full_name" class="block text-gray-700 font-bold mb-2">الاسم الكامل</label>
                    <input type="text" name="full_name" id="full_name" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-bold mb-2">البريد الإلكتروني</label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 font-bold mb-2">رقم الهاتف</label>
                    <input type="tel" name="phone" id="phone" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div>
                    <label for="company_name" class="block text-gray-700 font-bold mb-2">اسم الشركة (اختياري)</label>
                    <input type="text" name="company_name" id="company_name" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="md:col-span-2">
                    <label for="project_type" class="block text-gray-700 font-bold mb-2">نوع المشروع</label>
                    <select name="project_type" id="project_type" class="w-full px-3 py-2 border rounded-lg" required>
                        <option value="Excel">Excel</option>
                        <option value="Power BI">Power BI</option>
                        <option value="PowerPoint">PowerPoint</option>
                        <option value="Full analysis">Full analysis</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div>
                    <label for="budget_range" class="block text-gray-700 font-bold mb-2">الميزانية المتوقعة</label>
                    <input type="text" name="budget_range" id="budget_range" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div>
                    <label for="deadline" class="block text-gray-700 font-bold mb-2">الموعد النهائي</label>
                    <input type="text" name="deadline" id="deadline" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="md:col-span-2">
                    <label for="details" class="block text-gray-700 font-bold mb-2">تفاصيل المشروع</label>
                    <textarea name="details" id="details" rows="5" class="w-full px-3 py-2 border rounded-lg" required></textarea>
                </div>
                <div class="md:col-span-2">
                    <label for="attachment" class="block text-gray-700 font-bold mb-2">مرفقات (اختياري)</label>
                    <input type="file" name="attachment" id="attachment" class="w-full">
                </div>
            </div>
            <div class="text-center mt-8">
                <button type="submit" class="bg-blue-600 text-white font-bold py-3 px-8 rounded-full hover:bg-blue-700">إرسال الطلب</button>
            </div>
        </form>
    </div>
</x-layouts.app>
