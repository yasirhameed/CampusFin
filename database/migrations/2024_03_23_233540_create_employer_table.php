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
        Schema::create('employer', function (Blueprint $table) {
            $table->id('Employer_Id');
            $table->string('Employer_Name');
            $table->string('Employer_Email');
            $table->string('Employer_Phone');
            $table->string('Employer_Password');
            $table->string('Employer_Right');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer');
    }
};
