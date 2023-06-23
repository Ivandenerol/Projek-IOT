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
        Schema::create('penjumlahans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl');
            // $table->integer('t_kerusakan')->nullable();
            $table->integer('sisa_gelas')->nullable();
            $table->integer('jumlah_box')->nullable();
            // $table->float('konversi_sisa_box', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjumlahans');
    }
};
