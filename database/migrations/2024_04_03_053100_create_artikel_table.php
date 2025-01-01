<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->string('id_artikel')->primary();
            $table->string('judul');
            $table->text('slug');
            $table->text('body');
            $table->string('id_kategori'); // Harus sesuai tipe dengan tabel kategori
            $table->unsignedBigInteger('id_user'); // Foreign key id_user
            $table->string('gambar_artikel');
            $table->boolean('is_active');
            $table->integer('views');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
