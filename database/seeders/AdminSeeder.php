<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => 'Admin 1',
            'email' => 'admin1@example.com',
            'password' => Hash::make('123456'),
        ]);

        Admin::create([
            'username' => 'Admin 2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
