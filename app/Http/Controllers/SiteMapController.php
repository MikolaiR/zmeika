<?php

namespace App\Http\Controllers;

use App\Models\NewSletter;
use App\Models\Product;

class SiteMapController extends Controller
{
    public function generateSitemap()
    {
        $products = Product::categoryProducts()->orderBy('updated_at', 'desc')->get();
        $news = NewSletter::news()->orderBy('updated_at', 'desc')->get();
        $lastUpdateProduct = Product::categoryProducts()->latest('updated_at')->first();
        $lastUpdateNews = NewSletter::news()->latest('updated_at')->first();
        return response()->view('sitemap', [
            'products' => $products,
            'lastUpdateProduct' => $lastUpdateProduct,
            'lastUpdateNews' => $lastUpdateNews,
            'news' => $news
        ])->header('Content-Type', 'text/xml');
    }
}
