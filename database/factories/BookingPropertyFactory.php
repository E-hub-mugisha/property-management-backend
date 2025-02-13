<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BookingProperty;
use App\Models\Property;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingProperty>
 */
class BookingPropertyFactory extends Factory
{
    protected $model = BookingProperty::class;

    public function definition(): array {
        return [
            'property_id' => Property::inRandomOrder()->first()->id ?? 1, // Ensure a valid property ID
            'check_in' => fake()->date(),
            'check_out' => fake()->date(),
            'guests' => fake()->numberBetween(1, 5),
            'total' => fake()->randomFloat(2, 500, 8000),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'date' => fake()->date(),
            'time' => fake()->time(),
        ];
    }
}
