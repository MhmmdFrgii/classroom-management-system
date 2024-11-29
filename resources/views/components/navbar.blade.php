<header class="fixed top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-ceneter justify-between relative">
            <div class="px-4 xl:hidden">
                <a href="{{ route('home') }}" class="font-bold text-xl text-primary block py-6">XIIRPL</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 xl:hidden z-[9999]">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>

                <nav id="nav-menu"
                    class="hidden absolute xl:py-1.5 py-2 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-2 top-full xl:mt-4 xl:right-1/2 xl:translate-x-[420px] xl:block xl:static xl:bg-stone-800/80 xl:backdrop-blur-sm xl:max-w-full xl:shadow-none xl:rounded-xl">
                    <ul class="block xl:flex">
                        <li class="group">
                            <a href="{{ route('home') }}" id="home-link"
                                class="text-sm font-medium text-dark xl:text-white py-1 mx-8 flex group-hover:text-primary transition duration-300">Beranda</a>
                        </li>
                        <li class="group hidden xl:block">
                            <a href="{{ route('home') }}#memory" id="home-link"
                                class="text-sm font-medium text-dark xl:text-white py-1 mx-8 xl:mx-1 flex group-hover:text-primary transition duration-300">Memory
                            </a>
                        </li>
                        <li class="group xl:hidden">
                            <a href="{{ route('home') }}#home" id="home-link"
                                class="text-sm font-medium text-dark xl:text-white py-1 mx-8 xl:mx-2 flex group-hover:text-primary transition duration-300">Memory
                            </a>
                        </li>
                        <li class="group">
                            <a href="{{ route('home') }}#ss" id="home-link"
                                class="text-sm font-medium text-dark xl:text-white py-1 mx-8 flex group-hover:text-primary transition duration-300">Structure
                                & Sechedule</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->

<style>
    /* Styling dasar untuk link */
    .nav-link {
        position: relative;
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    /* Underline animasi */
    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;

        bottom: -2px;
        /* Jarak antara teks dan garis */
        width: 100%;
        height: 2px;
        /* Ketebalan underline */
        background-color: transparent;
        /* Awalnya transparan */
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s ease, background-color 0.5s ease;
    }

    /* Efek hover untuk underline */
    .nav-link:hover::after {
        background-color: white;
        transform: scaleX(1);
        /* Memperlihatkan underline dari kiri ke kanan */
    }

    /* Efek active untuk link */
    .active-link {
        color: #38b2ac;
    }

    .active-link::after {
        background-color: #38b2ac;
        /* Warna garis saat link aktif */
        transform: scaleX(1);
        /* Menampilkan underline secara penuh untuk link aktif */
    }
</style>

<script>
    // Ambil elemen hamburger, garisnya, dan elemen header
    const hamburger = document.querySelector("#hamburger");
    const navMenu = document.querySelector("#nav-menu");
    const hamburgerLines = document.querySelectorAll(".hamburger-line");
    const header = document.querySelector("header");

    // Toggle menu saat hamburger di klik
    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("hamburger-active"); // Animasi transform
        navMenu.classList.toggle("hidden");
    });

    // Logika untuk mengubah warna header dan hamburger saat scroll
    window.onscroll = function() {
        const fixedNav = header.offsetTop;

        // Tetap fixed untuk semua layar
        if (window.pageYOffset > fixedNav) {
            header.classList.add("navbar-fixed");

            // Jika di mobile, ubah warna hamburger saat scroll
            if (window.innerWidth <= 768) {
                hamburgerLines.forEach(line => line.classList.add("hamburger-line-dark")); // Warna dark mode
            }
        } else {
            header.classList.remove("navbar-fixed");

            // Kembalikan warna default hamburger di mobile
            if (window.innerWidth <= 768) {
                hamburgerLines.forEach(line => line.classList.remove("hamburger-line-dark"));
            }
        }
    };
</script>
<script>
    function setActiveLink() {
        // Dapatkan path dan hash dari URL
        const path = window.location.pathname;
        const hash = window.location.hash;

        // Menghapus kelas 'active-link' dari semua link
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active-link'));

        // Menambahkan kelas 'active-link' ke link yang sesuai berdasarkan path
        if (path.includes('/memoryclassmeet') || path.includes('/memorypagelaran') || path.includes('/memoryp5')) {
            document.getElementById('memory-link').classList.add('active-link');
        }

    } else if (path.includes('/home')) {
        // Jika URL mengandung /home (halaman home)
        document.getElementById('home-link').classList.add('active-link');
    } else if (hash === '#ss') { // Jika hash mengandung #ss di halaman home
        document.getElementById('ss-link').classList.add('active-link');
    } else {
        // Default fallback ke link home
        document.getElementById('home-link').classList.add('active-link');
    }
    }

    // Jalankan saat halaman pertama kali dimuat
    setActiveLink();

    // Jalankan ulang saat hash atau path berubah
    window.addEventListener('popstate', setActiveLink);
    window.addEventListener('hashchange', setActiveLink); // Deteksi perubahan hash
</script>
