<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Registration;
use App\Models\Scheme;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Str;

class Ak02Controller extends Controller
{
    public function index()
    {
        $schemes = Scheme::all();

        return view('muk.ak.ak-02.index', ['schemes' => $schemes]);
    }

    public function accessions(string $schemeId)
    {
        $scheme = Scheme::where('id', $schemeId)->with(['accessions' => function ($query) {
            $query->where('recommended', true);
        }, 'assessors', 'jobGroups' => function ($query) {
            $query->with('units');
        }])->first();

        return view('muk.ak.ak-02.accessions', [
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

        return view('muk.ak.ak-02.show', [
            'scheme' => $scheme,
            'accession' => $accession,
        ]);
    }

    public function export(string $accessionId)
    {
        $registration = Registration::first();
        $accession = Accession::firstWhere('id', $accessionId);

        $filename = '21. FR.AK.02. Rekaman Asesmen Kompetensi';
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'schemeName' => $accession->scheme->name,
            'schemeCode' => $accession->scheme->code,
            'assessor' => $accession->assessor->name,
            'accession' =>  $accession->name,
            'date' => explode(' ', $accession->assessmentSchedule->schedule)[0],
            'met' => $accession->assessor->metRegistrationNumber,
        ]);

        $units = $accession->scheme->units;

        $newUnits = $units->map(fn ($unit) => [
            'unitName' => $unit->name,
        ]);

        $templateProcessor->cloneRowAndSetValues('unitName', $newUnits);

        $nim = $accession->nim;
        $ta =  Str::replace('/', '-', $registration->periode);
        $smt = $registration->semester;
        $savedFilename = "$filename - $nim - $ta - $smt.docx";
        $pathToSave = storage_path("app/public/muk/$savedFilename");
        $templateProcessor->saveAs($pathToSave);

        // return response()->download($pathToSave)->deleteFileAfterSend(true);

        // return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");

        return redirect("https://view.officeapps.live.com/op/view.aspx?src=" . env('APP_URL') . "/storage/muk/$savedFilename&wdOrigin=BROWSELINK");
    }
}
