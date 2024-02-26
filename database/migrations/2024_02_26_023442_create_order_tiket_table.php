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
        Schema::create('order_tiket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_id');
            $table->foreign('detail_id')->references('id')->on('order_detail');
            $table->date('tanggal_transaksi');
            $table->string('struk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_tiket');
    }
};
