<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function employees()
    {
        return $this->belongsToMany('App\Models\Employee', 'employees_activities');
    }
}
