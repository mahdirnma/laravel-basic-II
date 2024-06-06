<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::create([
            'firstname' => 'ali',
            'lastname' => 'azizi',
            'birth_date' => '1999-5-25',
            'biography' => 'lorem ipsum',
            'books_id' => '1',
        ]);

    }
}
