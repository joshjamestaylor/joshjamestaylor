<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'meta_title' => $this->faker->text(),
            'description' => $this->faker->text(),
            'content' => $this->faker->paragraph(),

        ];
    }
}
