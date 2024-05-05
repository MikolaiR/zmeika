<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    public static function sendMessage($text){
        $botToken = '7009263467:AAH1KLxF0buQ1BGxNQVZSpn1jav9VGgg3sQ';
        $chatId = '-4273534171';

        $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $text,
        ]);
    }
}
