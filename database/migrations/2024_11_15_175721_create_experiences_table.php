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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exp_task_id')->constrained('experience_tasks')->cascadeOnDelete();
            $table->string('company_name');
            $table->string('company_url');
            $table->string('company_role');
            $table->string('joining_date');
            $table->string('resign_date');
            $table->enum('job_type', ["Remote", "Onsite", "Hybrid"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experinces');
    }
};
