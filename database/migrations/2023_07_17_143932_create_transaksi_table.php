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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->dateTime('tanggal')->useCurrent();
            $table->string('nomor');
            $table->string('nama');
            $table->string('alamat');
            $table->string('telp');
            $table->enum('status', ['pending', 'success', 'cancel'])->default('pending');
            $table->integer('total')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
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
