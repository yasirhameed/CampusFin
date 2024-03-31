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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('projectName');
            $table->string('projectSymbol');
            $table->string('projectLogo');
            $table->string('selectProjectType');
            $table->string('selectProjectCategory');
            $table->string('selectProjectStandard');
            $table->string('selectProjectPlatform');
            $table->string('selectProjectDomain');
            $table->string('projectAuditFile');
            $table->date('projectLaunchDate');
            $table->string('projectWebsiteURL');
            $table->string('projectGitHubURL');
            $table->string('projectTotalSupply');
            $table->string('projectCirculatingSupply');
            $table->string('projectWhitepaperURL');
            $table->string('selectProjectSocialMedia');
            $table->string('enterSocialMediaURL');
            $table->string('selectDeveloper');
            $table->string('selectCompany');
            $table->string('selectPromoterName');
            $table->string('selectPrivateInvestor');
            $table->string('privateInvestorTokenRelease');
            $table->enum('radioInvestorRelease', ['full', 'partial', 'no']);
            $table->text('comment')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
