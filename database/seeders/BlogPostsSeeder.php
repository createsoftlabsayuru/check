<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\BlogPosts;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class BlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = Images::pluck('id');

        for ($i = 1; $i <= 5; $i++) {
            BlogPosts::create([
                'title'        => 'Published Post ' . $i,
                'category'     => 'Category ' . rand(1, 5),
                'content'      => '<p>This is a sample published blog post.</p>',
                'tags'         => 'tag1,tag2',
                'status'       => 'post',
                'published_at' => now(),
                'image_id'     => $images->random(),
            ]);
        }
    }
}
