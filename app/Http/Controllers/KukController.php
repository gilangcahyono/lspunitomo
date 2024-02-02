<?php

namespace App\Http\Controllers;

use App\Models\Kuk;
use Illuminate\Http\Request;

class KukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (request('api') == 'api') {
            # code...
            return Kuk::latest()->paginate(5);
        }

        return view('master.kuk.index', [
            'kuks' => Kuk::latest()->paginate(5),
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
    public function show(Kuk $kuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuk $kuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kuk $kuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuk $kuk)
    {
        //
    }
}
