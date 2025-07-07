<?php

namespace App\Models;

use App\Models\BlogPosts;
use App\Models\BlogPostsBins;
use App\Models\BlogPostDrafts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Images extends Model
{
    use HasFactory;

    protected $fillable = ['file_path'];

    public function post()
    {
        return $this->hasOne(BlogPosts::class);
    }

    public function draft()
    {
        return $this->hasOne(BlogPostDrafts::class);
    }

    public function bin()
    {
        return $this->hasOne(BlogPostsBins::class);
    }
}
