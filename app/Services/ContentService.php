<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

class ContentService
{

    protected function nameInfo($urlPath)
    {
        $baseName = pathinfo($urlPath, PATHINFO_FILENAME);
        return str_replace(['.jpg', '.png', '.webp'], '', $baseName);
    }

    protected function createDirectory($elementId, $height)
    {
        $directoryPath = storage_path('app/public/images/contents/' . $elementId . '/' . $height);
        File::ensureDirectoryExists($directoryPath);
        return $directoryPath;
    }

    protected function storagePath($elementId, $baseName, $height)
    {
        return 'public/images/contents/' . $elementId . '/' . $height . '/' . $baseName;
    }

    protected function loadImage($oldImagePath)
    {
        return Image::load($oldImagePath);
    }

    protected function settingImage($image, $height = 900, $quality = 75, $format = Manipulations::FORMAT_WEBP)
    {
        return $image->format($format)
            ->quality($quality)
            ->height($height);
    }

    protected function getQuality($oldImagePath)
    {
        $fileSize = filesize($oldImagePath);
        $quality = 100 - ($fileSize / 10240);
        if ($quality < 35) {
            $quality = 35;
        }
        return $quality;
    }

    public function convertImage($urlPath, $elementId, $created = false, $height = 900)
    {
        try {
            $baseFixName = $this->nameInfo($urlPath);
            $this->createDirectory($elementId, $height);
            $storagePath = $this->storagePath($elementId, $baseFixName, $height);
            $oldImagePath = storage_path('app/' . $urlPath);
            $image = $this->loadImage($oldImagePath);
            $newImagePath = storage_path('app/' . $storagePath . '.webp');
            $quality = $this->getQuality($oldImagePath);
            $this->settingImage($image, $height, $quality);
            $image->save($newImagePath);
            return $storagePath . '.webp';
        } catch (\Exception $e) {
            Log::error($e);
            return $urlPath;
        }
    }


}
