<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Color>
 */
class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'header_text_color' => '#FFFFFF',
            'common_text_color' => '#A6A6A6',
            'background_color_1' => '#FFFFFF',
            'background_color_2' => '#151517',
            'card_color' => '#151517',
            'highlight_color' => '#D3B48D',
        ];
    }
}
