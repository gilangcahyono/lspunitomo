<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use App\Models\SelfAssessment;
use Illuminate\Http\Request;

class SelfAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return Scheme::inRandomOrder()->first();
        return view('self-assesment.create', [
            'scheme' => Scheme::inRandomOrder()->with('unit.element.kuk')->first(),
        ]);
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
    public function show(SelfAssessment $selfAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SelfAssessment $selfAssessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SelfAssessment $selfAssessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SelfAssessment $selfAssessment)
    {
        //
    }
}
