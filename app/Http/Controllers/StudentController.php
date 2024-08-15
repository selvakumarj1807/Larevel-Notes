<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    //

    public function viewForm()
    {
        return view('home');
    }

    public function addStudent(Request $request)
    {
        // dd($request->all());

        Student::create($request->all());
    }
}
