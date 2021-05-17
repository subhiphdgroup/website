<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function __invoke()
    {
        $Software = Software::all();

        return view('software',['Software'=>$Software]);
    }
}
