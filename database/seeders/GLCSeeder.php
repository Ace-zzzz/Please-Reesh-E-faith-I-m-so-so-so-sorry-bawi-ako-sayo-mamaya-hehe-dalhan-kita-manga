<?php

namespace Database\Seeders;

use App\Models\GLC;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GLCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GLC::factory(5)->create();
    }
}
