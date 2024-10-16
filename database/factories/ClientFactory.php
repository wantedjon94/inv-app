<?php

namespace Database\Factories;

use App\Models\Position;
use App\Models\Subdivision;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->firstNameMale . fake()->lastName,
            'position_id' => fake()->randomElement(Position::pluck('id')),
            'subdivision_id' => fake()->randomElement(Subdivision::pluck('id')),
        ];
    }
}
