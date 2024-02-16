<?php

namespace App\Http\Controllers;

use App\Models\Element;
use App\Models\Kuk;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master.kuk.index', [
            'kuks' => Kuk::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('master.kuk.create', [
            'elements' => Element::select('id', 'name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'element_id' => ['required', 'exists:elements,id'],
        ]);

        Kuk::create($validatedData);

        return redirect(route('kuks.index'))->with('success', 'KUK berhasilt ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kuk $kuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuk $kuk)
    {
        return view('master.kuk.edit', [
            'kuk' => $kuk,
            'elements' => Element::select('id', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kuk $kuk)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'element_id' => ['required', 'exists:elements,id'],
        ]);

        $kuk->update($validatedData);

        return redirect(route('kuks.index'))->with('success', 'KUK berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuk $kuk)
    {
        $kuk->delete();

        return redirect(route('kuks.index'))->with('success', 'KUK berhasil dihapus!');
    }
}
