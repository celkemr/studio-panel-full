<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class InstructorController extends Controller
{
    public function dashboard(): View
    {
        return view('instructor.dashboard');
    }
}
