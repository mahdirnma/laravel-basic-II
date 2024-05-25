<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Professor::create([
            'firstname' => 'ali',
            'lastname' => 'zahedi',
            'national_code' => '3900963463',
            'degree' => 'bachelor',
            'field' => 'Arabic'
        ]);
        Professor::create([
            'firstname' => 'ahmad',
            'lastname' => 'amini',
            'national_code' => '3936963463',
            'degree' => 'master',
            'field' => 'Psychology'
        ]);
    }
}
