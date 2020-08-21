<?php

namespace App\Http\Controllers;

use App\Http\Services\ClassService;
use App\Http\Services\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    protected $classService;
    public function __construct(ClassService $classService)
    {
        $this->classService=$classService;
    }
    public function index(){
        $classes = $this->classService->getAll();
        return view('layouts.classes.list',compact('classes'));
    }
    public function create()
    {
        return view('layouts.classes.create');
    }
    public function store(Request $request)
    {
     $this->classService->addClass($request);
     Session::flash('success','Thêm mới thành công');
     return redirect()->route('classes.index');

    }

}
