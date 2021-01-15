<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisbarang extends Model
{
    use HasFactory;

    public function produks()
    {
        return $this->hasMany('App\Models\Barang','jenisbarang_id','id');
    }
}
