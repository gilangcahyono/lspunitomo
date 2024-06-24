<?php

namespace App\Http\Controllers;

use App\Models\JobGroup;
use App\Models\Scheme;
use App\Models\Unit;
use Illuminate\Http\Request;

class JobGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jobGroups =  JobGroup::where('name', 'like', "%$request->search%")
            ->with(['scheme', 'units'])
            ->paginate($request->show ?? 10)
            ->withQueryString();

        if ($request->scheme_id != null) {
            $jobGroups =  JobGroup::where('scheme_id', "$request->scheme_id")
                ->orderBy('scheme_id')
                ->with(['scheme', 'units'])
                ->paginate($request->show ?? 10)
                ->withQueryString();
        } else {
            $jobGroups =  JobGroup::orderBy('scheme_id')
                ->with(['scheme', 'units'])
                ->paginate($request->show ?? 10)
                ->withQueryString();
        }

        return view('master.job-group.index', [
            'jobGroups' => $jobGroups,
            // 'jobGroupLists' => JobGroup::select('name')->get(),
            'schemes' => Scheme::select('id', 'code', 'name')->without('units')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('master.job-group.create', [
            'schemes' => Scheme::select('id', 'name')->get(),
            'units' => Unit::select('id', 'name')->where('scheme_id', $request->schemeId)->where('job_group_id', null)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['string', 'required'],
            'scheme_id' => ['required', 'exists:schemes,id'],
        ]);

        $group = JobGroup::create($validatedData);
        foreach ($request->units as $unitId) {
            Unit::where('id', $unitId)->update(['job_group_id' => $group->id]);
        }
        alert()->success('kelompok berhasil dibuat!');
        return to_route('job-groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobGroup $jobGroup)
    {
        $units = Unit::select('id', 'name')->where('scheme_id', $jobGroup->scheme_id)->where('job_group_id', $jobGroup->id)->get();

        return view('master.job-group.show', [
            'jobGroup' => $jobGroup,
            'units' => $units,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, JobGroup $jobGroup)
    {
        // return $jobGroup->units;
        $jgUnit = Unit::select('id', 'name')->where('job_group_id', $jobGroup->id)->get();
        $nullUnit = Unit::select('id', 'name')->where('scheme_id', $jobGroup->scheme_id)->where('job_group_id', null)->get();
        $units = $jgUnit->merge($nullUnit);

        return view('master.job-group.edit', [
            'jobGroup' => $jobGroup,
            'schemes' => Scheme::select('id', 'name')->get(),
            'units' => $units,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobGroup $jobGroup)
    {
        $old = $request->oldUnits;
        $new = $request->units;
        $diff = collect($old)->diff(collect($new));
        $removedUnit =  array_values($diff->all());

        $validatedData =  $request->validate([
            'name' => ['string', 'required'],
            'scheme_id' => ['required', 'exists:schemes,id'],
        ]);

        $jobGroup->update($validatedData);

        foreach ($removedUnit as $unitId) {
            Unit::where('id', $unitId)->update(['job_group_id' => null]);
        }
        foreach ($request->units as $unitId) {
            Unit::where('id', $unitId)->update(['job_group_id' => $jobGroup->id]);
        }
        alert()->success('kelompok berhasil di ubah!');
        return to_route('job-groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobGroup $jobGroup)
    {
        Unit::where('job_group_id', $jobGroup->id)->update(['job_group_id' => null]);
        $jobGroup->delete();

        alert()->success('kelompok berhasil di hapus!');
        return to_route('job-groups.index');
    }
}
