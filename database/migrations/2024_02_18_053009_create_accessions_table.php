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
        Schema::create('accessions', function (Blueprint $table) {
            $table->id();
            $table->string('registrationNumber')->unique(); // otomatis dari sistem
            $table->dateTime('registeredAt')->default(now());
            $table->string('periodYear'); // otomatis dari sistem
            $table->string('periodSemester'); // otomatis dari sistem

            $table->string('name'); // auto dari api
            $table->string('nim'); // auto dari api
            $table->string('semester'); // auto dari api
            $table->string('faculty'); // auto dari api
            $table->string('department'); // auto dari api

            $table->string('nik'); // auto dari api
            $table->string('birthPlace'); // auto dari api
            $table->date('birthDate'); // auto dari api
            $table->string('gender'); // auto dari api
            $table->string('address'); // auto dari api
            $table->string('city'); // auto dari api
            $table->string('province'); // auto dari api
            $table->string('lastEducation');
            $table->string('mobile');
            $table->string('email');
            $table->foreignId('scheme_id'); // auto dari database

            // $table->string('postalCode')->nullable(); // auto dari api
            // $table->string('telephone')->nullable();
            // $table->string('officeTelephone')->nullable();
            // $table->string('company')->nullable();
            // $table->string('position')->nullable();
            // $table->string('officeAddress')->nullable();
            // $table->string('officePostalCode')->nullable();
            // $table->string('fax')->nullable();
            // $table->string('officeEmail')->nullable();


            // files
            $table->string('ijazah')->nullable();
            $table->string('transkrip')->nullable();
            $table->string('ktm')->nullable();
            $table->string('ktp')->nullable();
            $table->string('foto')->nullable();
            $table->string('cv')->nullable();
            $table->string('proofPayment')->nullable();
            $table->string('supportingCertificate')->nullable();

            $table->boolean('verified')->default(false);
            $table->dateTime('verifiedAt')->nullable();

            $table->foreignId('assessor_id')->nullable();
            $table->dateTime('selfAssessmentSchedule')->nullable();
            // $table->boolean('processed')->default(false);
            $table->json('elementValue')->nullable();

            $table->boolean('recommended')->nullable();
            $table->dateTime('recommendedAt')->nullable();

            $table->boolean('assessed')->default(false);

            $table->foreignId('assessment_schedule_id')->nullable();

            $table->unique('nim', 'periodYear', 'periodSemester');

            $table->text('collectedEvidence')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessions');
    }
};
