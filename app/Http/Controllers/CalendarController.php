<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class CalendarController extends Controller
{
    public function index(): View
    {
        return view('calendar.index');
    }

    public function events(): JsonResponse
    {
        return response()->json(
            Event::select(['id', 'title', 'start_at as start', 'end_at as end'])->get()
        );
    }
}
