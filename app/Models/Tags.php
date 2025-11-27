<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /** @use HasFactory<\Database\Factories\TagsFactory> */
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(
            Posts::class,
            "posts_tags",
            "tags_id",
            "post_id",
        );
    }
}
