<?php

namespace App\Models;

use App\Interfaces\ContentServiceInterface;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'url',
        'type',
        'is_preview',
        'url_preview',
        'url_from_bot',
        'contantable_type',
        'contantable_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($content) {
            app(ContentServiceInterface::class)->processContent($content, true);
        });

        static::updating(function ($content) {
            app(ContentServiceInterface::class)->processContent($content);
        });
    }

    public function contantable()
    {
        return $this->morphTo();
    }
}
