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
        return response()->json([
            'status' => 200,
            'message' => 'Student deleted Successfully!'
        ]);
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


    public function fetchstudentData(Request $request)
    {
        $query = Student::select('id','name','email','class','section');
        
        if($request->searchQuery){
            $query->where(function ($q) use ($request){
                $q->orWhere('name','like', '%'. $request->searchQuery.'%');
                $q->orWhere('class','like', '%'. $request->searchQuery.'%');
                $q->orWhere('email', 'like', '%' . $request->searchQuery . '%');
                $q->orWhere('section', 'like', '%' . $request->searchQuery . '%');
            });
        }
        $students = $query->get();
        return $students;
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
