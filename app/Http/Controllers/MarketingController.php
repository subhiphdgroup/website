<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function __invoke()
    {
        $Product = Product::all();
        $Slide = Slide::all();

        return view('marketing',['Product'=>$Product , 'Slide'=>$Slide ]);
    }
}
