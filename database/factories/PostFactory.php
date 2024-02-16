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

    // use php artisan make:model ModelName -mfs => migration, factory, seeder
    public function definition()
    {
        return [
            // use mt_rand to define minimum and maximum word(s) in a sentence
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(5, 10)),
            'category_id' => mt_rand(1, 5),
            'user_id' => mt_rand(1, 10)
        ];
    }
}
