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
        Schema::table('promotor_table', function (Blueprint $table) {
            // Add primary key
            $table->primary('Promotor_Id');
        });
    }

    public function down()
    {
        Schema::table('promotor_table', function (Blueprint $table) {
            // Drop primary key
            $table->dropPrimary('Promotor_Id');
        });
    }
};
