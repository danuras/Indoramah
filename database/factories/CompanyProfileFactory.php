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
            'description' => $this->faker->text(500),
            'image_url' => 'images/demo/gallery/01.png',
            'whatsapp_message' => $this->faker->text(20),
            'mission' => $this->faker->text(200),
            'vision' => $this->faker->text(200),
        ];
    }
}
