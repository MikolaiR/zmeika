<?php

namespace App\Interfaces;

interface ContentServiceInterface
{

    public function convertImage(string $urlPath, string $elementId, bool $created = false, int $height = null): string;

}
