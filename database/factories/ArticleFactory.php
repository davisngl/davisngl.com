<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'   => $title = $this->faker->sentence(),
            'slug'    => Str::slug($title),
            'excerpt' => implode('. ', $this->faker->sentences(2)),
            'content' => implode('. ', $this->faker->paragraphs(2)),
        ];
    }
}
