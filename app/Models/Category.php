<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{

    protected $table = 'categories';

    protected $fillable = ['title', 'slug', 'parent_id', 'order'];

    protected $with = ['parentCategory'];


    public function parentCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id')->withDefault();
    }
}
