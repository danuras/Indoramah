<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdvantageContent>
 */
class AdvantageContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => 'images/demo/60x60.png',
            'title' => $this->faker->text(5),
            'teks' => '<h1>Hello World</h1>',
        ];
    }
}
