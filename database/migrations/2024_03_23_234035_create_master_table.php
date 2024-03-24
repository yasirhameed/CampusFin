<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master', function (Blueprint $table) {
            $table->id('Master_Id');
            $table->unsignedBigInteger('Project_Id');
            $table->unsignedBigInteger('Audit_Id');
            $table->unsignedBigInteger('Developer_Id');
            $table->unsignedBigInteger('Employer_Id');
            $table->unsignedBigInteger('Private_invistor_Id');
            $table->unsignedBigInteger('Promotor_Id');
            $table->unsignedBigInteger('Blog_Id');
            $table->unsignedBigInteger('Guide_Id');
            $table->unsignedBigInteger('Company_Id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('Project_Id')->references('id')->on('project_table');
            $table->foreign('Audit_Id')->references('Audit_Id')->on('audit_tabel');
            $table->foreign('Developer_Id')->references('Developer_Id')->on('developer_table');
            $table->foreign('Employer_Id')->references('Employer_Id')->on('employer_table');
            $table->foreign('Private_invistor_Id')->references('Private_invistor_Id')->on('private_invistor');
            $table->foreign('Promotor_Id')->references('Promotor_Id')->on('promotor_table');
            $table->foreign('Blog_Id')->references('Blog_Id')->on('blog_table');
            $table->foreign('Guide_Id')->references('Guide_Id')->on('guide_table');
            $table->foreign('Company_Id')->references('Company_Id')->on('company_table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master');
    }
};
