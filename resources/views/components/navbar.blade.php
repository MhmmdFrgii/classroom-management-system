{{-- Header Section --}}
<header
    class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-gray-500/50 backdrop-blur-md w-[400px] items-center z-20 rounded-2xl">
    <div class="container flex justify-center text-center items-center px-4 py-1">
        <nav class="flex space-x-8">
            <a href="{{ route('home') }}" id="home-link" class="nav-link text-xl font-bold text-white py-2">Home</a>
            <a href="{{ route('memory') }}" id="memory-link" class="nav-link text-xl font-bold text-white py-2">Memory</a>
            <a href="#structure" id="structure-link" class="nav-link text-xl font-bold text-white py-2">Structure &
                Schedule</a>
        </nav>
    </div>
</header>

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
    // JavaScript untuk mengatur link aktif berdasarkan URL path
    function setActiveLink() {
        // Dapatkan path dari URL
        const path = window.location.pathname;

        // Menghapus kelas 'active-link' dari semua link
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active-link'));

        // Menambahkan kelas 'active-link' ke link yang sesuai berdasarkan path
        if (path.includes('/memory')) { // Jika URL mengandung /memory
            document.getElementById('memory-link').classList.add('active-link');
        } else if (path.includes('#structure')) { // Jika URL mengandung #structure
            document.getElementById('structure-link').classList.add('active-link');
        } else {
            document.getElementById('home-link').classList.add('active-link');
        }
    }

    // Jalankan saat halaman pertama kali dimuat
    setActiveLink();

    // Jalankan ulang saat hash atau path berubah
    window.addEventListener('popstate', setActiveLink);
</script>
