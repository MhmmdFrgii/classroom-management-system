<x-guest>
    {{-- Hero Section with Slideshow --}}
    <section
        class="w-full mx-auto h-screen flex items-center justify-center text-center text-white relative bg-cover bg-center"
        style="background-image: url('{{ $classmeetImage ? asset('storage/' . $classmeetImage->image) : asset('storage/default_image.jpg') }}'); background-size: cover;">
        <div
            class="bg-gradient-to-t from-[#1e1e1e] from-20% to-[#1e1e1e]/70 to-80% w-full h-full flex flex-col items-center justify-center">
            <h5 class="text-2xl font-anton text-primary mb-4 tracking-wide">Galery</h5>
            <h1 class="text-6xl xl:text-7xl font-anton mb-4 glow-text tracking-normal uppercase">Classmeet</h1>
        </div>
    </section>




    <section class="w-full mx-auto min-h-screen flex items-center justify-center text-center text-white bg-[#1e1e1e]">
        {{-- Galeri Pagelaran --}}
        <div class="mx-auto p-8 flex flex-wrap xl:p-10 xl:pb-36 xl:grid xl:grid-cols-3 xl:gap-4">
            @foreach ($classmeet as $index => $cm)
                <div class="relative overflow-hidden group rounded-xl mb-5
            @if ($index == 0) xl:col-span-2 @endif
              @if ($index == 3 || $index == 4) xl:col-span-2 @endif
              @if ($index == 7 || $index == 8) xl:col-span-2 @endif"
                    data-aos="fade-up" data-aos-duration="500">

                    <img src="{{ asset('storage/' . $cm->image) }}" alt="{{ $cm->title }}"
                        class="w-full h-full xl:h-[350px] xl:object-cover transition-transform duration-500 transform group-hover:scale-105">

                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end items-start text-left p-2 pb-2 pl-2 xl:p-4 xl:pb-4 xl:pl-4">
                        <h3 class="text-base font-semibold xl:text-lg xl:font-semibold xl:mb-2">{{ $cm->title }}</h3>
                        <p class="text-sm inter-light">{{ $cm->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-guest>
