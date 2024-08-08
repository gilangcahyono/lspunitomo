@extends('layouts.app', ['title' => 'MAPA 01'])

@section('content')

  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    MAPA 01 <br> MERENCANAKAN AKTIVITAS DAN PROSES ASESMEN
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div class="relative overflow-x-auto">

    <form id="mapaForm" action="{{ route('mapa-01.store') }}" method="POST">
      @csrf
      <input type="hidden" name="schemeId" value="{{ $scheme->id }}">
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead>
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
              Skema Sertifikasi (KKNI/Okupasi/Klaster)
            </th>
            <th class="px-6 py-4">
              Judul
            </th>
            <th class="px-6 py-4">
              : {{ $scheme->name }}
            </th>
          </tr>
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="px-6 py-4">
              Nomor
            </th>
            <th class="px-6 py-4">
              : {{ $scheme->code }}
            </th>
          </tr>
        </thead>
      </table>

      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:bg-gray-800 dark:text-gray-400">
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" colspan="4">
            1. Menentukan Pendekatan Asesmen
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="21">
            1.1.
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
            Asesi
          </td>
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="approachAccessions[]" id="ac1" type="checkbox" value="ac1"
              @if ($mapa) {{ in_array('ac1', explode(' zzz ', $mapa->approachAccessions)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ac1" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil pelatihan
              dan / atau pendidikan, dimana Kurikulum dan fasilitas praktek mampu telusur terhadap standar
              kompetensi</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="approachAccessions[]" id="ac2" type="checkbox" value="ac2"
              @if ($mapa) {{ in_array('ac2', explode(' zzz ', $mapa->approachAccessions)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ac2" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil pelatihan
              dan / atau pendidikan, dimana Kurikulum dan fasilitas praktek mampu telusur terhadap standar
              kompetensi</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="approachAccessions[]" id="ac3" type="checkbox" value="ac3"
              @if ($mapa) {{ in_array('ac3', explode(' zzz ', $mapa->approachAccessions)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ac3" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil pelatihan dan
              / atau pendidikan, dimana kurikulum belum berbasis kompetensi.</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="approachAccessions[]" id="ac4" type="checkbox" value="ac4"
              @if ($mapa) {{ in_array('ac4', explode(' zzz ', $mapa->approachAccessions)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ac4" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pekerja
              berpengalaman, dimana berasal dari industri/tempat kerja yang dalam operasionalnya mampu telusur dengan
              standar kompetensi.</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="approachAccessions[]" id="ac5" type="checkbox" value="ac5"
              @if ($mapa) {{ in_array('ac5', explode(' zzz ', $mapa->approachAccessions)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ac5" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pelatihan / belajar
              mandiri atau otodidak.</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="4">
            Tujuan Asesmen
          </td>
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="assessmentObjectives[]" id="ao1" type="checkbox" value="ao1"
              @if ($mapa) {{ in_array('ao1', explode(' zzz ', $mapa->assessmentObjectives)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ao1" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Sertifikasi</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="assessmentObjectives[]" id="ao2" type="checkbox" value="ao2"
              @if ($mapa) {{ in_array('ao2', explode(' zzz ', $mapa->assessmentObjectives)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ao2" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pengakuan Kompetensi
              Terkini (PKT)</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="assessmentObjectives[]" id="ao3" type="checkbox" value="ao3"
              @if ($mapa) {{ in_array('ao3', explode(' zzz ', $mapa->assessmentObjectives)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ao3" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Rekognisi
              Pembelajaran Lampau (RPL)</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="assessmentObjectives[]" id="ao4" type="checkbox" value="ao4"
              @if ($mapa) {{ in_array('ao4', explode(' zzz ', $mapa->assessmentObjectives)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="ao4" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">
              Lainnya</label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="8">
            Konteks Asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Lingkungan
          </td>
          <td class="flex items-center px-6 py-4">
            <input name="envs[]" id="env1" type="checkbox" value="env1"
              @if ($mapa) {{ in_array('env1', explode(' zzz ', $mapa->envs)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="env1" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Tempat kerja
              nyata</label>
            <input name="envs[]" id="env2" type="checkbox" value="env2"
              @if ($mapa) {{ in_array('env2', explode(' zzz ', $mapa->envs)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="env2" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Tempat kerja
              simulasi</label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="">
            Peluang untuk mengumpulkan bukti dalam
            sejumlah situasi
          </td>
          <td class="flex items-center px-6 py-4">
            <input name="opportunitys[]" id="opt1" type="checkbox" value="opt1"
              @if ($mapa) {{ in_array('opt1', explode(' zzz ', $mapa->opportunitys)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="opt1" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Tersedia</label>
            <input name="opportunitys[]" id="opt2" type="checkbox" value="opt2"
              @if ($mapa) {{ in_array('opt2', explode(' zzz ', $mapa->opportunitys)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="opt2" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Terbatas</label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            Hubungan antara standar kompetensi dan:
          </td>
          <td class="flex items-center px-6 py-4">
            <input name="connections[]" id="con1" type="checkbox" value="con1"
              @if ($mapa) {{ in_array('con1', explode(' zzz ', $mapa->connections)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="con1" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Bukti untuk
              mendukung asesmen </label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4">
            <input name="connections[]" id="con2" type="checkbox" value="con2"
              @if ($mapa) {{ in_array('con2', explode(' zzz ', $mapa->connections)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="con2" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Aktivitas kerja di
              tempat kerja Asesi</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4">
            <input name="connections[]" id="con3" type="checkbox" value="con3"
              @if ($mapa) {{ in_array('con3', explode(' zzz ', $mapa->connections)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="con3" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Kegiatan
              Pembelajaran</label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            Siapa yang melakukan asesmen / RPL
          </td>
          <td class="flex items-center px-6 py-4">
            <input name="doAssessmens[]" id="da1" type="checkbox" value="da1"
              @if ($mapa) {{ in_array('da1', explode(' zzz ', $mapa->doAssessmens)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="da1" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Lembaga
              Sertifikasi</label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4">
            <input name="doAssessmens[]" id="da2" type="checkbox" value="da2"
              @if ($mapa) {{ in_array('da2', explode(' zzz ', $mapa->doAssessmens)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="da2" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Organisasi
              Pelatihan</label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4">
            <input name="doAssessmens[]" id="da3" type="checkbox" value="da3"
              @if ($mapa) {{ in_array('da3', explode(' zzz ', $mapa->doAssessmens)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="da3" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Asesor
              Perusahaan</label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="4">
            Konfirmasi dengan orang yang relevan</td>
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="relevantPeople[]" id="rp1" type="checkbox" value="rp1"
              @if ($mapa) {{ in_array('rp1', explode(' zzz ', $mapa->relevantPeople)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="rp1" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Manajer
              sertifikasi LSP</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="relevantPeople[]" id="rp2" type="checkbox" value="rp2"
              @if ($mapa) {{ in_array('rp2', explode(' zzz ', $mapa->relevantPeople)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="rp2" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Master Asesor /
              Master Trainer / Lead Asesor Kompetensi</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="relevantPeople[]" id="rp3" type="checkbox" value="rp3"
              @if ($mapa) {{ in_array('rp3', explode(' zzz ', $mapa->relevantPeople)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="rp3" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Manajer Pelatihan
              Lembaga Training terakreditasi / Lembaga Training
              terdaftar
            </label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="relevantPeople[]" id="rp4" type="checkbox" value="rp4"
              @if ($mapa) {{ in_array('rp4', explode(' zzz ', $mapa->relevantPeople)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="rp4" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Manajer Manajer
              atau supervisor ditempat kerja
            </label>
          </td>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
            1.2.</td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
            Standar Industri atau Tempat Kerja</td>
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="industryStandards[]" id="is1" type="checkbox" value="is1"
              @if ($mapa) {{ in_array('is1', explode(' zzz ', $mapa->industryStandards)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="is1" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Standar
              Kompetensi</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="industryStandards[]" id="is2" type="checkbox" value="is2"
              @if ($mapa) {{ in_array('is2', explode(' zzz ', $mapa->industryStandards)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="is2" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Kriteria asesmen
              dari kurikulum pelatihan</label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="industryStandards[]" id="is3" type="checkbox" value="is3"
              @if ($mapa) {{ in_array('is3', explode(' zzz ', $mapa->industryStandards)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="is3" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Spesifikasi
              kinerja suatu perusahaan atau industri
            </label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="industryStandards[]" id="is4" type="checkbox" value="is4"
              @if ($mapa) {{ in_array('is4', explode(' zzz ', $mapa->industryStandards)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="is4" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Spesifikasi Produk
            </label>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="flex items-center px-6 py-4" colspan="2">
            <input name="industryStandards[]" id="is5" type="checkbox" value="is5"
              @if ($mapa) {{ in_array('is5', explode(' zzz ', $mapa->industryStandards)) ? 'checked' : '' }} @endif
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="is5" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pedoman khusus
            </label>
          </td>
        </tr>

      </table>

      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" colspan="4">
            2. Mempersiapkan Rencana Asesmen
          </th>
        </tr>
        @foreach ($scheme->jobGroups as $jobGroup)
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="border px-6 py-4 dark:border-gray-700" rowspan="{{ $jobGroup->units->count() + 1 }}">
              {{ $jobGroup->name }}
            </th>
            <th class="border px-6 py-4 dark:border-gray-700">
              No
            </th>
            <th class="border px-6 py-4 dark:border-gray-700">
              Kode Unit
            </th>
            <th class="border px-6 py-4 dark:border-gray-700">
              Judul Unit
            </th>
          </tr>

          @foreach ($jobGroup->units as $unit)
            <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
              <td class="border px-6 py-4 dark:border-gray-700">
                {{ $loop->iteration }}
              </td>
              <td class="border px-6 py-4 dark:border-gray-700">
                {{ $unit->code }}
              </td>
              <td class="border px-6 py-4 dark:border-gray-700">
                {{ $unit->name }}
              </td>
            </tr>
          @endforeach

          <tr>
            <td colspan="4">
              <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                <thead>
                  <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                    <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                      Unit Kompetensi
                    </th>
                    <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                      <span class="font-bold">Bukti-Bukti</span> (Kinerja, Produk, Portofolio, dan / atau Pengetahuan)
                      diidentifikasi
                      berdasarkan Kriteria Unjuk Kerja dan Pendekatan Asesmen.
                    </td>
                    <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="3">
                      Jenis Bukti
                    </th>
                    <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="6">
                      Metode dan Perangkat Asesmen <br>
                      CL (Ceklis Observasi), DIT (Daftar Instruksi Terstruktur), DPL (Daftar Pertanyaan Lisan), DPT
                      (Daftar
                      Pertanyaan
                      Tertulis)
                      , VPK (Verifikasi Pihak Ketiga), CVP (Ceklis Verifikasi Portofolio), CRP (Ceklis Reviu
                      Produk),
                      PW
                      (Pertanyaan Wawancara)
                    </th>
                  </tr>
                  <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      L
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      TL
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      T
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      Obsevasi langsung
                      (kerja nyata/aktivitas waktu nyata di tempat kerja di kingkungan tempat kerja yang disimulasikan)
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      Kegiatan Terstruktur
                      (latihan simulasi dan bermain peran, proyek, presentasi, lembar kegiatan)
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      Tanya Jawab
                      (pertanyaan tertulis, wawancara, asesmen diri, tanya jawab lisan, angket, ujian lisan atau tertulis)
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      Verifikasi Portfolio
                      (sampel pekerjaaan yang disusun oleh Asesi, produk dengan dokumentasi pendukung, bukti sejarah,
                      jurnal
                      atau
                      buku catatan, informasi tentang pengalaman hidup)
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      Reviu Produk
                      Produk hasil proyek, ciontoh hasil kerja/produk
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      Verifikasi Pihak Ketiga
                      (testimoni dan laporan dari atasan, bukti pelatihan, otentikasi pencapaian sebelumnya, wawancara
                      dengan
                      atasan, atau rekan kerja)
                    </td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jobGroup->units as $unit)
                    <input type="hidden" name="units[{{ $unit->id }}][id]" value="{{ $unit->id }}">
                    <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                      <td class="border px-6 py-4 dark:border-gray-700">
                        {{ $loop->iteration }}. {{ $unit->name }}
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <textarea name="units[{{ $unit->id }}][proof]"
                          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">{{ $unit->proof }}</textarea>
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input name="units[{{ $unit->id }}][direct]" type="checkbox" value="{{ true }}"
                          {{ $unit->jobGroup->tpd || $unit->jobGroup->pmo || $unit->jobGroup->dit || $unit->direct ? 'checked' : '' }}
                          class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input disabled name="units[{{ $unit->id }}][indirect]" type="checkbox"
                          value="{{ true }}"
                          class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input name="units[{{ $unit->id }}][addition]" type="checkbox"
                          value="{{ true }}"
                          {{ $unit->pw || $unit->dpt || $unit->dpl || $unit->vpk || $unit->addition ? 'checked' : '' }}
                          class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input type="text" id="elementAndKuk" name="units[{{ $unit->id }}][mD1]"
                          value="{{ $unit->mD1 }}"
                          class="block w-14 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input type="text" id="elementAndKuk" name="units[{{ $unit->id }}][mD2]"
                          value="{{ $unit->mD2 }}"
                          class="block w-14 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input type="text" id="elementAndKuk" name="units[{{ $unit->id }}][mD3]"
                          value="{{ $unit->mD3 }}"
                          class="block w-14 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input type="text" id="elementAndKuk" name="units[{{ $unit->id }}][mD4]"
                          value="{{ $unit->mD4 }}"
                          class="block w-14 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input type="text" id="elementAndKuk" name="units[{{ $unit->id }}][mD5]"
                          value="{{ $unit->mD5 }}"
                          class="block w-14 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                      </td>
                      <td class="border px-6 py-4 dark:border-gray-700">
                        <input type="text" id="elementAndKuk" name="units[{{ $unit->id }}][mD6]"
                          value="{{ $unit->mD6 }}"
                          class="block w-14 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </td>
          </tr>
        @endforeach
      </table>

      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
              3. Mengidentifikasi Persyaratan Modifikasi dan Kontekstualisasi
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              3.1. a. Karakteristik Kandidat:
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              Ada / tidak ada* karakteristik khusus Kandidat Jika Ada, tuliskan
            </td>
          </tr>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 ps-12 dark:border-gray-700">
              b. Kebutuhan kontekstualisasi terkait tempat kerja:
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              Ada / tidak ada* kebutuhan kontekstualisasi Jika Ada, tuliskan
            </td>
          </tr>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              3.2. Saran yang diberikan oleh paket pelatihan atau pengembang pelatihan
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              Ada / tidak ada* saran Jika Ada, tuliskan
            </td>
          </tr>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              3.3. Penyesuaian perangkat asesmen terkait kebutuhan kontekstualisasi
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              Ada / tidak ada* penyesuaian perangkat Jika Ada, tuliskan
            </td>
          </tr>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              3.4. Peluang untuk kegiatan asesmen terintegrasi dan mencatat setiap perubahan yang diperlukan untuk alat
              asesmen
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              Ada / tidak ada* peluang Jika Ada, tuliskan
            </td>
          </tr>
        </tbody>
      </table>

      <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Konfirmasi dengan orang yang relevan</h2>
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="border px-6 py-4 dark:border-gray-700">
              Orang yang relevan
            </th>
            <th class="border px-6 py-4 dark:border-gray-700">
              Nama
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              Manajer sertifikasi LSP
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              <input type="text" name="certificationManager" list="assessorss" autocomplete="off"
                value="{{ $mapa->certificationManager ?? '' }}"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
              <datalist id="assessorss">
                @foreach ($scheme->assessors as $assessor)
                  <option value="{{ $assessor->name }}">{{ $assessor->name }}</option>
                @endforeach
              </datalist>
            </td>
          </tr>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              Master Asesor / Master Trainer / Lead Asesor Kompetensi
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              <input type="text" name="masterAssessor" list="assessors" autocomplete="off"
                value="{{ $mapa->masterAssessor ?? '' }}"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
              <datalist id="assessors">
                @foreach ($scheme->assessors as $assessor)
                  <option value="{{ $assessor->name }}">{{ $assessor->name }}</option>
                @endforeach
              </datalist>
            </td>
          </tr>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              Manajer pelatihan Lembaga Training terakreditasi / Lembaga Training terdaftar
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              <input type="text" disabled
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
            </td>
          </tr>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              Manajer atau supervisor ditempat kerja
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              <input type="text" disabled
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />

            </td>
          </tr>
        </tbody>
      </table>

      <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Penyusun dan Validator</h2>
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="border px-6 py-4 dark:border-gray-700">
              Status
            </th>
            <th class="border px-6 py-4 dark:border-gray-700">
              Nama
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="border px-6 py-4 dark:border-gray-700">
              Penyusun
            </th>
            <td class="border px-6 py-4 dark:border-gray-700">
              <div id="makerDiv" class="relative mb-5">
                <button type="button" id="makerBtn"
                  class="absolute -bottom-4 left-1/2 z-[1] -translate-x-1/2 transform"><svg
                    class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                      d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
                @if ($mapa)
                  @foreach (explode(' zzz ', $mapa->makers) as $maker)
                    <div class="relative" id="textAreaDiv">
                      <button type="button" id="makerRemoveBtn" class="absolute -right-3 -top-3"><svg
                          class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                      <input type="text" list="assessors" autocomplete="off" name="makers[]"
                        value="{{ $maker }}" autocomplete="off"
                        class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                      <datalist id="assessors">
                        @foreach ($scheme->assessors as $assessor)
                          <option value="{{ $assessor->name }}">{{ $assessor->name }}</option>
                        @endforeach
                      </datalist>
                    </div>
                  @endforeach
                @else
                  <div class="relative" id="textAreaDiv">
                    <button type="button" id="makerRemoveBtn" class="absolute -right-3 -top-3"><svg
                        class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                          d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                          clip-rule="evenodd" />
                      </svg>
                    </button>
                    <input type="text" list="assessors" autocomplete="off" name="makers[]" autocomplete="off"
                      class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                    <datalist id="assessors">
                      @foreach ($scheme->assessors as $assessor)
                        <option value="{{ $assessor->name }}">{{ $assessor->name }}</option>
                      @endforeach
                    </datalist>
                  </div>
                @endif
              </div>
            </td>
          </tr>
          <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="border px-6 py-4 dark:border-gray-700">
              Validator
            </th>
            <td class="border px-6 py-4 dark:border-gray-700">
              <div id="validatorDiv" class="relative mb-5">
                <button type="button" id="validatorBtn"
                  class="absolute -bottom-4 left-1/2 z-[1] -translate-x-1/2 transform"><svg
                    class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                      d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                      clip-rule="evenodd" />
                  </svg></button>
                @if ($mapa)
                  @foreach (explode(' zzz ', $mapa->validators) as $validator)
                    <div class="relative" id="textAreaDiv">
                      <button type="button" id="validatorRemoveBtn" class="absolute -right-3 -top-3"><svg
                          class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                      <input type="text" list="assessors" name="validators[]" value="{{ $validator }}"
                        autocomplete="off"
                        class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                      <datalist id="assessors">
                        @foreach ($scheme->assessors as $assessor)
                          <option value="{{ $assessor->name }}">{{ $assessor->name }}</option>
                        @endforeach
                      </datalist>
                    </div>
                  @endforeach
                @else
                  <div class="relative" id="textAreaDiv">
                    <button type="button" id="validatorRemoveBtn" class="absolute -right-3 -top-3"><svg
                        class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                          d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                          clip-rule="evenodd" />
                      </svg>
                    </button>
                    <input type="text" list="assessors" name="validators[]" autocomplete="off"
                      class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
                    <datalist id="assessors">
                      @foreach ($scheme->assessors as $assessor)
                        <option value="{{ $assessor->name }}">{{ $assessor->name }}</option>
                      @endforeach
                    </datalist>
                  </div>
                @endif
              </div>
            </td>
          </tr>
        </tbody>
      </table>

      <button type="submit"
        class="mb-2 me-2 rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
      @if ($mapa)
        <a href="{{ route('mapa-01.export', ['schemeId' => $mapa->id]) }}" target="_blank"
          class="focus:ring-primary-300 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
          Cetak
        </a>
      @endif

    </form>
  </div>
@endsection

@push('scripts')
  <script type="module">
    $(document).ready(function() {

      if (`{{ $mapa }}`) {
        $(document).keydown(function(e) {
          if (e.ctrlKey && e.key === 's') {
            e.preventDefault();
            $('#mapaForm').submit();
          }
          if (e.ctrlKey && e.key === 'p') {
            e.preventDefault();
            window.open(`{{ $mapa ? route('mapa-01.export', ['schemeId' => $mapa->id]) : '' }}`);

          }
        });
      }

      $('#makerDiv').on('click', '#makerRemoveBtn', function(e) {
        e.preventDefault();
        $(this).parent().remove();
        e.stopPropagation();
      });

      $('#makerBtn').click(function(e) {
        $('#makerDiv').append(`<div class="relative" id="textAreaDiv">
        <button type="button" id="makerRemoveBtn" class="absolute -right-3 -top-3"><svg
            class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <input type="text" list="assessors" autocomplete="off" name="makers[]"
          class="block w-full mb-2 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
          <datalist id="assessors">
            <@foreach ($scheme->assessors as $assessor)
                <option value="{{ $assessor->name }}">{{ $assessor->name }}</option> 
            @endforeach
          </datalist>
      </div>`);
      });

      $('#validatorDiv').on('click', '#validatorRemoveBtn', function(e) {
        e.preventDefault();
        $(this).parent().remove();
        e.stopPropagation();
      });

      $('#validatorBtn').click(function(e) {
        $('#validatorDiv').append(`<div class="relative" id="textAreaDiv">
        <button type="button" id="validatorRemoveBtn" class="absolute -right-3 -top-3"><svg
            class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <input type="text" list="assessors" autocomplete="off" name="validators[]"
          class="block w-full mb-2 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
          <datalist id="assessors">
            <@foreach ($scheme->assessors as $assessor)
                <option value="{{ $assessor->name }}">{{ $assessor->name }}</option> 
            @endforeach
          </datalist>
      </div>`);
      });
    });
  </script>
@endpush
