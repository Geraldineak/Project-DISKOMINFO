<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelLaporanKasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('kasi');
        Schema::create('kasi', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('judul_laporan');
            $table->string('pengirim');
            $table->string('no_karyawan');
            $table->string('status');
            $table->string('opsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasi');
    }
}
