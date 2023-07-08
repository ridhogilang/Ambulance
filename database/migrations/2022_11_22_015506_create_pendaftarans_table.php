<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_organisasi');
            $table->string('nohp');
            $table->foreignId('jenis_id');
            $table->string('alamat');
            $table->string('link_alamat')->nullable();
            $table->string('nama_sopir');
            $table->string('kondisi');
            $table->string('image_in');
            $table->string('image_out');
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
        Schema::dropIfExists('pendaftarans');
    }
}