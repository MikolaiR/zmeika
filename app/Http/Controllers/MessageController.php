<?php

namespace App\Http\Controllers;

use App\Http\Requests\SandMessageRequest;
use App\Services\TelegramService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MessageController extends Controller
{

    public function page()
    {
        $title = 'ZMEIKA PRO | Обратная связь';
        $keywords = 'ZMEIKA PRO | обратная связь';
        $description = 'ZMEIKA PRO | Обратная связь';
        return view('sections.message-form', ['title' => $title, 'keywords' => $keywords, 'description' => $description]);
    }

    public function message(Request $request): \Illuminate\Http\RedirectResponse
    {
        $text = '';

        if (isset($request->name)) $text .= ' name: ' . $request->name;
        if (isset($request->email)) $text .= ' email: ' . $request->email;
//        if (isset($request->phone)) $text .= ' phone: ' . $request->message;
        if (isset($request->message)) $text .= ' message: ' . $request->message;

        TelegramService::sendMessage($text);

        return redirect()->back();
    }
}
