<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'sina',
            'lastname' => 'tabadar',
            'national_code' => '3920789632',
            'age' => '25',
            'username' => 'sina',
            'password' => '1234',
        ]);


    }
}
