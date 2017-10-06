<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $timestamps = false;

    public function getFullNameAttribute($value)
    {
    	return $this->attributes['name'] .' '. $this->attributes['lastname'];
    }
}
