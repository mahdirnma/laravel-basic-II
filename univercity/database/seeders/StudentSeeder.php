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
            'national_code' => '3920785963',
            'field' => 'Elementary Education',
            'semester' => '2',
        ]);

        Student::create([
            'firstname' => 'mahdi',
            'lastname' => 'ahmadi',
            'national_code' => '3920963463',
            'field' => 'Elementary Education',
            'semester' => '6',
        ]);
    }
}
