<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run()
    {
        // Contoh data dummy untuk tabel contents
        Content::factory(10)->create();
    }
}