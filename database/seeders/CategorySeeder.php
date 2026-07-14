<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
    'user_id' => 1,
    'name' => 'Laravel',
    'slug' => 'laravel',
    'description' => 'Artikel mengenai framework Laravel.'
]);

Category::create([
    'user_id' => 1,
    'name' => 'Artificial Intelligence',
    'slug' => 'artificial-intelligence',
    'description' => 'Artikel mengenai Artificial Intelligence.'
]);

Category::create([
    'user_id' => 1,
    'name' => 'Pemrograman',
    'slug' => 'pemrograman',
    'description' => 'Artikel mengenai dasar-dasar pemrograman.'
]);

Category::create([
    'user_id' => 1,
    'name' => 'Cyber Security',
    'slug' => 'cyber-security',
    'description' => 'Artikel mengenai keamanan siber.'
]);

Category::create([
    'user_id' => 1,
    'name' => 'Cloud Computing',
    'slug' => 'cloud-computing',
    'description' => 'Artikel mengenai cloud computing.'
]);
    }
}
