<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Board;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Board::factory(10)->create();
        Post::factory(50)->create();
        Comment::factory(50)->create();

       
    }
}
