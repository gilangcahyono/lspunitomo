<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('master.scheme.index', [
            'schemes' => Scheme::latest()
                ->where('code', 'like', "%$request->search%")
                ->with('unit')
                ->paginate(5)
                ->withQueryString(),
            'schemeLists' => Scheme::select('code', 'name')->without('unit')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.scheme.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate(
            [
                'code' => ['required', 'unique:schemes,code', 'max:13'],
                'name' => ['required'],
                'type' => ['required'],
                'skkni' => ['required', 'unique:schemes,skkni', 'max:8'],
                'faculty' => ['required'],
                'department' => ['required'],
                'status' => ['required'],
                'basicRequirement' => ['required'],
            ]
        );

        Scheme::create($validatedData);

        return to_route('schemes.index')->with('success', 'Skema berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Scheme $scheme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scheme $scheme)
    {
        return view('master.scheme.edit', [
            'scheme' => $scheme
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scheme $scheme)
    {
        $validatedData = $request->validate(
            [
                'code' => ['required', 'exists:schemes,code', 'max:13'],
                'name' => ['required'],
                'type' => ['required'],
                'skkni' => ['required', 'max:8'],
                'faculty' => ['required'],
                'department' => ['required'],
                'status' => ['required'],
                'basicRequirement' => ['required'],
            ]
        );

        $scheme->update($validatedData);

        return to_route('schemes.index')->with('success', 'Skema berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scheme $scheme)
    {
        $scheme->delete();

        return to_route('schemes.index')->with('success', 'Skema berhasil dihapus!');
    }

    public function search(Request $request)
    {
        // try {
        return Scheme::latest()
            ->where('name', 'like', "%$request->keyword%")
            ->orWhere('code', 'like', "%$request->keyword%")
            // ->without('unit')
            // ->get();
            ->paginate(5);
        // } catch (\Throwable $th) {
        //     // throw $th;
        //     return response([
        //         'success' => false,
        //         'message' => 'Internal Server Error',
        //     ], 500);
        // }
    }
}
