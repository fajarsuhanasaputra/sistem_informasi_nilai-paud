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
        Schema::create('nilai_siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('poin_id');
            $table->index('poin_id');
            $table->foreign('poin_id')->references('id')->on('poin_aspek')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('semester');
            $table->integer('awal_ajaran');
            $table->integer('akhir_ajaran');
            $table->enum('nilai', ['mb','bsh', 'bsb']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_siswa');
    }
};