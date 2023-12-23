<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ayam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_ayam_id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('kode');
            $table->string('berat');
            $table->string('status');
            $table->decimal('usia');
            $table->text('deskripsi');
            $table->string('cover');
            $table->timestamps();
            $table->foreign('jenis_ayam_id')->references('id')->on('jenis_ayam')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kategori_id')->references('id')->on('kategori')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayam');
    }
};
