<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categoryId = DB::table('categories')->pluck('id')->toArray();
        $productSeed = [];
        for ($i=0;$i<10;$i++){
            $productSeed[] = [
                "name"=>fake()->name(),
                "price"=>fake()->randomNumber(),
                "quantity"=>fake()->randomNumber(),
                "image"=>fake()->image(),
                "category_id"=>fake()->randomElement($categoryId),
                "description"=>fake()->text(),
                "status"=>fake()->numberBetween(0,1)
            ];
        }
        DB::table('products')->insert($productSeed);
    }
}
