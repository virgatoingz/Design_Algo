<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        // Contoh data dummy untuk tabel feedback
        Feedback::factory(20)->create();
    }
}