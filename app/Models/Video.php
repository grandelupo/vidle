<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'description', 'subscription_level', 'chapter_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
