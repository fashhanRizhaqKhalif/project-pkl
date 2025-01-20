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
                <h1 class="text-center text-3xl font-bold mt-10">Edit Formulir Pendaftaran Magang Di PT PLN BELAWAN NUSANTARA</h1>
            </div>
            <form id="data-pendaftaran-form" action="/updateform/{{$data->nim}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-900">Email Aktif</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" value="{{ $data->email }}"   
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="full-name" class="block text-sm font-medium text-gray-900">Nama Lengkap</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="full-name" value="{{ $data->nama }}" 
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="jeniskelamin" class="block text-sm font-medium text-gray-900">Jenis Kelamin</label>
                                <div class="mt-2 grid grid-cols-1">
                                    <select id="jeniskelamin" name="jeniskelamin" 
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
                                        <option selected>{{ $data->jeniskelamin }}</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="institusi" class="block text-sm font-medium text-gray-900">Nama Institusi</label>
                                <div class="mt-2">
                                    <input type="text" name="nama_institusi" id="institusi" value="{{ $data->nama_institusi }}"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
                                </div>
                            </div>
            
                            <div class="sm:col-span-4">
                                <label for="nim" class="block text-sm font-medium text-gray-900">NIM</label>
                                <div class="mt-2">
                                    <input type="text" name="nim" id="nim" value="{{ $data->nim }}"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="jurusan" class="block text-sm font-medium text-gray-900">Jurusan/Program Studi</label>
                                <div class="mt-2">
                                    <input type="text" name="jurusan" id="jurusan" value="{{ $data->jurusan }}"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="semester" class="block text-sm font-medium text-gray-900">Semester</label>
                                <div class="mt-2">
                                    <input type="text" name="semester" id="semester" value="{{ $data->semester }}"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="alasan" class="block text-sm font-medium text-gray-900">Alasan Pendaftaran</label>
                                <div class="mt-2">
                                    <textarea name="alasan" id="alasan" rows="4" 
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"
                                        placeholder="Alasan anda ingin mendaftar di sini" required>{{ $data->alasan }}</textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="divisi" class="block text-sm font-medium text-gray-900">Pilih Divisi PKL</label>
                                <div class="mt-2 grid grid-cols-1">
                                    <select id="divisi" name="divisi" 
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
                                        <option selected>{{ $data->divisi }}</option>
                                        <option value="Divisi1">Divisi1</option>
                                        <option value="Divisi2">Divisi2</option>
                                        <option value="Divisi3">Divisi3</option>
                                        <option value="Divisi4">Divisi4</option>
                                        <option value="Divisi5">Divisi5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="foto" class="block text-sm font-medium text-gray-900">Foto diri</label>
                                <div class="mt-2">
                                    <input type="url" name="linkfoto" id="linkfoto" value="{{ $data->linkfoto }}"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"
                                        placeholder="Masukkan link foto diri" required>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="link-surat" class="block text-sm font-medium text-gray-900">Link Surat Pengantar</label>
                                <div class="mt- ```html
                                <div class="mt-2">
                                    <input type="url" name="linksurat" id="link-surat" value="{{ $data->linksurat }}"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"
                                        placeholder="Masukkan link surat pengantar" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" onclick="history.back()"
                        class="text-sm font-semibold text-gray-900">Batal</button>
                        <button id="submit-button" type="submit"
                        class="rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm" >
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </main>

    
</body>

</html>