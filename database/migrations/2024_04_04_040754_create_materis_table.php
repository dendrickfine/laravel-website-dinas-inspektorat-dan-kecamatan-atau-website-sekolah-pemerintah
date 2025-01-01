<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->string('id_materi')->primary();
            $table->string('judul_materi');
            $table->text('slug');
            $table->text('link');
            $table->string('id_playlist');
            $table->text('deskripsi');
            $table->integer('is_active');
            $table->text('gambar_materi');
            $table->timestamps();

            $table->foreign('id_playlist')->references('id_playlist')->on('playlist')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materi');
    }
}
