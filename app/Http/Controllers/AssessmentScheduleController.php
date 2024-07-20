<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\AssessmentSchedule;
use App\Models\Scheme;
use Illuminate\Http\Request;

class AssessmentScheduleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->scheme_id != null) {
            $schedules = AssessmentSchedule::whereHas('accessions', function ($query) use ($request) {
                $query->where('scheme_id', $request->scheme_id)->orderBy('scheme_id');
            })->with('accessions')->get();
        } else {
            $schedules = AssessmentSchedule::with(['accessions' => function ($query) {
                $query->orderBy('scheme_id');
            }])->get();
        }

        // return $schedules;

        return view('assessment-schedule.index', [
            'schedules' => $schedules,
            'schemes' => Scheme::select('id', 'name')->without('units')->get(),
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
        // return $request->all();

        $schedule = AssessmentSchedule::create([
            'schedule' => $request->schedule,
            'tuk' => $request->tuk,
        ]);

        foreach ($request->candidates as $candidateId) {
            Accession::where('id', $candidateId)->update([
                'assessment_schedule_id' => $schedule->id,
                // 'assessed' => true,
            ]);
        }

        alert()->success('Jadwal ujian berhasil dibuat!');

        return to_route('accessions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AssessmentSchedule $assessmentSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssessmentSchedule $assessmentSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssessmentSchedule $assessmentSchedule)
    {
        // return $request->all();
        $assessmentSchedule->update([
            'schedule' => $request->schedule,
            'tuk' => $request->tuk,
        ]);

        alert()->success('Jadwal ujian berhasil diubah!');

        return to_route('assessment-schedules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssessmentSchedule $assessmentSchedule)
    {
        //
    }
}
