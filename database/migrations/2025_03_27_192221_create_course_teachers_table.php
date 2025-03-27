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
        Schema::create('course_teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curse_id')->unique();
            $table->unsignedBigInteger('teacher_id')->unique();

            $table->foreign('curse_id')
               ->references('id')
               ->on('courses')
               ->onDelete('cascade')
               ->onUpdate('cascade');

            $table->foreign('teacher_id')
               ->references('id')
               ->on('teachers')
               ->onDelete('cascade')
               ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_teachers');
    }
};
