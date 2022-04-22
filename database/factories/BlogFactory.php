<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->text(100),
            'slug' => $this->faker->unique()->slug(8),
            'body' => $this->faker->paragraph(rand(3,5)),
            'short_description' => $this->faker->paragraph(1),
            'img' => $this->faker->imageUrl(),
            'study_time' => rand(3,6),
            'seo_keywords' => $this->faker->text(50),
            'seo_description' => $this->faker->text(),
        ];
    }
}
