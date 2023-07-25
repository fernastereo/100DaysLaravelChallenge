<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
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

        Post::factory(36)->create();

        Post::factory()->create(['title' => 'Example', 'slug' => 'example', 'type' => 'PAGE']);
        Post::factory()->create(['title' => 'Features', 'slug' => 'features', 'type' => 'PAGE']);
        Post::factory()->create(['title' => 'Overview', 'slug' => 'overview', 'type' => 'PAGE']);
        Post::factory()->create(['title' => 'About', 'slug' => 'about', 'type' => 'PAGE']);
    }
}
