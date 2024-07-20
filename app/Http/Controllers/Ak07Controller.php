<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Registration;
use App\Models\Scheme;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Str;

class Ak07Controller extends Controller
{
    public function index()
    {
        $schemes = Scheme::all();

        return view('muk.ak.ak-07.index', ['schemes' => $schemes]);
    }

    public function accessions()
    {
        $scheme = Scheme::with(['accessions' => function ($query) {
            $query->where('recommended', true);
        }, 'assessors', 'jobGroups' => function ($query) {
            $query->with('units');
        }])->first();

        return view('muk.ak.ak-07.accessions', [
            'scheme' => $scheme,
            'accessions' => $scheme->accessions,
        ]);
    }

    public function show(string $schemeId, string $accessionId)
    {
        $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
            $query->with('units');
        }])->first();

        $accession = $scheme->accessions->find($accessionId);

        if (!$accession) {
            abort(404);
        }

        return view('muk.ak.ak-07.show', [
            'scheme' => $scheme,
            'accession' => $accession,
        ]);
    }

    public function export(string $accessionId)
    {
        $registration = Registration::first();
        $accession = Accession::firstWhere('id', $accessionId);

        $filename = '9. FR.AK.07-Penyesuian-wajar-alasan';
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'schemeName' => $accession->scheme->name,
            'schemeCode' => $accession->scheme->code,
            'assessor' => $accession->assessor->name,
            'accession' =>  $accession->name,
            'date' => explode(' ', $accession->assessmentSchedule->schedule)[0],
        ]);

        $nim = $accession->nim;
        $ta =  Str::replace('/', '-', $registration->periode);
        $smt = $registration->semester;
        $savedFilename = "$filename - $nim - $ta - $smt.docx";
        $pathToSave = storage_path("app/public/muk/$savedFilename");
        $templateProcessor->saveAs($pathToSave);

        // return response()->download($pathToSave)->deleteFileAfterSend(true);

        return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");

        return redirect()->back();
    }
}
