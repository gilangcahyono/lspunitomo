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
    public function index()
    {
        return view('master.unit.index', [
            'units' => Unit::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('master.unit.create', [
            'schemes' => Scheme::select('code', 'name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'code' => ['required', 'unique:units,code', 'max:13'],
            'name' => ['required'],
            'scheme_code' => ['required', 'exists:schemes,code'],
        ]);

        Unit::create($validatedData);

        return redirect(route('units.index'))->with('success', 'Unit berhasil ditambahkan!');
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
            'schemes' => Scheme::select('code', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        $validatedData =  $request->validate([
            'code' => ['required', 'max:13'],
            'name' => ['required'],
            'scheme_code' => ['required', 'exists:schemes,code'],
        ]);

        $unit->update($validatedData);

        return redirect(route('units.index'))->with('success', 'Unit berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect(route('units.index'))->with('success', 'Unit berhasil dihapus!');
    }
}
