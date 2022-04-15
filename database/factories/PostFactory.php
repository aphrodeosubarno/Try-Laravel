<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 20),
            'title' => $this->faker->sentence(mt_rand(2, 5)),
            'slug' => $this->faker->unique()->slug(mt_rand(2, 3)),
            'excerpt' => $this->faker->paragraph(),
            'body' => "<p>" . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . "</p>"
        ];
    }
}
