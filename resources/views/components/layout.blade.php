<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Prediksi Penyakit Jantung' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white font-sans">

    {{-- Futuristic Navbar --}}
    <nav class="flex justify-between items-center px-10 py-6 backdrop-blur-md bg-white/5 border-b border-white/10">
        <h1 class="text-2xl font-bold tracking-wide text-red-400">Sistem Prediksi Jantung</h1>
        <ul class="flex gap-6 text-sm font-medium">
            <li><a href="/" class="hover:text-red-400 transition">Home</a></li>
            <li><a href="#services" class="hover:text-cyan-400 transition">Services</a></li>
            <li><a href="#about" class="hover:text-cyan-400 transition">About</a></li>
            <li><a href="#contact" class="hover:text-cyan-400 transition">Contact</a></li>
        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>

</body>
</html>
