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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ayam_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->integer('qty')->default(0);
            $table->integer('harga')->default(0);
            $table->timestamps();
            $table->foreign('ayam_id')->references('id')->on('ayam')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('transaksi_id')->references('id')->on('transaksi')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
