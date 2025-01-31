<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Contoh data dummy untuk tabel events
        Event::factory(5)->create();
    }
}