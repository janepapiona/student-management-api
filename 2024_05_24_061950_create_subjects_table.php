<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->string('subject_code', 20);
            $table->string('name', 150);
            $table->text('description')->nullable();
            $table->string('instructor', 100)->nullable();
            $table->string('schedule', 50)->nullable();
            $table->unsignedSmallInteger('credits')->nullable();
            $table->string('semester', 20)->nullable();
            $table->unsignedTinyInteger('year_level')->nullable();
            $table->enum('status', ['IN_PROGRESS', 'FINISHED', 'WITHDRAWN'])->default('IN_PROGRESS');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
