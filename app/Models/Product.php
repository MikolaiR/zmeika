<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    function scopeCategoryProducts(Builder $query): Builder
    {
        return $query->where('active', 1)
            ->orderBy('name', 'asc');
    }

    function scopeProduct(Builder $query, $slag): Builder
    {
        return $query->where('slug', $slag);
    }
}
