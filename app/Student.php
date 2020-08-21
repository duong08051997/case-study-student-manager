<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function classRoom()
    {
        return $this->belongsToMany('App\ClassRoom');
    }
    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}
