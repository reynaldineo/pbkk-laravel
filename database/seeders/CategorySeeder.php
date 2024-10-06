<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
        ]);
        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science',
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
        ]);
        Category::create([
            'name' => 'Mobile Development',
            'slug' => 'mobile-development',
        ]);
    }
}
