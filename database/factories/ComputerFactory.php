<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'domain' => fake()->domainName,
            'os' => fake()->safeColorName,
            'motherboard' => fake()->colorName,
            'brand_id' => fake()->randomElement(Brand::pluck('id')),
            'cpu' => fake()->colorName,
            'dimm_1' => fake()->colorName,
            'dimm_2' => fake()->colorName,
            'dimm_3' => fake()->colorName,
            'dimm_4' => fake()->colorName,
            'videocard_1' => fake()->streetName,
            'videocard_2' => fake()->streetName,
            'nomenclature' => fake()->randomDigit(),
        ];
    }
}
