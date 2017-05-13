<?php

namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'comments',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(PostsCategory::class);
    }

}
