<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('students.Index',compact('students'))
            ->with('i', (request()->input('page', 1)- 1) * 5);
    }

    public function create()
    {
        return view('students.Create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'studentname' => 'required',
            'studentid' => 'required',
            'studentsection' => 'required',
            'studentdept' => 'required',
            'studentbase' => 'required',
            'studentexamterm' => 'required',
            'studentpayment' => 'required',
        ]);
        Student::create($request->all());

        return redirect()->route('students.Index')
            ->with('success','Students created successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }
    
    public function edit(Student $student)
    {
        return view('students.Edit',compact('student'));
    }

    
    public function update(Request $request, Student $student)
    {
        $request->validate([
        
            ]);
            $student->update($request->all());
            return redirect()->route('students.Index')
                ->with('success','Student update successfully');
    }

    
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.Index')
            ->with('success','Student delete successfully');
    }

}
