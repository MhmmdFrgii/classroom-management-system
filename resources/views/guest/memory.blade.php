<x-guest>
    {{-- Section Memory --}}
    <section id="memory"
        class="pt-36 w-full min-h-screen shadow-md bg-gradient-to-b from-black from-20% to-gray-600 to-80%">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-5">
                    <h4 class="inter-bold text-xl text-primary">Memory</h4>
                    <h2 class="inter-bold text-white text-4xl mb-4 sm:text-4xl lg:text-5xl">Rekayasa Perangkat Lunak
                    </h2>
                </div>
            </div>
            <!-- Memory cards (example) -->
            <div class="w-full px-4 flex flex-wrap mx-auto">
                <a href="{{ route('memorypagelaran') }}" class="mb-12 p-3 w-1/3 group">
                    <div
                        class="w-full p-3 bg-white rounded-xl shadow-md hover:shadow-primary hover:shadow-md transition duration-300">
                        <div class="rounded-lg overflow-hidden group-hover:opacity-95 transition duration-300">
                            <!-- Gambar untuk memory card -->
                            @if ($pagelaranImage)
                                <img src="{{ asset('storage/' . $pagelaranImage->image) }}" alt="Image"
                                    class="w-full h-[200px]" />
                            @else
                                <img src="{{ asset('storage/default_image.jpg') }}" alt="Default Image"
                                    class="w-full h-[200px]" />
                            @endif
                        </div>
                        <h3
                            class="text-sm font-semibold uppercase text-dark pt-10 mb-3 text-center group-hover:text-primary transition duration-300">
                            Pagelaran Picture</h3>
                    </div>
                </a>
                <a href="{{ route('memoryclassmeet') }}" class="mb-12 p-3 w-1/3 group">
                    <div
                        class="w-full p-3 bg-white rounded-xl shadow-md hover:shadow-primary hover:shadow-md transition duration-500">
                        <div class="rounded-lg overflow-hidden group-hover:opacity-95 transition duration-300">
                            @if ($classmeetImage)
                                <img src="{{ asset('storage/' . $classmeetImage->image) }}" alt="Image"
                                    class="w-full h-[200px]" />
                            @else
                                <img src="{{ asset('storage/default_image.jpg') }}" alt="Default Image"
                                    class="w-full h-[200px]" />
                            @endif
                        </div>
                        <h3
                            class="text-sm font-semibold uppercase text-dark pt-10 mb-3 text-center group-hover:text-primary transition duration-300">
                            Classmeet Picture
                        </h3>
                    </div>
                </a>
                <a href="{{ route('memoryp5') }}" class="mb-12 p-3 w-1/3 group">
                    <div
                        class="w-full p-3 bg-white rounded-xl shadow-md hover:shadow-primary hover:shadow-md transition duration-500">
                        <div class="rounded-lg overflow-hidden group-hover:opacity-95 transition duration-300">
                            @if ($p5Image)
                                <img src="{{ asset('storage/' . $p5Image->image) }}" alt="Image"
                                    class="w-full h-[200px]" />
                            @else
                                <img src="{{ asset('storage/default_image.jpg') }}" alt="Default Image"
                                    class="w-full h-[200px]" />
                            @endif
                        </div>
                        <h3
                            class="text-sm font-semibold uppercase text-dark pt-10 mb-3 text-center group-hover:text-primary transition duration-300">
                            P5 Picture</h3>
                    </div>
                </a>
                <!-- Add more cards here as needed -->
            </div>
        </div>
    </section>
</x-guest>
