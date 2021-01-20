<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'nama','harga','deskripsi','id_user','gambar1','gambar2','gambar3'
    ];
}
