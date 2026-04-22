<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kategori_supplier', function (Blueprint $table) {
            $table->id(); // ← pastikan pakai $table->id() bukan $table->integer('id')
            $table->string('id_kategori')->unique();
            $table->string('nama_kategori')->unique();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kategori_supplier');
    }
};