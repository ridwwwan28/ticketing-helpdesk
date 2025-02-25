<?php

namespace Database\Seeders;

use App\Models\ComplainType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplaintypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ComplainType::factory()->count(10)->create();
    }
}
