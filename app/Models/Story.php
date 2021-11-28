<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Story extends Model
{
    const EXCERPT_LENGTH = 200;

    use HasFactory;

    // protected $fillable = [
    //     'title', 'body', 'image', 'language', 'like_count', 'comment_count'
    // ];
    protected $fillable = [
        'title', 'body', 'image', 'link'
    ];

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }

    public function excerpt()
    {
        return Str::limit($this->body, Story::EXCERPT_LENGTH);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
