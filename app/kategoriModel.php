<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriModel extends Model
{
    //
    protected $table = 'kategori';
    protected $primaryKey = 'idKategory';
    protected $fillabel = ['idKategory','jenis_kategori'];
}