<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\BlogPostDrafts;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogPostDraftsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = Images::pluck('id');

        for ($i = 1; $i <= 5; $i++) {
            BlogPostDrafts::create([
                'title'      => 'Draft Post ' . $i,
                'category'   => 'DraftCat ' . rand(1, 5),
                'content'    => '<p>This is a sample draft blog post.</p>',
                'tags'       => 'draft1,draft2',
                'status'     => 'draft',
                'drafted_at' => now(),
                'image_id'   => $images->random(),
            ]);
        }
    }
}
