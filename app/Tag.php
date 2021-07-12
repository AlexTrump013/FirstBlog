<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title'];

    public function posts()
    {
        $this->belongsToMany(
            Post::class,
            'posts_tags',
            'tag_id',
            'post_id'
        );
    }
}
