<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            "first_name" => "Test",
            "last_name" => "User",
            "email" => "test@example.com",
        ]);

        // Create tags first
        $tags = \App\Models\Tags::factory(10)->create();

        // Create posts and attach random tags to each
        \App\Models\Posts::factory(100)
            ->create()
            ->each(function ($post) use ($tags) {
                $post
                    ->tags()
                    ->attach($tags->random(rand(1, 5))->pluck("id")->toArray());
            });
    }
}
