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
            'degree' => 'bachelor',
            'field' => 'Arabic'
        ]);
        Professor::create([
            'firstname' => 'ahmad',
            'lastname' => 'amini',
            'degree' => 'master',
            'field' => 'Psychology'
        ]);
    }
}
