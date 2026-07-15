<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Raudatul Auliaa',
            'email' => 'raudatul.240170033@mhs.unimal.ac.id',
            'password' => Hash::make('Aulia12345678#'),
        ]);
    }
}