<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'firstname' => 'ali',
            'lastname' => 'rezaie',
            'field' => 'Elementary Education',
            'semester' => '2',
        ]);

        Student::create([
            'firstname' => 'mahdi',
            'lastname' => 'ahmadi',
            'field' => 'Elementary Education',
            'semester' => '6',
        ]);
    }
}
