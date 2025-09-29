<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    a { text-decoration: none; }
    .nav-link:hover { color: #0d6efd; }
  </style>
</head>
<body>
  <div class="container mt-5">
    <header class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h4">Simple Portfolio</h1>
      <div>
        <!-- Gunakan route() supaya link bekerja walau bukan file statis -->
        <a href="{{ route('about') }}" class="mx-2 nav-link">About</a>
        <a href="{{ route('contact') }}" class="mx-2 nav-link">Contact</a>
      </div>
    </header>

    <main>
      <p>Selamat datang di Simple Portfolio. Klik About atau Contact di pojok kanan untuk informasi lebih lanjut.</p>
      <!-- contoh konten -->
      <div class="card mt-3">
        <div class="card-body">
          <h5 class="card-title">Proyek Terbaru</h5>
          <p class="card-text">Tampilkan ringkasan project, link GitHub, atau screenshot di sini.</p>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
