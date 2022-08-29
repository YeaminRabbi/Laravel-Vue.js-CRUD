<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students');
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->section = $request->section;
        $student->class = $request->class;
        $student->save();

        return response()->json([
            'status' => 200,
            'message' => 'Student updated Successfully'
        ]);
    }
    public function editData($id){
        $student = Student::find($id);
        return response()->json([
            'status'=>200,
            'data'=>$student,
        ]);
    }

    public function edit($id)
    {
        $data = [
            'scope' => 'edit',
            'id' => $id
        ];
        return view('student.form')->with($data);
    }


    public function fetchstudentData()
    {
        return Student::orderBy('id','ASC')->get();
    }
    public function index()
    {
        return view('student.view');
    }
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
