<?php

namespace App\Http\Controllers;

use App\Models\Assessor;
use App\Models\Scheme;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;

class AssessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $assessors =  Assessor::where('name', 'like', "%$request->search%")->without('accessions')->paginate($request->show ?? 5)->withQueryString();

        return view('master.assessor.index', [
            'assessors' => $assessors,
            'assessorLists' => Assessor::select('name')->without('accessions')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $lecture = getLecturers()->where('nidn', $request->nidn)->first();
        return view('master.assessor.create', [
            'lecture' => $lecture,
            'schemes' => Scheme::select('id', 'name')->without('units.elements.kuks')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nidn' => ['required', 'string', 'unique:assessors,nidn'],
                'name' => ['required', 'string',],
                'nik' => ['required', 'string', 'unique:assessors,nik'],
                'gender' => ['required', 'string'],
                'birthPlace' => ['required', 'string'],
                'birthDate' => ['required', 'date'],
                'citizen' => ['required', 'string'],
                'lastEducation' => ['required', 'string'],
                'address' => ['required', 'string'],
                'neighbourhood' => ['required', 'string'],
                'village' => ['required', 'string'],
                'district' => ['required', 'string'],
                'city' => ['required', 'string'],
                'province' => ['required', 'string'],
                'postalCode' => ['required', 'string'],
                'department' => ['nullable', 'string'],
                'telephone' => ['nullable', 'string'],
                'mobile' => ['required', 'string'],
                'email' => ['required', 'string'],
                'scheme_id' => ['required', 'exists:schemes,id'],
                'metRegistrationNumber' => ['required', 'string', 'unique:assessors,metRegistrationNumber'],
                'occupation' => ['required', 'string'],
                'technicalCompetence' => ['required', 'string'],
                'tmtMet' => ['required', 'date'],
                'expiredMet' => ['required', 'date'],
                'rcc' => ['required', 'date'],
                'expiredRcc' => ['required', 'date'],
                'statusMet' => ['required', 'string'],
            ]);
        } catch (\Throwable $e) {
            dd($e);
        }

        $userDb = User::firstWhere('username', trim($request->nidn));
        $userApi = getAccounts()->where('username', trim($request->nidn))->first();

        if ($userDb) {
            $validatedData['pin'] = $userDb->password;
            $validatedData['user_id'] = $userDb->id;
        }
        if ($userApi) {
            $createduser = User::create([
                'username' => $request->nidn,
                'password' => $userApi['password'],
                'type' => 'external',
            ]);
            UserRole::create([
                'user_id' => $createduser['id'],
                'role_id' => 2,
            ]);
            $validatedData['pin'] = $createduser->password;
            $validatedData['user_id'] = $createduser->id;
        } else {
            $createduser = User::create([
                'username' => $request->nidn,
                'password' => fake()->randomNumber(4, true),
                'type' => 'external',
            ]);
            UserRole::create([
                'user_id' => $createduser['id'],
                'role_id' => 2,
            ]);
            $validatedData['pin'] = $createduser->password;
            $validatedData['user_id'] = $createduser->id;
        }

        Assessor::create($validatedData);
        alert()->success('Asesor berhasil ditambahkan!');
        return to_route('assessors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assessor $assessor)
    {
        $assessor->account = User::find($assessor->user_id);
        return view('master.assessor.show', [
            'assessor' => $assessor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assessor $assessor)
    {
        // return $assessor;
        return view('master.assessor.edit', [
            'assessor' => $assessor,
            'schemes' => Scheme::select('id', 'name')
                ->without('units.elements.kuks')
                ->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assessor $assessor)
    {
        $validatedData = $request->validate([
            'nidn' => ['required', 'string'],
            'name' => ['required', 'string',],
            'nik' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'birthPlace' => ['required', 'string'],
            'birthDate' => ['required', 'date'],
            'citizen' => ['required', 'string'],
            'lastEducation' => ['required', 'string'],
            'address' => ['required', 'string'],
            'neighbourhood' => ['required', 'string'],
            'village' => ['required', 'string'],
            'district' => ['required', 'string'],
            'city' => ['required', 'string'],
            'province' => ['required', 'string'],
            'postalCode' => ['required', 'string'],
            'department' => ['nullable', 'string'],
            'telephone' => ['nullable', 'string'],
            'mobile' => ['required', 'string'],
            'email' => ['required', 'string'],
            'scheme_id' => ['required', 'exists:schemes,id'],
            'metRegistrationNumber' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'technicalCompetence' => ['required', 'string'],
            'tmtMet' => ['required', 'date'],
            'expiredMet' => ['required', 'date'],
            'rcc' => ['required', 'date'],
            'expiredRcc' => ['required', 'date'],
            'statusMet' => ['required', 'string'],
        ]);

        $assessor->update($validatedData);
        alert()->success('Asesor berhasil diubah!');
        return to_route('assessors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assessor $assessor)
    {
        $assessor->delete();
        alert()->success('Asesor berhasil dihapus!');
        return to_route('assessors.index');
    }
}
