<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Lesson;
use App\Models\Professor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LessonSeeder::class
        ]);
        $this->call([
            ProfessorSeeder::class
        ]);
        $this->call([
            StudentSeeder  ::class
        ]);
    }
}
