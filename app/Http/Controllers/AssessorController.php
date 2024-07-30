<?php

namespace App\Http\Controllers;

use App\Models\Assessor;
use App\Models\Scheme;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;

class AssessorController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('admin');

        $assessors =  Assessor::where('name', 'like', "%$request->search%")->without('accessions')->paginate($request->show ?? 10)->withQueryString();

        return view('master.assessor.index', [
            'assessors' => $assessors,
            'assessorLists' => Assessor::select('name')->without('accessions')->get(),
        ]);
    }

    public function create(Request $request)
    {
        $this->authorize('admin');

        $lecture = getLecturers()->where('nidn', $request->nidn)->first();
        return view('master.assessor.create', [
            'lecture' => $lecture,
            'schemes' => Scheme::select('id', 'name')->without('units.elements.kuks')->get()
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('admin');

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

    public function show(Assessor $assessor)
    {
        $this->authorize('admin');

        $assessor->account = User::find($assessor->user_id);
        return view('master.assessor.show', [
            'assessor' => $assessor,
        ]);
    }

    public function edit(Assessor $assessor)
    {
        $this->authorize('admin');
        // return $assessor;
        return view('master.assessor.edit', [
            'assessor' => $assessor,
            'schemes' => Scheme::select('id', 'name')
                ->without('units.elements.kuks')
                ->get()
        ]);
    }

    public function update(Request $request, Assessor $assessor)
    {
        $this->authorize('admin');

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

    public function destroy(Assessor $assessor)
    {
        $this->authorize('admin');

        $assessor->delete();
        alert()->success('Asesor berhasil dihapus!');
        return to_route('assessors.index');
    }

    public function analysis()
    {
        $this->authorize('admin');

        $assessors = Assessor::withCount(['accessions' => function ($query) {
            $query->where('assessed', true);
        }])
            ->orderBy('scheme_id')
            ->get();


        return view('master.assessor.analysis', [
            'assessors' => $assessors
        ]);
    }
}
