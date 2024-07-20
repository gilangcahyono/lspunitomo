<?php

use App\Http\Controllers\SelfAssessmentController;
use Illuminate\Support\Facades\Route;

Route::controller(SelfAssessmentController::class)->group(function () {
  Route::get('/candidate-accessions', 'candidates')->name('accession.candidates');
  Route::get('/candidate-accessions/{accession}', 'candidate')->name('accession.candidates.detail');
  Route::get('/self-assessments/process/{accession}', 'process')->name('self-assessments.process');
  Route::post('/self-assessments', 'store')->name('self-assessments.store');
  Route::get('/self-assessments/{accession}', 'result')->name('self-assessments.result');
  Route::put('/self-assessments/{accession}', 'review')->name('self-assessments.review');
  Route::put('/reschedule-self-assessments/{accession}', 'reschedule')->name('self-assessments.reschedule');
  Route::get('/apl-02/export/{accession}', 'export')->name('apl-02.export');
});
