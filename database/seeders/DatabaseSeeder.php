<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(2)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'Muhammad Misbahuddin',
            'email' => 'misbahuddin@gmail.com',
            'password' => bcrypt('didinku321'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730087',
            'tgl' => '2023-11-15',
        ]);
    }
}
