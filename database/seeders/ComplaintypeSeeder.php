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
            'tipe_komplain' => 'Perangkat Keras (Hardware)'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Jaringan & Internet'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Aplikasi / Software'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Akun & Akses'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Email & Komunikasi'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Permintaan Umum'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'HRIS / Talenta'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Printer Label / Barcode'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Keamanan & Akses'
        ]);

        ComplainType::create([
            'tipe_komplain' => 'Lain-lain'
        ]);
    }
}
