<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Assessor;
use App\Models\JobGroup;
use App\Models\Mapa;
use App\Models\Registration;
use App\Models\Scheme;
use App\Models\Unit;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\TemplateProcessor;

class MapaController extends Controller
{

    public function getMapa01()
    {
        $schemes = Scheme::all();

        return view('muk.mapa.mapa-01.index', ['schemes' => $schemes]);
    }

    public function showMapa01(string $schemeId)
    {
        $scheme = Scheme::where('id', $schemeId)->with(['jobGroups.units' => function ($query) {
            $query->orderBy('units.id');
        }, 'assessors'])->first();

        $mapa = Mapa::firstWhere('id', $scheme->id);
        // return explode(' zzz ', $mapa->approachAccessions);

        if ($scheme->jobGroups->count() == 0 && $mapa == null) {
            abort(404);
        }

        return view('muk.mapa.mapa-01.show', [
            'scheme' => $scheme,
            'mapa' => $mapa,
        ]);
    }

    public function postMapa01(Request $request)
    {
        // return $request->all();

        if ($request->units) {
            foreach ($request->units as $unit) {
                Unit::where('id', $unit['id'])->update([
                    'proof' => $unit['proof'],
                    'direct' => isset($unit['direct']) ? $unit['direct'] : false,
                    'indirect' => isset($unit['indirect']) ? $unit['indirect'] : false,
                    'addition' => isset($unit['addition']) ? $unit['addition'] : false,
                    'mD1' => $unit['mD1'],
                    'mD2' => $unit['mD2'],
                    'mD3' => $unit['mD3'],
                    'mD4' => $unit['mD4'],
                    'mD5' => $unit['mD5'],
                    'mD6' => $unit['mD6'],
                ]);
            }
        }

        $request->merge([
            'approachAccessions' => implode(' zzz ', $request->input('approachAccessions') !== null ? $request->input('approachAccessions') : []),
            'assessmentObjectives' => implode(' zzz ', $request->input('assessmentObjectives') !== null ? $request->input('assessmentObjectives') : []),
            'envs' => implode(' zzz ', $request->input('envs') !== null ? $request->input('envs') : []),
            'opportunitys' => implode(' zzz ', $request->input('opportunitys') !== null ? $request->input('opportunitys') : []),
            'connections' => implode(' zzz ', $request->input('connections') !== null ? $request->input('connections') : []),
            'doAssessmens' => implode(' zzz ', $request->input('doAssessmens') !== null ? $request->input('doAssessmens') : []),
            'relevantPeople' => implode(' zzz ', $request->input('relevantPeople') !== null ? $request->input('relevantPeople') : []),
            'industryStandards' => implode(' zzz ', $request->input('industryStandards') !== null ? $request->input('industryStandards') : []),
            'makers' => implode(' zzz ', $request->input('makers') !== null ? $request->input('makers') : []),
            'validators' => implode(' zzz ', $request->input('validators') !== null ? $request->input('validators') : []),
        ]);

        Mapa::updateOrInsert(
            ['id' => $request->schemeId],
            [
                'approachAccessions' => $request->approachAccessions === [] ? null : $request->approachAccessions,
                'assessmentObjectives' => $request->assessmentObjectives === [] ? null : $request->assessmentObjectives,
                'envs' => $request->envs === [] ? null : $request->envs,
                'opportunitys' => $request->opportunitys === [] ? null : $request->opportunitys,
                'connections' => $request->connections === [] ? null : $request->connections,
                'doAssessmens' => $request->doAssessmens === [] ? null : $request->doAssessmens,
                'relevantPeople' => $request->relevantPeople === [] ? null : $request->relevantPeople,
                'industryStandards' => $request->industryStandards === [] ? null : $request->industryStandards,
                'certificationManager' => $request->certificationManager,
                'masterAssessor' => $request->masterAssessor,
                'trainingManager' => $request->trainingManager,
                'supervisor' =>  $request->supervisor,
                'makers' => $request->makers === [] ? null : $request->makers,
                'validators' => $request->validators === [] ? null : $request->validators,
            ],
        );

        alert()->success('Data berhasil disimpan!');

        return redirect()->back();
    }

