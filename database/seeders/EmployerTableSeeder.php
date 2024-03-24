<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employer_table')->insert([
            'Employer_Id' => 1,
            'Employer_Name' => 'Employer 1',
            'Employer_Email' => 'employer1@example.com',
            'Employer_Phone' => '123-456-7890',
            'Employer_Password' => bcrypt('password'), // You can use Hash::make('password') for hashing
            'Employer_Right' => 'Rights 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
