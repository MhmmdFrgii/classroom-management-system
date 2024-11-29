<x-guest>
    <!-- Hero Section -->
    <section class="hero-section">
        {{-- Hero Section with Slideshow --}}
        <section id="home"
            class="w-full mx-auto h-96 xl:h-screen flex items-center justify-center text-center text-white relative bg-gradient-to-t from-[#1e1e1e] from-10% via-[#1e1e1e]/90 via-40%  to-lime-700/90">
            <div>
                <h5 class="text-xl xl:text-3xl font-anton mb-1 xl:mb-2  tracking-wide">Hi, Bro IS!</h5>
                <h1 class="text-6xl xl:text-7xl font-anton mb-1 xl:mb-1 glow-text tracking-normal uppercase">WELLCOME
                </h1>
                <h6 class="text-sm xl:text-lg inter-sans mb-1 xl:mb-4 tracking-wider">TO XII RPL</h6>
            </div>
        </section>
    </section>

    {{-- Section Memory --}}
    <section id="memory" class="xl:pt-36 w-full h-1/2 xl:min-h-screen shadow-md "
        style="background-image: url('/lines/mesh3..svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="w-full px-4">
                <div class="hidden xl:block max-w-xl mx-auto text-center xl:pb-5">
                    <h2 class="inter-bold text-white text-2xl mb-4 sm:text-4xl xl:text-3xl">Memory
                    </h2>
                </div>
            </div>

            <!-- Memory cards (example) -->
            <div class="w-full px-4 grid grid-cols-2 gap-4 xl:gap-4 xl:flex xl:flex-wrap mx-auto">

                <div
                    class="hidden xl:block relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
                    <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                        @if ($pagelaransImage)
                            <img src="{{ asset('storage/' . $pagelaransImage->image) }}" alt="Image"
                                class="w-full h-full object-cover" />
                        @else
                            <img src="{{ asset('storage/default_image.jpg') }}" alt="Default Image"
                                class="w-full h-full" />
                        @endif
                    </div>
                    <div class="p-4">
                        <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                            Pagelaran Picture
                        </h6>
                        <p class="text-slate-600 leading-normal font-light">
                            Pagelaran SMKN 1 Lumajang, ajang &quot;kreatif&quot; seni & budaya siswa. Tampilkan bakat
                            tari, musik,
                            teater, & karya seni lokal dengan semangat kebersamaan.🎭🎶
                        </p>
                    </div>
                    <div class="px-4 pb-4 pt-0 mt-2">
                        <a href="{{ route('memorypagelaran') }}"
                            class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                            Read more
                        </a>
                    </div>
                </div>

                <div
                    class="hidden xl:block relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
                    <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                        @if ($classmeetImage)
                            <img src="{{ asset('storage/' . $classmeetImage->image) }}" alt="Image"
                                class="w-full h-full object-cover" />
                        @else
                            <img src="{{ asset('storage/default_image.jpg') }}" alt="Default Image"
                                class="w-full h-full" />
                        @endif
                    </div>
                    <div class="p-4">
                        <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                            Classmeet Picture
                        </h6>
                        <p class="text-slate-600 leading-normal font-light">
                            Classmeeting SMKN 1 Lumajang, ajang seru lomba olahraga & kreativitas antar kelas.
                            Tingkatkan sportivitas, kebersamaan, dan semangat kompetisi siswa! 🏀🎨🎉
                        </p>
                    </div>
                    <div class="px-4 pb-4 pt-0 mt-2">
                        <a href="{{ route('memoryclassmeet') }}"
                            class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                            Read more
                        </a>
                    </div>
                </div>

                <div
                    class="hidden xl:block relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
                    <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                        @if ($p5Image)
                            <img src="{{ asset('storage/' . $p5Image->image) }}" alt="Image"
                                class="w-full h-full object-cover" />
                        @else
                            <img src="{{ asset('storage/default_image.jpg') }}" alt="Default Image"
                                class="w-full h-full" />
                        @endif
                    </div>
                    <div class="p-4">
                        <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                            p5 Picture
                        </h6>
                        <p class="text-slate-600 leading-normal font-light">
                            P5 SMKN 1 Lumajang, proyek penguatan profil pelajar pancasila. Kegiatan kolaboratif yang
                            kembangkan karakter, kreativitas, dan nilai kebangsaan siswa! 🌟📚
                        </p>
                    </div>
                    <div class="px-4 pb-4 pt-0 mt-2">
                        <a href="{{ route('memoryp5') }}"
                            class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                            Read more
                        </a>
                    </div>
                </div>

                <a href="{{ route('memorypagelaran') }}" class="row-span-2 gap-2 xl:p-3 w-full xl:hidden group">
                    <div
                        class="w-full h-full p-6 flex flex-col justify-between xl:block bg-gray-500/40 backdrop-blur-sm xl:p-3 xl:bg-white rounded-3xl xl:rounded-xl shadow-md">
                        <div class="flex justify-between items-center">
                            <i class="fab fa-instagram text-white text-4xl xl:hidden"></i>
                            <i class="fas fa-chevron-right text-white text-xl xl:hidden"></i>
                        </div>
                        <h3
                            class="text-sm font-semibold xl:uppercase text-white xl:text-slate-900 bottom-0 xl:pt-2 mb-3 xl:mb-0 xl:text-center">
                            Pagelaran Picture</h3>
                    </div>
                </a>
                <a href="{{ route('memoryclassmeet') }}"
                    class="col-span-1 row-span-1 gap-2 xl:p-3 w-full xl:hidden group">
                    <div
                        class="w-full h-[100px] xl:h-full p-6 flex flex-col justify-between xl:block bg-gray-500/40 backdrop-blur-sm xl:p-3 xl:bg-white rounded-3xl xl:rounded-xl shadow-md">
                        <div class="flex justify-between items-center pt-0 xl:hidden">
                            <i class="fas fa-link text-white text-2xl xl:hidden"></i>
                            <i class="fas fa-chevron-right text-white text-xl xl:hidden"></i>
                        </div>
                        <h3
                            class="text-sm font-semibold xl:uppercase text-white xl:text-slate-900 bottom-0 xl:pt-2 mb-3 xl:mb-0 xl:text-center">
                            Classmeet Picture
                        </h3>
                    </div>
                </a>

                <a href="{{ route('memoryp5') }}" class="col-span-1 row-span-1 gap-2 xl:p-3 w-full xl:hidden group">
                    <div
                        class="w-full h-[100px] xl:h-full p-6 flex flex-col justify-between bg-gray-500/40 backdrop-blur-sm xl:p-3 xl:bg-white rounded-3xl xl:rounded-xl shadow-md">
                        <div class="flex justify-between items-center pt-0 xl:hidden">
                            <i class="fas fa-link text-white text-2xl xl:hidden"></i>
                            <i class="fas fa-chevron-right text-white text-xl xl:hidden"></i>
                        </div>
                        <h3
                            class="text-sm font-semibold xl:uppercase text-white xl:text-slate-900 bottom-0 xl:pt-2 mb-3 xl:mb-0 xl:text-center">
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
            <div class="w-full px-4 text-center pb-5 xl:pb-10">
                <h2 class="inter-bold text-2xl xl:text-3xl text-white xl:mb-4">Random Pick</h2>
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

    <section id="ss" class="pt-24 w-full pb-0 xl:pb-28 h-1/2 xl:min-h-screen"
        style="background-image: url('/lines/mesh..svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container mx-auto text-center w-full p-0">
            {{-- <h1 class="text-3xl text-white font-bold mb-6">Structure & Schedule</h1> --}}

            <!-- Toggle Buttons -->
            <div class="flex justify-center space-x-1 mb-1" data-aos="fade-up">
                <button onclick="showSection('structure')"
                    class="toggle-button py-1 w-32 text-white text-2xl xl:text-3xl font-semibold rounded">
                    Structure
                </button>
                <span class="text-4xl text-white font-bold">&</span>
                <button onclick="showSection('schedule')"
                    class="toggle-button py-1 w-32 text-white text-2xl xl:text-3xl font-semibold rounded">
                    Schedule
                </button>
            </div>

            <!-- Sections -->
            <div id="structure"
                class="section z-1 relative w-full xl:max-w-3xl mx-auto p-0 overflow-auto bg-transparent rounded-lg h-[550px] xl:min-h-screen">
                {{-- <h2 class="text-2xl font-semibold text-center mb-4 text-white">Structure</h2> --}}

                <!-- Wali Kelas -->
                <p class="text-gray-300 text-center mb-1" data-aos="fade-up">Wali Kelas</p>
                <div class="flex flex-col items-center space-y-4 relative">
                    <div class="bg-gray-300 text-black px-4 py-1 w-56 rounded-full" data-aos="fade-up">Siti Shofiyah
                        S.Pd.I</div>

                    <!-- Garis Vertikal -->
                    <div class="flex flex-col justify-center items-center max-w-sm xl:w-full pt-4 absolute"
                        data-aos="fade-up" data-aos-delay="400">
                        <svg width="30" height="50">
                            <line x1="15" y1="0" x2="15" y2="50" stroke="white"
                                stroke-width="1" />
                        </svg>

                        <!-- Garis Horizontal -->
                        <div class="flex items-start">
                            <svg class="w-[250px] xl:w-[400px] h-30">
                                <line x1="0" y1="0" x2="700" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>
                    </div>

                    <!-- Garis Kiri dan Kanan dengan Bulatan -->
                    <div class="flex justify-between max-w-sm xl:w-full -bottom-[75px] absolute" data-aos="fade-up"
                        data-aos-delay="500">
                        <svg width="30" height="25" class="translate-x-[155px] xl:translate-x-[392px]">
                            <line x1="0" y1="0" x2="0" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                        <svg width="30" height="25" class="-translate-x-[155px] xl:-translate-x-[392px]">
                            <line x1="30" y1="0" x2="30" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                    </div>

                    {{-- circle --}}
                    <div class="flex justify-between max-w-sm xl:w-full -bottom-[90px] absolute" data-aos="fade-up"
                        data-aos-delay="600">
                        <svg width="20" height="30" class="translate-x-[130px] xl:translate-x-[377px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                        <svg width="20" height="30" class="-translate-x-[140px] xl:-translate-x-[387px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                    </div>

                    <!-- Ketua dan Wakil Ketua -->
                    <div class="flex justify-between items-center max-w-sm xl:items-center xl:justify-center xl:w-full -bottom-[150px] absolute"
                        data-aos="fade-up" data-aos-delay="700">
                        <div class="text-center">
                            <p class="text-gray-300 text-sm xl:text-base">Ketua Kelas</p>
                            <div
                                class="bg-white text-sm xl:text-base text-black px-2 py-[0.30rem] w-[120px] xl:w-32 rounded-full">
                                Azka
                            </div>
                        </div>
                        <!-- Garis Horizontal -->
                        <div class="flex items-center translate-y-7">
                            <svg class="w-[130px] xl:w-[270px] h-30" width="450" height="30">
                                <line x1="0" y1="0" x2="700" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <p class="text-gray-300 text-sm xl:text-base">Wakil Ketua</p>
                            <div
                                class="bg-white text-sm xl:text-base text-black px-2 py-[0.30rem] w-[120px] xl:w-32 rounded-full">
                                Alfan
                            </div>
                        </div>
                    </div>

                    <!-- Garis Vertikal -->
                    <div class="flex flex-col items-center max-w-sm xl:w-full pt-4 -bottom-[245px] absolute"
                        data-aos="fade-up" data-aos-delay="800">
                        <svg width="30" height="76">
                            <line x1="15" y1="80" x2="15" y2="0" stroke="white"
                                stroke-width="1" />
                        </svg>

                        <!-- Garis Horizontal -->
                        <div class="flex items-start">
                            <svg class="w-[200px] xl:w-[300px]" height="30">
                                <line x1="0" y1="0" x2="700" y2="0" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </div>
                    </div>

                    <!-- Garis Kiri dan Kanan dengan Bulatan -->
                    <div class="flex justify-between max-w-sm xl:w-full -bottom-[240px] absolute" data-aos="fade-up"
                        data-aos-delay="900">
                        <svg width="30" height="25" class="translate-x-[130px] xl:translate-x-[42px]">
                            <line x1="0" y1="0" x2="0" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                        <svg width="30" height="25" class="-translate-x-[130px] xl:-translate-x-[42px]">
                            <line x1="30" y1="0" x2="30" y2="25" stroke="white"
                                stroke-width="2" />
                        </svg>
                    </div>

                    {{-- circle --}}
                    <div class="flex justify-between max-w-sm xl:w-full -bottom-[258px] absolute" data-aos="fade-up"
                        data-aos-delay="1000">
                        <svg width="20" height="30" class="translate-x-[105px] xl:translate-x-[28px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                        <svg width="20" height="30" class="-translate-x-[115px] xl:-translate-x-[38px]">
                            <circle cx="15" cy="15" r="4" fill="white" />
                        </svg>
                    </div>



                    <!-- Sekretaris dan Bendahara -->
                    <div class="flex justify-between max-w-sm xl:w-full -bottom-[360px] absolute" data-aos="fade-up"
                        data-aos-delay="1100">
                        <div class="text-center translate-x-[160px] xl:translate-x-[280px]">
                            <p class="text-gray-300">Sekretaris</p>
                            <div
                                class="bg-white text-sm xl:text-base text-black px-2 py-[0.30rem] w-[120px] xl:w-32 rounded-full">
                                Fabian</div>
                            <div
                                class="bg-white text-sm xl:text-base text-black px-2 py-[0.30rem] w-[120px] xl:w-32 rounded-full mt-2">
                                Widi</div>
                        </div>
                        <div class="text-center -translate-x-[160px] xl:-translate-x-[280px]">
                            <p class="text-gray-300">Bendahara</p>
                            <div
                                class="bg-white text-sm xl:text-base text-black px-2 py-[0.30rem] w-[120px] xl:w-32 rounded-full">
                                Rama</div>
                            <div
                                class="bg-white text-sm xl:text-base text-black px-2 py-[0.30rem] w-[120px] xl:w-32 rounded-full mt-2">
                                Indra crypto</div>
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
                    AOS.refreshHard();
                }
            }, 100); // Delay to ensure visibility changes are applied
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll(".tab-link");
            const contents = document.querySelectorAll(".tab-content");

            tabs.forEach((tab) => {
                tab.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Reset active state for tabs and content
                    tabs.forEach((t) => t.classList.remove("bg-slate-300", "font-bold"));
                    contents.forEach((content) => {
                        content.classList.add("hidden", "opacity-0");
                        content.classList.remove("block", "opacity-100");
                    });

                    // Activate clicked tab and related content
                    const target = tab.getAttribute("data-tab-target");
                    tab.classList.add("bg-slate-300", "font-bold");
                    const activeContent = document.getElementById(target);
                    activeContent.classList.remove("hidden", "opacity-0");
                    activeContent.classList.add("block", "opacity-100");
                });
            });
        });
    </script>
</x-guest>
