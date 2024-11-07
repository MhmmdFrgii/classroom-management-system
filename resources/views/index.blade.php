<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XII RPL</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .hero-section {
            transition: background-image 1s ease-in-out;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="font-sans antialiased">

    <!-- Hero Section -->
    <section class="hero-section">
        {{-- Header Section --}}
        <header class="bg-white/30 backdrop-blur-md top-0 left-0 w-full items-center z-20 fixed">
            <div class="container mx-auto flex justify-between items-center px-4 py-1">
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
            class="w-full mx-auto h-screen flex items-center justify-center text-center text-white relative bg-gradient-to-t from-black from-20% to-black/70 t0-70%">
            <div>
                <h5 class="text-2xl font-semibold mb-2">Hi, Bro IS!</h5>
                <h1 class="text-7xl font-extrabold mb-2">WELCOME</h1>
                <h6 class="text-sm">TO XII RPL</h6>
            </div>
        </section>
    </section>

    {{-- Section Memory --}}
    <section id="memory" class="pt-36 pb-56 shadow-md bg-gradient-to-b from-black to-black">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Memory</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Rekayasa Perangkat Lunak</h2>
                </div>
            </div>
            <!-- Memory cards (example) -->
            <div class="w-full px-4 flex flex-wrap mx-auto">
                <a href="#home" class="mb-12 p-3 w-1/3">
                    <div class="w-full p-3 bg-white rounded-xl shadow-md hover:shadow-lg transition duration-500">
                        <div class="rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/sampul/image1.jpg') }}" alt="1" class="w-full" />
                        </div>
                        <h3 class="text-xl font-sans text-dark pt-10 mb-3 text-center">Pagelaran Pick</h3>
                    </div>
                </a>
                <!-- Add more cards here as needed -->
            </div>
        </div>
    </section>

    {{-- Section Random pick --}}
    <section id="random" class="pt-14 pb-14 bg-gradient-to-b from-gray-800 to-gray-900 text-white">
        <div class="container mx-auto">
            {{-- <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center pb-10">
                    <h2 class="font-semibold text-3xl text-white mb-4">Class Gallery</h2>
                </div>
            </div> --}}

            <!-- Swiper Container -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper flex justify-center items-center">
                    @foreach ($randoms as $random)
                        <div class="swiper-slide">
                            @if ($random->image)
                                <img src="{{ asset('storage/' . $random->image) }}" alt="Class Image"
                                    class="rounded-lg object-cover w-[450px] h-[350px] mx-auto">
                            @else
                                <p class="text-center text-gray-300">Tidak ada gambar</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                <!-- Pagination and Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- Optional Buttons -->
            {{-- <div class="flex justify-center gap-4 mt-6">
                <button class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded">Send</button>
                <button
                    class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded">Request</button>
            </div> --}}
        </div>
    </section>

    {{-- Section Jadwan & strucktur --}}
    <section id="jadwal" class="pt-36 pb-56">
        <div class="container">

        </div>
    </section>

    <!-- JavaScript for Background Slideshow -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroSection = document.querySelector('.hero-section');
            let currentImageIndex = 0;
            const slides = @json($slides->pluck('image'));

            function changeBackgroundImage() {
                if (slides.length > 0) {
                    currentImageIndex = (currentImageIndex + 1) % slides.length;
                    heroSection.style.backgroundImage = `url('/storage/${slides[currentImageIndex]}')`;
                }
            }

            if (slides.length > 0) {
                heroSection.style.backgroundImage = `url('/storage/${slides[currentImageIndex]}')`;
            }

            setInterval(changeBackgroundImage, 5000);
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3, // Display 3 images at once
            spaceBetween: 15, // Space between images
            loop: true, // Enable infinite loop
            loopFillGroupWithBlank: false, // Prevent blank slides at the end
            centeredSlides: true, // Center the active slide
            autoplay: { // Set autoplay options
                delay: 3000, // Delay in milliseconds
                disableOnInteraction: true // Autoplay won't stop on user interaction
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>
