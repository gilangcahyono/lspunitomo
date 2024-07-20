<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Scheme;
use Illuminate\Http\Request;

class AccessionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->scheme_id != null) {
            $accessions = Accession::where('recommended', true)
                ->where('scheme_id', $request->scheme_id)
                ->orderBy('scheme_id')
                ->orderBy('registeredAt', 'desc')
                ->paginate($request->show ?? 10)
                ->withQueryString();
        } else {
            $accessions = Accession::where('recommended', true)
                ->orderBy('scheme_id')
                ->orderBy('registeredAt', 'desc')
                ->paginate($request->show ?? 10)
                ->withQueryString();
        }

        return view('master.accession.index', [
            'accessions' => $accessions,
            'schemes' => Scheme::select('id', 'code', 'name')->without('units')->get(),
        ]);
    }

    public function show(Accession $accession)
    {
        return view('accession.show', [
            'accession' => $accession
        ]);
    }

    public function recommend(Request $request)
    {
        foreach ($request->accessions as $accession) {
            Accession::where('id', $accession)->update(['assessed' => true]);
        }

        alert()->success('Asesi direkomendasikan!');
        return to_route('accessions.index');
    }
}
