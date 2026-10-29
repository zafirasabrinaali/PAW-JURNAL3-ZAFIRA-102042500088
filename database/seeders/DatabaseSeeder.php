<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)

        // Akun Dosen
        User::updateOrCreate(
            ['email' => 'ahmad@celoe.test'],
            [
                'name'        => 'Dr. Ir. Ahmad, M.T.',
                'password'    => Hash::make('password123'),
                'role'        => 'dosen',
                'nomor_induk' => '1983011015041001',
            ]
        );

        // Akun Mahasiswa
        User::updateOrCreate(
            ['email' => 'zafira.sabrina@celoe.test'],
            [
                'name'        => 'Zafira Sabrina Ali',
                'password'    => Hash::make('password123'),
                'role'        => 'mahasiswa',
                'nomor_induk' => '102042500088',
            ]
        );
    }
}