<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('developer_table')->insert([
            'Developer_Id' => 1,
            'Developer_Name' => 'Developer 1',
            'Developer_Website' => 'https://developer1.com',
            'Developer_GitHub_Link' => 'https://github.com/developer1',
            'Developer_Social_Media' => 'https://twitter.com/developer1',
            'Developer_Previous_Project' => 'Previous Project 1',
            'Developer_Comments_Id' => 1,
            'Developer_Comments' => 'Developer 1 comments',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
