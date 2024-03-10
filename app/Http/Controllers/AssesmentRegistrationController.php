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
            'schemes' => Scheme::select('code', 'name')->without('unit.element.kuk')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => ['required'],
            'name' => ['required'],
            'faculty' => ['required'],
            'department' => ['required'],
            'gender' => ['required'],
            'semester' => ['required'],
            'nik' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'province' => ['required'],
            'lastEducation' => ['required'],
            'occupation' => ['required'],
            'phoneNumber' => ['required'],
            'payment' => ['required'],
            'ijazah' => ['required'],
            'transkrip' => ['required'],
            'ktp' => ['required'],
            'ktm' => ['required'],

        ]);

        return $request->all();
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
