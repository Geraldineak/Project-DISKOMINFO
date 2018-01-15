<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelKontaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('kontak');
        Schema::create('kontak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');//kolom barunya
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('jabatan'); //INI COMBOBOX
            $table->string('departemen'); //INI COMBOBOX
            $table->string('username');
            $table->string('password')->bcrypt('secret');
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
        Schema::dropIfExists('kontak');
    }
}
