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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('pro_nouns');
            $table->string('name')->nullable();
            $table->string('user_photo')->nullable();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('known_language');
            $table->string('github_url')->nullable();
            $table->string('linked_in_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->boolean('available_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
