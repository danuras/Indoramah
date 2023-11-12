<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyProfile>
 */
class CompanyProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(10),
            'description' => $this->faker->text(40),
            'image_url' => 'images/demo/gallery/01.png',
            'whatsapp_message' => $this->faker->text(20),
            'mission' => $this->faker->text(20),
            'vision' => $this->faker->text(20),
        ];
    }
}
