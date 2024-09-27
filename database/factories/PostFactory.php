<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $postTitle = fake()->sentence();

        return [
            "title" => $postTitle,
            "author" => fake()->name(),
            "slug" => Str::slug($postTitle), 
            "body" => fake()->text(),
        ];
    }
}
