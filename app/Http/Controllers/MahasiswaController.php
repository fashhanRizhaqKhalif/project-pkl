<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();
        return view("data", compact('data'));
    }

    public function tambahform() {
        return view('form');
    }

    public function insertform(Request $request) {
        // Validasi data yang diterima
        $request->validate([
            'nim' => 'required|string|unique:mahasiswa,nim', // Pastikan NIM unik
            'email' => 'required|email',
            'nama' => 'required|string|max:255',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data mahasiswa
        Mahasiswa::create($request->all());

        return redirect()->route('home')->with('success', 'Form Berhasil Dikirim');
    }

    public function tampilform($nim) {
        // Mengambil data mahasiswa berdasarkan NIM
        $data = Mahasiswa::where('nim', $nim)->first(); // Menggunakan where untuk mencari berdasarkan NIM

        // Jika data tidak ditemukan, redirect dengan pesan error
        if (!$data) {
            return redirect()->route('home')->with('error', 'Mahasiswa tidak ditemukan');
        }

        return view('tampilform', compact('data'));
    }
    // public function updateform (Request $request, $nim) {
    //     $data=Mahasiswa::find( $nim);
    //     $data->update( $request->all() );
    //     return redirect()->route('data')->with('success', 'Form Berhasil diupdate ');
    // }
    public function updateform(Request $request, $nim) {
        // Validasi data yang diterima
        $request->validate([
            'email' => 'required|email',
            'nama' => 'required|string|max:255',
            'jeniskelamin' => 'required|string',
            'nama_institusi' => 'required|string',
            'nim' => 'required|string',
            'jurusan' => 'required|string',
            'semester' => 'required|string',
            'alasan' => 'required|string',
            'divisi' => 'required|string',
            'linkfoto' => 'required|url',
            'linksurat' => 'required|url',
        ]);
    
        // Temukan mahasiswa berdasarkan NIM dan perbarui datanya
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        if ($mahasiswa) {
            $mahasiswa->update($request->all());
        }
    
        // Redirect ke halaman data dengan pesan sukses
        return redirect()->route('data')->with('success', 'Data berhasil diperbarui');
    }
    public function delete($id) {
        $data = Mahasiswa::find($id);
    
        // Periksa apakah data ditemukan
        if ($data) {
            $data->delete();
            return redirect()->route('data')->with('success', 'Data berhasil dihapus');
        }
    
        // Jika data tidak ditemukan, redirect dengan pesan error
        return redirect()->route('data')->with('error', 'Data tidak ditemukan');
    }
}