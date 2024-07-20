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
        Schema::create('job_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tpd')->nullable();
            $table->string('pmo')->nullable();
            $table->string('dit')->nullable();
            $table->text('instrument1')->nullable();
            $table->text('instrument2')->nullable();
            $table->text('instrument3')->nullable();
            $table->text('instrument4a')->nullable();
            $table->text('instrument4b')->nullable();
            $table->text('instrument5')->nullable();
            $table->text('instrument6')->nullable();
            $table->text('instrument7')->nullable();
            $table->text('instrument8')->nullable();
            $table->text('instrument9')->nullable();
            $table->text('instrument10')->nullable();
            $table->text('instrument11')->nullable();
            $table->foreignId('scheme_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_groups');
    }
};
