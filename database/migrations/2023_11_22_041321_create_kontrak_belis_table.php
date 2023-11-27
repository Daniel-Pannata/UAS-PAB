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
        Schema::create('kontrak_belis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('no_kontrak');
            $table->integer('id_pks');
            $table->integer('mt');
            $table->integer('harga');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontrak_belis');
    }
};
