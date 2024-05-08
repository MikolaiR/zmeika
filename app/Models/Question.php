<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use function Termwind\render;

class Question extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'question',
        'answer',
        'active',
    ];

    public function scopeQuestionsActive(Builder $query)
    {
        return $query->where('active', 1)
            ->orderBy('question', 'asc');
    }
}
