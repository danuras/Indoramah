<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialMedia>
 */
class SocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'facebook' => 'https://danuras.000webhostapp.com/',
            'twitter' => null,
            'linkedin' => 'https://danuras.000webhostapp.com/',
            'instagram' => 'https://danuras.000webhostapp.com/',
            'google_plus' => 'https://danuras.000webhostapp.com/',
            'youtube' => 'https://danuras.000webhostapp.com/',
        ];
    }
}
