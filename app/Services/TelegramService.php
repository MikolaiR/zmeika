<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    public static function sendMessage($text){
        $botToken = '6850300675:AAG05iqLFOneHRuapJfTd8RrInBR7vGoWEw';
        $chatId = '-4288575174';

        $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $text,
        ]);
    }
}
