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
            $table->string('kode_transaksi')->unique();
            $table->bigInteger('nama_konsumen')->unsigned();
            $table->bigInteger('jenis_cuci')->unsigned();
            $table->date('tgl_transaksi');
            $table->date('tgl_pengambilan');
            $table->integer('kilogram');
            $table->integer('harga');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('nama_konsumen')->references('id')->on('data_pembeli')
            ->onDelete('cascade')->onUpdate('cascade');
          });

          Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('jenis_cuci')->references('id')->on('jenis_laundry')
            ->onDelete('cascade')->onUpdate('cascade');
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
