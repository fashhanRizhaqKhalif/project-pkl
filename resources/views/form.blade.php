<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir-PKL Student</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href='img/favicon.ico' rel='shortcut icon'>
</head>
<body class="bg-gray-100">
    <main class="max-w-4xl mx-auto p-6">
        <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <div>
            <h1 class="text-center text-3xl font-bold mt-10">Formulir</h1>
        </div>
        <form name='data-pendaftaran-form'>
            <div class="space-y-12">
              <div class="border-b border-gray-900/10 pb-12">
                <div class="border-b border-gray-900/10 pb-12">
                  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                      <label for="email" class="block text-sm/6 font-medium text-gray-900">Email Aktif</label>
                      <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                      </div>
                    </div>
                    <div class="sm:col-span-6">
                      <label for="full-name" class="block text-sm/6 font-medium text-gray-900">Nama Lengkap</label>
                      <div class="mt-2">
                        <input type="text" name="nama" id="full-name" autocomplete="name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" style="width: calc(100% - 32px);">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                    <label for="institusi" class="block text-sm/6 font-medium text-gray-900">Nama Institusi</label>
                    <div class="mt-2">
                      <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6"></div>
                        <input type="text" name="institusi" id="institusi" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="sm:col-span-4">
                    <label for="nim" class="block text-sm/6 font-medium text-gray-900">NIM</label>
                    <div class="mt-2">
                      <input type="text" name="nim" id="nim" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
                  <div class="sm:col-span-6">
                    <label for="jurusan" class="block text-sm/6 font-medium text-gray-900">Jurusan/Program Studi</label>
                    <div class="mt-2">
                      <input type="text" name="jurusan" id="jurusan" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
                  <div class="sm:col-span-6">
                    <label for="semester" class="block text-sm/6 font-medium text-gray-900">Semester</label>
                    <div class="mt-2">
                      <input type="text" name="semester" id="semester" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
                  
                  <div class="sm:col-span-6">
                    <label for="alasan" class="block text-sm/6 font-medium text-gray-900">Alasan Pendaftaran</label>
                    <div class="mt-2">
                      <textarea name="alasan" id="alasan" rows="4" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Alasan anda ingin mendaftar di sini"></textarea>
                    </div>
                  </div>
                  
                  <div class="sm:col-span-3">
                    <label for="country" class="block text-sm/6 font-medium text-gray-900">Pilih Divisi PKL</label>
                    <div class="mt-2 grid grid-cols-1">
                      <select id="divisi" name="divisi" autocomplete="divisi-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option value="" disabled selected>Pilih Divisi</option>
                        <option>Divisi1</option>
                        <option>Divisi2</option>
                        <option>Divisi3</option>
                        <option>Divisi4</option>
                        <option>Divisi5</option>
                      </select>
                      <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>

                  
                  <div class="col-span-full">
                    <label for="foto" class="block text-sm/6 font-medium text-gray-900">Foto diri</label>
                    <div class="mt-2">
                      <input type="url" name="foto" id="foto" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Masukkan link foto diri">
                    </div>
                    <p class="mt-2 text-xs text-gray-500">
                      Upload foto Anda dalam format PDF ke Google Drive, lalu kirim linknya.<br>
                      <strong>Note:</strong> Pastikan Anda mengizinkan akses untuk public.
                    </p>
                  </div>


                  <div class="col-span-full">
                    <label for="link-surat" class="block text-sm/6 font-medium text-gray-900">Link Surat Pengantar</label>
                    <div class="mt-2">
                      <input type="url" name="pengantar" id="link-surat" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Masukkan link surat pengantar">
                    </div>
                    <p class="mt-2 text-xs text-gray-500">
                      Upload surat pengantar Anda dalam format PDF ke Google Drive, lalu kirim linknya.<br>
                      <strong>Note:</strong> Pastikan Anda mengizinkan akses untuk public.
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="mt-6 flex items-center gap-x-4">
              <!-- Kotak centang -->
              <input type="checkbox" id="confirmation-checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
              <label for="confirmation-checkbox" class="text-sm font-medium text-gray-700">
                Pastikan Anda sudah mengisi formulir dengan benar.
              </label>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
              <button type="button" onclick="history.back()" class="text-sm font-semibold text-gray-900">Batal</button>
              <button id="submit-button" type="submit" disabled class="rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm cursor-not-allowed">
                Kirim
              </button>
            </div>
          </form>
        </div>     
    </main>
</body>

<script>


const checkbox = document.getElementById('confirmation-checkbox');
const submitButton = document.getElementById('submit-button');
const form = document.forms['data-pendaftaran-form'];

// Get all required input fields
const requiredFields = [
  'email',
  'nama',
  'institusi',
  'nim',
  'jurusan',
  'semester',
  'alasan',
  'divisi',
  'foto',
  'pengantar'
];

// Function to check if all fields are filled
function checkFields() {
  let allFilled = true;
  
  // Check if all required fields have values
  requiredFields.forEach(fieldName => {
    const field = form[fieldName];
    if (!field.value.trim()) {
      allFilled = false;
    }
  });
  
  // Check if checkbox is checked
  if (!checkbox.checked) {
    allFilled = false;
  }
  
  // Enable/disable submit button based on validation
  if (allFilled) {
    submitButton.disabled = false;
    submitButton.classList.remove('bg-gray-400', 'cursor-not-allowed');
    submitButton.classList.add('bg-indigo-600', 'hover:bg-indigo-500');
  } else {
    submitButton.disabled = true;
    submitButton.classList.remove('bg-indigo-600', 'hover:bg-indigo-500');
    submitButton.classList.add('bg-gray-400', 'cursor-not-allowed');
  }
}

// Add event listeners to all form fields
requiredFields.forEach(fieldName => {
  const field = form[fieldName];
  field.addEventListener('input', checkFields);
});

// Add event listener to checkbox
checkbox.addEventListener('change', checkFields);

// Initial check when page loads
checkFields();

// Script untuk mengirim data ke Google Sheets
const scriptURL = 'https://script.google.com/macros/s/AKfycbxpCBkKTkuq_PCnefd21eUPrFXyok4CP3KQpt4b96GYXJ5-AgzfBhQW9TnP5YT3mT68/exec';

form.addEventListener('submit', e => {
  e.preventDefault();
  fetch(scriptURL, { method: 'POST', body: new FormData(form) })
    .then(response => {
      form.reset();
      console.log('Success!', response);
      alert('Pesan Anda berhasil terkirim!');
      // Reset form state after successful submission
      checkFields();
    })
    .catch(error => {
      console.error('Error!', error.message);
      alert('Terjadi kesalahan, coba lagi.');
    });
});
</script>
</html>
