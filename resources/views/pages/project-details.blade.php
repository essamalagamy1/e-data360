<x-layouts.app :seo="$project">
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold mb-4">{{ $project->title }}</h1>
        <img src="{{ Storage::url($project->main_image) }}" alt="{{ $project->title }}" class="w-full rounded-lg shadow-lg mb-8">

        <div class="prose lg:prose-xl mx-auto mb-8">
            {!! $project->description !!}
        </div>

        @if($project->projectImages->count() > 0)
            <h2 class="text-3xl font-bold mb-8 text-center">معرض الصور</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($project->projectImages as $image)
                    <img src="{{ Storage::url($image->image_path) }}" alt="{{ $image->caption }}" class="rounded-lg shadow-md">
                @endforeach
            </div>
        @endif

        @if($project->video_url)
            <div class="mt-12">
                <h2 class="text-3xl font-bold mb-8 text-center">فيديو المشروع</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="{{ $project->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="rounded-lg shadow-lg"></iframe>
                </div>
            </div>
        @endif

        <div class="text-center mt-16">
            <a href="{{ route('request-design.create') }}" class="bg-blue-600 text-white font-bold py-3 px-8 rounded-full hover:bg-blue-700">اطلب تصميم مشابه</a>
        </div>
    </div>
</x-layouts.app>
