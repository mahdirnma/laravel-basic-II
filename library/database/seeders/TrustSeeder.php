<?php

namespace Database\Seeders;

use App\Models\Trust;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trust::create([
            'firstname' => 'sina',
            'lastname' => 'tabadar',
            'book_id' => '1',
            'borrow_date' => '2024-5-12',
            'giveback_date' => '2024-8-12',
        ]);
    }
}
