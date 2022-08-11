<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $table = 'news';


    protected $fillable = [
        'title',
        'sub_title',
        'reporter_id',
        'slug',
        'is_anchor',
        'date_line',
        'description',
        'sub_description',
        'view_count',
        'external_url',
        'video_url',
        'publish_date',
        'expiry_date',
        'is_recommended',
        'image',
        'image_description',
        'category_id'
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
