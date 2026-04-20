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
        Schema::create('tanaman_hias', function (Blueprint $table) {
        $table->id('id_tanaman');
        $table->string('nama_tanaman');
        $table->string('jenis_tanaman');
        $table->integer('harga');
        $table->integer('stok');
        $table->enum('ukuran', ['kecil', 'sedang']);
        $table->text('deskripsi')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanaman_hias');
    }
};
