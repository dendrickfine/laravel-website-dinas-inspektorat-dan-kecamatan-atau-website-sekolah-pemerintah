<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbs', function (Blueprint $table) {
            $table->string('id_wbs')->primary();
            $table->string('nama_pelapor');
            $table->text('slug');
            $table->string('email');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('instansi');
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->string('gambar_ktp');
            $table->string('nama_pegawai');
            $table->string('unit_kerja');
            $table->string('materi');
            $table->text('jenis_pelanggaran');
            $table->text('kerugian');
            $table->text('permintaan');
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
        Schema::dropIfExists('wbs');
    }
}
