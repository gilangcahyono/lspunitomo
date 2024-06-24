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
        $schemes =  Scheme::with('units')->get();
        return view('master.scheme.index', [
            'schemes' =>   $schemes,
            'schemeLists' => Scheme::select('code', 'name')->without('units')->get(),
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
    public function store(Request $request)
    {
        // return $request->all();

        $request->merge([
            'basicRequirements' => implode(' zzz ', $request->input('basicRequirements'))
        ]);

        $validatedData = $request->validate(
            [
                'code' => ['required', 'unique:schemes,code'],
                'name' => ['string', 'required'],
                'type' => ['string', 'required'],
                'licenseNumber' => ['string', 'required'],
                'faculty' => ['string', 'required'],
                'department' => ['string', 'required'],
                'status' => ['string', 'required'],
                'skkni' => ['string', 'required'],
                'basicRequirements' => ['string', 'required'],
            ]
        );

        Scheme::create($validatedData);

        alert()->success('Skema berhasil ditambahkan!');
        return to_route('schemes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Scheme $scheme)
    {
        return view('master.scheme.show', [
            'scheme' => $scheme
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scheme $scheme)
    {
        // return explode(' zzz ', $scheme->basicRequirements);
        return view('master.scheme.edit', [
            'scheme' => $scheme
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scheme $scheme)
    {
        // return $request->all();

        $request->merge([
            'basicRequirements' => implode(' zzz ', $request->input('basicRequirements'))
        ]);

        $validatedData = $request->validate(
            [
                'code' => ['string', 'required'],
                'name' => ['string', 'required'],
                'type' => ['string', 'required'],
                'licenseNumber' => ['string', 'required'],
                'faculty' => ['string', 'required'],
                'department' => ['string', 'required'],
                'status' => ['string', 'required'],
                'skkni' => ['string', 'required'],
                'basicRequirements' => ['string', 'required'],
            ]
        );

        try {
            $scheme->update($validatedData);
            alert()->success('Skema berhasil diubah!');
        } catch (\Throwable $th) {
            alert()->error('Oops...', 'Something went wrong!');
        } finally {
            return to_route('schemes.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scheme $scheme)
    {
        $scheme->delete();
        alert()->success('Skema berhasil dihapus!');
        return to_route('schemes.index');
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
