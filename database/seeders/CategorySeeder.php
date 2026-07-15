<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [

            [
                'name' => 'Web Development',
                'description' => 'Artikel mengenai pengembangan website menggunakan berbagai teknologi web.',
            ],

            [
                'name' => 'UI/UX',
                'description' => 'Artikel mengenai desain antarmuka dan pengalaman pengguna.',
            ],

            [
                'name' => 'Database',
                'description' => 'Artikel mengenai basis data dan pengelolaan informasi.',
            ],

            [
                'name' => 'Artificial Intelligence',
                'description' => 'Artikel mengenai perkembangan teknologi kecerdasan buatan.',
            ],

            [
                'name' => 'Cyber Security',
                'description' => 'Artikel mengenai keamanan sistem dan perlindungan data digital.',
            ],

            [
                'name' => 'Cloud Computing',
                'description' => 'Artikel mengenai layanan cloud dan komputasi awan.',
            ],

            [
                'name' => 'Programming',
                'description' => 'Artikel mengenai bahasa pemrograman dan pengembangan perangkat lunak.',
            ],

           

        ];

        foreach ($categories as $category) {

            Category::create([
                'user_id' => 1,
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
            ]);

        }
    }
}