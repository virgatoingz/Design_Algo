<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PatientSeeder::class,
            DoctorSeeder::class,
            MedicalRecordSeeder::class,
        ]);

        // Pastikan role super_admin sudah ada
        Role::firstOrCreate(['name' => 'super_admin']);

        // Buat atau perbarui admin user
        $user = User::updateOrCreate(
            ['email' => 'admin@admin.com'], // Kondisi unik
            [
                'name' => 'Admin',
                'password' => bcrypt('password'), // Ganti password sesuai kebutuhan
            ]
        );

        // Assign role ke user
        $user->assignRole('super_admin');
    }
}
