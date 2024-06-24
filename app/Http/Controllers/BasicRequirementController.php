<?php

namespace App\Http\Controllers;

use App\Models\BasicRequirement;
use Illuminate\Http\Request;

class BasicRequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basicRequirements = BasicRequirement::paginate(5)->withQueryString();
        $basicRequirements->load('schemes');

        return view('master.basic-requirement.index', [
            'basicRequirements' => $basicRequirements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BasicRequirement $basicRequirement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BasicRequirement $basicRequirement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BasicRequirement $basicRequirement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BasicRequirement $basicRequirement)
    {
        //
    }
}
