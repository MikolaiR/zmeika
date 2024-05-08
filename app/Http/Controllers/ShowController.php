<?php

namespace App\Http\Controllers;

use App\Models\NewSletter;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $news = NewSletter::news()->get();
        $products = Product::categoryProducts()->get();
        return view('pages.main', ['news' => $news, 'products' => $products]);
    }
}
