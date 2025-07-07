<?php

namespace App\Models;

use App\Models\Images;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPostsBins extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'content', 'tags', 'status', 'deleted_at', 'image_id'];

    public function image()
    {
        return $this->belongsTo(Images::class);
    }
}
