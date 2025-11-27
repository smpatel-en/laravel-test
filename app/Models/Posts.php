<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(
            Tags::class,
            "posts_tags",
            "post_id",
            "tags_id",
        );
    }
}
