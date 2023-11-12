<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimony>
 */
class TestimonyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value' => $this->faker->text(20),
            'photo_profile' => 'images/demo/60x60.png',
            'name' => $this->faker->name,
            'job' => $this->faker->jobTitle,
        ];
    }
}
