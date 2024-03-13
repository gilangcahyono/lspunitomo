<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use Illuminate\Http\Request;

class AssesmentRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "dsfsdgds";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assesment-registration.create', [
            'schemes' => Scheme::select('code', 'name')->without('unit.element.kuk')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => ['required', 'string'],
            'name' => ['required', 'string'],
            'faculty' => ['required', 'string'],
            'department' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'semester' => ['required', 'string'],
            'nik' => ['required', 'string'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'province' => ['required', 'string'],
            'lastEducation' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'scheme' => ['required', 'string', 'exists:schemes,code'],
            'phoneNumber' => ['required', 'string'],
            'ijazah' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1048'],
            'transkrip' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1048'],
            'idCard' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1048'],
            'foto' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1048'],

        ]);

        return $validatedData;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
