<?php

namespace Database\Factories;

use App\Models\CardType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContentType>
 */
class ContentTypeFactory extends Factory
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
            'text' => $this->faker->text(40),
            'card_type_id' => CardType::factory(),
        ];
    }
}
