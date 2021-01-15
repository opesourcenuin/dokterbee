<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Doctor extends Model
{
    public function specialist()
	{
	    return $this->belongsTo(Specialist::class, 'spesialis_id', 'id');
	}

	public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id');
    }
}
