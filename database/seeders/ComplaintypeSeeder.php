<?php

namespace Database\Seeders;

use App\Models\ComplainType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComplaintypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('complain_types')->truncate();

        ComplainType::create([
            'tipe_komplain' => 'Hardware'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Software'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Jaringan'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Email & Komunikasi'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Akses & Login'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Sistem Internal & Aplikasi Bisnis'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Peripheral & Device Support'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Permintaan Umum'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Keamanan IT'
        ]);
    }
}
