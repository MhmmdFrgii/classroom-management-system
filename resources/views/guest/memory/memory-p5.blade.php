<x-guest>
    <section class="w-full min-h-screen flex items-center justify-center">
        <div class="container">
            <div class="w-full px-4">
                <h1 class="text-7xl font-anton text-slate-200 text-center">
                    Galery P5 XII RPL
                </h1>
                <p class="inter-regular text-3xl text-slate-200 text-center">Selamat Menikmati</p>
            </div>
        </div>
    </section>




    <section class="w-full mx-auto min-h-screen flex items-center justify-center text-center text-white bg-black">
        {{-- Galeri Pagelaran --}}
        <div class="mx-auto p-8 grid grid-cols-3 gap-4">
            @foreach ($p5 as $index => $p)
                <div
                    class="relative overflow-hidden group rounded-xl
                    @if ($index == 0)  col-span-3 h-[400px] object-cover @endif
                    @if ($index == 1) row-span-2 @endif
                    @if ($index == 2) col-span-2 @endif
                    @if ($index == 3) col-span-1 row-span-1 @endif">

                    <img src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->title }}"
                        class="w-full h-full object-cover transition-transform duration-500 transform group-hover:scale-105">

                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end items-start text-left p-4 pb-4 pl-4">
                        <h3 class="text-lg font-semibold mb-2">{{ $p->title }}</h3>
                        <p class="text-sm inter-light">{{ $p->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-guest>
