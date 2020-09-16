<?php


namespace App\Http\Services;


use App\Http\Repositories\StudentRepository;
use App\Student;
use Illuminate\Support\Facades\Storage;

class StudentService
{
    protected $studentRepo;
    public function __construct(StudentRepository $studentRepo)
    {
        $this->studentRepo=$studentRepo;
    }
    public function getAll()
    {
        return $this->studentRepo->getAll();
    }
    public function addStudent($request)
    {
        $student =new Student();
        if ($request->hasFile('image')) {
            $image =$request->file('image');
            $path = $image->store('image','public');
            $student->image=$path;
        }
        $student->name =$request->name;
        $student->email=$request->email;
        $student->dob=$request->dob;
        $student->gender=$request->gender;
        $student->class_room_id=$request->class_room_id;
        $this->studentRepo->save($student);
    }
    public function findId($id)
    {
        return $this->studentRepo->findId($id);
    }
    public function updateStudent($request,$id)
    {
        $student = $this->studentRepo->findId($id);
        if ($request->hasFile('image')) {
            $studentImg = $student->image;
            if ($studentImg) {
                Storage::delete('/public' . $studentImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $student->image = $path;
        }
        $student->name = $request->name;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->gender = $request->gender;
        $student->class_room_id = $request->class_room_id;
        $this->studentRepo->save($student);
    }
}
