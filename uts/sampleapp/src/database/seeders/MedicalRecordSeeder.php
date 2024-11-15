<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicalRecord;
use App\Models\Patient;

class MedicalRecordSeeder extends Seeder
{
    public function run(): void
    {
        $patients = Patient::all();

        foreach ($patients as $patient) {
            MedicalRecord::factory()->count(5)->create([
                'patient_id' => $patient->id,
            ]);
        }
    }
}
