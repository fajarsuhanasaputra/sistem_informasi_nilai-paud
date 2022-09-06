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
        Schema::create('poin_aspek', function (Blueprint $table) {
            $table->id();
            $table->string('nama_poin');
            $table->unsignedBigInteger('aspek_id');
            $table->index('aspek_id');
            $table->foreign('aspek_id')->references('id')->on('aspek')->onDelete('cascade');
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
        Schema::dropIfExists('poin_aspek');
    }
};