<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('master_table', function (Blueprint $table) {
            // Foreign key constraints
            $table->foreign('Private_invistor_Id')->references('Private_invistor_Id')->on('private_invistor');
            $table->foreign('Audit_Id')->references('Audit_Id')->on('audit_tabel');
            $table->foreign('Blog_Id')->references('Blog_Id')->on('blog_table');
            $table->foreign('Company_Id')->references('Company_Id')->on('company_table');
            $table->foreign('Developer_Id')->references('Developer_Id')->on('developer_table');
            $table->foreign('Employer_Id')->references('Employer_Id')->on('employer_table');
            $table->foreign('Guide_Id')->references('Guide_Id')->on('guide_table');
            $table->foreign('Project_Id')->references('Project_Id')->on('project_table');
            $table->foreign('Promotor_Id')->references('Promotor_Id')->on('promotor_table');
        });
    }

    public function down()
    {
        Schema::table('master_table', function (Blueprint $table) {
            // Drop foreign key constraints
            $table->dropForeign(['Private_invistor_Id']);
            $table->dropForeign(['Audit_Id']);
            $table->dropForeign(['Blog_Id']);
            $table->dropForeign(['Company_Id']);
            $table->dropForeign(['Developer_Id']);
            $table->dropForeign(['Employer_Id']);
            $table->dropForeign(['Guide_Id']);
            $table->dropForeign(['Project_Id']);
            $table->dropForeign(['Promotor_Id']);
        });
    }
};
