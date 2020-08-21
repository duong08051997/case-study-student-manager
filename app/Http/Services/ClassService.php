<?php

namespace App\Http\Services;
use App\ClassRoom;
use App\Http\Repositories\ClassRepository;

class ClassService
{
    protected $classRepo;
    public function __construct(ClassRepository $classRepo)
    {
        $this->classRepo=$classRepo;
    }
    public function getAll()
    {
        return $this->classRepo->getAll();
    }
    public function addClass($request)
    {
        $class = new ClassRoom();
        $class->name = $request->name;
        $class->status=$request->status;
        $this->classRepo->save($class);
    }



}
