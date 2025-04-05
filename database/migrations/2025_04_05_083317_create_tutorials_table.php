<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('title');              // Kolom title (varchar)
            $table->string('course_code');        // Kolom course_code (varchar)
            $table->string('url_presentation')->nullable(); // Kolom url_presentation (varchar, nullable)
            $table->string('url_finished')->nullable(); // Kolom url_finished (varchar, nullable)
            $table->string('creator_email')->nullable(); // Kolom creator_email (varchar, nullable)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tutorials');
    }
};
