<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WebAttribute>
 */
class WebAttributeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(6),
            'icon' => 'images/demo/60x60.png',
            'short_description' => $this->faker->text(20),
            'long_title' => $this->faker->text(15),
            'main_heading' => $this->faker->text(25),  
            'sub_heading' => $this->faker->text(30),  
            'background_image' => 'images/demo/backgrounds/01.png',
            'background_testimonies' => 'images/demo/backgrounds/02.png',
        ];
    }
}
