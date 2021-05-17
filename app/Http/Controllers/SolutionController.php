<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function __invoke()
    {
        $Solution = Solution::all();

        return view('solution',['Solution'=>$Solution]);
    }
}
