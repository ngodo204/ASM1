<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;
use Faker\Factory as Faker;

class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<100;$i++){
             DB::table('clothes')->insert([
                'title'=>$faker->text(25),
                'thumbnail' => 'https://pos.nvncdn.com/f4d87e-8901/ps/20240611_GZD4ga85bo.jpeg',
                'describe' => $faker->text(255),
                'date' => $faker->dateTime,
                'price' => $faker->randomFloat(2, 5, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'category_id' => $faker->numberBetween(1, 5),
             ]);
        }
    }
    
}
