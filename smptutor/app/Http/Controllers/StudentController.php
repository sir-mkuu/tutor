<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function student()
    {
        return view('student');
    }
    public function dash()
    {
        return view('dash');
    }
}
