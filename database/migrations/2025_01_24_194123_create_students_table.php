<?php

use App\Models\Guardian;
use App\Models\Section;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Section::class)->nullable();
            $table->foreignIdFor(Guardian::class);
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('middle_name', 25);
            $table->string('sex', 6);
            $table->string('extension', 4)->nullable();
            $table->date('birthdate');
            $table->string('place_of_birth', 25);
            $table->string('mother_tongue', 15);
            $table->string('IP_community', 15)->nullable();
            $table->boolean('4ps_beneficiary');
            $table->integer('average');
            $table->string('email', 100);
            $table->string('username', 60);
            $table->string('password', 60);
            $table->boolean('active');
            $table->enum('type', ['balik aral', 'regular', 'transferee']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

