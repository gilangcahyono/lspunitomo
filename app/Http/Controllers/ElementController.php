<?php

namespace App\Http\Controllers;

use App\Models\Element;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $elements = Element::where('name', 'like', "%$request->search%")
            ->with('kuks')
            ->paginate($request->show ?? 5)
            ->withQueryString();

        return view('master.element.index', [
            'elements' => $elements,
            'elementLists' => Element::select('name')->without('kuks')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('master.element.create', [
            'units' => Unit::select('id', 'name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['string', 'required'],
            'unit_id' => ['required', 'exists:units,id'],
        ]);

        Element::create($validatedData);
        alert()->success('Elemen berhasil ditambahkan!');
        return to_route('elements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Element $element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Element $element)
    {
        return view('master.element.edit', [
            'element' => $element,
            'units' => Unit::select('id', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Element $element)
    {
        $validatedData =  $request->validate([
            'name' => ['required'],
            'unit_id' => ['required', 'exists:units,id'],
        ]);

        $element->update($validatedData);
        alert()->success('Elemen berhasil diubah!');
        return to_route('elements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Element $element)
    {
        $element->delete();
        alert()->success('Elemen berhasil dihapus!');
        return to_route('elements.index');
    }
}
