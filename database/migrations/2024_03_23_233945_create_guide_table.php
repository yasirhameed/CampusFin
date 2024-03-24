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
        Schema::create('guide', function (Blueprint $table) {
            $table->id('Guide_Id');
            $table->string('Guide_Name');
            $table->integer('Module_Id');
            $table->string('Module_Name');
            $table->integer('Module_Priority');
            $table->string('Module_Show_In_Other_Guide');
            $table->integer('Module_Show_In_Other_Guide_Priority');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guide');
    }
};
