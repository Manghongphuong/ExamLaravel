<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'Technology', 
            'Health', 
            'Business', 
            'Education', 
            'Entertainment',
            'Sports', 
            'Lifestyle', 
            'Science', 
            'Travel', 
            'Food'
        ];
        foreach ($category as $cate){
            Categories::create([
                'name' => $cate,
                'slug' => Str::slug($cate),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
