<?php


namespace App\Http\Repositories;


use App\Student;

class StudentRepository
{
    protected $student;
    public function __construct(Student $student)
    {
        $this->student=$student;
    }
    public function getAll()
    {
        return $this->student->orderBy('id','DESC')->get();
    }

    public function save($student)
    {
        $student->save();
    }
    public function findId($id)
    {
        return $this->student->findOrFail($id);
    }
}
