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
    public function index(Request $request)
    {
        $kuks = Kuk::where('name', 'like', "%$request->search%")
            ->paginate($request->show ?? 5)
            ->withQueryString();

        return view('master.kuk.index', [
            'kuks' => $kuks,
            'kukLists' => Kuk::select('name')->get(),
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
            'name' => ['string', 'required'],
            'element_id' => ['required', 'exists:elements,id'],
        ]);

        Kuk::create($validatedData);
        alert()->success('KUK berhasil ditambahkan!');
        return to_route('kuks.index');
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
            'name' => ['string', 'required'],
            'element_id' => ['required', 'exists:elements,id'],
        ]);

        $kuk->update($validatedData);
        alert()->success('KUK berhasil diubah!');
        return to_route('kuks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuk $kuk)
    {
        $kuk->delete();
        alert()->success('KUK berhasil dihapus!');
        return to_route('kuks.index');
    }
}
