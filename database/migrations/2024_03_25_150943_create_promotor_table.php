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
        Schema::create('promotor', function (Blueprint $table) {
            $table->id();
            $table->string('Promotor_Name');
            $table->string('Promotor_Type');
            $table->unsignedBigInteger('Promotor_Previous_Project_Id');
            $table->string('Promotor_Previous_Project_Name');
            $table->unsignedBigInteger('Promotor_Comment_Id');
            $table->string('Promotor_Comments');
            $table->unsignedBigInteger('Promotor_Wallet_Id');
            $table->string('Promotor_Wallet_URL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotor');
    }
};
