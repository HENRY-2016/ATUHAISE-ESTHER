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
        Schema::create('students_logs_table', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('regNum');
            $table->string('course');
            $table->string('supervisor');
            $table->string('status');
            $table->string('week');
            $table->string('day');
            $table->json('activities');
            $table->json('skills');
            $table->json('challenges');
            $table->json('notes');
            $table->json('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_logs_table');
    }
};
