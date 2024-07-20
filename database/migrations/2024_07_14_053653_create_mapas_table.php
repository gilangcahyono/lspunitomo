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
        Schema::create('mapas', function (Blueprint $table) {
            $table->id();
            $table->text('approachAccessions')->nullable();
            $table->text('assessmentObjectives')->nullable();
            $table->text('envs')->nullable();
            $table->text('opportunitys')->nullable();
            $table->text('connections')->nullable();
            $table->text('doAssessmens')->nullable();
            $table->text('relevantPeople')->nullable();
            $table->text('industryStandards')->nullable();
            $table->string('certificationManager')->nullable();
            $table->string('masterAssessor')->nullable();
            $table->string('trainingManager')->nullable();
            $table->string('supervisor')->nullable();
            $table->text('makers')->nullable();
            $table->text('validators')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapas');
    }
};
