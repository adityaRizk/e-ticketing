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
        Schema::create('rute', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('maskapai_id');
            $table->foreign('maskapai_id')->references('id')->on('maskapai');

            $table->date('tanggal_pergi');

            $table->string('rute_asal');

            $table->string('rute_tujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rute');
    }
};
