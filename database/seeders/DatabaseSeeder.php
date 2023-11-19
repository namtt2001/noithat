<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Nam',
            'email' => 'admin123@gmail.com',
            'phone' => '0983332684',
            'address' => 'Thai Nguyen',
            'password' => Hash::make('admin'),
            'role' => '1',
        ]);
    }
}
