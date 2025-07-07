<?php

namespace App\Models;

use App\Models\Images;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPostDrafts extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'content', 'tags', 'status', 'drafted_at', 'image_id'];

    protected $casts = [
        'drafted_at' => 'datetime',
    ];

    public function image()
    {
        return $this->belongsTo(Images::class);
    }
}
