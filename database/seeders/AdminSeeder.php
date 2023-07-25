<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ganti dengan email dan password admin yang Anda inginkan
        $adminData = [
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // Ganti 'password' dengan password yang diinginkan
        ];

        Admin::create($adminData);
    }
}
