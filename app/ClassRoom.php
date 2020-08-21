<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ClassRoom extends Model
{
    public function student()
    {
        return $this->hasMany('App\Student');
    }
}
