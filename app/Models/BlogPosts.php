<?php

namespace App\Models;

use App\Models\Images;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPosts extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'content', 'tags', 'status', 'published_at', 'image_id'];

    protected $casts = [
        'published_at' => 'datetime',
    ];
    

    public function image()
    {
        return $this->belongsTo(Images::class);
    }
}
