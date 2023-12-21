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
            $table->string('jenis_ayam_id');
            $table->string('kode_ayam');
            $table->string('berat');
            $table->string('status');
            $table->decimal('usia');
            $table->string('kategori_id');
            $table->string('deskripsi');
            $table->text('cover');


            $table->timestamps();
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
