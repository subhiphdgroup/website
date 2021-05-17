<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function __invoke()
    {
        $Slide = Slide::all();

        return view('test',['Slide'=>$Slide]);
    }
}
