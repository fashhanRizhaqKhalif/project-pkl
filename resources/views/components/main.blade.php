<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
  <main class="relative slideshow-bg h-screen flex items-center justify-center">
    <!-- Overlay untuk efek gelap -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <!-- Konten Tetap -->
    <div class="relative text-center z-10">
      <!-- Ukuran teks judul dikurangi -->
      <h1 class="text-balance text-3xl font-semibold tracking-tight text-white sm:text-5xl">
        PLN Belawan - Providing <br> Information For PKL Student
      </h1>
      <!-- Ukuran paragraf dikurangi -->
      <p class="mt-8 text-pretty text-base font-medium text-gray-300 sm:text-lg/6">
        lengkapi formulir jaka ingin mendaftar praktik kerja lapangan di PLN Belawan
      </p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="/form" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Isi Formulir
        </a>
        <a href="#" class="text-sm font-semibold text-gray-200 hover:text-gray-100">
          Selengkapnya <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </main>
</body>
</html>
