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
            $table->string('project_title');
            $table->longText('project_description');
            $table->string('project_screenshot')->nullable();
            $table->string('project_url')->nullable();
            $table->string('appstore_url')->nullable();
            $table->string('playstore_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('project_tags')->nullable();


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
