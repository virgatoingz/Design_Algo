<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;

class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'specialty' => $this->faker->randomElement(['Cardiology', 'Neurology', 'Pediatrics']),
            'phone' => $this->faker->phoneNumber(),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
