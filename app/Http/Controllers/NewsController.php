<?php

namespace App\Http\Controllers;

use App\Models\NewSletter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $title = 'НОВОСТИ | МИР ЗМЕЙ';
        $description = "Оставайтесь в курсе последних новостей о змеях: узнавайте о новых открытиях, уходе, интересных фактах и советах по содержанию рептилий. Подписывайтесь на наши обновления и не пропустите ни одной новости.";
        $keywords = "новости о змеях, последние новости о змеях, уход за змеями, змеи новости, интересные факты о змеях, информация о змеях";
        $canonicalLink = 'news/';
        return view('pages.news.index', [
            'news' => NewSletter::news()->get(), 'title' => $title,
            'canonicalLink' => $canonicalLink, 'description' => $description, 'keywords' => $keywords]);
    }

    public function detail($slug)
    {
        $new = NewSletter::news()->where('slug', $slug)->first();
        $title = $new->title;
        $description = Str::limit($new->description, 160, '.')." Читайте полную статью сегодня!";
        $keywords = $new->title." новости о змеях, новость о змеях";
        $canonicalLink = 'news/'.$new->slug;
        return view('pages.news.detail', ['new' => $new, 'title' => $title,
            'canonicalLink' => $canonicalLink, 'description' => $description, 'keywords' => $keywords]);
    }
}
