<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir PKL Student</title>
    <link href='img/favicon.ico' rel='shortcut icon'>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-600">
    <main class="max-w-4xl mx-auto p-6">
        <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
            <div>
                <h1 class="text-center text-3xl font-bold mt-10">Formulir Pendaftaran Magang Di PT PLN BELAWAN NUSANTARA</h1>
            </div>
            <form id="data-pendaftaran-form" action="/insertform" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-900">Email Aktif</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="full-name" class="block text-sm font-medium text-gray-900">Nama Lengkap</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="full-name" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="jeniskelamin" class="block text-sm font-medium text-gray-900">Jenis Kelamin</label>
                                <div class="mt-2 grid grid-cols-1">
                                    <select id="jeniskelamin" name="jeniskelamin" required
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="institusi" class="block text-sm font-medium text-gray-900">Nama Institusi</label>
                                <div class="mt-2">
                                    <input type="text" name="nama_institusi" id="institusi" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="nim" class="block text-sm font-medium text-gray-900">NIM</label>
                                <div class="mt-2">
                                    <input type="text" name="nim" id="nim" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="jurusan" class="block text-sm font-medium text-gray-900">Jurusan/Program Studi</label>
                                <div class="mt-2">
                                    <input type="text" name="jurusan" id="jurusan" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="semester" class="block text-sm font-medium text-gray-900">Semester</label>
                                <div class="mt-2">
                                    <input type="text" name="semester" id="semester" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="alasan" class="block text-sm font-medium text-gray-900">Alasan Pendaftaran</label>
                                <div class="mt-2">
                                    <textarea name="alasan" id="alasan" rows="4" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"
                                        placeholder="Alasan anda ingin mendaftar di sini"></textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="divisi" class="block text-sm font-medium text-gray-900">Pilih Divisi PKL</label>
                                <div class="mt-2 grid grid-cols-1">
                                    <select id="divisi" name="divisi" required
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                        <option value="" disabled selected>Pilih Divisi</option>
                                        <option>Divisi1</option>
                                        <option>Divisi2</option>
                                        <option>Divisi3</option>
                                        <option>Divisi4</option>
                                        <option>Divisi5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="foto" class="block text-sm font-medium text-gray-900">Foto diri</label>
                                <div class="mt-2">
                                    <input type="url" name="linkfoto" id="foto" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"
                                        placeholder="Masukkan link foto diri">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="link-surat" class="block text-sm font-medium text-gray-900">Link Surat Pengantar</label>
                                <div class="mt-2">
                                    <input type="url" name="linksurat" id="link-surat" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"
                                        placeholder="Masukkan link surat pengantar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center gap-x-4">
                    <input type="checkbox" id="confirmation-checkbox"
                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    <label for="confirmation-checkbox" class="text-sm font-medium text-gray-700">
                        Pastikan Anda sudah mengisi formulir dengan benar.
                    </label>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" onclick="history.back()"
                        class="text-sm font-semibold text-gray-900">Batal</button>
                    <button id="submit-button" type="submit "
                        class="rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm cursor-not-allowed">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </main>

    {{-- <script>
        const checkbox = document.getElementById('confirmation-checkbox');
        const submitButton = document.getElementById('submit-button');
        const form = document.getElementById('data-pendaftaran-form');

        // Daftar kolom yang diperlukan
        const requiredFields = [
            'email',
            'nama',
            'jeniskelamin',
            'nama_institusi',
            'nim',
            'jurusan',
            'semester',
            'alasan',
            'divisi',
            'linkfoto',
            'linksurat'
        ];

        // Fungsi untuk memeriksa apakah semua kolom diisi
        function checkFields() {
            let allFilled = true;

            // Periksa apakah semua kolom yang diperlukan memiliki nilai
            requiredFields.forEach(fieldName => {
                const field = form[fieldName];
                if (!field || !field.value.trim()) {
                    allFilled = false;
                }
            });

            // Periksa apakah kotak centang dicentang
            if (!checkbox.checked) {
                allFilled = false;
            }

            // Aktifkan/nonaktifkan tombol kirim berdasarkan validasi
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

        // Tambahkan event listener ke semua kolom formulir
        requiredFields.forEach(fieldName => {
            const field = form[fieldName];
            if (field) {
                field.addEventListener('input', checkFields);
            }
        });

        // Tambahkan event listener ke kotak centang
        checkbox.addEventListener('change', checkFields);

        // Periksa saat halaman dimuat
        checkFields();

        // Mencegah pengiriman formulir jika kolom yang diperlukan tidak diisi
        form.addEventListener('submit', e => {
            e.preventDefault(); // Mencegah pengiriman formulir secara default

            // Periksa apakah semua kolom yang diperlukan telah diisi
            let allFilled = true;
            requiredFields.forEach(fieldName => {
                const field = form[fieldName];
                if (!field || !field.value.trim()) {
                    allFilled = false;
                }
            });

            // Periksa apakah kotak centang dicentang
            if (!checkbox.checked) {
                allFilled = false;
            }

            if (!allFilled) {
                alert('Anda harus mengisi formulir ini.'); // Tampilkan pop-up
                return; // Hentikan pengiriman
            }

            // Jika semua kolom diisi, lanjutkan dengan pengiriman formulir
            const scriptURL = '/insertform'; // Ganti dengan URL yang sesuai
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Jika server mengembalikan JSON
                })
                .then(data => {
                    form.reset();
                    console.log('Success!', data);
                    alert('Pesan Anda berhasil terkirim!');
                    // Reset status formulir setelah pengiriman berhasil
                    checkFields();
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    alert('Terjadi kesalahan, coba lagi.');
                });
        });
    </script> --}}
</body>

</html>
