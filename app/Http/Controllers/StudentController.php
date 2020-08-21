<?php

namespace App\Http\Controllers;

use App\Http\Services\ClassService;
use App\Http\Services\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    protected $studentService;
    protected $classService;
    public function __construct(StudentService $studentService,ClassService $classService)
    {
        $this->studentService=$studentService;
        $this->classService=$classService;
    }
    public function index()
    {
        $classes = $this->classService->getAll();
        $students = $this->studentService->getAll();
        return view('layouts.students.list',compact('students','classes'));
    }
    public function create()
    {
        $classes = $this->classService->getAll();
        return view('layouts.students.create',compact('classes'));
    }
    public function store(Request $request)
    {
        $this->studentService->addStudent($request);
        Session::flash('success','Thêm mới học sinh thành công');
        return redirect()->route('students.index');

    }
}
