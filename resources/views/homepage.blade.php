<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Prediksi Penyakit Jantung</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white font-sans">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-10 py-6 backdrop-blur-md bg-white/5 border-b border-white/10">
        <h1 class="text-2xl font-bold tracking-wide text-red-400">Sistem Prediksi Jantung</h1>
        <ul class="flex gap-6 text-sm font-medium">
            <li><a href="/" class="hover:text-red-400 transition">Home</a></li>
            <li><a href="#layanan" class="hover:text-red-400 transition">Layanan</a></li>
            <li><a href="#tentang" class="hover:text-red-400 transition">Tentang</a></li>
            <li><a href="#kontak" class="hover:text-red-400 transition">Kontak</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-10 py-20 gap-12">
        <div class="md:w-1/2 space-y-6">
            <h2
                class="text-4xl md:text-6xl font-extrabold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-pink-500">
                Sistem Klasifikasi Pengidap Penyakit Jantung
            </h2>
            <p class="text-gray-300 text-lg leading-relaxed">
                Membantu pengambilan keputusan medis berbasis <strong>Random Forest</strong> untuk klasifikasi dini penyakit jantung.
            </p>
            <div class="flex gap-4">
                <a href="/pasien" class="px-6 py-3 bg-red-500 text-white rounded-xl hover:bg-red-600 transition shadow-lg">
                    Coba Prediksi
                </a>
                <a href="#" class="px-6 py-3 border border-red-400 text-red-400 rounded-xl hover:bg-red-600 hover:text-white transition">
                    Lihat Proposal
                </a>
            </div>
        </div>
        <div class="md:w-1/2">
            <img src="{{ asset('img/jantung.jpg') }}" alt="Ilustrasi Jantung" class="rounded-3xl shadow-2xl">
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="px-10 py-20 bg-black/10 backdrop-blur-lg">
        <h3 class="text-center text-3xl font-semibold mb-12 text-red-400">Layanan Sistem</h3>
        <div class="flex justify-center">
            <a href="/pasien" class="block hover:scale-105 transition">
                <div class="bg-white/5 rounded-2xl p-6 border border-white/10 hover:border-red-400">
                    <h4 class="text-xl font-bold mb-2 text-red-300">Prediksi Penyakit Jantung</h4>
                    <p class="text-gray-300 text-sm">
                        Berdasarkan usia, tekanan darah, kolesterol, dan faktor lainnya.
                    </p>
                </div>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="text-center py-10 border-t border-white/10 text-gray-400">
        &copy; {{ date('Y') }} Universitas Jember – Fakultas Ilmu Komputer
    </footer>

</body>

</html>
