<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Specialist extends Model
{
    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
}
