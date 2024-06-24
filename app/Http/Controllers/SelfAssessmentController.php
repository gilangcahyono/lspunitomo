<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Assessor;
use App\Models\ErrorReg;
use App\Models\Scheme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SelfAssessmentController extends Controller
{
    public function candidates(Request $request)
    {

        if (!Gate::allows('admin')) {
            $assessor =  Assessor::firstWhere('nidn', auth()->user()->username);
            if ($request->scheme_id != null) {
                $candidates = Accession::where('scheme_id', $request->scheme_id)
                    ->where('assessor_id', $assessor->id)
                    ->orderBy('assessor_id')
                    ->with('assessor')
                    ->paginate($request->show ?? 10)
                    ->withQueryString();
            } else {
                $candidates = Accession::where('assessor_id', $assessor->id)
                    ->orderBy('assessor_id')
                    ->with('assessor')
                    ->paginate($request->show ?? 10)
                    ->withQueryString();
            }
        } else {
            if ($request->scheme_id != null) {
                $candidates = Accession::where('scheme_id', $request->scheme_id)
                    ->where('assessor_id', '!=', null)
                    ->orderBy('assessor_id')
                    ->with('assessor')
                    ->paginate($request->show ?? 10)
                    ->withQueryString();
            } else {
                $candidates = Accession::where('assessor_id', '!=', null)
                    ->orderBy('assessor_id')
                    ->with('assessor')
                    ->paginate($request->show ?? 10)
                    ->withQueryString();
            }
        }

        return view('apl-02.candidates', [
            'candidates' => $candidates,
            'schemes' => Scheme::select('id', 'code', 'name')->without('units')->get(),
        ]);
    }

    public function candidate(Accession $accession)
    {
        // $assessors = Assessor::where('scheme_id', $accession->scheme->id)->get();
        // return $accession;
        return view('apl-02.candidate', [
            'candidate' => $accession,
            // 'assessors' => $assessors
        ]);
    }

    public function process(Accession $accession)
    {
        // return lateSchedule($accession->selfAssessmentSchedule);

        if (lateSchedule($accession->selfAssessmentSchedule)) {
            abort(404);
        }

        // return json_decode($accession->elementValue);

        $accession->load('scheme.units.elements.kuks');
        return view('apl-02.process', [
            'candidate' => $accession,
            'elements' => collect(json_decode($accession->elementValue))->toArray(),
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $errorReg = ErrorReg::firstWhere('nim', $request->nim);

        if ($errorReg) {
            $errorReg->delete();
        }

        $validatedData = $request->validate([
            'registrationNumber' => ['required', 'string', 'exists:accessions,registrationNumber'],
        ]);

        $validatedData['elementValue'] = json_encode($request->all());

        $accession = Accession::firstWhere('registrationNumber', $validatedData['registrationNumber']);

        if (lateSchedule($accession->selfAssessmentSchedule)) {
            abort(404);
        }

        $accession->update([
            'processed' => true,
            'elementValue' => $validatedData['elementValue']
        ]);

        alert()->success('Berkas anda telah tersimpan!', 'Selalu cek dashboard anda untuk mengetahui informasi selanjutnya.')->persistent(false, false);
        return to_route('dashboard');
    }

    public function result(Accession $accession)
    {
        $accession->load('scheme.units.elements.kuks');
        $accession->elementValue = json_decode($accession->elementValue);
        $elementValues = collect($accession->elementValue)->toArray();

        return view('apl-02.result', [
            'candidate' => $accession,
            'elementValues' => $elementValues,
        ]);
    }

    public function review(Request $request, Accession $accession)
    {
        // return $request->all();

        if ($request->recommended === "0") {
            ErrorReg::create([
                'nim' => $request->nim,
                'type' => 'self-assessment',
                // 'errors' => json_encode($request->elements),
            ]);

            $accession->update([
                'selfAssessmentSchedule' => Carbon::now()->addDays(2)->setTime(00, 00, 00),
                // 'elementValue' => null
            ]);

            alert()->success('Calon asesi akan merevisi asesmen mandiri!');

            return to_route('accession.candidates');
        }

        $accession->update([
            'recommended' => $request->recommended,
            'recommendedAt' => $request->recommended ? now() : null,
        ]);

        alert()->success('Data berhasil disimpan!');

        return to_route('accession.candidates');
    }

    public function reschedule(Request $request, Accession $accession)
    {
        $accession->update([
            'selfAssessmentSchedule' => $request->selfAssessmentSchedule,
        ]);

        alert()->success('Jadwal berhasil diubah!');

        return to_route('accession.candidates');
    }
}
