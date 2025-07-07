<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\BlogPostsBins;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogPostsBinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = Images::pluck('id');

        for ($i = 1; $i <= 3; $i++) {
            BlogPostsBins::create([
                'title'      => 'Deleted Post ' . $i,
                'category'   => 'BinCat ' . rand(1, 3),
                'content'    => '<p>This post was deleted.</p>',
                'tags'       => 'deleted,blog',
                'status'     => rand(0, 1) ? 'post' : 'draft',
                'deleted_at' => now(),
                'image_id'   => $images->random(),
            ]);
        }
    }
}
