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
        Schema::create('private_invistor', function (Blueprint $table) {
            $table->id();
            $table->string('Private_invistor_Name');
            $table->string('Private_invistor_Token_Release');
            $table->string('Private_Invistor_Social_Media_Links');
            $table->unsignedBigInteger('Private_Invistor_Comments_Id');
            $table->string('Private_Invistor_Comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_invistor');
    }
};
