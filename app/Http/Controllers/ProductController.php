<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke()
    {
        $Product = Product::all();

        return view('test',['Product'=>$Product]);
    }
}
