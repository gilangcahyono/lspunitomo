<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Registration;
use App\Models\Scheme;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Str;

class Ak03Controller extends Controller
{
    public function index()
    {
        $schemes = Scheme::all();

        return view('muk.ak.ak-03.index', ['schemes' => $schemes]);
    }

    public function accessions(string $schemeId)
    {
        $scheme = Scheme::where('id', $schemeId)->with(['accessions' => function ($query) {
            $query->where('recommended', true);
        }, 'assessors', 'jobGroups' => function ($query) {
            $query->with('units');
        }])->first();

        return view('muk.ak.ak-03.accessions', [
            'scheme' => $scheme,
            'accessions' => $scheme->accessions,
        ]);
    }

    public function show(string $schemeId, string $accessionId)
    {
        $scheme = Scheme::where('id', $schemeId)->with(['accessions', 'assessors', 'jobGroups', 'units'])->first();

        $accession = $scheme->accessions->find($accessionId);

        if (!$accession) {
            abort(404);
        }

        return view('muk.ak.ak-03.show', [
            'scheme' => $scheme,
            'accession' => $accession,
        ]);
    }

    public function export(string $accessionId)
    {
        $registration = Registration::first();
        $accession = Accession::firstWhere('id', $accessionId);

        $filename = '22. FR.AK.03. Umpan Balik dan Catatan Asesmen';
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

        // return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");

        // return redirect()->back();

        return redirect("https://view.officeapps.live.com/op/view.aspx?src=" . env('APP_URL') . "/storage/muk/$savedFilename&wdOrigin=BROWSELINK");
    }
}
