<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Assessor;
use App\Models\Registration;
use App\Models\Scheme;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Str;

class Ak06Controller extends Controller
{
    public function index()
    {
        $schemes = Scheme::all();

        return view('muk.ak.ak-06.index', ['schemes' => $schemes]);
    }

    public function assessors()
    {
        $scheme = Scheme::with(['assessors' => function ($query) {
            $query->where('statusMet', 'Berlaku');
        }, 'assessors', 'jobGroups' => function ($query) {
            $query->with('units');
        }])->first();

        return view('muk.ak.ak-06.assessors', [
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

        return view('muk.ak.ak-06.show', [
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

        $filename = '24. FR.AK.06 Meninjau Proses Asesmen';
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'schemeName' => $scheme->name,
            'schemeCode' => $scheme->code,
            'assessor' => $assessor->name,
        ]);

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
