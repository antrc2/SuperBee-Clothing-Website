<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('categories')->insert([
        //     "name"=>fake()->name(),
        //     "status"=>fake()->numberBetween(0,1)
        // ]);

        // Tạo mảng rỗng để chứa các bản ghi;
        $cateSeed = [];
        for ($i=0;$i<10;$i++){
            $cateSeed[] = [
                "name"=>fake()->name(),
                "status"=>fake()->numberBetween(0,1)
            ];
        }   
        DB::table('categories')->insert($cateSeed);
    }
}
