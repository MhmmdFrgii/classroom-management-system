<x-guest>
    <!-- Hero Section -->
    <section class="hero-section">
        {{-- Hero Section with Slideshow --}}
        <section id="home"
            class="w-full mx-auto h-screen flex items-center justify-center text-center text-white relative bg-gradient-to-t from-black from-10% to-black/70">
            <div>
                <h5 class="text-3xl font-anton mb-4  tracking-wide">Hi, Bro IS!</h5>
                <h1 class="text-9xl font-anton mb-4 glow-text tracking-normal uppercase">WELLCOME</h1>
                <h6 class="text-xl inter-sans mb-4 tracking-wider">TO XII RPL</h6>
            </div>
        </section>
    </section>

    {{-- Section Random pick --}}
    <section id="random" class="pt-14 pb-14 bg-black text-white w-full">
        <div class="relative p-10 mx-auto">
            <div class="w-full px-4 text-center pb-10">
                <h2 class="inter-bold text-3xl text-white mb-4">Random Pick</h2>
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

    <section id="ss" class="pt-36 pb-36 min-h-screen"
        style="background-image: url('/lines/mesh..svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl text-white font-bold mb-6">Structure & Schedule</h1>

            <!-- Toggle Buttons -->
            <div class="flex justify-center space-x-4 mb-8">
                <button onclick="showSection('structure')"
                    class="toggle-button px-4 py-1 w-28 bg-gray-700 text-white rounded hover:bg-gray-600 transition active:bg-gray-500">
                    Structure
                </button>
                <button onclick="showSection('schedule')"
                    class="toggle-button px-4 py-1 w-28 bg-gray-700 text-white rounded hover:bg-gray-600 transition active:bg-gray-500">
                    Schedule
                </button>
            </div>

            <!-- Sections -->
            <div id="structure" class="section w-full max-w-3xl mx-auto p-8 bg-transparent rounded-lg min-h-screen">
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
                            <svg width="566" height="30">
                                <line x1="0" y1="0" x2="700" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>
                    </div>

                    <!-- Garis Kiri dan Kanan dengan Bulatan -->
                    <div class="flex justify-between w-full -bottom-[75px] absolute" data-aos="fade-up"
                        data-aos-delay="500">
                        <svg width="30" height="25" class="translate-x-[68px]">
                            <line x1="0" y1="0" x2="0" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                        <svg width="30" height="25" class="-translate-x-[68px]">
                            <line x1="30" y1="0" x2="30" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                    </div>

                    {{-- circle --}}
                    <div class="flex justify-between w-full -bottom-[90px] absolute" data-aos="fade-up"
                        data-aos-delay="600">
                        <svg width="20" height="30" class="translate-x-[54px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                        <svg width="20" height="30" class="-translate-x-[64px]">
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
                            <svg width="450" height="30">
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
                            <svg width="300" height="30">
                                <line x1="0" y1="0" x2="700" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>
                    </div>

                    <!-- Garis Kiri dan Kanan dengan Bulatan -->
                    <div class="flex justify-between w-full -bottom-[240px] absolute" data-aos="fade-up"
                        data-aos-delay="900">
                        <svg width="30" height="25" class="translate-x-[202px]">
                            <line x1="0" y1="0" x2="0" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                        <svg width="30" height="25" class="-translate-x-[202px]">
                            <line x1="30" y1="0" x2="30" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                    </div>

                    {{-- circle --}}
                    <div class="flex justify-between w-full -bottom-[258px] absolute" data-aos="fade-up"
                        data-aos-delay="1000">
                        <svg width="20" height="30" class="translate-x-[188px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                        <svg width="20" height="30" class="-translate-x-[198px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                    </div>



                    <!-- Sekretaris dan Bendahara -->
                    <div class="flex justify-between w-full -bottom-[360px] absolute" data-aos="fade-up"
                        data-aos-delay="1100">
                        <div class="text-center translate-x-[140px]">
                            <p class="text-gray-300">Sekretaris</p>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full">Fabian</div>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full mt-2">Widi</div>
                        </div>
                        <div class="text-center -translate-x-[140px]">
                            <p class="text-gray-300">Bendahara</p>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full">Rama</div>
                            <div class="bg-white text-black px-4 py-1 w-32 rounded-full mt-2">Indra crypto</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="schedule"
                class="section hidden w-full max-w-2xl mx-auto p-8 bg-transparent rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Schedule</h2>
                <p class="text-gray-300">Content for Schedule</p>
                <div class="container text-center py-5">
                    <h2 class="text-white mb-4">{{ now()->format('l') }}</h2>

                    <!-- Jadwal Pelajaran -->
                    <div class="schedule-table">
                        @foreach ($jadwalPelajaran as $pelajaran)
                            <div class="schedule-item">
                                <span class="subject">{{ $pelajaran->subject }}</span>
                                <span class="time">{{ $pelajaran->start_time }} - {{ $pelajaran->end_time }}</span>
                            </div>
                        @endforeach
                    </div>

                    <!-- Jadwal Piket -->
                    <h2 class="text-white mt-5">Piket</h2>
                    <div class="schedule-table">
                        @foreach ($jadwalPiket as $piket)
                            <div class="schedule-item">
                                <span class="subject">{{ $piket->student_name }}</span>
                            </div>
                        @endforeach
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

    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show selected section
            document.getElementById(sectionId).classList.remove('hidden');

            // Update button styles
            document.querySelectorAll('.toggle-button').forEach(button => {
                button.classList.remove('bg-gray-600', 'active:bg-gray-500');
                button.classList.add('bg-gray-700');
            });
            event.target.classList.add('bg-gray-600');
        }
    </script>
</x-guest>
