<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Assessor;
use App\Models\Registration;
use App\Models\Scheme;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Str;

class Ak05Controller extends Controller
{
    public function index()
    {
        $schemes = Scheme::all();

        return view('muk.ak.ak-05.index', ['schemes' => $schemes]);
    }

    public function assessors()
    {
        $scheme = Scheme::with(['assessors' => function ($query) {
            $query->where('statusMet', 'Berlaku');
        }, 'assessors', 'jobGroups' => function ($query) {
            $query->with('units');
        }])->first();

        return view('muk.ak.ak-05.assessors', [
            'scheme' => $scheme,
            'assessors' => $scheme->assessors,
        ]);
    }

    public function show(string $schemeId, string $assessorId)
    {
        $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups', 'units'])->first();

        $assessor = $scheme->assessors->find($assessorId);

        if (!$assessor) {
            abort(404);
        }

        return view('muk.ak.ak-05.show', [
            'scheme' => $scheme,
            'assessor' => $assessor,
            'accessions' => $assessor->accessions,
        ]);
    }

    public function export(string $assessorId)
    {
        $registration = Registration::first();
        $assessor = Assessor::where('id', $assessorId)->with('accessions')->first();
        $scheme = Scheme::firstWhere('id', request('schemeId'));
        $accessions = $assessor->accessions;

        $filename = '23. FR.AK.05. Laporan Asesmen';
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'schemeName' => $scheme->name,
            'schemeCode' => $scheme->code,
            'assessor' => $assessor->name,
            'accessions' =>  $accessions,
            'met' => $assessor->metRegistrationNumber,
        ]);

        $newAccessions = $accessions->map(fn ($accession, $index) => [
            'no' => $index + 1,
            'accession' => $accession->name,
        ]);

        $templateProcessor->cloneRowAndSetValues('no', $newAccessions);

        $nidn = $assessor->nidn;
        $ta =  Str::replace('/', '-', $registration->periode);
        $smt = $registration->semester;
        $savedFilename = "$filename - $nidn - $ta - $smt.docx";
        $pathToSave = storage_path("app/public/muk/$savedFilename");
        $templateProcessor->saveAs($pathToSave);

        // return response()->download($pathToSave)->deleteFileAfterSend(true);

        return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");

        return redirect()->back();
    }
}
