<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dosen', function (Blueprint $table) {
            $table->id(); // Kolom id dengan tipe data id() untuk auto-increment
            $table->string('nip', 20);
            $table->string('nama_dosen', 20);
            $table->string('foto_dosen', 50)->nullable();
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
        Schema::dropIfExists('tb_dosen');
    }
}
