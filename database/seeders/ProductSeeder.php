<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Categories::all() as $cate_pro){
            foreach (range(1, 10) as $item){
                $faker = Faker::create();
                Products::create([
                    'category_id' => $cate_pro->id,
                    'name' => $cate_pro->name . " " . $item,
                    'slug' => Str::slug($cate_pro->name . " " . $item),
                    'description' => $faker->text,
                    'price' => $faker->randomNumber(2),
                    'image' => Str::random(20) . '.' . 'png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

            }
        }

    }
}
