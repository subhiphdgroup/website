<?php

namespace App\Http\Controllers;

use App\Models\CourseContent;
use App\Models\Course;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNan;
use function PHPUnit\Framework\isNull;


class CourseContentController extends Controller
{
    public function __invoke($id)
    {

        $CourseContent = CourseContent::where('courseID', $id)->get();
        $Course = Course::where('id', $id)->get();

        if ($Course->count() === 0 || $CourseContent->count() === 0) {
            return redirect()->route('home');
        }

            return view('course',['CourseContent'=>$CourseContent,'Course'=>$Course]);

    }


}
