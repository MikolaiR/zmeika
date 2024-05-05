<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    public static function sendMessage($text){
        $botToken = config('telegram.bot_token');
        $chatId = config('telegram.chat_id');

        try {
            $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $text,
            ]);
            return $response->successful();
        } catch (\Exception $e) {
            return false;
        }
    }
}
