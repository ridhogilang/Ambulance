<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawans', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->foreignId('lokasi_id');
            $table->string('nomor');
            $table->string('alamat')->nullable();
            $table->string('link_alamat')->nullable();
            $table->foreignId('jenis_id');
            $table->string('vertifikasi');
            $table->string('via_vertifikasi');
            $table->string('plat_nomor');
            $table->string('kondisi_mobil');
            $table->string('foto_dalam');
            $table->string('foto_luar');
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
        Schema::dropIfExists('relawans');
    }
}