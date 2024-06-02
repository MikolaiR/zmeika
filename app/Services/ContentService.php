<?php

namespace App\Services;

use App\Enums\MediaPreview;
use App\Enums\MediaTypes;
use App\Interfaces\ContentServiceInterface;
use App\Models\Content;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

class ContentService implements ContentServiceInterface
{

    protected function nameInfo($urlPath): string
    {
        $baseName = pathinfo($urlPath, PATHINFO_FILENAME);
        return str_replace(['.jpg', '.png', '.webp'], '', $baseName);
    }

    protected function createDirectory($elementId, $height): string
    {
        $directoryPath = storage_path('app/public/images/contents/' . $elementId . '/' . $height);
        File::ensureDirectoryExists($directoryPath);
        return $directoryPath;
    }

    protected function storagePath($elementId, $baseName, $height): string
    {
        return 'public/images/contents/' . $elementId . '/' . $height . '/' . $baseName;
    }

    protected function loadImage($oldImagePath): Image
    {
        return Image::load($oldImagePath);
    }

    protected function settingImage($image, $height = 900, $quality = 75, $format = Manipulations::FORMAT_WEBP)
    {
        return $image->format($format)
            ->quality($quality)
            ->height($height);
    }

    protected function getQuality($oldImagePath): float|int
    {
        $fileSize = filesize($oldImagePath);
        $quality = 100 - ($fileSize / 10240);
        if ($quality < 35) {
            $quality = 35;
        }
        return $quality;
    }

    public function convertImage($urlPath, $elementId, $created = false, $height = 900): string
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

public function processContent(Content $content, bool $created = false)
{
    //if multiple
    if (is_array($content->url)) {
        foreach ($content->url as $index => $url) {
            if ($content->type == MediaTypes::PHOTO) {
                if ($index == 0) {
                    $content->url = $this->convertImage($url, $content->contantable_id, $created);
                    $content->url_preview = $this->convertImage($url, $content->contantable_id, $created, 150);
                } else {
                    Content::create([
                        'type' => $content->type,
                        'contantable_type' => $content->contantable_type,
                        'contantable_id' => $content->contantable_id,
                        'url' => $this->convertImage($url, $content->contantable_id, $created),
                        'is_preview' => MediaPreview::NOT_PREVIEW,
                        'url_preview' => $this->convertImage($url, $content->contantable_id, $created, 150),
                    ]);
                }
            } else {
                if ($index == 0) {
                    $content->url = $url;
                } else {
                    Content::create([
                        'type' => $content->type,
                        'contantable_type' => $content->contantable_type,
                        'contantable_id' => $content->contantable_id,
                        'url' => $url,
                    ]);
                }
            }
            if ($content->is_preview == MediaPreview::PREVIEW) {
                if ($index == 0) {
                    $content->url_preview = $this->convertImage($url, $content->contantable_id, $created, 450);
                }
            }
        }
        //if not multiple
    } else {
        if ($content->type == MediaTypes::PHOTO) {
            $content->url = $this->convertImage($content->url, $content->contantable_id, $created);
        }
        if ($content->is_preview == MediaPreview::PREVIEW) {
            $content->url_preview = $this->convertImage($content->url, $content->contantable_id, $created, 450);
        }
    }
}

}
