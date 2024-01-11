<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\ArtPost;
use App\Models\BlogPost;
use App\Models\ComicPost;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for($i = 0; $i < 3; $i++) {
            Post::factory()->for(
                BlogPost::factory(), 'postable'
            )->create();
        }

        for($i = 0; $i < 3; $i++) {
            Post::factory()->for(
                ComicPost::factory(), 'postable'
            )->create();
        }

        for($i = 0; $i < 3; $i++) {
            Post::factory()->for(
                ArtPost::factory(), 'postable'
            )->create();
        }

    }
}
