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
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'image_url' => fake()->randomElement(
                [
                    'flag-sky.jpg',
                    'praying-monk.jpg',
                    'rr-valley.jpg',
                    'rr-pond.jpg',
                    'az-creek.jpg',
                    'indian-creek.jpg',
                    'salt-lake.jpg',
                    'sedona.jpg',
                    'rr-wall.jpg',
                    'utah-ridges.jpg',
                    'utah-rocks.jpg',
                    'jacks-canyon.jpg',
                ]
            ),
            'image_alt' => fake()->sentence(),
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'content' => fake()->text(1000),
        ];
    }
}
