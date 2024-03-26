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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('Company_Name');
            $table->string('Company_Website');
            $table->string('Company_GitHub');
            $table->string('Company_Social_Media');
            $table->string('Company_Previous_Project');
            $table->unsignedBigInteger('Company_Comments_Id');
            $table->string('Company_Comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};