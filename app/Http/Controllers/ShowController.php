<?php

namespace App\Http\Controllers;

use App\Models\NewSletter;
use App\Models\Product;
use App\Models\Question;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $news = NewSletter::news()->get();
        $products = Product::products()->get();
        $questions = Question::questionsActive()->get();
        return view('pages.main', ['news' => $news, 'products' => $products, 'questions' => $questions]);
    }
}
