<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Registration;
use App\Models\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\TemplateProcessor;

class Ia05bController extends Controller
{
    public function index()
    {
        $schemes = Scheme::all();

        return view('muk.ia.ia-05b.index', ['schemes' => $schemes]);
    }

    public function show(string $schemeId)
    {
        $scheme = Scheme::where('id', $schemeId)->first();

        return view('muk.ia.ia-05b.show', [
            'scheme' => $scheme,
        ]);
    }

    public function export(string $schemeId)
    {
        $registration = Registration::first();
        $scheme = Scheme::firstWhere('id', $schemeId);

        $filename = '14. FR.IA.05.B. Lembar Kunci Jawaban Pertanyaan Pilihan Ganda';
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'schemeName' => $scheme->name,
            'schemeCode' => $scheme->code,
        ]);

        $name = $scheme->code;
        $ta =  Str::replace('/', '-', $registration->periode);
        $smt = $registration->semester;
        $savedFilename = "$filename - $name - $ta - $smt.docx";
        $pathToSave = storage_path("app/public/muk/$savedFilename");
        $templateProcessor->saveAs($pathToSave);

        return response()->download($pathToSave)->deleteFileAfterSend(true);

        return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");
    }
}
