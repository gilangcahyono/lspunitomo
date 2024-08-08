<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Assessor;
use App\Models\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AccessionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->scheme_id != null) {
            if (Gate::allows('assessor')) {
                $accessions = Accession::where('recommended', true)
                    ->where('assessor_id', auth())
                    ->where('scheme_id', $request->scheme_id)
                    ->orderBy('scheme_id')
                    ->orderBy('registeredAt', 'desc')
                    ->paginate($request->show ?? 10)
                    ->withQueryString();
            }

            if (Gate::allows('admin')) {
                $accessions = Accession::where('recommended', true)
                    ->where('scheme_id', $request->scheme_id)
                    ->orderBy('scheme_id')
                    ->orderBy('registeredAt', 'desc')
                    ->paginate($request->show ?? 10)
                    ->withQueryString();
            }
        } else {
            if (Gate::allows('assessor')) {
                $assessor = Assessor::firstWhere('nidn', auth()->user()->username);
                $accessions = Accession::where('recommended', true)
                    ->where('assessor_id', $assessor->id)
                    ->orderBy('scheme_id')
                    ->orderBy('registeredAt', 'desc')
                    ->paginate($request->show ?? 10)
                    ->withQueryString();
            }

            if (Gate::allows('admin')) {
                $accessions = Accession::where('recommended', true)
                    ->orderBy('scheme_id')
                    ->orderBy('registeredAt', 'desc')
                    ->paginate($request->show ?? 10)
                    ->withQueryString();
            }
        }

        return view('master.accession.index', [
            'accessions' => $accessions,
            'schemes' => Scheme::select('id', 'code', 'name')->without('units')->get(),
        ]);
    }

    public function recommend(Request $request)
    {
        $this->authorize('admin');

        foreach ($request->accessions as $accession) {
            Accession::where('id', $accession)->update(['assessed' => true]);
        }

        alert()->success('Asesi direkomendasikan!');
        return to_route('accessions.index');
    }
}
