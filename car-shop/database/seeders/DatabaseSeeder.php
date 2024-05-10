<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Engine;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


         Brand::create([
             'title' => 'peugeot'
         ]);
         Brand::create([
             'title' => 'mvm'
         ]);
         Brand::create([
             'title' => 'toyota'
         ]);
         Engine::create([
             'title' => 'l4 1.6L'
         ]);
         Engine::create([
             'title' => 'l4 1.8L'
         ]);
         Car::create([
             'title' => '206',
             'brand_id' => '1',
             'engine_id' => '1'
         ]);
         Car::create([
             'title' => '550',
             'brand_id' => '2',
             'engine_id' => '2'
         ]);
    }
}
