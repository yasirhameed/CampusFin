<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuditTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('audit_tabel')->insert([
            'Audits_Name' => 'Audit 1',
            'Audits_URL' => 'https://example.com/audit1',
            'Audits_Comments_Id' => 1,
            'Audits_Comments' => 'Audit 1 comments',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
