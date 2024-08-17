<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    //

    public function viewForm()
    {
        $students = Student::all();
        return view('home', compact('students'));
    }

    public function addStudent(Request $request)
    {
        // dd($request->all());

        Student::create($request->all());
        return redirect()->route('home')->with('message', 'Student created Successfully');
    }

    public function editStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('home')->with('message', 'Student updated Successfully');
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('home')->with('message', 'Student deleted Successfully');
    }
}
