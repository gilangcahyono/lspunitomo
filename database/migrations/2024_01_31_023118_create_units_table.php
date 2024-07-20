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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->text('proof')->nullable();
            $table->text('criticalAspect')->nullable();
            $table->string('elementAndKuk')->nullable();
            $table->boolean('dpt')->nullable();
            $table->boolean('dpl')->nullable();
            $table->boolean('pw')->nullable();
            $table->boolean('vpk')->nullable();
            $table->boolean('direct')->nullable();
            $table->boolean('indirect')->nullable();
            $table->boolean('addition')->nullable();
            $table->string('mD1')->nullable();
            $table->string('mD2')->nullable();
            $table->string('mD3')->nullable();
            $table->string('mD4')->nullable();
            $table->string('mD5')->nullable();
            $table->string('mD6')->nullable();
            $table->foreignId('scheme_id');
            $table->foreignId('job_group_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
