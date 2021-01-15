<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Jadwal extends Model
{
	public function rumahSakit()
	{
	    return $this->belongsTo(RumahSakit::class, 'rumah_sakit_id', 'id');
	}

    public function doctor()
	{
	    return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
	}
}
