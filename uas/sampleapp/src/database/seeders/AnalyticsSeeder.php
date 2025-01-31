<?php

namespace Database\Seeders;

use App\Models\Analytics;
use Illuminate\Database\Seeder;

class AnalyticsSeeder extends Seeder
{
    public function run()
    {
        // Contoh data dummy untuk tabel analytics
        Analytics::factory(15)->create();
    }
}