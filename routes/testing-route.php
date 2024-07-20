<?php

use App\Models\Accession;
use App\Models\Element;
use App\Models\Kuk;
use App\Models\Registration;
use App\Models\Scheme;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Mpdf\Mpdf;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\IOFactory;
use Vish4395\LaravelFileViewer\LaravelFileViewer;

Route::get('/coeg/{filename?}', function (?string $filename = null) {

  // $file = IOFactory::load(storage_path('app/files/templates/4. FR.MAPA 01. Merencanakan Aktivitas dan Proses.docx'));

  // $htmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($file, 'HTML');
  // $htmlWriter->save('test.html');

  $wordFilePath = storage_path('app/files/templates/6. FR.MAPA 02. Peta Instrumen Asesmen.docx');

  $phpWord = IOFactory::load($wordFilePath);

  // Menyimpan dokumen sebagai HTML
  $htmlFilePath = storage_path('app/public/html/GeneratedDocument.html');
  $htmlWriter = IOFactory::createWriter($phpWord, 'HTML');
  $htmlWriter->save($htmlFilePath);


  // function apl02()
  // {
  //   $accession = Accession::where('nim', '472552224972')->first();

  //   $skemaId = $accession->scheme_id;

  //   $units = Unit::where('scheme_id', 1)->get();

  //   $registration = Registration::first();

  //   $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/2. FR.APL 02. Asesmen Mandiri.docx'));

  //   $templateProcessor->setValues([
  //     'schemeName' => $accession->scheme->name,
  //     'schemeCode' => $accession->scheme->code,
  //     'accessionName' => $accession->name,
  //     'assessorName' => $accession->assessor->name,
  //     'assessorReg' => $accession->assessor->metRegistrationNumber,
  //   ]);

  //   $newUnits = $units->map(fn ($unit, $index) => [
  //     'unitNum' => $index + 1,
  //     'unitCode' => $unit->code,
  //     'unitName' => $unit->name,
  //   ]);

  //   $templateProcessor->cloneBlock('unitBlock', 0, true, false, $newUnits->toArray());

  //   foreach ($units as $unit) {
  //     $elements = Element::whereHas('unit.scheme', function ($query) {
  //       $query->where('schemes.id', 1);
  //     })->where('unit_id', $unit->id)->get();

  //     foreach ($elements as $element) {
  //       $kuks = Kuk::whereHas('element.unit.scheme', function ($query) {
  //         $query->where('schemes.id', 1);
  //       })->where('element_id', $element->id)->get();

  //       $newKuks = $kuks->map(fn ($kuk, $index) => [
  //         'kukNum' => $index + 1,
  //         'kukName' => $kuk->name,
  //       ]);

  //       $templateProcessor->cloneBlock('kukBlock', 0, true, false, $newKuks->toArray());
  //     }

  //     $newElements = $elements->map(fn ($element, $index) => [
  //       'elementNum' => $index + 1,
  //       'elementName' => $element->name,
  //     ]);

  //     $templateProcessor->cloneRowAndSetValues('elementName', $newElements);
  //   }

  //   $nim = $accession->nim;
  //   $ta =  Str::replace('/', '-', $registration->periode);
  //   $smt = $registration->semester;
  //   $pathToSave = "2. FR.APL 02. Asesmen Mandiri - $nim - $ta - $smt.docx";
  //   $templateProcessor->saveAs($pathToSave);

  //   return response()->download($pathToSave)->deleteFileAfterSend(true);
  // }


  // function apl01()
  // {
  //   $registration = Registration::first();

  //   $templateProcessor = new TemplateProcessor(storage_path('app/files/templates/1. FR.APL 01. Permohonan Sertifikasi Kompetensi.docx'));

  //   $templateProcessor->setValues([
  //     'name' =>  $accession->name,
  //     'nik' => $accession->nik,
  //     'birthPlace' => $accession->birthPlace,
  //     'birthDate' => $accession->birthDate,
  //     'gender' => $accession->gender,
  //     'address' => $accession->address,
  //     'mobile' => $accession->mobile,
  //     'email' => $accession->email,
  //     'lastEducation' => $accession->lastEducation,
  //     'schemeName' => $accession->scheme->name,
  //     'schemeCode' => $accession->scheme->code
  //   ]);


  //   $units = $accession->scheme->units->map(fn ($unit, $index) => [
  //     'no' => $index + 1,
  //     'unitCode' => $unit->code,
  //     'unitName' => $unit->name
  //   ]);


  //   $schemeBasicRequirements = collect(explode(' zzz', $accession->scheme->basicRequirements));

  //   $basicRequirements = $schemeBasicRequirements->map(fn ($basicRequirement, $index) => [
  //     'no' => $index + 1,
  //     'basicRequirement' => $basicRequirement
  //   ]);

  //   $templateProcessor->cloneRowAndSetValues('no', $units);
  //   $templateProcessor->cloneRowAndSetValues('no', $basicRequirements);

  //   $nim = $accession->nim;
  //   $ta =  Str::replace('/', '-', $registration->periode);
  //   $smt = $registration->semester;
  //   $pathToSave = "1. FR.APL 01. Permohonan Sertifikasi Kompetensi - $nim - $ta - $smt.docx";
  //   $templateProcessor->saveAs($pathToSave);

  //   return response()->download($pathToSave)->deleteFileAfterSend(true);
  // }

  // $filepath = 'muk/' . $filename;
  // $file_url = url('storage/muk/' . $filename);
  // $file_data = [
  //   [
  //     'label' => __('Label'),
  //     'value' => "Value"
  //   ]
  // ];

  // $fileViewer = new LaravelFileViewer();
  // return $fileViewer->show($filename, $filepath, $file_url, $file_data);



  // // $filePath = storage_path('app/files/' . $filename . '.docx');
  // $filePath = url('storage/muk/' . $filename);

  // // if (!file_exists($filePath)) {
  // //   abort(404);
  // // }

  // $content = file_get_contents($filePath);

  // $mpdf = new Mpdf();
  // $mpdf->WriteHTML($content);
  // $output = $mpdf->Output();

  // header('Content-Type: application/pdf');
  // header('Content-Disposition: inline; filename="' . $filename . '.pdf"');
  // header('Content-Length: ' . strlen($output));

  // echo $output;














  // return auth()->user();
  // return Assessor::firstWhere('id', 1);
  // return Accession::where('assessor_id', 1)->first();
  // return Carbon::now()->addDays(1)->setTime(23, 00, 00);
  // return array_filter(explode(' zzz ', Scheme::first()->basicRequirements), 'strlen');
  // return explode(' zzz ', array_filter(json_decode(json_encode(Scheme::first()->basicRequirements)), 'strlen'));
  // return getLecturers()->where('nidn', '8991112839')->first()['nidn'];
  // return getUsers()->where('username', '325964283232')->where('password', '1674')->first();
})->name('coeg');
