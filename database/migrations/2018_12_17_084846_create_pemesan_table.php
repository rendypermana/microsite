<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesan', function (Blueprint $table) {
            $table->increments('id_pemesan');
            $table->string('ps_nama');
            $table->string('ps_no_hp');
            $table->string('ps_email');
            $table->string('tt_nama');
            $table->string('tt_no_hp');
            $table->string('tt_email');
            $table->string('jenis_kelamin');
            $table->string('tgl_lahir');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kewarganegaraan');
            $table->string('no_id');
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
        Schema::dropIfExists('pemesan');
    }
}
