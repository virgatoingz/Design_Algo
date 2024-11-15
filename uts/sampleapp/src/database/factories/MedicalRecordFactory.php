<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MedicalRecord;

class MedicalRecordFactory extends Factory
{
    protected $model = MedicalRecord::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
            'record_date' => $this->faker->date(),
        ];
    }
}
