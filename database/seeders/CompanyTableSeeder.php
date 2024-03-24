<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_table')->insert([
            'Company_Id' => 1,
            'Company_Name' => 'Company 1',
            'Company_Website' => 'https://example.com',
            'Company_GitHub' => 'https://github.com/company1',
            'Company_Social_Media' => 'https://twitter.com/company1',
            'Company_Previous_Project' => 'Previous Project 1',
            'Company_Comments_Id' => 1,
            'Company_Comments' => 'Company 1 comments',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
