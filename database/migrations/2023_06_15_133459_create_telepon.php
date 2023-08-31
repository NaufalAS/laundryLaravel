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
        Schema::create('telepon', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('nomor_telepon');
            $table->timestamps();
        });

        Schema::table('telepon', function (Blueprint $table) {
            $table->foreign('id')->references('id') ->on('data_pembeli')
            ->onDelete('cascade')->onUpdate('cascade');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telepon');
    }
};
