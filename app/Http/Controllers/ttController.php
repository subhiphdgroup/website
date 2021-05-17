<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class ttController extends Controller
{
    public function __invoke($id)
    {
        $Slide = Slide::where('id', $id)->get();

        return $Slide->toArray();

    }
}
