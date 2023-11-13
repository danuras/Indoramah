<?php

namespace Database\Factories;

use App\Models\CardBox;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_url' => 'images/demo/gallery/01.png',
            'title' => $this->faker->text(10),
            'is_clickable' => $this->faker->boolean,
            'text' => $this->faker->text(100),
            'link' => $this->faker->url,
            'card_box_id' => CardBox::factory(),
        ];
    }
}
