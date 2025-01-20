<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
</head>

<body>
    <h1 class="text-center mb-4">Data Mahasiswa</h1>
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Email Aktif</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Nama Institusi</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jurusan/Program Studi</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Alasan Pendaftaran</th>
                        <th scope="col">Divisi PKL</th>
                        <th scope="col">Link Foto Diri</th>
                        <th scope="col">Link Surat Pengantar</th>
                        <th scope="col">Waktu Masuk Form</th>
                        <th scope="col" colspan="2" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr class="text-center">
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>{{ $row->nama_institusi }}</td>
                        <td>{{ $row->nim }}</td>
                        <td>{{ $row->jurusan }}</td>
                        <td>{{ $row->semester }}</td>
                        <td>{{ $row->alasan }}</td>
                        <td>{{ $row->divisi }}</td>
                        <td><a href="{{ $row->linkfoto }}" target="_blank">Lihat Foto</a></td>
                        <td><a href="{{ $row->linksurat }}" target="_blank">Lihat Surat</a></td>
                        <td>{{ $row->created_at ? $row->created_at->format('d-m-Y H:i') : 'Tidak tersedia' }}</td>
                        <td>
                            <a href="/tampilform/{{$row->nim}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="/delete/{{$row->nim}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete(this)">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        function confirmDelete(button) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                button.parentElement.submit(); // Mengirimkan formulir
            }
        }
    </script>
</body>

</html>