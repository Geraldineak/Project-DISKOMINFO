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
        Schema::create('kontak', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('jabatan'); //INI COMBOBOX
            $table->string('departemen'); //INI COMBOBOX
            $table->string('username');
            $table->primary('username');
            $table->string('password')->bcrypt('secret');
            $table->timestamps();
        });

        Schema::table('users', function($table) {
            $table->foreign('username')
            ->references('username')
            ->on('kontak')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_kontaks');
    }
}
