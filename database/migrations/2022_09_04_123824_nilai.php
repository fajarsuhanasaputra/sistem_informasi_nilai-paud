<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswa');
            $table->string('semester');
            $table->text('catatan')->nullable();
            $table->enum('moral_agama', ['selalu', 'kadang_kadang', 'jarang']);
            $table->enum('fisik', ['selalu', 'kadang_kadang', 'jarang']);
            $table->enum('bahasa', ['selalu', 'kadang_kadang', 'jarang']);
            $table->enum('kognitif', ['selalu', 'kadang_kadang', 'jarang']);
            $table->enum('sosial', ['selalu', 'kadang_kadang', 'jarang']);
            $table->enum('seni', ['selalu', 'kadang_kadang', 'jarang']);
            $table->enum('muatan_lokal', ['selalu', 'kadang_kadang', 'jarang']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai');
    }
};
