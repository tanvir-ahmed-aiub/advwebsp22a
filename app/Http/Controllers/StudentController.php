<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function create(){
        return view('student.create');
    }
    public function edit(){
        //Id from request
        //retrieve object from elquent
        //pass the object to view
        //show db value in form
        return view('student.edit');
    }
    public function editSubmit(){
        //do validations
        //retrieve object from DB using id
        //reinitiate db properties/columns with req values
        //object->save();
    }
    public function delete(){
        //object->delete();
        //return view('student.create');
    }
    public function get(Request $req){
       
        //select * from students_info where id= $req->id
        $student = Student::where('id','=',decrypt($req->id))
        ->select('name','id','dob','d_id')
        ->first();

        $sum = 12+13;
        return view('student.get')
        ->with('student',$student)
        ->with('sum',$sum);
    }
    public function list(){

        //select * from students_info
        /*$students = Student::
        whereBetween('cgpa',[3.00,3.75])
        ->get(); */
        /*$students = Student::where('cgpa', '>=', 3.75)
        ->orWhere('cgpa','<=',3.2)
        ->get();*/
        /*$students = Student::where('name','like','%kk%')->get();*/
        $students = Student::all();
        //return $students;       
        return view('student.list')
        ->with('students',$students);
    }
}
