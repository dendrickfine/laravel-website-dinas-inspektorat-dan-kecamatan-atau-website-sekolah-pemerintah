<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->string('id_pengaduan')->primary();
            $table->string('nama');
            $table->text('slug');
            $table->string('nik');
            $table->text('alamat');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->string('instansi');
            $table->text('isi');
            $table->string('gambar_bukti');
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
        Schema::dropIfExists('pengaduan');
    }
}
