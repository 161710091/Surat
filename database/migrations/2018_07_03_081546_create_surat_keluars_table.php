<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_suratk');
            $table->date('tgl_suratk');
            $table->string('pengirimk');
            $table->string('perihalk');
            $table->unsignedinteger('id_disposisi');
            $table->foreign('id_disposisi')->references('id')->on('disposisis')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('ket_disposisik');
            $table->string('filek');
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
        Schema::dropIfExists('surat_keluars');
    }
}