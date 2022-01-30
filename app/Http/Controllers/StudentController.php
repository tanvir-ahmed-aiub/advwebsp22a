<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create(){
        return view('student.create');
    }
    public function edit(){
        return view('student.edit');
    }
    public function delete(){
        //return view('student.create');
    }
    public function get(){
        $student = array
        (
            "name" => "Sabbir",
            "id" => 1223,
            "dob" => "12.1.2012"
        );
        $student = (object) $student;
        $sum = 12+13;
        return view('student.get')
        ->with('student',$student)
        ->with('sum',$sum);
    }
    
}
