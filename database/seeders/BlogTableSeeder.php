<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog_table')->insert([
            'Blog_Id' => 1,
            'Blog_Name' => 'Blog 1',
            'Blog_Category' => 'Category 1',
            'Related_Blog_Id' => '2',
            'Related_Blog_Name' => 'Related Blog 2',
            'Related_Blog_URL' => 'https://example.com/blog2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
