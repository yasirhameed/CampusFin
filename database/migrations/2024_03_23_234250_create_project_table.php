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
        Schema::create('project', function (Blueprint $table) {
            $table->id('Project_Id');
            $table->string('Project_Name');
            $table->string('Project_Logo');
            $table->string('Project_Symbol');
            $table->string('Project_Type');
            $table->string('Project_Domain');
            $table->string('Project_Category');
            $table->string('Project_Launch_Date');
            $table->string('Token_Standard');
            $table->string('BlockChain_Plateform');
            $table->string('Project_Website');
            $table->string('Project_GitHub_Link');
            $table->string('Project_WhitePaper');
            $table->string('Project_Comment');
            $table->unsignedBigInteger('Project_Comment_Id');
            $table->string('Project_Total_Supply');
            $table->string('Project_Circulating_Supply');
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
