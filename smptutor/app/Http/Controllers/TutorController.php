<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    //
    public function tutor()
    {
        return view('tutor');
    }

    public function students()
    {
        return view('students');
    }

    public function modules()
    {
        return view('modules');
    }
}
