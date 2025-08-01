<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MemberController extends Controller
{
    public function dashboard(): View
    {
        return view('member.dashboard');
    }
}
