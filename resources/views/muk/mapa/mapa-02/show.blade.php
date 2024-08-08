@extends('layouts.app', ['title' => 'MAPA 02'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    MAPA 02 <br> PETA INSTRUMEN ASESSMEN HASIL PENDEKATAN ASESMEN DAN
    PERENCANAAN ASESMEN
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div class="relative overflow-x-auto">

    <div id="mapaForm" action="{{ route('mapa-02.store') }}" method="POST">
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

      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        @foreach ($scheme->jobGroups as $jobGroup)
          {{-- <input type="hidden" value="{{ $jobGroup->id }}" name="jobGroups[{{ $jobGroup->id }}][id]"
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700" colspan="4">
              <b>Kelompok Pekerjaan {{ $jobGroup->name }}</b>
            </td>
          </tr>
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              No
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              Kode Unit
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              Nama Unit
            </td>
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
              <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                <thead>
                  <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                    <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                      No
                    </th>
                    <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                      INSTRUMEN ASESMEN
                    </th>
                    <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="5">
                      Potensi Asesi
                    </th>
                  </tr>
                  <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                    <th class="border px-6 py-4 dark:border-gray-700">
                      1
                    </th>
                    <th class="border px-6 py-4 dark:border-gray-700">
                      2
                    </th>
                    <th class="border px-6 py-4 dark:border-gray-700">
                      3
                    </th>
                    <th class="border px-6 py-4 dark:border-gray-700">
                      4
                    </th>
                    <th class="border px-6 py-4 dark:border-gray-700">
                      5
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      1
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.01. CL - Ceklis Observasi Aktivitas Di Tempat Kerja atau Tempat Kerja Simulasi
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument1][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument1)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument1][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument1)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument1][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument1)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument1][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument1)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument1][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument1)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      2
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.02. TPD - Tugas Praktik Demonstrasi
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument2][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument2)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument2][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument2)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument2][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument2)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument2][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument2)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument2][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument2)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      3
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.03. PMO - Pertanyaan Untuk Mendukung Observasi
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument3][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument3)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument3][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument3)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument3][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument3)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument3][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument3)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument3][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument3)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                      4
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      4. a FR.IA.04A. DIT - Daftar Instruksi Terstruktur
                      (Penjelasan Singkat Proyek Terkait Pekerjaan/ Kegiatan Terstruktur Lainnya)
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4a][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument4a)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4a][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument4a)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4a][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument4a)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4a][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument4a)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4a][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument4a)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      4.b FR.IA.04B. DIT – Penilaian Proyek Singkat atau Kegiatan Terstruktur Lainnya
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4b][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument4b)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4b][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument4b)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4b][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument4b)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4b][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument4b)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument4b][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument4b)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      5
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.05. DPT - Daftar Pertanyaan Tertulis Pilihan Ganda
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument5][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument5)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument5][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument5)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument5][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument5)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument5][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument5)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument5][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument5)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      6
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.06. DPT – Daftar Pertanyaan Tertulis Pilihan Esai
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument6][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument6)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument6][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument6)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument6][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument6)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument6][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument6)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument6][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument6)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      7
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.07. DPL – Daftar Pertanyaan Lisan
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument7][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument7)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument7][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument7)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument7][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument7)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument7][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument7)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument7][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument7)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      8
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.08. CVP - Ceklis Verifikasi Portofolio
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument8][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument8)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument8][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument8)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument8][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument8)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument8][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument8)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument8][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument8)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      9
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.09. PW - Pertanyaan Wawancara
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument9][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument9)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument9][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument9)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument9][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument9)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument9][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument9)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument9][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument9)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      10
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.10. VPK - Verifikasi Pihak Ketiga
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument10][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument10)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument10][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument10)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument10][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument10)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument10][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument10)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument11][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument10)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      11
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      FR.IA.11. CRP - Ceklis Reviu Produk
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                      {{-- <input id="1" type="checkbox" value="1"
                        name="jobGroups[{{ $jobGroup->id }}][instrument11][]"
                        {{ in_array('1', explode(' zzz ', $jobGroup->instrument11)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="2" type="checkbox" value="2"
                        name="jobGroups[{{ $jobGroup->id }}][instrument11][]"
                        {{ in_array('2', explode(' zzz ', $jobGroup->instrument11)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="3" type="checkbox" value="3"
                        name="jobGroups[{{ $jobGroup->id }}][instrument11][]"
                        {{ in_array('3', explode(' zzz ', $jobGroup->instrument11)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="4" type="checkbox" value="4"
                        name="jobGroups[{{ $jobGroup->id }}][instrument11][]"
                        {{ in_array('4', explode(' zzz ', $jobGroup->instrument11)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{-- <input id="5" type="checkbox" value="5"
                        name="jobGroups[{{ $jobGroup->id }}][instrument11][]"
                        {{ in_array('5', explode(' zzz ', $jobGroup->instrument11)) ? 'checked' : '' }}
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600"> --}}
                    </td>
                  </tr>

                </tbody>
              </table>
            </td>
          </tr>
        @endforeach
      </table>

      <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Penyusun dan Validator</h2>
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama Penyusun
          </th>
          <td class="border px-6 py-4 dark:border-gray-700">
            : {{ explode(' zzz ', $mapa->makers)[0] ?? '' }}
          </td>
        </tr>

        {{-- <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            No. Reg
          </th>
          <td class="border px-6 py-4 dark:border-gray-700">
            :
          </td>
        </tr> --}}

        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama Validator
          </th>
          <td class="border px-6 py-4 dark:border-gray-700">
            : {{ explode(' zzz ', $mapa->validators)[0] ?? '' }}
          </td>
        </tr>

        {{-- <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            No. Reg
          </th>
          <td class="border px-6 py-4 dark:border-gray-700">
            :
          </td>
        </tr> --}}

      </table>

      <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Keterangan:</h2>
      <ol class="mb-3 w-full list-inside list-decimal space-y-1 text-gray-500 dark:text-gray-400">
        <li>
          Hasil pelatihan dan / atau pendidikan, dimana Kurikulum dan fasilitas praktek mampu telusur terhadap standar
          kompetensi.
        </li>
        <li>
          Hasil pelatihan dan / atau pendidikan, dimana kurikulum belum berbasis kompetensi.
        </li>
        <li>
          Pekerja berpengalaman, dimana berasal dari industri/tempat kerja yang dalam operasionalnya mampu telusur dengan
          standar kompetensi.
        </li>
        <li>
          Pekerja berpengalaman, dimana berasal dari industri/tempat kerja yang dalam operasionalnya belum berbasis
          kompetensi.
        </li>
        <li>Pelatihan / belajar mandiri atau otodidak</li>
      </ol>

      {{-- <button type="submit"
        class="mb-2 me-2 rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button> --}}
      <a href="{{ route('mapa-02.export', ['schemeId' => $mapa->id]) }}" target="_blank"
        class="focus:ring-primary-300 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
        Cetak
      </a>

    </div>

  </div>
@endsection

@push('scripts')
  <script type="module">
    $(document).ready(function() {

      $(document).keydown(function(e) {
        if (e.ctrlKey && e.key === 's') {
          e.preventDefault();
          $('#mapaForm').submit();
        }
        if (e.ctrlKey && e.key === 'p') {
          e.preventDefault();
          // window.location.href = '/print';
          window.open(`{{ route('mapa-02.export', ['schemeId' => $mapa->id]) }}`);
        }
      });

    });
  </script>
@endpush
