<?php

namespace App\Http\Controllers;

use App\Models\NewSletter;
use App\Models\Product;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ShowController extends Controller
{
    public function home(): View
    {
        $products = Product::products()->inRandomOrder()->get();
        $questions = Question::questionsActive()->get();
        return view('pages.home', compact('products'));
    }

    public function contacts(): View
    {
        return view('pages.contacts');
    }
}
