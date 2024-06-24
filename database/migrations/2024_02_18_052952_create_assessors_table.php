<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assessors', function (Blueprint $table) {
            $table->id();
            $table->string('nidn')->unique();
            $table->string('name');
            $table->string('nik')->unique();
            $table->string('gender');
            $table->string('birthPlace');
            $table->date('birthDate');
            $table->string('citizen');
            $table->string('lastEducation');
            $table->string('address');
            $table->string('neighbourhood');
            $table->string('village');
            $table->string('district');
            $table->string('city');
            $table->string('province');
            $table->string('postalCode');
            $table->string('department')->nullable();
            $table->string('telephone');
            $table->string('mobile');
            $table->string('email');
            $table->string('metRegistrationNumber')->unique();
            $table->string('occupation');
            $table->string('technicalCompetence');
            $table->date('tmtMet');
            $table->date('expiredMet');
            $table->date('rcc');
            $table->date('expiredRcc');
            $table->string('statusMet');

            $table->foreignId('scheme_id');
            $table->foreignId('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessors');
    }
};
