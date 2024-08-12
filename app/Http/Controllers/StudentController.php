<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function viewForm()
    {
        return view('home');
    }

    public function addStudent(Request $request)
    {
        dd($request->all());
    }
}
