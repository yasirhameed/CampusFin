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
        Schema::create('project_table', function (Blueprint $table) {
            $table->id();
            $table->string('Project_Name');
            $table->string('Project_Logo')->nullable();
            $table->string('Project_Symbol');
            $table->string('Project_Type');
            $table->string('Project_Domain');
            $table->string('Project_Category');
            $table->date('Project_Launch_Date');
            $table->string('Token_Standard');
            $table->string('BlockChain_Plateform');
            $table->string('Project_Website')->nullable();
            $table->string('Project_GitHub_Link')->nullable();
            $table->string('Project_WhitePaper')->nullable();
            $table->text('Project_Comment')->nullable();
            $table->unsignedBigInteger('Project_Comment_Id')->nullable();
            $table->unsignedBigInteger('Project_Total_Supply')->nullable();
            $table->unsignedBigInteger('Project_Circulating_Supply')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
