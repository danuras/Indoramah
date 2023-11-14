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
            'title' => $this->faker->text(8),
            'image_url' => 'images/demo/540x333.png',
            'date_published' => $this->faker->dateTime,
            'author' => $this->faker->name,
            'text' => $this->faker->text(500),
            'link'=> 'https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/',
        ];
    }
}
