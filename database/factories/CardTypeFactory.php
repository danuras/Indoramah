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
            'image_url' => null,
            'text' => '<p  class="text_left">(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptas doloremque sapiente modi ducimus doloribus dignissimos iusto illo ut quaerat, aliquam, vero accusamus ratione nobis. Eligendi, quod ducimus? Distinctio sed, quos, quod provident illo nobis dolore commodi voluptates fugiat corrupti, eaque unde voluptatum dolorum! Nesciunt officiis excepturi quos beatae, dolorem dicta voluptatibus quis laboriosam voluptatem earum consequatur neque quo ut maiores, incidunt totam atque nobis sequi. Molestiae, ratione iste molestias voluptatum saepe itaque tempore, atque nihil dicta ipsum aliquid odit!</p>
            <ul>
                <li><p class="text_left"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>
                <li><p class="text_left"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>
                <li><p class="text_left"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>
            </ul>',
            'whatsapp_message' => $this->faker->text(20),
            'sub_content_title' => $this->faker->text(10),
            'card_id' => Card::factory(),
        ];
    }
}
