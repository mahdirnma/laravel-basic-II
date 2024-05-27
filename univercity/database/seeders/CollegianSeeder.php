<?php

namespace Database\Seeders;

use App\Models\Collegian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collegian::create([
            'student_id' => '1',
            'lesson_id' => '2',
            'professor_id' => '1'
        ]);

    }
}
