<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormPermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_permohonans', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nama');
            $table->string('image');
            $table->string('nohp');
            $table->foreignId('jenis_id');
            $table->string('namapasien')->nullable();
            $table->string('almarhum')->nullable();
            $table->string('alamat');
            $table->string('rtrw');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('umur')->nullable();
            $table->string('infeksius')->nullable();
            $table->string('penyakit')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('status')->nullable();
            $table->string('prokes')->nullable();
            $table->string('makam')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('antar')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('pukul')->nullable();
            $table->string('lain')->nullable();
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
        Schema::dropIfExists('form_permohonans');
    }
}