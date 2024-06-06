<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Book::create([
             'title' => 'book1',
             'release_date' => '1999-5-25',
             'pages' => '250',
             'writer_id' => '1',
             'category_id' => '1',
         ]);
    }
}
