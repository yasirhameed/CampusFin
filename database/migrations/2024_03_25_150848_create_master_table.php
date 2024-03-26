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
            $table->id();
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
