<?php

namespace App\Http\Controllers;

use App\Models\NewSletter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.news.index', [
            'news' => NewSletter::news()->get()]);
    }

    public function detail($slug)
    {
        $new = NewSletter::news()->where('slug', $slug)->first();
        return view('pages.news.detail', ['new' => $new]);
    }
}
