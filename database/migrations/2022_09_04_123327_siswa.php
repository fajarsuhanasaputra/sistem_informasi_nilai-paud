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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nama_siswa');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('telepon');
            $table->text('alamat');
            $table->string('nama_wali');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->integer('angkatan');
            $table->string('poto');
            $table->string('username');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
