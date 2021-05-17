<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __invoke()
    {
        $Course = Course::all();

        return view('center',['Course'=>$Course]);
    }
}
