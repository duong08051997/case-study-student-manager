<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    public function classRoom()
    {
        return $this->belongsToMany('App\ClassRoom');
    }
    use SoftDeletes;
    protected $dates =['deleted_at'];
    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}
