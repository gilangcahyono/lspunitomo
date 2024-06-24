<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\ErrorReg;
use App\Models\Registration;

class DashboardController extends Controller
{
    public function index()
    {
        $registration = Registration::firstWhere('isOpen', true);

        if ($registration) {
            $candidate = Accession::where('periodYear', $registration->periode)
                ->where('periodSemester', $registration->semester)
                ->where('nim', auth()->user()->username)
                ->first();
        } else {
            $candidate = Accession::where('nim', auth()->user()->username)->first();
        }

        $errorReg = ErrorReg::firstWhere('nim', auth()->user()->username);

        return view('dashboard', [
            'candidate' => $candidate,
            'registration' => $registration,
            'errorReg' => $errorReg,
        ]);
    }
}
