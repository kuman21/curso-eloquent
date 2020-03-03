<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Uno a muchos
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Uno a uno
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    // Muchos a muchos
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
