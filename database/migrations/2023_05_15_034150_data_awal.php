<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::dropIfExists('pic');
        Schema::create('pic', function(Blueprint $table){
            $table->id('IdPIC');
            $table->string('NamaPIC');
            $table->string('NomorPIC');
        });
        Schema::dropIfExists('paket');
        Schema::create('paket', function(Blueprint $table){
            $table->id('IdPaket');
            $table->string('Layanan');
            $table->string('NamaPaket');
            $table->string('Deskripsi');
            $table->integer('Harga');
            $table->float('Rating');
        });
        Schema::dropIfExists('customer');
        Schema::create('customer', function(Blueprint $table){
            $table->id('IdCust');
            $table->unsignedBigInteger('IdPIC');
            $table->string('NomorCust');
            $table->string('NamaSuami');
            $table->string('NamaIstri');
            $table->string('Lokasi');
            $table->string('Status');
            $table->dateTime('Tanggal');
            $table->foreign('IdPIC')->references('IdPIC')->on('pic');
        });
        Schema::dropIfExists('review');
        Schema::create('review', function(Blueprint $table){
            $table->id('IdReview');
            $table->unsignedBigInteger('IdPaket');
            $table->unsignedBigInteger('IdCust');
            $table->foreign('IdPaket')->references('IdPaket')->on('paket');
            $table->foreign('IdCust')->references('IdCust')->on('customer');
            $table->integer('Rating');
            $table->text('Feedback');
        });
        Schema::dropIfExists('transaksi');
        Schema::create('transaksi', function(Blueprint $table){
            $table->id('IdTrsk');
            $table->unsignedBigInteger('IdCust');
            $table->foreign('IdCust')->references('IdCust')->on('customer');
            $table->string('Jenis');
            $table->dateTime('Tanggal');
            $table->integer('Nominal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
