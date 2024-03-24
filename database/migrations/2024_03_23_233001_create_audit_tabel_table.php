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
        Schema::create('audit_tabel', function (Blueprint $table) {
            $table->bigIncrements('Audit_Id');
        $table->string('Audits_Name');
        $table->string('Audits_URL');
        $table->bigInteger('Audits_Comments_Id');
        $table->string('Audits_Comments');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_tabel');
    }
};
