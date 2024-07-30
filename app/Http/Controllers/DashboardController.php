<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Assessor;
use App\Models\ErrorReg;
use App\Models\Registration;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        $registration = Registration::firstWhere('isOpen', true);

        if (Gate::allows('assessor')) {
            $assessor = Assessor::firstWhere('nidn', auth()->user()->username);
            $candidate = Accession::firstWhere('assessor_id', $assessor->id);
        } else {
            if ($registration) {
                $candidate = Accession::where('periodYear', $registration->periode)
                    ->where('periodSemester', $registration->semester)
                    ->where('nim', auth()->user()->username)
                    ->first();
            } else {
                $candidate = Accession::where('nim', auth()->user()->username)->first();
            }
        }

        $schedule = $candidate->assessmentSchedule ?? null;

        $errorReg = ErrorReg::firstWhere('nim', auth()->user()->username);

        return view('dashboard', [
            'candidate' => $candidate,
            'registration' => $registration,
            'schedule' => $schedule,
            'errorReg' => $errorReg,
        ]);
    }
}
