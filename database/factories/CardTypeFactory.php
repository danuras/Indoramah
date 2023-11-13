<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CardType>
 */
class CardTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(20),
            'images' => json_encode([]),
            'text' => $this->faker->text(40),
            'whatsapp_message' => $this->faker->text(20),
            'type' => 'content-1',
            'sub_content_title' => $this->faker->text(10),
            'card_id' => Card::factory(),
        ];
    }
}
