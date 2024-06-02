<?php

namespace App\Enums;

class MediaPreview
{

    const PREVIEW = '1';
    const NOT_PREVIEW = '0';

    public static function options(): array
    {
        return [
            self::PREVIEW => 'Главная',
            self::NOT_PREVIEW => 'Не главная',
        ];
    }
}
