<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'whatsapp' => $this->faker->phoneNumber,
            'whatsapp_message' => $this->faker->text(20),
            'call_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'email' => $this->faker->email,
            'info_contact' => $this->faker->text(40),
            'embeded_map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63273.86296260176!2d110.26389765952453!3d-7.6166475801990705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8b1c5e2d7805%3A0xb323b526d2f7ce2e!2sSMK%20Negeri%201%20Salam!5e0!3m2!1sen!2sid!4v1699502834176!5m2!1sen!2sid',
            'info_location' => $this->faker->text(30),
            'background_contact' => 'images/demo/backgrounds/01.png',
        ];
    }
}
