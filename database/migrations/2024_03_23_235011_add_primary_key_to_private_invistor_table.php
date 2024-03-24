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
        Schema::table('private_invistor', function (Blueprint $table) {
            // Add primary key
            $table->primary('Private_invistor_Id');
        });
    }

    public function down()
    {
        Schema::table('private_invistor', function (Blueprint $table) {
            // Drop primary key
            $table->dropPrimary('Private_invistor_Id');
        });
    }
};
