<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RumahSakit extends Model
{
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
