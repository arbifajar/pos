<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembuatAkses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->engine = 'MyIsam';
            $table->increments('id');
            $table->string('name');
            $table->string('menu');
            $table->string('discount');
            $table->string('pegawai');
            $table->string('pelanggan');
            $table->string('laporan');
            $table->string('admin');
            $table->string('kasir');
            $table->string('kas');
            $table->string('toko');
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
        Schema::drop('permissions');
    }
}
