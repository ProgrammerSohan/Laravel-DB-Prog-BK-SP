<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => $this->faker->name,
            'class' => $this->faker->randomElement(['Five','Six','Seven','Eight','Nine','Ten']),
            'roll_number'=> $this->faker->unique()->numberBetween(1,100),
        ];
    }
}
