<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('review');
        Schema::dropIfExists('customer');
        Schema::dropIfExists('paket');
        Schema::dropIfExists('pic');

        Schema::create('pic', function(Blueprint $table){
            $table->id('IdPIC');
            $table->string('NamaPIC')->nullable();
            $table->string('NomorPIC')->nullable();
        });
        Schema::create('paket', function(Blueprint $table){
            $table->id('IdPaket');
            $table->string('Layanan')->nullable();
            $table->string('NamaPaket')->nullable();
            $table->string('Deskripsi')->nullable();
            $table->integer('Harga')->nullable();
        });
        Schema::create('customer', function(Blueprint $table){
            $table->id('IdCust');
            $table->unsignedBigInteger('IdPIC');
            $table->string('NomorCust')->nullable();
            $table->string('NamaSuami')->nullable();
            $table->string('NamaIstri')->nullable();
            $table->string('Lokasi')->nullable();
            $table->string('Status');
            $table->string('Tanggal')->nullable();
            $table->foreign('IdPIC')->references('IdPIC')->on('pic');
        });
        Schema::create('transaksi', function(Blueprint $table){
            $table->id('IdTrsk');
            $table->unsignedBigInteger('IdCust');
            $table->foreign('IdCust')->references('IdCust')->on('customer');
            $table->string('Jenis');
            $table->dateTime('Tanggal');
            $table->integer('Nominal');
        });

        Schema::create('customer_paket', function (Blueprint $table){
            $table->id('IdCustPaket');
            $table->unsignedBigInteger('IdCust');
            $table->unsignedBigInteger('IdPaket');
            $table->foreign('IdCust')->references('IdCust')->on('customer');
            $table->foreign('IdPaket')->references('IdPaket')->on('paket');
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
