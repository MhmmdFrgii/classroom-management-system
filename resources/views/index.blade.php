<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XII RPL</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <section class="hero-section">
        {{-- Header Section --}}
        <header class="bg-transparent top-0 left-0 w-full items-center z-20 fixed">
            <div class="container mx-auto flex justify-between items-center px-4 py-4">
                <a href="#">
                    <img src="{{ asset('storage/logo/logo.png') }}" alt="logo" class="w-8 my-2">
                </a>
                <nav class="flex space-x-8">
                    <a href="#home"
                        class="text-base text-white py-2 hover:text-primary transition duration-300">Home</a>
                    <a href="#memory"
                        class="text-base text-white py-2 hover:text-primary transition duration-300">Memory</a>
                    <a href="#structure"
                        class="text-base text-white py-2 hover:text-primary transition duration-300">Structure &
                        Schedule</a>
                </nav>
            </div>
        </header>

        {{-- Hero Section with Slideshow --}}
        <section id="home"
            class="container mx-auto h-screen flex items-center justify-center text-center text-white relative">
            <div>
                <h5 class="text-2xl font-semibold mb-2">Hi, Bro IS!</h5>
                <h1 class="text-7xl font-extrabold mb-2">WELCOME</h1>
                <h6 class="text-sm">TO XII RPL</h6>
                @foreach ($slide as $s)
                    <img src="{{ $s->image_url }}" alt="Deskripsi gambar">
                @endforeach

            </div>
        </section>
    </section>

    {{-- Section memory start --}}
    <section id="memory" class="pt-36 pb-56 shadow-md bg-gradient-to-b from-black to-black">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16" data-aos="fade-down" data-aos-duration="500"
                    data-aos-easing="ease-in-out">
                    <h4 class="font-semibold text-lg text-primary mb-2">Memory</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">
                        Rekayasa Perangkat Lunak
                    </h2>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap mx-auto">
                {{-- card pagelaran --}}
                <a href="#home" class="mb-12 p-3 w-1/3">
                    <div
                        class="w-full p-3 bg-white rounded-xl shadow-md shadow-slate-300 hover:shadow-lg hover:shadow-slate-300 transition duration-500 relative group cursor-pointer">
                        <div class="rounded-lg overflow-hidden relative group">
                            <img src="{{ asset('storage/sampul/image1.jpg') }}" alt="1" class="w-full" />
                        </div>

                        <h3 class="text-xl font-sans text-dark pt-10 mb-3 text-center">
                            Pagelaran Pick
                        </h3>
                    </div>
                </a>

                {{-- card classmeet --}}
                <a href="#home" class="mb-12 p-3 w-1/3">
                    <div
                        class="w-full p-3 bg-white rounded-xl shadow-md shadow-slate-300 hover:shadow-lg hover:shadow-slate-300 transition duration-500 relative group cursor-pointer">
                        <div class="rounded-lg overflow-hidden relative group">
                            <img src="{{ asset('storage/sampul/image1.jpg') }}" alt="1" class="w-full" />
                        </div>

                        <h3 class="text-xl font-sans text-dark pt-10 mb-3 text-center">
                            Classmeet Pick
                        </h3>
                    </div>
                </a>

                {{-- card p5 --}}
                <a href="#home" class="mb-12 p-3 w-1/3">
                    <div
                        class="w-full p-3 bg-white rounded-xl shadow-md shadow-slate-300 hover:shadow-lg hover:shadow-slate-300 transition duration-500 relative group cursor-pointer">
                        <div class="rounded-lg overflow-hidden relative group">
                            <img src="{{ asset('storage/sampul/image1.jpg') }}" alt="1" class="w-full" />
                        </div>

                        <h3 class="text-xl font-sans text-dark pt-10 mb-3 text-center">
                            P5 Pick
                        </h3>
                    </div>
                </a>
            </div>
    </section>
    {{-- Section memory end --}}

    <div class="mb-96"></div>

    {{-- JavaScript for Background Slideshow --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroSection = document.querySelector('.hero-section');
            let currentImageIndex = 0;

            function changeBackgroundImage() {
                if (slides.length > 0) {
                    currentImageIndex = (currentImageIndex + 1) % slides.length;
                    heroSection.style.backgroundImage = `url('/storage/${slides[currentImageIndex]}')`;
                    heroSection.style.backgroundSize = 'cover';
                    heroSection.style.backgroundPosition = 'center';
                }
            }

            // Set initial background image if slides are available
            if (slides.length > 0) {
                heroSection.style.backgroundImage = `url('/storage/${slides[currentImageIndex]}')`;
            }

            // Change background image every 5 seconds
            setInterval(changeBackgroundImage, 5000);
        });
    </script>
</body>

</html>
