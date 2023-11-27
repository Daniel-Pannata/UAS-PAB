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
        Schema::create('muat_bongkars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kontrakbeli');
            $table->integer('id_kontrakjual');
            $table->string('truk');
            $table->date('tanggalmuat');
            $table->date('tanggalbongkar');
            $table->integer('muat');
            $table->integer('bongkar');
            $table->integer('susut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('muat_bongkars');
    }
};
