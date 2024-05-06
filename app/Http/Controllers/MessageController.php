<?php

namespace App\Http\Controllers;

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
        $canonicalLink = 'message/';
        return view('pages.message', ['title' => $title, 'keywords' => $keywords, 'description' => $description, 'canonicalLink' => $canonicalLink]);
    }

    public function message(Request $request)
    {
        $text = '';

        if (isset($request->name)) $text .= ' name: ' . $request->name;
        if (isset($request->email)) $text .= ' email: ' . $request->email;
        if (isset($request->phone)) $text .= ' phone: ' . $request->message;
        if (isset($request->textarea)) $text .= ' message: ' . $request->textarea;
        if (isset($request->product)) $text .= ' product: ' . $request->product;

        if (TelegramService::sendMessage($text)) {
            // success
            return redirect()->back()->with('success_message', 'Сообщение отправлено, скоро Вам ответят.');
        } else {
            // error
            return redirect()
                ->back()
                ->with('error_message',
                    'Произошла ошибка, просим связаться через <a href="https://www.facebook.com/profile.php?id=61552662807474">Facebook</a>.');
        }
    }
}
