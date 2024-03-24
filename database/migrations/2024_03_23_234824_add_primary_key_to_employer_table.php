<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('employer_table', function (Blueprint $table) {
            $table->primary('Employer_Id');
        });
    }

    public function down()
    {
        Schema::table('employer_table', function (Blueprint $table) {
            $table->dropPrimary('Employer_Id');
        });
    }
};
