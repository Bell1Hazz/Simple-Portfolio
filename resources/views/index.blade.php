<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow p-4 fixed w-full z-10">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-600">Simple Portfolio</h1>
            <div>
                <a href="#about" class="mx-2 hover:text-blue-600">About</a>
                <a href="#projects" class="mx-2 hover:text-blue-600">Projects</a>
                <a href="#contact" class="mx-2 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto text-center py-20 mt-16" id="hero">
        <h2 class="text-3xl font-bold mb-2">Halo, Saya Dzaky</h2>
        <p class="text-gray-600 mb-4">Developer & Penulis Lagu Profesional</p>
        <a href="#contact" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Hubungi Saya</a>
    </section>

    <!-- About Section -->
    <section class="container mx-auto py-12" id="about">
        <h3 class="text-2xl font-bold mb-2 text-center">Tentang Saya</h3>
        <p class="max-w-xl mx-auto text-center text-gray-600">
            Saya Dzaky Perwira, fokus belajar software development dan aktif dalam musik. Senang membuat project kreatif dan bermanfaat.
        </p>
    </section>

    <!-- Projects Section -->
    <section class="container mx-auto py-12" id="projects">
        <h3 class="text-2xl font-bold mb-6 text-center">Project Saya</h3>
        <div class="grid md:grid-cols-3 gap-6 text-center">
            <div class="bg-white p-4 rounded border">
                <h4 class="font-semibold mb-1">Website Laravel</h4>
                <p class="text-gray-600 text-sm">CRUD sederhana dengan Laravel & Tailwind</p>
            </div>
            <div class="bg-white p-4 rounded border">
                <h4 class="font-semibold mb-1">Aplikasi Absensi</h4>
                <p class="text-gray-600 text-sm">Sistem absensi untuk sekolah</p>
            </div>
            <div class="bg-white p-4 rounded border">
                <h4 class="font-semibold mb-1">Rendang Ready-to-Eat</h4>
                <p class="text-gray-600 text-sm">Project e-commerce Randang Raso</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container mx-auto py-12" id="contact">
        <h3 class="text-2xl font-bold mb-4 text-center">Hubungi Saya</h3>
        <form class="max-w-md mx-auto space-y-4">
            <input type="text" placeholder="Nama" class="w-full border p-2 rounded">
            <input type="email" placeholder="Email" class="w-full border p-2 rounded">
            <textarea placeholder="Pesan" class="w-full border p-2 rounded"></textarea>
            <button class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Kirim Pesan</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        &copy; 2025 Dzaky Portfolio
    </footer>

</body>
</html>
