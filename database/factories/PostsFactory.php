<?php

namespace Database\Factories;

use App\Models\Model;

use App\Models\Post;
use App\Models\Board;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
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
            'user_id'=>User::factory(),
            'board_id'=>Board::factory(),
            'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'content'=>'<p>'.implode('</p><p>',$this->faker->paragraphs(4)).'</p>',
        ];
    }
}
