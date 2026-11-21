<?php

use App\Http\Controllers\StudentController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
