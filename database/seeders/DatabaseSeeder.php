<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ImagesSeeder;
use Database\Seeders\BlogPostsSeeder;
use Database\Seeders\BlogPostsBinsSeeder;
use Database\Seeders\BlogPostDraftsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            ImagesSeeder::class,
            BlogPostsSeeder::class,
            BlogPostDraftsSeeder::class,
            BlogPostsBinsSeeder::class,
        ]);
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
