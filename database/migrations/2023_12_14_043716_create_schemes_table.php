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
        Schema::create('schemes', function (Blueprint $table) {
            // $table->id();
            $table->string('code')->primary();
            $table->string('name');
            $table->string('type');
            $table->string('skkni');
            $table->string('faculty');
            $table->string('department');
            $table->string('status');
            $table->string('basicRequirement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schemes');
    }
};
