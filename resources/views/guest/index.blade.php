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
        <div class="p-10 mx-auto">
            <div class="w-full px-4 text-center pb-10">
                <h2 class="inter-bold text-3xl text-white mb-4" data-aos="fade-up" data-aos-duration="">Random Pick</h2>
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
            <div id="structure" class="section w-full max-w-2xl mx-auto p-8 bg-transparent rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Structure</h2>
                <p class="text-gray-300 mb-4">Wali Kelas</p>
                <div class="flex flex-col items-center space-y-4">
                    <div class="bg-white text-black px-4 py-2 rounded-full">Abdul Wahab S.Pd</div>
                    <div class="border-l-2 border-gray-500 h-10"></div>
                    <div class="flex justify-between w-full px-10">
                        <div class="text-center">
                            <p class="text-gray-300">Ketua Kelas</p>
                            <div class="bg-white text-black px-4 py-2 rounded-full">Putry</div>
                        </div>
                        <div class="text-center">
                            <p class="text-gray-300">Wakil Ketua</p>
                            <div class="bg-white text-black px-4 py-2 rounded-full">Jeriko</div>
                        </div>
                    </div>
                    <div class="flex justify-between w-full px-10 mt-6">
                        <div class="text-center">
                            <p class="text-gray-300">Sekretaris</p>
                            <div class="bg-white text-black px-4 py-2 rounded-full">Pratiwi</div>
                            <div class="bg-white text-black px-4 py-2 rounded-full mt-2">Paulista</div>
                        </div>
                        <div class="text-center">
                            <p class="text-gray-300">Bendahara</p>
                            <div class="bg-white text-black px-4 py-2 rounded-full">Lista</div>
                            <div class="bg-white text-black px-4 py-2 rounded-full mt-2">Davina</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="schedule" class="section hidden w-full max-w-2xl mx-auto p-8 bg-transparent rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Schedule</h2>
                <p class="text-gray-300">Content for Schedule</p>
                <!-- Isi jadwal kelas di sini -->
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
