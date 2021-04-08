<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'posts_id' => $this->faker->numberBetween(1, 100),
            'content' =>  Str::random(100),
            'created_at' => $this->faker->dateTimeThisMonth(),
            'updated_at' => now(),
        ];
    }

}
