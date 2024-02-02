<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SkemaController extends Controller
{
    public function index()
    {
        // return Skema::latest()->with('unit')->paginate(5);
        return view('master.skema.index', [
            'skemas' => Skema::latest()->with('unit')->paginate(5)
        ]);
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function search(Request $request)
    {
        $skemas = Skema::latest('created_at')
            ->where('name', 'like', "%$request->keyword%")
            // ->orWhere('code', 'like', '%' . $request->keyword . '%')
            ->with('unit')
            ->paginate(5);

        return $skemas->count() > 0 ? $skemas : response()->json(['message' => 'Data tidak ditemukan'], 404);
    }
}
