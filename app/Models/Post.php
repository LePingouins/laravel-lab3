<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // A post has 1 author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // A post can have more than 1 comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
