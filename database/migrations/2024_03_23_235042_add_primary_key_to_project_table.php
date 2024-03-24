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
        Schema::table('project_table', function (Blueprint $table) {
            // Add primary key
            $table->primary('Project_Id');
        });
    }

    public function down()
    {
        Schema::table('project_table', function (Blueprint $table) {
            // Drop primary key
            $table->dropPrimary('Project_Id');
        });
    }
};
