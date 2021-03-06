<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'serial'=>Str::random(7),
            'img'=>'posts_image/'.$this->faker->image('storage/app/public/posts_image',350,350,null,false,true),
            'board_id'=>rand(1,10),
            'user_id'=>rand(1,10),
            'content'=>$this->faker->paragraphs(4,true),
        ];
    }
}
