<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();
        return match ($user->role->name ?? null) {
            'admin' => redirect()->route('admin.dashboard'),
            'instructor' => redirect()->route('instructor.dashboard'),
            default => redirect()->route('member.dashboard'),
        };
    })->name('dashboard');

    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('/events', [CalendarController::class, 'events'])->name('events');
    Route::resource('courses', CourseController::class)->only(['index', 'create', 'store']);

    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/instructor', [InstructorController::class, 'dashboard'])->name('instructor.dashboard');
    Route::get('/member', [MemberController::class, 'dashboard'])->name('member.dashboard');
});
