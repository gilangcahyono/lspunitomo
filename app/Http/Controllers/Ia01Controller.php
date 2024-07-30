<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Element;
use App\Models\JobGroup;
use App\Models\Registration;
use App\Models\Scheme;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\TemplateProcessor;

class Ia01Controller extends Controller
{
    public function index()
    {
        $schemes = Scheme::all();

        return view('muk.ia.ia-01.index', ['schemes' => $schemes]);
    }

    public function accessions(string $schemeId)
    {
        $scheme = Scheme::where('id', $schemeId)->with(['accessions' => function ($query) {
            $query->where('recommended', true);
        }, 'assessors', 'jobGroups' => function ($query) {
            $query->with('units');
        }])->first();

        return view('muk.ia.ia-01.accessions', [
            'scheme' => $scheme,
            'accessions' => $scheme->accessions,
        ]);
    }

    public function show(string $schemeId, string $accessionId)
    {
        $scheme = Scheme::where('id', $schemeId)->with(['accessions', 'assessors', 'jobGroups' => function ($query) {
            $query->with('units');
        }])->first();

        $accession = $scheme->accessions->find($accessionId);

        if (!$accession) {
            abort(404);
        }

        return view('muk.ia.ia-01.show', [
            'scheme' => $scheme,
            'accession' => $accession,
        ]);
    }

    public function export(string $accessionId)
    {
        $registration = Registration::first();
        $accession = Accession::firstWhere('id', $accessionId);
        $jobGroups = JobGroup::where('scheme_id', $accession->scheme->id)->with('units.elements.kuks')->get();

        $filename = '10. FR.IA.01.Ceklis Observasi Aktivitas Praktik';
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'schemeName' => $accession->scheme->name,
            'schemeCode' => $accession->scheme->code,
            'assessor' => $accession->assessor->name,
            'accession' =>  $accession->name,
            'date' => explode(' ', $accession->assessmentSchedule->schedule)[0],
            'tuk' => $accession->assessmentSchedule->tuk,
        ]);

        $newJobGroups = $jobGroups->map(fn ($jobGroup) => [
            'jobGroupName' => $jobGroup->name,
        ]);

        $templateProcessor->cloneBlock('jobGroupBlock', 0, true, false, $newJobGroups->toArray());

        foreach ($jobGroups as $jobGroup) {
            $units = Unit::where('job_group_id', $jobGroup->id)->get();

            $newUnits = $units->map(fn ($unit, $index) => [
                'unitNum' => $index + 1,
                'unitCode' => $unit->code,
                'unitName' => $unit->name,
            ]);

            $templateProcessor->cloneRowAndSetValues('unitNum', $newUnits);

            $templateProcessor->cloneBlock('unitBlock', 0, true, false, $newUnits->toArray());

            // foreach ($units as $unit) {
            //     $elements = Element::where('unit_id', $unit->id)->get();

            //     $newElements = $elements->map(fn ($element, $index) => [
            //         'elementNum' => $index + 1,
            //         'elementName' => $element->name,
            //     ]);

            //     $templateProcessor->cloneRowAndSetValues('elementNum', $newElements->toArray());
            // }
        }

        $nim = $accession->nim;
        $ta =  Str::replace('/', '-', $registration->periode);
        $smt = $registration->semester;
        $savedFilename = "$filename - $nim - $ta - $smt.docx";
        $pathToSave = storage_path("app/public/muk/$savedFilename");
        $templateProcessor->saveAs($pathToSave);

        // return response()->download($pathToSave)->deleteFileAfterSend(true);

        return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");
    }
}
