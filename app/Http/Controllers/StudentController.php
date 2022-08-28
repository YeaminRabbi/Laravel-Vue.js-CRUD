<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function create()
    {
        $data= [
            'scope' => 'create'
        ];
        return view('student.form')->with($data);
    }
     public function store(Request $request)
     {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->section = $request->section;
        $student->class = $request->class;
        $student->save();

        return response()->json([
            'status'=>200,
            'message'=>'Student saved Successfully'
        ]);
     }
}
