<?php

namespace App\Enums;

class MediaTypes
{

    const PHOTO = '0';
    const VIDEO = '1';
    const YOUTUBE_LINK = '3';
    const YALM = '5';/**
 *
 * Получить массив опций для выпадающего списка
 *
 * @return array
 */
    public static function options(): array
    {
        return [
            self::PHOTO => 'Фотография',
            self::VIDEO => 'Видео',
            self::YOUTUBE_LINK => 'Ссылка на ютуб',
            self::YALM => 'yalm(.png.;.jpg)'
        ];
    }

}
