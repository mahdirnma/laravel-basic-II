<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         Category::create([
             'title' => 'pizza'
         ]);
         Category::create([
             'title' => 'sandwich'
         ]);
         Food::create([
             'title' => 'chicken',
             'food_type' => 'normal',
             'entity' => 'yes',
             'category_id' => '2',
             'price' => '2000',
         ]);
         Food::create([
             'title' => 'vegetable',
             'food_type' => 'vegan',
             'entity' => 'no',
             'category_id' => '1',
             'price' => '3000',
         ]);
    }
}
