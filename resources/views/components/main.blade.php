<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
  <style>
    [x-cloak] {
      display: none !important;
    }
    /* Hilangkan scrollbar dari isi pop-up */
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none; /* IE and Edge */
      scrollbar-width: none; /* Firefox */
    }
  </style>
</head>
<body>
  <main class="relative slideshow-bg h-screen flex items-center justify-center" x-data="{ open: false }">
    <!-- Overlay untuk efek gelap -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <!-- Konten Tetap -->
    <div class="relative text-center z-10">
      <h1 class="text-balance text-3xl font-semibold tracking-tight text-white sm:text-5xl">
        PLN Belawan - Menyediakan <br> Informasi PKL Mahasiswa
      </h1>
      <p class="mt-8 text-pretty text-base font-medium text-gray-300 sm:text-lg/6">
        Lengkapi formulir jika ingin mendaftar praktik kerja lapangan di PLN Belawan
      </p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="/form" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Isi Formulir
        </a>
        <!-- Tombol Selengkapnya -->
        <a href="" class="text-sm font-semibold text-gray-200 hover:text-gray-100" @click.prevent="open = true">
          Ketentuannya <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>

    <!-- Pop-Up Ketentuan -->
    <div x-show="open" x-cloak x-transition class="fixed inset-0 flex items-center justify-center z-50">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-black bg-opacity-50" @click="open = false"></div>
      <!-- Konten Pop-Up -->
      <div class="relative bg-white rounded-lg shadow-lg w-4/5 sm:w-2/3 max-h-3/4 overflow-hidden z-50">
        <!-- Header Pop-Up -->
        <div class="px-6 py-4 border-b border-gray-300">
          <h2 class="text-xl font-bold text-gray-800 text-center">KETENTUAN</h2>
        </div>
        <!-- Isi Ketentuan -->
        <div class="px-6 py-4 overflow-y-auto max-h-60 no-scrollbar">
          <a class=" space-y-2 text-sm text-gray-700">Setelah diterima, ketentuan berikut wajib dipatuhi oleh mahasiswa/i yang akan menjalani PKL di PT PLN Nusantara Power UP Belawan. Harap diperhatikan dengan seksama.</a>
          
          <ul class="list-decimal pl-5 space-y-2 text-sm text-gray-700">
            <br>
            <li>Mahasiswa/i wajib membawa sendiri Alat Pelindung Diri (safety helmet dan safety shoes).</li>
            <li>Mahasiswa/i tidak diperkenankan naik angkutan umum selama magang di PLN UP Belawan.</li>
            <li>Mahasiswa/i wajib mengikuti Standar Prosedur Pelaksanaan Magang Mahasiswa di PT PLN Nusantara Power UP Belawan.</li>
            <li>Mahasiswa/i wajib menyetarakan BPJS Kesehatan atau asuransi kesehatan lainnya.</li>
            <li>Mahasiswa/i wajib menyertakan riwayat penyakit setahun terakhir.</li>
            <br>
          </ul>
          <a class=" space-y-2 text-sm text-gray-700">Demikian disampaikan untuk dapat diketahui, atas perhatiannya diucapkan terimmakasih.</a>
        </div>
        <!-- Footer Pop-Up -->
        <div class="flex justify-end px-6 py-4 border-t border-gray-300">
          <button @click="open = false" class="bg-blue-600 text-white px-3 py-1 rounded-md shadow-md text-sm hover:bg-blue-500 focus:outline-none">
            Mengerti
          </button>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
