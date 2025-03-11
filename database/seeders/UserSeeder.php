<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;
use Illuminate\Foundation\Auth\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        User::create([
            'name' => 'Muhammad Ridwan',
            'email' => 'ridwan@danpacpharma.com',
            'password' => Hash::make('123456'),
            'divisi' => 'IT',
            'group' => 'DP',
            'level' => 99,
            'role' => 'superadmin',
            'status' => 1,
            'profile_pic' => fake()->md5(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Firmansyah',
            'email' => 'firman@danpacpharma.com',
            'password' => Hash::make('123456'),
            'divisi' => 'IT',
            'group' => 'DP',
            'level' => 99,
            'role' => 'superadmin',
            'status' => 1,
            'profile_pic' => fake()->md5(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Yoevan Wiraatmaja',
            'email' => 'yoevan@danpacpharma.com',
            'password' => Hash::make('123456'),
            'divisi' => 'Direksi',
            'group' => 'DP',
            'level' => 1,
            'role' => 'user',
            'status' => 1,
            'profile_pic' => fake()->md5(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'IT Support',
            'email' => 'itsupport@danpacpharma.com',
            'password' => Hash::make('123456'),
            'divisi' => 'IT',
            'group' => 'DP',
            'level' => 2,
            'role' => 'admin',
            'status' => 1,
            'profile_pic' => fake()->md5(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Agiatri Farizki',
            'email' => 'aat@danpacpharma.com',
            'password' => Hash::make('123456'),
            'divisi' => 'Desain Grafis',
            'group' => 'DP',
            'level' => 3,
            'role' => 'user',
            'status' => 1,
            'profile_pic' => fake()->md5(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'M. Prabu Reza',
            'email' => 'prabu@danpacpharma.com',
            'password' => Hash::make('123456'),
            'divisi' => 'Desain Grafis',
            'group' => 'RTP',
            'level' => 3,
            'role' => 'user',
            'status' => 1,
            'profile_pic' => fake()->md5(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Jamallulail',
            'email' => 'jamal@danpacpharma.com',
            'password' => Hash::make('123456'),
            'divisi' => 'Export Import',
            'group' => 'DP',
            'level' => 3,
            'role' => 'user',
            'status' => 1,
            'profile_pic' => fake()->md5(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
    }
}
