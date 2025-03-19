<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blogs;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Blogs::create([
                'title' => $faker->sentence,
                'slug' => Str::slug($faker->words(5, true)), // Tránh dấu chấm cuối câu
                'content' => $faker->paragraphs(5, true),
                'image' => Str::random(20) . '.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
