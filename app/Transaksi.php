<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    public function user()
    {
        return $this->belongsTo(user::class,'id_user');
    }
}
