<?php

namespace App\Models;

use App\Services\ContentService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewSletter extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'active',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->image = (new ContentService())->convertImage($news->image, $news->id, true);
        });

        static::updating(function ($news) {
            $news->image = (new ContentService())->convertImage($news->image, $news->id);
        });
    }

    public function scopeNews(Builder $query)
    {
        return $query->where('active', true);
    }
}
