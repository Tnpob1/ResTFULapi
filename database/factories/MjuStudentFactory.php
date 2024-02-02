<?php

namespace Database\Factories;

use App\Models\Major;
use Illuminate\Database\Eloquent\Factories\Factory;

class MjuStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $majorIds = Major::pluck('major_id')->toArray();

        return [
            'student_code' => fake()->unique()->regexify('[A-Z0-9]{15}'),
            'first_name' => fake('th_TH')->unique()->firstName(),
            'first_name_en' => fake('en_EN')->unique()->firstName(),
            'last_name' => fake('th_TH')->lastName(),
            'last_name_en' => fake('en_EN')->lastName(),
            'major_id' => fake()->randomElement($majorIds),
            'idcard' => fake()->unique()->numberBetween(1000000000000,9999999999999),
            'gender' => fake()->randomElement(['M', 'F']),
            'address' => fake()->address(),
            'birthdate'=> fake()->date,
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'nick_name' => fake()->name(),
        ];
    }
}