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
        Schema::table('master_table', function (Blueprint $table) {
            // Add primary key
            $table->primary('Master_Id');

            // Add foreign key indexes
            $table->index('Project_Id');
            $table->index('Audit_Id');
            $table->index('Developer_Id');
            $table->index('Employer_Id');
            $table->index('Private_invistor_Id');
            $table->index('Guide_Id');
            $table->index('Blog_Id');
            $table->index('Promotor_Id');
            $table->index('Company_Id');
        });
    }

    public function down()
    {
        Schema::table('master_table', function (Blueprint $table) {
            // Drop primary key
            $table->dropPrimary('Master_Id');

            // Drop foreign key indexes
            $table->dropIndex('Project_Id');
            $table->dropIndex('Audit_Id');
            $table->dropIndex('Developer_Id');
            $table->dropIndex('Employer_Id');
            $table->dropIndex('Private_invistor_Id');
            $table->dropIndex('Guide_Id');
            $table->dropIndex('Blog_Id');
            $table->dropIndex('Promotor_Id');
            $table->dropIndex('Company_Id');
        });
    }
};
