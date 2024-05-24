<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::create([
            'title' => 'danesh',
            'course' => '2',
            'capacity' => '18',
            'professor_id' => '1',
        ]);
        Lesson::create([
            'title' => 'roshd',
            'course' => '3',
            'capacity' => '22',
            'professor_id' => '2',
        ]);
    }
}
