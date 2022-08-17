<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i=1; $i < 500; $i++) { 
            \App\Models\User::create([
                'name' => Str::random(10)
            ]);
            // \App\Models\Post::create([
            //     'post_text' => Str::random(10),
            //     'user_id' => rand(1,10)
            // ]);
            // \App\Models\Comment::create([
            //     'comments_text' => Str::random(10),
            //     'user_id' => rand(1,10)
            // ]);
        }

        
    }
}
