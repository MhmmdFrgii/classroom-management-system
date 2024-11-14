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

    <section id="ss" class="pt-36 min-h-screen">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold mb-6">Structure & Schedule</h1>

            <!-- Toggle Buttons -->
            <div class="flex justify-center space-x-4 mb-8">
                <button onclick="showSection('structure')"
                    class="toggle-button px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600 transition active:bg-gray-500">
                    Structure
                </button>
                <button onclick="showSection('schedule')"
                    class="toggle-button px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600 transition active:bg-gray-500">
                    Schedule
                </button>
            </div>

            <!-- Sections -->
            <div id="structure" class="section w-full max-w-2xl mx-auto p-8 bg-gray-900 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-center mb-4 text-white">Structure</h2>

                <!-- Wali Kelas -->
                <p class="text-gray-300 text-center mb-1">Wali Kelas</p>
                <div class="flex flex-col items-center space-y-4">
                    <div class="bg-gray-300 text-black px-4 py-2 rounded-full">Siti Shofiyah S.Pd.I</div>

                    <!-- Garis Vertikal -->
                    <div class="flex flex-col items-center">
                        <svg width="30" height="50">
                            <line x1="15" y1="0" x2="15" y2="50" stroke="white"
                                stroke-width="1" />
                        </svg>

                        <!-- Garis Horizontal -->
                        <div class="flex items-start">
                            <svg width="500" height="30">
                                <line x1="0" y1="0" x2="500" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>

                        <!-- Garis Kiri dan Kanan dengan Bulatan -->
                        <div class="flex justify-between w-full -translate-y-7">
                            <svg width="30" height="25">
                                <line x1="0" y1="0" x2="0" y2="25" stroke="white"
                                    stroke-width="2" />
                            </svg>
                            <svg width="30" height="25">
                                <line x1="30" y1="0" x2="30" y2="25" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>

                        {{-- circle --}}
                        <div class="flex justify-between w-full -translate-y-10">
                            <svg width="20" height="30">
                                <circle cx="0" cy="15" r="4" fill="white" />
                            </svg>
                            <svg width="20" height="30">
                                <circle cx="15" cy="15" r="4" fill="white" />
                            </svg>
                        </div>
                    </div>

                    <!-- Ketua dan Wakil Ketua -->
                    <div class="flex justify-between w-full px-10 mt-6">
                        <div class="text-center">
                            <p class="text-gray-300">Ketua Kelas</p>
                            <div class="bg-white text-black px-4 py-2 rounded-full">Hafizh</div>
                        </div>
                        <div class="text-center">
                            <p class="text-gray-300">Wakil Ketua</p>
                            <div class="bg-white text-black px-4 py-2 rounded-full">Fikri</div>
                        </div>
                    </div>

                    <!-- Garis Vertikal Bawah -->
                    <svg width="30" height="50">
                        <line x1="15" y1="0" x2="15" y2="50" stroke="white"
                            stroke-width="1" />
                    </svg>

                    <!-- Sekretaris dan Bendahara -->
                    <div class="flex justify-between w-full px-10 mt-6">
                        <div class="text-center">
                            <p class="text-gray-300">Sekretaris</p>
                            <div class="bg-white text-black px-4 py-2 rounded-full">Fabian</div>
                            <div class="bg-white text-black px-4 py-2 rounded-full mt-2">Izra</div>
                        </div>
                        <div class="text-center">
                            <p class="text-gray-300">Bendahara</p>
                            <div class="bg-white text-black px-4 py-2 rounded-full">Romo</div>
                            <div class="bg-white text-black px-4 py-2 rounded-full mt-2">Indra</div>
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
