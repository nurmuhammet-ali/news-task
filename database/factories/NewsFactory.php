<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $files = ['1.jpg', '1.png', '2.jpg', '3.jpeg', '3.jpg', '4.jpg'];

        return [
            'name' => fake()->sentence(5),
            'description' => fake()->sentence(30),
            'image' => $files[array_rand($files)],
            'author' => fake()->name(),
        ];
    }
}
