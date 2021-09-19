<?php

namespace Database\Factories;

use App\Models\Model;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'thread_id'=>Thread::factory(),
            // 'user_id'=>User::factory(),
            'post_id'=>rand(1,10),
            'board_id'=>rand(1,10),
            'user_id'=>rand(1,10),
            'content'=>$this->faker->paragraph()
        ];
    }
}
