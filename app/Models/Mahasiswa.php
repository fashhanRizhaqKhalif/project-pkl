<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Mengizinkan semua kolom untuk diisi
    protected $guarded = [];

    // Menentukan kolom yang harus diperlakukan sebagai tanggal
    protected $dates = ['created_at'];

    // Mengatur NIM sebagai primary key
    protected $primaryKey = 'nim'; // Ganti 'nim' dengan nama kolom yang Anda gunakan
    public $incrementing = false; // NIM bukan auto-increment
    protected $keyType = 'string'; // Jika NIM adalah string
}