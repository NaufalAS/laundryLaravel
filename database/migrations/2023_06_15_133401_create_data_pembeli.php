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
        Schema::create('data_pembeli', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pemebeli')->unique();
            $table->string('nama_pembeli');
            $table->string('alamat');
            $table->bigInteger('id_jenis_kelamin')->unsigned();
            $table->timestamps();
        });

        Schema::table('data_pembeli', function (Blueprint $table) {
            $table->foreign('id_jenis_kelamin')->references('id') ->on('jenis_kelamin')
            ->onDelete('cascade')->onUpdate('cascade');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembeli');
    }
};
