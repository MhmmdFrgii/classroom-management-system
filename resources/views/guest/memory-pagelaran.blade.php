<x-guest>
    {{-- Hero Section with Slideshow --}}
    <section class="w-full mx-auto min-h-screen flex items-center justify-center text-center text-white bg-black">
        {{-- Galeri Pagelaran --}}
        <div class="container mx-auto p-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($pagelarans as $pagelaran)
                <div class="relative overflow-hidden group aspect-[4/3]">
                    <img src="{{ asset('storage/' . $pagelaran->image) }}" alt="{{ $pagelaran->title }}"
                        class="w-full h-full object-cover transition-transform duration-500 transform group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-center items-center text-center p-4">
                        <h3 class="text-lg font-semibold mb-2">{{ $pagelaran->title }}</h3>
                        <p class="text-sm">{{ $pagelaran->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-guest>
