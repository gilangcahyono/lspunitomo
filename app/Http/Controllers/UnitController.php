<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->scheme_id != null) {
            $units = Unit::where('scheme_id', "$request->scheme_id")
                ->orderBy('scheme_id')
                ->with('elements')
                ->paginate($request->show ?? 10)
                ->withQueryString();
        } else {
            $units = Unit::with('elements')
                ->orderBy('scheme_id')
                ->paginate($request->show ?? 10)
                ->withQueryString();
        }

        return view('master.unit.index', [
            'units' => $units,
            // 'unitLists' => Unit::select('code', 'name')->without('elements')->get(),
            'schemes' => Scheme::select('id', 'code', 'name')->without('units')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return Scheme::select('id', 'name')->get();
        return view('master.unit.create', [
            'schemes' => Scheme::select('id', 'name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        // $scheme_id = trim(explode('-', $request->scheme_id)[0]);
        // $request->scheme_id = $scheme_id;

        $validatedData =  $request->validate([
            'code' => ['required', 'string'],
            'name' => ['string', 'required'],
            // 'scheme_id' => $scheme_id,
            'scheme_id' => ['required', 'exists:schemes,id',],
        ]);

        // $validatedData['scheme_id'] = $scheme_id;

        Unit::create($validatedData);
        alert()->success('Unit berhasil ditambahkan!');
        return redirect(route('units.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        return view('master.unit.edit', [
            'unit' => $unit,
            'schemes' => Scheme::select('id', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        $validatedData =  $request->validate([
            'code' => ['string', 'required'],
            'name' => ['string', 'required'],
            'scheme_id' => ['string', 'required', 'exists:schemes,id'],
        ]);

        $unit->update($validatedData);
        alert()->success('Unit berhasil diubah!');
        return to_route('units.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        alert()->success('Unit berhasil dihapus!');
        return to_route('units.index');
    }
}
