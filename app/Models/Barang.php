<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public function jenisbarang()
    {
        return $this->belongsTo('App\Models\Jenisbarang','jenisbarang_id','id');
    }
}
