<?php

namespace App\Http\Controllers;

use App\User;
use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('courses.index', [
            'courses' => $courses
        ]);
    }
}