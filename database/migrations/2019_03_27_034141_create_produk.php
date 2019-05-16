<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('produk',function (Blueprint $table){
            $table->bigIncrements('idProduk');
            $table->integer('idKategory_fk');
            $table->string('nama_produk');
            $table->string('gambar');
            $table->string('size');
            $table->string('warna');
            $table->text('deskripsi_produk');
            $table->string('stok_produk');
            $table->string('harga_produk');
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
        Schema::dropIfExists('produk');
    }
}
