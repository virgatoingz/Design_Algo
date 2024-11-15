<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'birth_date' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}

