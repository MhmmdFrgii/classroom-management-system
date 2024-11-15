<x-guest>
    {{-- Hero Section with Slideshow --}}
    <section
        class="w-full mx-auto h-screen flex items-center justify-center text-center text-white relative bg-cover bg-center"
        style="background-image: url('{{ $classmeetImage ? asset('storage/' . $classmeetImage->image) : asset('storage/default_image.jpg') }}'); background-size: cover;">
        <div
            class="bg-gradient-to-t from-black from-20% to-black/70 to-80% w-full h-full flex flex-col items-center justify-center">
            <h5 class="text-2xl font-anton text-primary mb-4 tracking-wide">Galery</h5>
            <h1 class="text-7xl font-anton mb-4 glow-text tracking-normal uppercase">Classmeet</h1>
        </div>
    </section>




    <section class="w-full mx-auto min-h-screen flex items-center justify-center text-center text-white bg-black">
        {{-- Galeri Pagelaran --}}
        <div class="mx-auto p-8 grid grid-cols-3 gap-4">
            @foreach ($classmeet as $index => $cm)
                <div
                    class="relative overflow-hidden group rounded-xl
                @if ($index == 0) col-span-3 h-[400px] object-cover @endif
                @if ($index == 1) col-span-2 @endif
                @if ($index == 2) row-span-2 @endif
                @if ($index == 3) col-span-1 row-span-1 @endif">

                    <img src="{{ asset('storage/' . $cm->image) }}" alt="{{ $cm->title }}"
                        class="w-full h-full object-cover transition-transform duration-500 transform group-hover:scale-105">

                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end items-start text-left p-4 pb-4 pl-4">
                        <h3 class="text-lg font-semibold mb-2">{{ $cm->title }}</h3>
                        <p class="text-sm inter-light">{{ $cm->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-guest>