    public function exportMapa01(string $schemeId)
    {
        $registration = Registration::first();
        $accession = Accession::where('scheme_id', $schemeId)->first();
        $filename = '4. FR.MAPA 01. Merencanakan Aktivitas dan Proses';
        $jobGroups = JobGroup::where('scheme_id', $schemeId)->with('units')->get();
        $mapa = Mapa::firstWhere('id', $schemeId);
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'schemeName' => $accession->scheme->name,
            'schemeCode' => $accession->scheme->code,
            'ac1' => $templateProcessor->setCheckbox('ac1', in_array('ac1', explode(' zzz ', $mapa->approachAccessions))),
            'ac2' => $templateProcessor->setCheckbox('ac2', in_array('ac2', explode(' zzz ', $mapa->approachAccessions))),
            'ac3' => $templateProcessor->setCheckbox('ac3', in_array('ac3', explode(' zzz ', $mapa->approachAccessions))),
            'ac4' => $templateProcessor->setCheckbox('ac4', in_array('ac4', explode(' zzz ', $mapa->approachAccessions))),
            'ac5' => $templateProcessor->setCheckbox('ac5', in_array('ac5', explode(' zzz ', $mapa->approachAccessions))),
            'ao1' => $templateProcessor->setCheckbox('ao1', in_array('ao1', explode(' zzz ', $mapa->assessmentObjectives))),
            'ao2' => $templateProcessor->setCheckbox('ao2', in_array('ao2', explode(' zzz ', $mapa->assessmentObjectives))),
            'ao3' => $templateProcessor->setCheckbox('ao3', in_array('ao3', explode(' zzz ', $mapa->assessmentObjectives))),
            'ao4' => $templateProcessor->setCheckbox('ao4', in_array('ao4', explode(' zzz ', $mapa->assessmentObjectives))),
            'env1' => $templateProcessor->setCheckbox('env1', in_array('env1', explode(' zzz ', $mapa->envs))),
            'env2' => $templateProcessor->setCheckbox('env2', in_array('env2', explode(' zzz ', $mapa->envs))),
            'opt1' => $templateProcessor->setCheckbox('opt1', in_array('opt1', explode(' zzz ', $mapa->opportunitys))),
            'opt2' => $templateProcessor->setCheckbox('opt2', in_array('opt2', explode(' zzz ', $mapa->opportunitys))),
            'con1' => $templateProcessor->setCheckbox('con1', in_array('con1', explode(' zzz ', $mapa->connections))),
            'con2' => $templateProcessor->setCheckbox('con2', in_array('con2', explode(' zzz ', $mapa->connections))),
            'con3' => $templateProcessor->setCheckbox('con3', in_array('con3', explode(' zzz ', $mapa->connections))),
            'da1' => $templateProcessor->setCheckbox('da1', in_array('da1', explode(' zzz ', $mapa->doAssessmens))),
            'da2' => $templateProcessor->setCheckbox('da2', in_array('da2', explode(' zzz ', $mapa->doAssessmens))),
            'da3' => $templateProcessor->setCheckbox('da3', in_array('da3', explode(' zzz ', $mapa->doAssessmens))),
            'rp1' => $templateProcessor->setCheckbox('rp1', in_array('rp1', explode(' zzz ', $mapa->relevantPeople))),
            'rp2' => $templateProcessor->setCheckbox('rp2', in_array('rp2', explode(' zzz ', $mapa->relevantPeople))),
            'rp3' => $templateProcessor->setCheckbox('rp3', in_array('rp3', explode(' zzz ', $mapa->relevantPeople))),
            'rp4' => $templateProcessor->setCheckbox('rp4', in_array('rp4', explode(' zzz ', $mapa->relevantPeople))),
            'is1' => $templateProcessor->setCheckbox('is1', in_array('is1', explode(' zzz ', $mapa->industryStandards))),
            'is2' => $templateProcessor->setCheckbox('is2', in_array('is2', explode(' zzz ', $mapa->industryStandards))),
            'is3' => $templateProcessor->setCheckbox('is3', in_array('is3', explode(' zzz ', $mapa->industryStandards))),
            'is4' => $templateProcessor->setCheckbox('is4', in_array('is4', explode(' zzz ', $mapa->industryStandards))),
            'is5' => $templateProcessor->setCheckbox('is5', in_array('is5', explode(' zzz ', $mapa->industryStandards))),
            'manager' => $mapa->certificationManager,
            'masterAssessor' => $mapa->masterAssessor,
            'maker1' => explode(' zzz ', $mapa->makers)[0],
            'maker2' => explode(' zzz ', $mapa->makers)[1] ?? '',
            'validator1' => explode(' zzz ', $mapa->validators)[0],
            'validator2' => explode(' zzz ', $mapa->validators)[1] ?? '',
        ]);

        $newJobGroups = $jobGroups->map(fn ($jobGroup) => [
            'jobGroupName' => $jobGroup->name,
        ]);

        $templateProcessor->cloneBlock('jobGroupBlock', 0, true, false, $newJobGroups->toArray());

        foreach ($jobGroups as $jobGroup) {
            $units = Unit::where('job_group_id', $jobGroup->id)->get();

            $newUnits1 = $units->map(fn ($unit, $index) => [
                'unitNum1' => $index + 1,
                'unitCode1' => $unit->code,
                'unitName1' => $unit->name,
            ]);

            $templateProcessor->cloneRowAndSetValues('unitNum1', $newUnits1);

            $newUnits2 = $units->map(fn ($unit, $index) => [
                'unitNum2' => $index + 1,
                'unitName2' => $unit->name,
                'unitProof' => $unit->proof,
                'md1' => $unit->mD1,
                'md2' => $unit->mD2,
                'md3' => $unit->mD3,
                'md4' => $unit->mD4,
                'md5' => $unit->mD5,
                'md6' => $unit->mD6,
            ]);

            $templateProcessor->cloneRowAndSetValues('unitNum2', $newUnits2);
        }

        $scheme = Scheme::firstWhere('id', $schemeId)->code;
        $ta =  Str::replace('/', '-', $registration->periode);
        $smt = $registration->semester;
        $savedFilename = "$filename - $scheme - $ta - $smt.docx";
        $pathToSave = storage_path("app/public/muk/$savedFilename");
        $templateProcessor->saveAs($pathToSave);

        // return response()->download($pathToSave)->deleteFileAfterSend(true);

        // echo "<script>
        //     window.open('https://docs.google.com/viewerng/viewer?url=http://tugas-akhir.test/storage/muk/$savedFilename', '_blank');
        //     window.close();
        // </script>";

        // return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");

        // return redirect("https://docs.google.com/gview?url=" . env('APP_URL') . "/storage/muk/$savedFilename&embedded=true");

        return redirect("https://view.officeapps.live.com/op/view.aspx?src=" . env('APP_URL') . "/storage/muk/$savedFilename&wdOrigin=BROWSELINK");
    }

    public function getMapa02()
    {
        $schemes = Scheme::all();

        return view('muk.mapa.mapa-02.index', ['schemes' => $schemes]);
    }

    public function showMapa02(string $schemeId)
    {
        $scheme = Scheme::where('id', $schemeId)->with(['jobGroups.units' => function ($query) {
            $query->orderBy('units.id');
        }, 'assessors'])->first();
        $mapa = Mapa::firstWhere('id', $scheme->id);

        return view('muk.mapa.mapa-02.show', [
            'scheme' => $scheme,
            'mapa' => $mapa,
        ]);
    }

    public function postMapa02(Request $request)
    {
        // return $request->all();

        $jobGroups = $request->jobGroups;

        foreach ($jobGroups as  $jobGroup) {
            JobGroup::where('id', $jobGroup['id'])->update([
                'instrument1' => !isset($jobGroup['instrument1']) ? null : implode(' zzz ', $jobGroup['instrument1']),
                'instrument2' => !isset($jobGroup['instrument2']) ? null : implode(' zzz ', $jobGroup['instrument2']),
                'instrument3' => !isset($jobGroup['instrument3']) ? null : implode(' zzz ', $jobGroup['instrument3']),
                'instrument4a' => !isset($jobGroup['instrument4a']) ? null : implode(' zzz ', $jobGroup['instrument4a']),
                'instrument4b' => !isset($jobGroup['instrument4b']) ? null : implode(' zzz ', $jobGroup['instrument4b']),
                'instrument5' => !isset($jobGroup['instrument5']) ? null : implode(' zzz ', $jobGroup['instrument5']),
                'instrument6' => !isset($jobGroup['instrument6']) ? null : implode(' zzz ', $jobGroup['instrument6']),
                'instrument7' => !isset($jobGroup['instrument7']) ? null : implode(' zzz ', $jobGroup['instrument7']),
                'instrument8' => !isset($jobGroup['instrument8']) ? null : implode(' zzz ', $jobGroup['instrument8']),
                'instrument9' => !isset($jobGroup['instrument9']) ? null : implode(' zzz ', $jobGroup['instrument9']),
                'instrument10' => !isset($jobGroup['instrument10']) ? null : implode(' zzz ', $jobGroup['instrument10']),
                'instrument11' => !isset($jobGroup['instrument11']) ? null : implode(' zzz ', $jobGroup['instrument11']),
            ]);
        }

        alert()->success('Data berhasil disimpan!');

        return redirect()->back();
    }

    public function exportMapa02(string $schemeId)
    {
        $registration = Registration::first();
        $accession = Accession::where('scheme_id', $schemeId)->first();
        $filename = '6. FR.MAPA 02. Peta Instrumen Asesmen';
        $jobGroups = JobGroup::where('scheme_id', $schemeId)->with('units')->get();
        $mapa = Mapa::firstWhere('id', $schemeId);
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'schemeName' => $accession->scheme->name,
            'schemeCode' => $accession->scheme->code,
            'makerName' => explode(' zzz ', $mapa->makers)[0],
            'validatorName' => explode(' zzz ', $mapa->validators)[0],
        ]);

        $newJobGroups = $jobGroups->map(fn ($jobGroup) => [
            'jobGroupName' => $jobGroup->name,
            'instrument1a' => $templateProcessor->setCheckbox('instrument1a', in_array('1', explode(' zzz ', $jobGroup->instrument1))),
            'instrument1b' => $templateProcessor->setCheckbox('instrument1b', in_array('2', explode(' zzz ', $jobGroup->instrument1))),
            'instrument1c' => $templateProcessor->setCheckbox('instrument1c', in_array('3', explode(' zzz ', $jobGroup->instrument1))),
            'instrument1d' => $templateProcessor->setCheckbox('instrument1d', in_array('4', explode(' zzz ', $jobGroup->instrument1))),
            'instrument1e' => $templateProcessor->setCheckbox('instrument1e', in_array('5', explode(' zzz ', $jobGroup->instrument1))),

            'instrument2a' => $templateProcessor->setCheckbox('instrument2a', in_array('1', explode(' zzz ', $jobGroup->instrument2))),
            'instrument2b' => $templateProcessor->setCheckbox('instrument2b', in_array('2', explode(' zzz ', $jobGroup->instrument2))),
            'instrument2c' => $templateProcessor->setCheckbox('instrument2c', in_array('3', explode(' zzz ', $jobGroup->instrument2))),
            'instrument2d' => $templateProcessor->setCheckbox('instrument2d', in_array('4', explode(' zzz ', $jobGroup->instrument2))),
            'instrument2e' => $templateProcessor->setCheckbox('instrument2e', in_array('5', explode(' zzz ', $jobGroup->instrument2))),

            'instrument3a' => $templateProcessor->setCheckbox('instrument3a', in_array('1', explode(' zzz ', $jobGroup->instrument3))),
            'instrument3b' => $templateProcessor->setCheckbox('instrument3b', in_array('2', explode(' zzz ', $jobGroup->instrument3))),
            'instrument3c' => $templateProcessor->setCheckbox('instrument3c', in_array('3', explode(' zzz ', $jobGroup->instrument3))),
            'instrument3d' => $templateProcessor->setCheckbox('instrument3d', in_array('4', explode(' zzz ', $jobGroup->instrument3))),
            'instrument3e' => $templateProcessor->setCheckbox('instrument3e', in_array('5', explode(' zzz ', $jobGroup->instrument3))),

            'instrument4a1' => $templateProcessor->setCheckbox('instrument4a1', in_array('1', explode(' zzz ', $jobGroup->instrument4a))),
            'instrument4b1' => $templateProcessor->setCheckbox('instrument4b1', in_array('2', explode(' zzz ', $jobGroup->instrument4a))),
            'instrument4c1' => $templateProcessor->setCheckbox('instrument4c1', in_array('3', explode(' zzz ', $jobGroup->instrument4a))),
            'instrument4d1' => $templateProcessor->setCheckbox('instrument4d1', in_array('4', explode(' zzz ', $jobGroup->instrument4a))),
            'instrument4e1' => $templateProcessor->setCheckbox('instrument4e1', in_array('5', explode(' zzz ', $jobGroup->instrument4a))),

            'instrument4a2' => $templateProcessor->setCheckbox('instrument4a2', in_array('1', explode(' zzz ', $jobGroup->instrument4b))),
            'instrument4b2' => $templateProcessor->setCheckbox('instrument4b2', in_array('2', explode(' zzz ', $jobGroup->instrument4b))),
            'instrument4c2' => $templateProcessor->setCheckbox('instrument4c2', in_array('3', explode(' zzz ', $jobGroup->instrument4b))),
            'instrument4d2' => $templateProcessor->setCheckbox('instrument4d2', in_array('4', explode(' zzz ', $jobGroup->instrument4b))),
            'instrument4e2' => $templateProcessor->setCheckbox('instrument4e2', in_array('5', explode(' zzz ', $jobGroup->instrument4b))),

            'instrument5a' => $templateProcessor->setCheckbox('instrument5a', in_array('1', explode(' zzz ', $jobGroup->instrument5))),
            'instrument5b' => $templateProcessor->setCheckbox('instrument5b', in_array('2', explode(' zzz ', $jobGroup->instrument5))),
            'instrument5c' => $templateProcessor->setCheckbox('instrument5c', in_array('3', explode(' zzz ', $jobGroup->instrument5))),
            'instrument5d' => $templateProcessor->setCheckbox('instrument5d', in_array('4', explode(' zzz ', $jobGroup->instrument5))),
            'instrument5e' => $templateProcessor->setCheckbox('instrument5e', in_array('5', explode(' zzz ', $jobGroup->instrument5))),

            'instrument6a' => $templateProcessor->setCheckbox('instrument6a', in_array('1', explode(' zzz ', $jobGroup->instrument6))),
            'instrument6b' => $templateProcessor->setCheckbox('instrument6b', in_array('2', explode(' zzz ', $jobGroup->instrument6))),
            'instrument6c' => $templateProcessor->setCheckbox('instrument6c', in_array('3', explode(' zzz ', $jobGroup->instrument6))),
            'instrument6d' => $templateProcessor->setCheckbox('instrument6d', in_array('4', explode(' zzz ', $jobGroup->instrument6))),
            'instrument6e' => $templateProcessor->setCheckbox('instrument6e', in_array('5', explode(' zzz ', $jobGroup->instrument6))),

            'instrument7a' => $templateProcessor->setCheckbox('instrument7a', in_array('1', explode(' zzz ', $jobGroup->instrument7))),
            'instrument7b' => $templateProcessor->setCheckbox('instrument7b', in_array('2', explode(' zzz ', $jobGroup->instrument7))),
            'instrument7c' => $templateProcessor->setCheckbox('instrument7c', in_array('3', explode(' zzz ', $jobGroup->instrument7))),
            'instrument7d' => $templateProcessor->setCheckbox('instrument7d', in_array('4', explode(' zzz ', $jobGroup->instrument7))),
            'instrument7e' => $templateProcessor->setCheckbox('instrument7e', in_array('5', explode(' zzz ', $jobGroup->instrument7))),

            'instrument8a' => $templateProcessor->setCheckbox('instrument8a', in_array('1', explode(' zzz ', $jobGroup->instrument8))),
            'instrument8b' => $templateProcessor->setCheckbox('instrument8b', in_array('2', explode(' zzz ', $jobGroup->instrument8))),
            'instrument8c' => $templateProcessor->setCheckbox('instrument8c', in_array('3', explode(' zzz ', $jobGroup->instrument8))),
            'instrument8d' => $templateProcessor->setCheckbox('instrument8d', in_array('4', explode(' zzz ', $jobGroup->instrument8))),
            'instrument8e' => $templateProcessor->setCheckbox('instrument8e', in_array('5', explode(' zzz ', $jobGroup->instrument8))),

            'instrument9a' => $templateProcessor->setCheckbox('instrument9a', in_array('1', explode(' zzz ', $jobGroup->instrument9))),
            'instrument9b' => $templateProcessor->setCheckbox('instrument9b', in_array('2', explode(' zzz ', $jobGroup->instrument9))),
            'instrument9c' => $templateProcessor->setCheckbox('instrument9c', in_array('3', explode(' zzz ', $jobGroup->instrument9))),
            'instrument9d' => $templateProcessor->setCheckbox('instrument9d', in_array('4', explode(' zzz ', $jobGroup->instrument9))),
            'instrument9e' => $templateProcessor->setCheckbox('instrument9e', in_array('5', explode(' zzz ', $jobGroup->instrument9))),

            'instrument10a' => $templateProcessor->setCheckbox('instrument10a', in_array('1', explode(' zzz ', $jobGroup->instrument10))),
            'instrument10b' => $templateProcessor->setCheckbox('instrument10b', in_array('2', explode(' zzz ', $jobGroup->instrument10))),
            'instrument10c' => $templateProcessor->setCheckbox('instrument10c', in_array('3', explode(' zzz ', $jobGroup->instrument10))),
            'instrument10d' => $templateProcessor->setCheckbox('instrument10d', in_array('4', explode(' zzz ', $jobGroup->instrument10))),
            'instrument10e' => $templateProcessor->setCheckbox('instrument10e', in_array('5', explode(' zzz ', $jobGroup->instrument10))),

            'instrument11a' => $templateProcessor->setCheckbox('instrument11a', in_array('1', explode(' zzz ', $jobGroup->instrument11))),
            'instrument11b' => $templateProcessor->setCheckbox('instrument11b', in_array('2', explode(' zzz ', $jobGroup->instrument11))),
            'instrument11c' => $templateProcessor->setCheckbox('instrument11c', in_array('3', explode(' zzz ', $jobGroup->instrument11))),
            'instrument11d' => $templateProcessor->setCheckbox('instrument11d', in_array('4', explode(' zzz ', $jobGroup->instrument11))),
            'instrument11e' => $templateProcessor->setCheckbox('instrument11e', in_array('5', explode(' zzz ', $jobGroup->instrument11))),
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
        }

        $scheme = Scheme::firstWhere('id', $schemeId)->code;
        $ta =  Str::replace('/', '-', $registration->periode);
        $smt = $registration->semester;
        $savedFilename = "$filename - $scheme - $ta - $smt.docx";
        $pathToSave = storage_path("app/public/muk/$savedFilename");
        $templateProcessor->saveAs($pathToSave);

        // echo "<script>
        //     window.open('https://docs.google.com/viewerng/viewer?url=http://tugas-akhir.test/storage/muk/$savedFilename', '_blank');
        //     window.close();
        // </script>";

        return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");
    }
}
