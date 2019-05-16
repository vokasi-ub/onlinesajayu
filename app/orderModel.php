<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderModel extends Model
{
    //
    protected $table = 'order';
    protected $primaryKey = 'idOrder';
    protected $fillabel = ['idOrder','idProduk_fk','tgl_order','detail_order','jumlah_order','harga','total'];
    
    public function get_produk()
    {
        //join table dg tabel kategori berdsrkn id
        return $this->belongsTo(produkModel::class,'idProduk_fk','idProduk');
        
    }
    
}