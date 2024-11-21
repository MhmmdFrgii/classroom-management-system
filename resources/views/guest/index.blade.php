<x-guest>
    <!-- Hero Section -->
    <section class="hero-section">
        {{-- Hero Section with Slideshow --}}
        <section id="home"
            class="w-full mx-auto h-screen flex items-center justify-center text-center text-white relative bg-gradient-to-t from-[#1e1e1e] from-10% via-[#1e1e1e]/90 via-40%  to-lime-700/90">
            <div>
                <h5 class="text-xl xl:text-2xl font-anton mb-1 xl:mb-2  tracking-wide">Hi, Bro IS!</h5>
                <h1 class="text-6xl xl:text-7xl font-anton mb-1 xl:mb-2 glow-text tracking-normal uppercase">WELLCOME
                </h1>
                <h6 class="text-sm xl:text-md inter-sans mb-1 xl:mb-4 tracking-wider">TO XII RPL</h6>
            </div>
        </section>
    </section>

    {{-- Section Memory --}}
    <section id="memory" class="pt-36 w-full min-h-screen shadow-md "
        style="background-image: url('/lines/mesh3..svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-5">
                    <h2 class="inter-bold text-white text-2xl mb-4 sm:text-4xl lg:text-5xl">Memory
                    </h2>
                </div>
            </div>
            <!-- Memory cards (example) -->
            <div class="w-full px-4 flex flex-wrap mx-auto">
                <a href="{{ route('memorypagelaran') }}" class="mb-12 p-3 w-full xl:w-1/3 group">
                    <div class="w-full p-3 bg-white rounded-xl shadow-md xl:hover:scale-105 transition duration-300">
                        <div class="rounded-lg overflow-hidden group-hover:opacity-95 transition duration-300">
                            <!-- Gambar untuk memory card -->
                            @if ($pagelaransImage)
                                <img src="{{ asset('storage/' . $pagelaransImage->image) }}" alt="Image"
                                    class="w-full h-[200px]" />
                            @else
                                <img src="{{ asset('storage/default_image.jpg') }}" alt="Default Image"
                                    class="w-full h-[200px]" />
                            @endif
                        </div>
                        <h3
                            class="text-sm font-semibold uppercase text-dark pt-10 mb-3 text-center transition duration-300">
                            Pagelaran Picture</h3>
                    </div>
                </a>
                <a href="{{ route('memoryclassmeet') }}" class="mb-12 p-3 w-full xl:w-1/3 group">
                    <div class="w-full p-3 bg-white rounded-xl shadow-md xl:hover:scale-105 transition duration-500">
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
                            class="text-sm font-semibold uppercase text-dark pt-10 mb-3 text-center transition duration-300">
                            Classmeet Picture
                        </h3>
                    </div>
                </a>
                <a href="{{ route('memoryp5') }}" class="mb-12 p-3 w-full xl:w-1/3 group">
                    <div class="w-full p-3 bg-white rounded-xl shadow-md xl:hover:scale-105 transition duration-500">
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
                            class="text-sm font-semibold uppercase text-dark pt-10 mb-3 text-center transition duration-300">
                            P5 Picture</h3>
                    </div>
                </a>
                <!-- Add more cards here as needed -->
            </div>
        </div>
    </section>

    {{-- Section Random pick --}}
    <section id="random" class="pt-14 pb-14 text-white w-full"
        style="background-image: url('/lines/mesh2..svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="relative p-10 mx-auto">
            <div class="w-full px-4 text-center pb-10">
                <h2 class="inter-bold text-2xl text-white mb-4">Random Pick</h2>
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

                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="ss" class="pt-24 pb-0 xl:pb-28 min-h-screen"
        style="background-image: url('/lines/mesh..svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container mx-auto text-center">
            {{-- <h1 class="text-3xl text-white font-bold mb-6">Structure & Schedule</h1> --}}

            <!-- Toggle Buttons -->
            <div class="flex justify-center space-x-1 mb-1">
                <button onclick="showSection('structure')"
                    class="toggle-button py-1 w-28 text-white text-2xl font-semibold rounded">
                    Structure
                </button>
                <span class="text-4xl text-white font-bold">&</span>
                <button onclick="showSection('schedule')"
                    class="toggle-button py-1 w-28 text-white text-2xl font-semibold rounded">
                    Schedule
                </button>
            </div>

            <!-- Sections -->
            <div id="structure" class="section w-full xl:max-w-3xl mx-auto p-8 bg-transparent rounded-lg min-h-screen">
                {{-- <h2 class="text-2xl font-semibold text-center mb-4 text-white">Structure</h2> --}}

                <!-- Wali Kelas -->
                <p class="text-gray-300 text-center mb-1">Wali Kelas</p>
                <div class="flex flex-col items-center space-y-4 relative">
                    <div class="bg-gray-300 text-black px-4 py-1 w-56 rounded-full" data-aos="fade-up">Siti Shofiyah
                        S.Pd.I</div>

                    <!-- Garis Vertikal -->
                    <div class="flex flex-col items-center w-full pt-4 absolute" data-aos="fade-up"
                        data-aos-delay="400">
                        <svg width="30" height="50">
                            <line x1="15" y1="0" x2="15" y2="50" stroke="white"
                                stroke-width="1" />
                        </svg>

                        <!-- Garis Horizontal -->
                        <div class="flex items-start">
                            <svg class="w-[230px] xl:w-[566px] h-30">
                                <line x1="0" y1="0" x2="700" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>
                    </div>

                    <!-- Garis Kiri dan Kanan dengan Bulatan -->
                    <div class="flex justify-between w-full -bottom-[75px] absolute" data-aos="fade-up"
                        data-aos-delay="500">
                        <svg width="30" height="25" class="translate-x-[55px] xl:translate-x-[68px]">
                            <line x1="0" y1="0" x2="0" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                        <svg width="30" height="25" class="-translate-x-[55px] xl:-translate-x-[68px]">
                            <line x1="30" y1="0" x2="30" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                    </div>

                    {{-- circle --}}
                    <div class="flex justify-between w-full -bottom-[90px] absolute" data-aos="fade-up"
                        data-aos-delay="600">
                        <svg width="20" height="30" class="translate-x-[41px] xl:translate-x-[54px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                        <svg width="20" height="30" class="-translate-x-[51px] xl:-translate-x-[64px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                    </div>

                    <!-- Ketua dan Wakil Ketua -->
                    <div class="flex justify-between items-center w-full -bottom-[150px] absolute" data-aos="fade-up"
                        data-aos-delay="700">
                        <div class="text-center">
                            <p class="text-gray-300">Ketua Kelas</p>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full">Azka</div>
                        </div>
                        <!-- Garis Horizontal -->
                        <div class="flex items-center translate-y-7">
                            <svg class="w-[100px] xl:w-[450px] h-30" width="450" height="30">
                                <line x1="0" y1="0" x2="700" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <p class="text-gray-300">Wakil Ketua</p>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full">Alfan</div>
                        </div>
                    </div>

                    <!-- Garis Vertikal -->
                    <div class="flex flex-col items-center w-full pt-4 -bottom-[245px] absolute" data-aos="fade-up"
                        data-aos-delay="800">
                        <svg width="30" height="80">
                            <line x1="15" y1="80" x2="15" y2="0" stroke="white"
                                stroke-width="1" />
                        </svg>

                        <!-- Garis Horizontal -->
                        <div class="flex items-start">
                            <svg class="w-[180px] xl:w-[300px]" height="30">
                                <line x1="0" y1="0" x2="700" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>
                    </div>

                    <!-- Garis Kiri dan Kanan dengan Bulatan -->
                    <div class="flex justify-between w-full -bottom-[240px] absolute" data-aos="fade-up"
                        data-aos-delay="900">
                        <svg width="30" height="25" class="translate-x-[80px] xl:translate-x-[202px]">
                            <line x1="0" y1="0" x2="0" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                        <svg width="30" height="25" class="-translate-x-[80px] xl:-translate-x-[202px]">
                            <line x1="30" y1="0" x2="30" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                    </div>

                    {{-- circle --}}
                    <div class="flex justify-between w-full -bottom-[258px] absolute" data-aos="fade-up"
                        data-aos-delay="1000">
                        <svg width="20" height="30" class="translate-x-[66px] xl:translate-x-[188px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                        <svg width="20" height="30" class="-translate-x-[76px] xl:-translate-x-[198px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                    </div>



                    <!-- Sekretaris dan Bendahara -->
                    <div class="flex justify-between w-full -bottom-[360px] absolute" data-aos="fade-up"
                        data-aos-delay="1100">
                        <div class="text-center translate-x-[18px] xl:translate-x-[140px]">
                            <p class="text-gray-300">Sekretaris</p>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full">Fabian</div>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full mt-2">Widi</div>
                        </div>
                        <div class="text-center -translate-x-[18px] xl:-translate-x-[140px]">
                            <p class="text-gray-300">Bendahara</p>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full">Rama</div>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full mt-2">Indra crypto</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Schedule --}}
            <div id="schedule"
                class="section w-full max-w-4xl mx-auto p-8 bg-transparent rounded-lg hidden flex flex-wrap">
                <div class="w-full xl:w-1/2 xl:mb-0 mb-5">
                    <div class="container text-center py-5">
                        <h2 class="text-white text-md font-semibold xl:text-3xl xl:font-bold mb-2" data-aos="fade-up">
                            {{ now()->format('l') }}
                        </h2>

                        <!-- Jadwal Pelajaran -->
                        <div class="schedule-table text-center">
                            @foreach ($jadwalPelajaran as $pelajaran)
                                <div class="schedule-item">
                                    <div class="divider" data-aos="fade-up">
                                        <svg width="300" height="2" class="mx-auto">
                                            <line x1="0" y1="0" x2="300" y2="0"
                                                stroke="white" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <div class="subject-time mt-3" data-aos="fade-up">
                                        <span class="subject text-white text-inter xl:text-lg xl:font-semibold block">
                                            {{ $pelajaran->subject }}
                                        </span>
                                        <span class="time text-gray-300 text-inter block">
                                            {{ $pelajaran->start_time }} - {{ $pelajaran->end_time }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                            <div class="divider" data-aos="fade-up">
                                <svg width="300" height="2" class="mx-auto">
                                    <line x1="0" y1="0" x2="300" y2="0"
                                        stroke="white" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jadwal Piket -->
                <div class="w-full xl:w-1/2">
                    <div class="container text-center py-5">
                        <h2 class="text-white text-md font-semibold xl:text-3xl xl:font-bold mb-2" data-aos="fade-up">
                            Piket</h2>
                        <div class="schedule-table">
                            @foreach ($jadwalPiket as $piket)
                                <div class="schedule-item">
                                    <div class="divider" data-aos="fade-up">
                                        <svg width="300" height="2" class="mx-auto">
                                            <line x1="0" y1="0" x2="300" y2="0"
                                                stroke="white" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <div class="subject-time mt-5 mb-4" data-aos="fade-up">
                                        <span class="subject text-gray-300 text-sm font-inter xl:font-semibold block">
                                            {{ $piket->student_name }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                            <div class="divider" data-aos="fade-up">
                                <svg width="300" height="2" class="mx-auto">
                                    <line x1="0" y1="0" x2="300" y2="0"
                                        stroke="white" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // Untuk layar besar (default)
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                // Untuk tablet
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                // Untuk ponsel kecil
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
            },
        });
    </script>


    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show selected section
            const selectedSection = document.getElementById(sectionId);
            selectedSection.classList.remove('hidden');

            // Refresh AOS animations to reinitialize visible elements
            setTimeout(() => {
                if (window.AOS) {
                    AOS.refresh();
                }
            }, 100); // Delay to ensure visibility changes are applied
        }
    </script>

</x-guest>
