<?php

namespace App\Http\Controllers;

use App\Models\JobGroup;
use App\Models\Scheme;
use App\Models\Unit;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index()
    {
        $schemes = Scheme::all();

        return view('muk.peta.index', ['schemes' => $schemes]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $jobGroups = $request->jobGroups;
        $units = collect(array_values($request->units))->map(fn ($unit) => [
            'id' => $unit['id'],
            'criticalAspect' => $unit['criticalAspect'],
            'elementAndKuk' => $unit['elementAndKuk'],
            'dpt' => !isset($unit['dpt']) ? null : $unit['dpt'],
            'dpl' => !isset($unit['dpl']) ? null : $unit['dpl'],
            'pw' => !isset($unit['pw']) ? null : $unit['pw'],
            'vpk' => !isset($unit['vpk']) ? null : $unit['vpk'],
        ]);

        foreach ($jobGroups as $key => $jobGroup) {
            JobGroup::where('id', $key)->update([
                'tpd' => $jobGroup['tpd'],
                'pmo' => $jobGroup['pmo'],
                'dit' => $jobGroup['dit'],
            ]);
        }

        foreach ($units as $unit) {
            Unit::where('id', $unit['id'])->update([
                'criticalAspect' => $unit['criticalAspect'],
                'elementAndKuk' => $unit['elementAndKuk'],
                'dpt' => $unit['dpt'],
                'dpl' => $unit['dpl'],
                'pw' => $unit['pw'],
                'vpk' => $unit['vpk'],
            ]);
        }

        alert()->success('Data berhasil disimpan!');

        return redirect()->back();
    }

    public function show(string $schemeId)
    {
        $scheme = Scheme::where('id', $schemeId)->with(['jobGroups.units'])->first();

        return view('muk.peta.show', ['scheme' => $scheme]);
    }
}
