<?php

namespace App\Http\Controllers;

use App\Models\NewSletter;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $title = 'ГЛАВНАЯ | КУПИТЬ ЗМЕЮ';
        $description = "Откройте для себя нашу эксклюзивную коллекцию змей от редких до декоративных видов. Идеальные питомцы, представленные в различных категориях, для начинающих и опытных любителей рептилий. Купите сейчас с гарантией здоровья и качества.";
        $keywords = "купить змею, декоративные змеи, редкие змеи, змеи для дома, уход за змеями, террариум для змей, змеи питомцы";
        $news = NewSletter::news()->get();
        $products = Product::categoryProducts()->inRandomOrder()->limit(3)->get();
        return view('pages.main', ['news' => $news, 'products' => $products, 'title' => $title, 'description' => $description, 'keywords' => $keywords]);
    }
}
