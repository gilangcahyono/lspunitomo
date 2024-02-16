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
    public function index()
    {
        return view('master.element.index', [
            'elements' => Element::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('master.element.create', [
            'units' => Unit::select('code', 'name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['required'],
            'unit_code' => ['required', 'exists:units,code'],
        ]);

        Element::create($validatedData);

        return redirect(route('elements.index'))->with('success', 'Elemen berhasil ditambahkan!');
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
            'units' => Unit::select('code', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Element $element)
    {
        $validatedData =  $request->validate([
            'name' => ['required'],
            'unit_code' => ['required', 'exists:units,code'],
        ]);

        $element->update($validatedData);

        return redirect(route('elements.index'))->with('success', 'Elemen berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Element $element)
    {
        $element->delete();

        return redirect(route('elements.index'))->with('success', 'Elemen berhasil dihapus!');
    }
}
