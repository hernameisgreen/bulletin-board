<?php

namespace Database\Factories;

use App\Models\Model;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id'=>Post::factory(),
            'user_id'=>User::factory(),
            'content'=>$this->faker->paragraph()
        ];
    }
}
