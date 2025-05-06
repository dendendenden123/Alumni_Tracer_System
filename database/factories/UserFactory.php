<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'dob' => fake()->date(),
            'address' => fake()->address(),
            'degree' => fake()->randomElement(['BSc Computer Science', 'BA Economics', 'MBA', 'PhD Physics']),
            'graduation_year' => fake()->year(),
            'job_title' => fake()->jobTitle(),
            'company' => fake()->company(),
            'role' => fake()->randomElement(['Admin', 'Officer', 'Alumnus']),
            'username' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
