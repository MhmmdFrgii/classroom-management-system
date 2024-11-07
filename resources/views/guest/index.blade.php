<x-guest>

    <style>
        .hero-section {
            transition: background-image 1s ease-in-out;
            background-size: cover;
            background-position: center;
        }

        .swiper-slide img {
            width: 450px;
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
        }

        .swiper-pagination-bullets {
            bottom: 15px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: white;
        }

        .custom-button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .custom-button {
            background-color: #333;
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-button:hover {
            background-color: #555;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        {{-- Hero Section with Slideshow --}}
        <section id="home"
            class="w-full mx-auto h-screen flex items-center justify-center text-center text-white relative bg-gradient-to-t from-slate-200/90 from-20% to-black/70 t0-70%">
            <div>
                <h5 class="text-2xl font-semibold mb-2">Hi, Bro IS!</h5>
                <h1 class="text-7xl font-extrabold mb-2">WELCOME</h1>
                <h6 class="text-sm">TO XII RPL</h6>
            </div>
        </section>
    </section>
    {{-- Section Memory --}}
    <section id="memory" class="pt-36 pb-56 shadow-md bg-gradient-to-b from-black from-20% to-gray-600 to-80%">
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
            <div class="w-full px-4 text-center pb-10">
                <h2 class="font-semibold text-3xl text-white mb-4">Class Gallery</h2>
            </div>

            <!-- Swiper Container -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($randoms as $random)
                        <div class="swiper-slide">
                            @if ($random->image)
                                <img src="{{ asset('storage/' . $random->image) }}" alt="Class Image">
                            @else
                                <p class="text-center text-gray-300">Tidak ada gambar</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- Optional Custom Buttons -->
            <div class="custom-button-container">
                <button class="custom-button">Send</button>
                <button class="custom-button">Request</button>
            </div>
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
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
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
</x-guest>
