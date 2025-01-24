<?php

use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Teacher::class);
            $table->string('name', 25);
            $table->timestamps();
        });

        Schema::create('section_subject', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Section::class);
            $table->foreignIdFor(Subject::class);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
