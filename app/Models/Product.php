<?php

namespace App\Models;

use App\Services\ContentService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'description',
        'price',
        'active',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function contents()
    {
        return $this->morphMany(Content::class, 'contantable');
    }

    public function getFirstPreviewImage()
    {
        return $this->contents()->where('is_preview', 1)->first();
    }
    function scopeProducts(Builder $query): Builder
    {
        return $query->with([
            'category:id,name', 'contents'
        ])
            ->where('active', 1)
            ->orderBy('name', 'asc');
    }

    function scopeProduct(Builder $query, $slag): Builder
    {
        return $query->where('slug', $slag);
    }

}
