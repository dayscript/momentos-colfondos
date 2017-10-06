<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function activities()
    {
        return $this->belongsToMany('App\Models\Activity', 'employees_activities');
    }

    public function getFullNameAttribute($value)
    {
    	return $this->attributes['name'] .' '. $this->attributes['lastname'];
    }
}
