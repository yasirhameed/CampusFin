<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AuditTabelSeeder::class,
            BlogTableSeeder::class,
            CompanyTableSeeder::class,
            DeveloperTableSeeder::class,
            EmployerTableSeeder::class,
            GuideTableSeeder::class,
            MasterTableSeeder::class,
            PrivateInvistorSeeder::class,
            ProjectTableSeeder::class,
            PromotorTableSeeder::class,
        ]);
    }
}
