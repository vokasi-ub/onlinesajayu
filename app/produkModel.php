<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategoriModel;

class produkModel extends Model
{
    //
    protected $table = 'produk';
    protected $primaryKey = 'idProduk';
    protected $fillabel = ['idProduk','idKategory_fk','nama_produk','gambar','size','warna','deskripsi_produk','stok_produk','harga_produk'];
    
      public function get_kategori()
    {
        //join table dg tabel kategori berdsrkn id
        return $this->belongsTo(kategoriModel::class,'idKategory_fk','idKategory');
        
    }
}