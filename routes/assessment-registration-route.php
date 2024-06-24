<?php

use App\Http\Controllers\AssessmentRegistrationController;
use Illuminate\Support\Facades\Route;

Route::controller(AssessmentRegistrationController::class)->group(function () {
  Route::post('/open-registration', 'openRegistration')->name('open.registration');
  Route::put('/close-registration/{id}', 'closeRegistration')->name('close.registration');
  Route::get('/assessment-registration', 'registration')->name('assessment.registration');
  Route::post('/assessment-registration', 'store')->name('assessment.registration.store');
  Route::put('/assessment-registration/{accession}', 'improveReg')->name('assessment.registration.improve');
  Route::get('/assesment-registrants', 'registrants')->name('assessment.registrants');
  Route::put('/review-registrant/{accession}', 'review')->name('assessment.registrants.review');
  Route::post('/assesment-registrants', 'plotAssessor')->name('assessment.registrants.ploting');
  Route::get('/assesment-registrants/{accession}', 'registrant')->name('assessment.registrants.detail');
  Route::get('/export-assesment-registrants', 'export')->name('assessment.registrants.export');
});
