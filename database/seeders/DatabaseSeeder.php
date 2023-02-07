<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {   

        User::factory()->count(5)->create()->each(function ($user) {
            for ($i = 0; $i < 5; $i++)
            {
                $user->posts()->save(Post::factory()->make());
                $user->comments()->save(Comment::factory()->make());
            }
        });


        // $this->call(UserTableSeeder::class);
        // $this->call(PostsTableSeeder::class);
        // $this->call(PostsTableSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
