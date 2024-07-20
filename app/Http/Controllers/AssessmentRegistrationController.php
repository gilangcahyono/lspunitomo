<?php

namespace App\Http\Controllers;

use App\Models\Accession;
use App\Models\Assessor;
use App\Models\ErrorReg;
use App\Models\Registration;
use App\Models\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Str;

class AssessmentRegistrationController extends Controller
{
    public function registration()
    {
        $registrant = Accession::firstWhere('nim', auth()->user()->username);

        $registration = Registration::firstWhere('isOpen', true);

        if ($registrant && $registrant->verified) {
            abort(403);
        }

        return !$registration
            ? abort(404)
            : view('muk.apl.apl-01.registration', [
                'schemes' => Scheme::select('id', 'name', 'department')
                    ->where('department', getUserActive()['department'])
                    ->without('units.elements.kuks')
                    ->get(),
                'allSchemes' => Scheme::select('id', 'name', 'department')
                    ->without('units.elements.kuks')
                    ->get(),
                'registration' => $registration,
                'registrant' => $registrant
            ]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $errorReg = ErrorReg::firstWhere('nim', $request->nim);

        if ($errorReg) {
            $errorReg->delete();
        }

        $registration = Registration::firstWhere('isOpen', true);

        $validatedData = $request->validate([
            'nim' => ['required', 'string', 'exists:users,username'],
            'name' => ['required', 'string'],
            'faculty' => ['required', 'string'],
            'department' => ['required', 'string'],
            'semester' => ['required', 'string'],
            'nik' => ['required', 'string'],
            'birthPlace' => ['required', 'string'],
            'birthDate' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string'],
            'postalCode' => ['nullable', 'string'], // nullable sementara
            'city' => ['required', 'string'],
            'province' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'telephone' => ['nullable', 'numeric'],
            'company' => ['nullable', 'string'],
            'position' => ['nullable', 'string'],
            'officeAddress' => ['nullable', 'string'],
            'officeTelephone' => ['nullable', 'numeric'],
            'officePostalCode' => ['nullable', 'string'],
            'fax' => ['nullable', 'string'],
            'officeEmail' => ['nullable', 'email'],
            'email' => ['required', 'email'],
            'lastEducation' => ['required', 'string'],
            'scheme_id' => ['required', 'exists:schemes,id'],
            'ijazah' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'transkrip' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'ktm' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'ktp' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'foto' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'cv' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'proofPayment' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'supportingCertificate' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        $validatedData['registrationNumber'] =  fake()->ean8();
        $validatedData['periodYear'] =  $registration->periode;
        $validatedData['periodSemester'] =  $registration->semester;
        $validatedData['ijazah'] =  $request->file('ijazah')->hashName();
        $validatedData['transkrip'] =  $request->file('transkrip')->hashName();
        $validatedData['ktp'] =  $request->file('ktp')->hashName();
        $validatedData['ktm'] =  $request->file('ktm')->hashName();
        $validatedData['foto'] =  $request->file('foto')->hashName();
        $validatedData['cv'] =  $request->file('cv')->hashName();
        $validatedData['proofPayment'] =  $request->file('proofPayment')->hashName();
        if ($request->supportingCertificate) {
            $validatedData['supportingCertificate'] = $request->file('supportingCertificate')->hashName();
        }

        try {
            Accession::create($validatedData);

            //upload file
            $request->file('ijazah')->store('uploaded/assessment-registration');
            $request->file('transkrip')->store('uploaded/assessment-registration');
            $request->file('ktp')->store('uploaded/assessment-registration');
            $request->file('ktm')->store('uploaded/assessment-registration');
            $request->file('foto')->store('uploaded/assessment-registration');
            $request->file('proofPayment')->store('uploaded/assessment-registration');
            $request->file('cv')->store('uploaded/assessment-registration');
            if ($request->supportingCertificates) {
                $request->file('supportingCertificate')->store('uploaded/assessment-registration');
            }
            alert()->success('Pendaftaran berhasil,', 'Tunggu verifikasi pendaftaran!')->persistent(true, false);
            return to_route('dashboard');
        } catch (\Throwable $th) {
            // dd($th);
            if ($th->getCode() == '23505') {
                alert()->error('Pendaftaran gagal,', 'Anda sudah mendaftar pada periode ini!')->persistent(true, false);
                return to_route('dashboard');
            }
            alert()->error('Server Error', 'Something went wrong!')->persistent(true, false);
            return to_route('dashboard');
        }
    }

    public function improveReg(Request $request, Accession $accession)
    {
        // return $request->all();

        $errorReg = ErrorReg::firstWhere('nim', $request->nim);

        if ($errorReg) {
            $errorReg->delete();
        }

        $files = $request['files'];
        $validatedData = [];

        foreach ($files as $file) {
            $request->validate([
                "$file" => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            ]);
        }
        foreach ($files as $i => $file) {
            $validatedData[$i] =  $request->file("files.$i")->hashName();
        }

        try {
            $accession->update($validatedData);

            foreach ($files as $i => $file) {
                $request->file("files.$i")->store('uploaded/assessment-registration');
            }

            alert()->success('Dokumen berhasil diperbarui,', 'Tunggu verifikasi pendaftaran!')->persistent(true, false);

            return to_route('dashboard');
        } catch (\Throwable $th) {
            // dd($th);
            if ($th->getCode() == '23505') {
                alert()->error('Pendaftaran gagal,', 'Anda sudah mendaftar pada periode ini!')->persistent(true, false);
                return to_route('dashboard');
            }
            alert()->error('Server Error', 'Something went wrong!')->persistent(true, false);
            return to_route('dashboard');
        }
    }

    public function registrants(Request $request)
    {
        // return $request->all();

        $registration = Registration::first();

        if ($request->scheme_id != null) {
            $registrants = Accession::
                // where('assessor_id', null)
                // ->where('periodYear', $request->periodYear ?? $registration->periode)
                // ->where('periodSemester', $request->periodSemester ?? $registration->semester)
                where('scheme_id', $request->scheme_id)
                ->orderBy('scheme_id')
                ->orderBy('registeredAt', 'desc')
                ->paginate($request->show ?? 10)
                ->withQueryString();
        } else {
            $registrants = Accession::
                // where('assessor_id', null)
                // ->where('periodYear', $request->periodYear ?? $registration->periode)
                // ->where('periodSemester', $request->periodSemester ?? $registration->semester)
                orderBy('scheme_id')
                ->orderBy('registeredAt', 'desc')
                ->paginate($request->show ?? 10)
                ->withQueryString();
        }

        // return $registrants;

        $assessors = Assessor::select('id', 'name', 'scheme_id')
            ->where('scheme_id', $request->scheme_id)
            ->where('statusMet', 'Berlaku')
            ->withCount(['accessions' => function ($query) {
                $query->where('assessed', true);
            }])
            ->orderBy('accessions_count')
            ->get();

        return view('muk.apl.apl-01.registrants', [
            'registrants' => $registrants,
            'registration' => Registration::firstWhere('isOpen', true),
            'schemes' => Scheme::select('id', 'code', 'name')->without('units')->get(),
            'assessors' => $assessors
        ]);
    }

    public function registrant(Accession $accession)
    {
        // return $accession;

        $assessors = Assessor::where('scheme_id', $accession->scheme_id)->get();

        return view('muk.apl.apl-01.registrant', [
            'registrant' => $accession,
            'assessors' => $assessors
        ]);
    }

    public function review(Request $request, Accession $accession)
    {
        // return $request->all();

        $files = $request['files'];

        if ($files) {
            ErrorReg::create([
                'nim' => $request->nim,
                'type' => 'registration',
            ]);
            $accession->update($files);
            alert()->success('Data telah dikembalikan ke tahap pendaftaran!');
            return to_route('assessment.registrants');
        }

        $accession->update([
            'verified' => true,
            'verifiedAt' => now(),
        ]);

        alert()->success('Data terverifikasi!');

        return to_route('assessment.registrants');
    }

    public function plotAssessor(Request $request)
    {
        // return $request->all();

        foreach ($request->registrants as $registrant) {
            Accession::where('id', $registrant)->update([
                'verified' => true,
                'assessor_id' => $request->assessor_id,
                'selfAssessmentSchedule' => Carbon::now()->addDays(2)->setTime(00, 00, 00),
            ]);
        }
        alert()->success('Data berhasil disimpan!');

        return to_route('assessment.registrants', ['scheme_id' => $request->scheme_id]);
    }

    public function openRegistration(Request $request)
    {
        Registration::create([
            'periode' => $request->periode,
            'semester' => $request->semester,
            'isOpen' => true
        ]);

        alert()->success('Pendaftaran berhasil dibuka')->persistent(true, false);

        return to_route('assessment.registrants');
    }

    public function closeRegistration(string $id)
    {
        Registration::where('id', "$id")->update(['isOpen' => false]);

        alert()->success('Pendaftaran berhasil ditutup')->persistent(true, false);

        return to_route('assesment.registrants');
    }

    public function export(Accession $accession)
    {
        $registration = Registration::first();

        $filename = '1. FR.APL 01. Permohonan Sertifikasi Kompetensi';
        $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/' . $filename . '.docx'));

        $templateProcessor->setValues([
            'name' =>  $accession->name,
            'nik' => $accession->nik,
            'birthPlace' => $accession->birthPlace,
            'birthDate' => $accession->birthDate,
            'gender' => $accession->gender,
            'address' => $accession->address,
            'mobile' => $accession->mobile,
            'email' => $accession->email,
            'lastEducation' => $accession->lastEducation,
            'schemeName' => $accession->scheme->name,
            'schemeCode' => $accession->scheme->code
        ]);

        $units = $accession->scheme->units->map(fn ($unit, $index) => [
            'no' => $index + 1,
            'unitCode' => $unit->code,
            'unitName' => $unit->name
        ]);

        $schemeBasicRequirements = collect(explode(' zzz', $accession->scheme->basicRequirements));

        $basicRequirements = $schemeBasicRequirements->map(fn ($basicRequirement, $index) => [
            'no' => $index + 1,
            'basicRequirement' => $basicRequirement
        ]);

        $templateProcessor->cloneRowAndSetValues('no', $units);
        $templateProcessor->cloneRowAndSetValues('no', $basicRequirements);

        $nim = $accession->nim;
        $ta =  Str::replace('/', '-', $registration->periode);
        $smt = $registration->semester;
        $savedFilename = "$filename - $nim - $ta - $smt.docx";
        $pathToSave = storage_path("app/public/muk/$savedFilename");
        $templateProcessor->saveAs($pathToSave);

        // echo "<script>
        //     window.open('https://docs.google.com/viewerng/viewer?url=http://tugas-akhir.test/storage/muk/$savedFilename', '_blank');
        // </script>";

        return redirect("https://docs.google.com/viewerng/viewer?url=" . env('APP_URL') . "/storage/muk/$savedFilename");

        return redirect()->back();
    }
}
