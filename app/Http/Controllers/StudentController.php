<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

function show(){
    return view("student.view");
}



    function index(Request $request){
        $students=Student::all();

        // dd($students);
        return view('student.view',["students"=>$students]);
}

public function studentFormShow(){

    return view("student.stuentForm");
}

public function create(Request $request)
    {
        // dd($request->file("image"));
        $Student = new student;

        $Student->name= $request->name;
        $Student->email = $request->email;
        $Student->st_image = $request->st_image;


        $Student->save();

        return redirect(route('index'));
    }


    public function dlt($id){
      $students=new student;
      $students->find($id)->delete();
      return redirect()->back();
    }

    public function showEditForm(){
        return view('student.editForm');
    }


    public function edit(Request $request,$id){
        $student=student::find($id);
        return view('student.editForm',["student"=>$student]);
    }
    public function update(Request $request,$id){
        $student=student::find($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
        return redirect(route('index'));

    }


}
