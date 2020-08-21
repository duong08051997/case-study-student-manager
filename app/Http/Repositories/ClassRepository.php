<?php
namespace App\Http\Repositories;

use App\ClassRoom;

class ClassRepository
{
    protected $class;
    public function __construct(ClassRoom $class)
    {
        $this->class=$class;
    }
    public function getAll()
    {
        return $this->class->paginate(5);
    }
    public function save($class)
    {
        $class->save();
    }

}
