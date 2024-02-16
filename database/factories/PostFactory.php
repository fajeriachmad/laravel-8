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

            // use implode() to join the paraghraps which the html element can be included to separate within the paragrahps
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            // or you can use the collect() with map() function
            // 'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function ($paragraph) {
            //     return "<p>$paragraph</p>";
            // }),
            // or use the fn() arrow function to simplify the code above
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($paragraph) => "<p>$paragraph</p>")->implode(''),

            'category_id' => mt_rand(1, 5),
            'user_id' => mt_rand(1, 10)
        ];
    }
}
