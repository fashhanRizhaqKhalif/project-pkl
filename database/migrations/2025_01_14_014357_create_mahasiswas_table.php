<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            // $table->id();
            $table->string('email');
            $table->string('nama');
            $table->enum('jeniskelamin', ['laki-laki','perempuan']);
            $table->string('nama_institusi');
            $table->string('nim');
            $table->string('jurusan');
            $table->string('semester');
            $table->string('alasan');
            $table->string('divisi');
            $table->string('linkfoto');
            $table->string('linksurat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
