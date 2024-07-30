<?php

namespace App\Http\Controllers;

use App\Models\Mapa;
use App\Models\Scheme;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SchemeController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('admin');

        $schemes =  Scheme::with('units')->get();
        return view('master.scheme.index', [
            'schemes' =>   $schemes,
            'schemeLists' => Scheme::select('code', 'name')->without('units')->get(),
        ]);
    }

    public function create()
    {
        $this->authorize('admin');

        return view('master.scheme.create');
    }

    public function store(Request $request)
    {
        $this->authorize('admin');

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

    public function show(Scheme $scheme)
    {
        $this->authorize('admin');

        return view('master.scheme.show', [
            'scheme' => $scheme
        ]);
    }

    public function edit(Scheme $scheme)
    {
        $this->authorize('admin');
        // return explode(' zzz ', $scheme->basicRequirements);
        return view('master.scheme.edit', [
            'scheme' => $scheme
        ]);
    }

    public function update(Request $request, Scheme $scheme)
    {
        $this->authorize('admin');
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

    public function destroy(Scheme $scheme)
    {
        $this->authorize('admin');

        $scheme->delete();
        alert()->success('Skema berhasil dihapus!');
        return to_route('schemes.index');
    }

    public function search(Request $request)
    {
        $this->authorize('admin');
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
